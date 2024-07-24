<?php

namespace App\Http\Controllers\AssessmentManagement;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\ClassModel;
use App\Models\Module;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AssessmentController extends Controller
{

    public function assessment_create($classID){
        $class = ClassModel::findOrFail($classID);
        $topics = Topic::all();
        $modules = Module::all();

        return view('programhead.classManage.assessment_create', compact('class', 'topics', 'modules'));
   
    }

    // public function assessment_view(){
    //     $assessments = Assessment::all();
    //     //get the user id of the assessment
    //     $assessments->load('user');
    //     return view('programhead.classManage.assessment', compact('assessments'));
    // }    

    public function assessment_add(Request $request){
        $validated = $request->validate([
            'assessment_name' => 'required|string',
            'assessment_description' => 'string',
        ]);

        $assessment = Assessment::create([
            'name' => $validated['assessment_name'],
            'user_id' => Auth::id(),
            'class_id' => $request->class_id,
            'no_of_items' => 0,
        ]);

        return redirect()->route('ph.assessment-edit', ['assessmentID' => $assessment->id]);

    }

    public function assessment_edit($assessmentID) {
        // Fetch the assessment by its ID
        $assessment = Assessment::findOrFail($assessmentID);
    
        // Retrieve questions related to the assessment and group by module
        $questions = $assessment->questions()->get()->groupBy('module_id');
    
        // Retrieve the module names
        $modules = Module::whereIn('id', $questions->keys())->get(['id', 'module_name']);
    
        // Prepare the data for the view
        $module_questions = $modules->map(function ($module) use ($questions) {
            $module_questions = $questions[$module->id];
            $difficulty_levels = $module_questions->pluck('difficulty_level')->unique();
    
            return [
                'module_name' => $module->module_name,
                'difficulty_level' => $difficulty_levels->implode(', '), // Combine difficulties into a single string
                'questions' => $module_questions->map(function ($question) {
                    return [
                        'id' => $question->id,
                        'question' => $question->question,
                        'correct_answer' => $question->correct_answer,
                        'options' => $question->options,
                    ];
                })
            ];
        });

        $topics = Topic::all();
        $modules = Module::all();
    
        // Pass data to the view
        return view('programhead.classManage.assessment_edit', compact('assessment', 'module_questions', 'topics', 'modules'));
    }
       
    
    /**
     * Store the selected questions to the assessment
     */
    public function store(Request $request){
        $validated = $request->validate([
            'topic' => 'string|nullable',
            'module' => 'string|nullable',
            'remembering' => 'integer|nullable',
            'understanding' => 'integer|nullable',
            'applying' => 'integer|nullable',
            'analyzing' => 'integer|nullable',
            'evaluating' => 'integer|nullable',
            'creating' => 'integer|nullable',
        ]);
    
        // Determine module based on topic or module name
        if (!empty($validated['topic'])) {
            $module = Topic::where('topic_name', $validated['topic'])->first()->module;
        } else {
            $module = Module::where('module_name', $validated['module'])->first();
        }
    
        $taxonomyDifficultyMap = [
            'remembering' => 'easy',
            'understanding' => 'easy',
            'applying' => 'moderate',
            'analyzing' => 'difficult',
            'evaluating' => 'difficult',
            'creating' => 'difficult',
        ];
    
        $questions = collect();
    
        foreach ($taxonomyDifficultyMap as $taxonomy => $difficulty) {
            if (!empty($validated[$taxonomy])) {
                $questionsByTaxonomy = Question::where('module_id', $module->id)
                    ->where('difficulty', $difficulty)
                    ->where('taxonomy', $taxonomy)
                    ->where('is_approved', true)
                    ->inRandomOrder()
                    ->limit($validated[$taxonomy])
                    ->get();
    
                $questions = $questions->merge($questionsByTaxonomy);
            }
        }
    
        // Assuming you need to save the questions to an assessment
        $assessment = Assessment::find($request->assessmentID);
    
        foreach ($questions as $index => $question) {
            DB::table('assessment_question')->insert([
                'item_no' => $index + 1,
                'assessment_id' => $assessment->id,
                'question_id' => $question->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
        return redirect()->route('ph.assessment-edit', ['assessmentID' => $request->assessmentID]);
    }
    


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
