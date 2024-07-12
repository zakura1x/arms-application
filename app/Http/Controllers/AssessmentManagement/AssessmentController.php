<?php

namespace App\Http\Controllers\AssessmentManagement;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\ClassModel;
use App\Models\Module;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{

    public function assessment_create($classID){
        $class = ClassModel::findOrFail($classID);

        return view('programhead.classManage.assessment_create', compact('class'));
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
            'description' => $validated['assessment_description'],
            'user_id' => Auth::id(),
            'class_id' => $request->class_id,
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
    
        // Pass data to the view
        return view('programhead.classManage.assessment_edit', [
            'assessment' => $assessment,
            'modules' => $module_questions,
        ]);
    }
       
    
    /**
     * Store the selected questions to the assessment
     */
    public function store(Request $request){
        $validated = $request->validate([
            'number_of_questions' => 'required|integer|min:1',
            'difficulty' => 'required|string',
            'topic' => 'required|string',
        ]);

        //get the topic from the module id
        $module = Module::where('module_name', $validated['topic'])->first();

        $questions = Question::where('module_id', $module->id)
            ->where('difficulty_level', $validated['difficulty'])
            ->where('is_approved', 1)
            ->get();

        if ($questions->count() < $validated['number_of_questions']) {
            return back()->with('error', 'Insufficient questions');
        }

        $selected_questions = $questions->random($validated['number_of_questions']);

        // Attach selected questions to assessment
        $assessment = Assessment::findOrFail($request->assessmentID);
        $assessment->questions()->attach($selected_questions->pluck('id'));

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
