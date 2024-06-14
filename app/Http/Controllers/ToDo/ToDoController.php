<?php

namespace App\Http\Controllers\ToDo;

use App\Http\Controllers\Controller;
use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        if ($user->role !== 'student') {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date_format:Y-m-d H:i',
        ]);
    
        $task = ToDo::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'user_id' => $user->id,
        ]);
    
        return response()->json([
            'message' => 'Task Created Successfully',
            'task' => $task,
        ], 201);
    }
    

    //Get all the tasks created by the user
    public function getTasks(Request $request){
        $user = Auth::user();
        if($user->role !== 'student'){
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }

        $tasks = ToDo::where('user_id' , $user->id)->get();

        return response()->json([
            'tasks' => $tasks,
        ], 200);
    }

    //

    //Edit the task
    public function editTask(Request $request)
    {
        $user = Auth::user();
        
        // Check user role
        if ($user->role !== 'student') {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        // Validate the request
        $validated = $request->validate([
            'id' => 'required|integer|exists:todo_tasks,id',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date_format:Y-m-d H:i',
        ]);
    
        // Retrieve the task and check if the user is authorized to edit it
        $task = ToDo::where('id', $validated['id'])->where('user_id', $user->id)->first();
    
        if (!$task) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        // Update the task with validated data
        $task->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? $task->description,
            'due_date' => $validated['due_date'] ?? $task->due_date,
        ]);
    
        return response()->json([
            'message' => 'Task Updated Successfully',
            'task' => $task,
        ], 200);
    }

    //Get the specific task by id
    public function getTask(Request $request)
    {
        $user = Auth::user();
        
        // Check user role
        if ($user->role !== 'student') {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        // Validate the request
        $validated = $request->validate([
            'id' => 'required|integer|exists:todo_tasks,id',
        ]);
    
        // Retrieve the task and check if the user is authorized to view it
        $task = ToDo::where('id', $validated['id'])->where('user_id', $user->id)->first();
    
        if (!$task) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        return response()->json([
            'task' => $task,
        ], 200);
    }

    //Delete the task with soft delete
    public function deleteTask(Request $request)
    {
        $user = Auth::user();
        
        // Check user role
        if ($user->role !== 'student') {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        // Validate the request
        $validated = $request->validate([
            'id' => 'required|integer|exists:todo_tasks,id',
        ]);
    
        // Retrieve the task and check if the user is authorized to delete it
        $task = ToDo::where('id', $validated['id'])->where('user_id', $user->id)->first();
    
        if (!$task) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
    
        // Soft delete the task
        $task->delete();
    
        return response()->json([
            'message' => 'Task Deleted Successfully',
        ], 200);
    }



    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

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
        
    }
}
