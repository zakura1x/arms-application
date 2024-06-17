<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Models\LearningDevelopmentPlan;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    //Fetch the topics by LDP id
    public function getTopics($ldpID){
        // Fetch the topics of the LDP
        $user = Auth::user();
        if($user->role !== 'student'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $ldp = LearningDevelopmentPlan::findOrFail($ldpID);
        $topics = $ldp->topics()->get();

        return response()->json(['topics' => $topics], 200);
        
    }

    //Create a topic
    public function createTopic(Request $request){
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'topic_name' => 'required|string',
            'topic_description' => 'string|nullable',
            'ldp_id' => 'required|integer',
        ]);

        //Create the topic
        $topic = Topic::create([
            'faculty_id' => $user->id,
            'learning_development_plan_id' => $validated['ldp_id'],
            'topic_name' => $validated['topic_name'],
            'topic_description' => $validated['topic_description'],
        ]);

        return response()->json([
            'topic' => $topic,
            'message' => 'Topic created successfully'
        ], 200);
    }


}
