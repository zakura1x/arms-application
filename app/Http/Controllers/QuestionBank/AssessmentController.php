<?php

namespace App\Http\Controllers\QuestionBank;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    public function createAssessment(Request $request){
        
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json([
                'message' => 'Unauthorized',],
                403);
        }
        
        $validated = $request->validate([
            'topic_ids' => 'required|array',
            'topic_ids.*' => 'exists:topics,id',
            'question_count' => 'required|integer|min:1',
            'name' => 'required|string',
        ]);


        //Fetch question based on topic ids
        $questions = Question::where('topic_id', $validated['topic_ids'])
            ->where('is_approved',1)
            ->get();

        //Check if there are enough questions 
        if($questions->count() < $validated['question_count']){
            return response()->json([
                'message' => 'Insufficient questions'],
                400);
        }

        //Randomly select questions
        $selected_questions = $questions->random($validated['question_count']);

        //Create assessment
        $assessment = Assessment::create([
            'faculty_id' => $user->id,
            'name' => $validated['name'],
        ]);

        //Attach selected questions to assessment
        $assessment->questions()->attach($selected_questions->pluck('id'));

        return response()->json([
            'message' => 'Assessment created successfully',
            'assessment' => $assessment,
            'questions' => $selected_questions,
        ], 201);
    }

    /**
     * Display a listing of the resource.
     */
    public function viewAssessments()
    {
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json([
                'message' => 'Unauthorized',],
                403);
        }

        //Fetch all assessments with Assessment name
        //Sort the questions by id
        $assessments = Assessment::where('faculty_id', $user->id)->with('questions')->get();


        return response()->json([
            'assessments' => $assessments,
        ], 200);
    
    }

    public function getAssessmentByName($name)
    {
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json([
                'message' => 'Unauthorized',],
                403);
        }

        //Fetch assessment based on the name
        $assessment = Assessment::where('name', $name)->with('questions')->first();

        if(!$assessment){
            return response()->json([
                'message' => 'Assessment not found'
            ], 201);
        }

        return response()->json([
            'assessment' => $assessment,
        ], 200);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreAssessmentRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentRequest $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}

