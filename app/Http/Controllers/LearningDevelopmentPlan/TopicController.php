<?php

namespace App\Http\Controllers\LearningDevelopmentPlan;


use App\Http\Controllers\Controller;
use App\Models\LearningDevelopmentPlan;
use App\Models\Subject;
use App\Models\TableOfSpecification;
use App\Models\Topic;
use App\Models\TopicDifficultyTaxonomy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{

    public function store(Request $request){
        // Validate the input data
        $validated = $request->validate([
            'topic_name' => 'required|string',
            'no_of_hours' => 'required|integer',
            'no_of_items' => 'required|integer',
            'easy_remembering' => 'required|integer',
            'easy_understanding' => 'required|integer',
            'moderate_applying' => 'required|integer',
            'difficult_analyzing' => 'required|integer',
            'difficult_evaluating' => 'required|integer',
            'difficult_creating' => 'required|integer',
            'ldp_id' => 'required|integer',
            'subject_id' => 'required|integer', // Check if this is also validated
            'percentage' => 'required|integer',
       
        ]);

        // Create the Table of Specification (TOS)
        $tos = TableOfSpecification::create([
            'subject_id' => $validated['subject_id'],
        ]);

        // Create the topic
        $topic = Topic::create([
            'topic_name' => $validated['topic_name'],
            'no_of_hours' => $validated['no_of_hours'],
            'no_of_items' => $validated['no_of_items'],
            'tos_id' => $tos->id,
            'percentage' => $validated['percentage'],
            'learning_development_plan_id' => $validated['ldp_id'],
        ]);

        // Define difficulty levels and taxonomies
        $difficultyLevels = [
            'easy' => ['remembering', 'understanding'],
            'moderate' => ['applying'],
            'difficult' => ['analyzing', 'evaluating', 'creating'],
        ];

        // Map the validated inputs to their respective taxonomy and difficulty
        $taxonomyInputs = [
            'remembering' => $validated['easy_remembering'] ?? 0,
            'understanding' => $validated['easy_understanding'] ?? 0,
            'applying' => $validated['moderate_applying'] ?? 0,
            'analyzing' => $validated['difficult_analyzing'] ?? 0,
            'evaluating' => $validated['difficult_evaluating'] ?? 0,
            'creating' => $validated['difficult_creating'] ?? 0,
        ];

        // Create the TopicDifficultyTaxonomy entries
        foreach ($difficultyLevels as $difficulty => $taxonomies) {
            foreach ($taxonomies as $taxonomy) {
                $itemCount = $taxonomyInputs[$taxonomy] > 0 ? $taxonomyInputs[$taxonomy] : 0;
                TopicDifficultyTaxonomy::create([
                    'topic_id' => $topic->id,
                    'taxonomy' => $taxonomy,
                    'difficulty' => $difficulty,
                    'item_count' => $itemCount,
                ]);
            }
        }

        return redirect()->route('ph.edit-ldp', ['ldpID' => $request->ldp_id]);
    }

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
