<?php

namespace App\Http\Controllers\QuestionBank;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class DeanQuestionController extends Controller
{
    public function approval(Request $request, $id){
        $question = Question::findOrFail($id);

        $question->is_approved = true;
        $question->save();

        return response()->json([
            'message' => 'Question approved successfully',
            'question' => $question,
        ], 200);
    
    }
}
