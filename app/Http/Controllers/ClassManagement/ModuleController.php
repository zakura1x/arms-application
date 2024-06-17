<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    //Get the modules 
    public function getModules($topicID){
        $user = Auth::user();
        if($user->role !== 'student'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $topic = Topic::findOrFail($topicID);
        $modules = $topic->modules()->with('attachments')->get();

        return response()->json(['modules' => $modules], 200);
    }

    //Create a module
    public function createModule(Request $request){
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'module_name' => 'required|string',
            'module_description' => 'string|nullable',
            'topic_name' => 'required|string',
        ]);

        //Get the topic details
        $topic = Topic::where('name', $validated['topic_name'])->first();
        if(!$topic){
            return response()->json(['message' => 'Topic not found'], 404);
        }

        //Create the module
        $module = Module::create([
            'faculty_id' => $user->id,
            'topic_id' => $topic->id,
            'module_name' => $validated['module_name'],
            'module_description' => $validated['module_description'],
        ]);

        

        return response()->json(['message' => 'Module created successfully'], 200);
    }


}
