<?php

namespace App\Http\Controllers\QuestionBank;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Module;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function index(){
        // Retrieve all questions
        $questions = Question::all();
        
        // Separate the questions by type
        $practiceQuestions = $questions->where('type', 'practice');
        $assessmentQuestions = $questions->where('type', 'assessment');
        
        // Pass the separated questions to the view
        return view('programhead.questionBankManage.questionbank', compact('practiceQuestions', 'assessmentQuestions'));
    }
    

    public function create(){
        $topics = Topic::all();
        $modules = Module::all();


        return view('programhead.questionBankManage.question_create', compact('topics', 'modules'));

    }

    public function store(Request $request){
        // Validate the request data
        $request->validate([
            'question' => 'required|string',
            'type' => 'required|string',
            'options' => 'required|array',
            'correctAnswers' => 'required|array',
            'points' => 'required|integer',
            'difficulty' => 'required|string',
            'taxonomy' => 'required|string',
            'attachment' => 'nullable|mimes:png,jpg,jpeg',
            'topic' => 'required|string',
            'Modules' => 'required|string',
        ]);
    
        // Retrieve the topic and module IDs based on their names
        $topic = Topic::where('topic_name', $request->topic)->first();
        $module = Module::where('module_name', $request->Modules)->first();
    
        // Handle the case where the topic or module is not found
        if (!$topic) {
            return redirect()->back()->withErrors(['topic' => 'Topic not found'])->withInput();
        }
    
        if (!$module) {
            return redirect()->back()->withErrors(['Modules' => 'Module not found'])->withInput();
        }
    
        // Handle file upload
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = time() . '.' . $attachment->extension();
            $attachment->move(public_path('question_attachment'), $attachmentName);
        } else {
            $attachmentName = null; // Handle the case where the file is not uploaded
        }
    
        // Create the question
        $question = Question::create([
            'user_id' => Auth::id(),
            'question' => $request->question,
            'type' => $request->type,
            'options' => json_encode($request->options),
            'correct_answer' => json_encode($request->correctAnswers),
            'points' => $request->points,
            'difficulty' => $request->difficulty,
            'taxonomy' => $request->taxonomy,
            'module_id' => $module->id,
            'topic_id' => $topic->id,
            
        ]);
    
        // Create attachment if it exists
        if ($attachmentName) {
            Attachment::create([
                'attachment_path' => $attachmentName,
                'attachment_name' => $attachmentName,
                'attachment_type' => $attachment->getClientOriginalExtension(),
                'question_id' => $question->id,
            ]);
        }
    
        return redirect()->route('ph.questionbank')->with('success', 'Question created successfully');
    }
    
    





    public function createQuestion(Request $request)
{
    $user = Auth::user();
    if ($user->role !== 'faculty') {
        return response()->json([
            'message' => 'Unauthorized',
        ], 403);
    }

    $request->validate([
        'topic_name' => 'required|string|exists:topics,name',
        'question_text' => 'required|string',
        'options' => 'required|array',
        'correct_answer' => 'required|string',
    ]);

    $question = Question::create([
        'faculty_id' => $user->id,
        'topic_name' => $request->topic_name,
        'question_text' => $request->question_text,
        'options' => json_encode($request->options),
        'correct_answer' => $request->correct_answer,
    ]);

    return response()->json([
        'message' => 'Question created successfully',
        'question' => $question,
    ], 201);
}


    public function getQuestions(Request $request){
        
        $user = Auth::user();        
        if(!in_array($user->role, ['faculty', 'dean'])){
            return response()->json(
                ['message' => 'Unauthorized'],
                403
            );
        }

        $questions = Question::all();

        return response()->json([
            'questions' => $questions,
        ], 200);
    }

}
