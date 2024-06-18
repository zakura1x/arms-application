<?php

namespace App\Http\Controllers\QuestionBank;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\AssessmentByTopic;
use App\Models\Assessment;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AssessmentController extends Controller
{
  public function createAssessment(Request $request)
  {
      $user = Auth::user();
      if ($user->role !== 'faculty') {
          return response()->json(['message' => 'Unauthorized'], 403);
      }

      // Debug: Log incoming request data
      Log::debug('Incoming request data: ', $request->all());

      $validated = $request->validate([
          'name' => 'required|string',
          'module_id' => 'required|integer|exists:modules,id',
          'criteria' => 'required|array',
          'criteria.*.topic' => 'required|string|exists:topics,name',
          'criteria.*.difficulty' => 'required|string',
          'criteria.*.question_count' => 'required|integer|min:1',
      ]);

      // Debug: Check the validated input
      Log::debug('Validated input: ', $validated);

      $compiled_questions = collect();
      $assessment_topics = [];

      foreach ($validated['criteria'] as $criterion) {
          $questions = Question::where('topic', $criterion['topic'])
              ->where('difficulty', $criterion['difficulty'])
              ->where('is_approved', 1)
              ->where('module_id', $validated['module_id'])
              ->inRandomOrder()
              ->take($criterion['question_count'])
              ->get();

          // Check if there are enough questions for each criterion
          if ($questions->count() < $criterion['question_count']) {
              return response()->json(['message' => 'Insufficient questions for topic: ' . $criterion['topic']], 400);
          }

          // Compile questions
          $compiled_questions = $compiled_questions->merge($questions);

          // Record topic for assessment by topic creation
          $assessment_topics[] = [
              'topic' => $criterion['topic'],
              'difficulty' => $criterion['difficulty'],
              'number_of_items' => $criterion['question_count'],
              'questions' => $questions->toJson(),
          ];
      }

      // Create the assessment
      $assessment = Assessment::create([
          'faculty_id' => $user->id,
          'name' => $validated['name'],
          'description' => 'Assessment with various topics and difficulties',
          'total_items' => $compiled_questions->count(),
          'approval' => false,
          'questions' => $compiled_questions->toJson(), // Store compiled questions as JSON
          'duration' => 60, // Default duration, can be dynamic
          'due_date' => now()->addDays(7), // Default due date, can be dynamic
      ]);

      // Create the assessment by topic records
      foreach ($assessment_topics as $topic) {
          AssessmentByTopic::create([
              'assessment_id' => $assessment->id,
              'module_id' => $validated['module_id'],
              'name' => $assessment->name,
              'difficulty' => $topic['difficulty'],
              'number_of_items' => $topic['number_of_items'],
              'topic_covered' => $topic['topic'],
              'questions' => $topic['questions'],
          ]);
      }

      return response()->json([
          'message' => 'Assessment created successfully',
          'assessment' => $assessment,
          'questions' => $compiled_questions,
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

