<?php

namespace App\Http\Controllers\QuestionBank;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function createQuestion(Request $request){
        
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json([
                'message' => 'Unauthorized',],
                403);
        }
        
        $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'question_text' => 'required|string',
            'options' => 'required|array',
            'correct_answer' => 'required|string',
        ]);

        $question = Question::create([
            'faculty_id' => $user->id,
            'topic_id' => $request->topic_id,
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
        $questions = Question::all();

        return response()->json([
            'questions' => $questions,
        ], 200);
    }

}
