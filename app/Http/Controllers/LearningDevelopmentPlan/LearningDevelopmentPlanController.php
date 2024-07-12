<?php

namespace App\Http\Controllers\LearningDevelopmentPlan;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\Course;
use App\Models\LearningDevelopmentPlan;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningDevelopmentPlanController extends Controller
{
    public function index(){
        $ldp = LearningDevelopmentPlan::all();
        //I also want to fetch the subject name of the LDP and the name of the user
        $ldp->load('subject', 'user');
        
        return view('programhead.ldpManage.plan', compact('ldp'));
    }

    public function new_ldp(){
        $subjects = Subject::all();
        //debug
        //dd($subjects);
        
        return view('programhead.ldpManage.ldp_create', compact('subjects'));
    }

    public function create_ldp(Request $request){
        $validated = $request->validate([
            'plan_name'=> 'required|string',
            'subject_name' => 'required|string',
        ]);

        $subject = Subject::where('name', $validated['subject_name'])->first();
        //Check if the subject exists
        if(!$subject){
            //Create a new subject
            $subject = Subject::create([
                'name' => $validated['subject_name']
            ]);
        }

        $ldp = LearningDevelopmentPlan::create([
            'plan_name' => $validated['plan_name'],
            'user_id' => Auth::id(),
            'subject_id' => $subject->id
        ]);

        //Redirect to the edit ldp page with the ldp id
        return redirect()->route('ph.edit-ldp', ['ldpID' => $ldp->id]);
    
    }

    public function edit_ldp($ldpID)
    {
        $ldp = LearningDevelopmentPlan::findOrFail($ldpID);
        $ldp->load('subject', 'topics.modules.attachments'); // Load nested relationships
    
        return view('programhead.ldpManage.ldp_edit', compact('ldp'));
    }
    

    //Approve the LDP
    public function approveLDP($ldpID){
        $user = Auth::user();
        //Should replace with dean role   
        if($user->role !== 'faculty'){
            return response()->json([
                'message' => 'Unauthorized'],
                403);
        }

        $ldp = LearningDevelopmentPlan::findOrFail($ldpID);
        $ldp->is_approved = 1;
        $ldp->save();

        return response()->json([
            'message' => 'LDP approved successfully'],
            200);
    }

    //Assign the LDP to a course
    public function assignLDP(Request $request, $ldpID)
    {
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }

        $validated = $request->validate([
            'course_name' => 'required|string',
            'subject_id' => 'required|exists:subjects,id', // Ensure the subject exists
        ]);

        $course = ClassModel::where('class_name', $validated['course_name'])->first();
        if(!$course){
            return response()->json([
                'message' => 'Course not found'
            ], 404);
        }

        $ldp = LearningDevelopmentPlan::findOrFail($ldpID);

        // Check if the LDP is approved
        if(!$ldp->is_approved){
            return response()->json([
                'message' => 'LDP is not approved'
            ], 400);
        }

        // Attach the LDP to the course if not already attached
        if(!$course->learningDevelopmentPlans()->wherePivot('learning_development_plan_id', $ldpID)->exists()){
            $course->learningDevelopmentPlans()->attach($ldpID, ['subject_id' => $validated['subject_id']]);
            return response()->json([
                'message' => 'LDP assigned to course successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'LDP is already assigned to this course'
            ], 400);
        }
    }

    //Fetch the approved LDPs of the course
    public function getApprovedLDPs($courseID){
        $user = Auth::user();
        if($user->role !== 'student'){
            return response()->json([
                'message' => 'Unauthorized'],
                403);
        }

        //Fetch the course details
        $course = ClassModel::findOrFail($courseID);

        //Fetch the approved LDPs of the course
        $approvedLDPs = $course -> learningDevelopmentPlans()->where('is_approved', true)->get();

        return response()->json([
            'approved_ldps' => $approvedLDPs],
            200);
    
    }


}
