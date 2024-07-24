<?php

namespace App\Http\Controllers\LearningDevelopmentPlan;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\Course;
use App\Models\LearningDevelopmentPlan;
use App\Models\Subject;
use App\Models\TableOfSpecification;
use App\Models\TopicDifficultyTaxonomy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\Table\Table;

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
            'subject_name' => 'required|string',
            'topic_name' => 'required|array',
            'no_of_hours' => 'required|array',
            'no_of_items' => 'required|array',
            'easy_remembering' => 'required|array',
            'easy_understanding' => 'required|array',
            'moderate_applying' => 'required|array',
            'difficult_analyzing' => 'required|array',
            'difficult_evaluating' => 'required|array',
            'difficult_creating' => 'required|array',
        ]);

        //
        $subject = Subject::where('name', $validated['subject_name'])->first();
        //Check if the subject exists
        if(!$subject){
            //Create a new subject
            $subject = Subject::create([
                'name' => $validated['subject_name']
            ]);
        }

        //Create the LDP
        $ldp = LearningDevelopmentPlan::create([
            'user_id' => Auth::id(),
            'subject_id' => $subject->id,
            'plan_name' => $subject->name,
        ]);

        //Create the TOS
        $tos = TableOfSpecification::create([
            'subject_id' => $subject->id,
        ]);

        //Create the topics
        for($i = 0; $i < count($validated['topic_name']); $i++){
            $topic = $ldp->topics()->create([
                'topic_name' => $validated['topic_name'][$i],
                'no_of_hours' => $validated['no_of_hours'][$i],
                'no_of_items' => $validated['no_of_items'][$i],
                'tos_id' => $tos->id,
                'percentage' => $validated['no_of_items'][$i] / array_sum($validated['no_of_items']) * 100,
            ]);
    
            $difficulty_levels = [
                'easy' => [
                    'remembering' => $validated['easy_remembering'][$i] ?? 0,
                    'understanding' => $validated['easy_understanding'][$i] ?? 0,
                ],
                'moderate' => [
                    'applying' => $validated['moderate_applying'][$i] ?? 0,
                ],
                'difficult' => [
                    'analyzing' => $validated['difficult_analyzing'][$i] ?? 0,
                    'evaluating' => $validated['difficult_evaluating'][$i] ?? 0,
                    'creating' => $validated['difficult_creating'][$i] ?? 0,
                ],
            ];
    
            foreach ($difficulty_levels as $difficulty => $taxonomies) {
                foreach ($taxonomies as $taxonomy => $item_count) {
                    TopicDifficultyTaxonomy::create([
                        'topic_id' => $topic->id,
                        'taxonomy' => $taxonomy,
                        'difficulty' => $difficulty,
                        'item_count' => $item_count > 0 ? $item_count : 0,
                    ]);
                }
            }
        }
    
        //Redirect to edit the LDP
        return redirect()->route('ph.edit-ldp', ['ldpID' => $ldp->id]);
    
    }

    public function edit_ldp($ldpID)
    {
        // Find the Learning Development Plan with all related models
    $ldp = LearningDevelopmentPlan::with(['subject', 'topics.modules.attachments'])->findOrFail($ldpID);
    
    // Pass the loaded data to the view
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
