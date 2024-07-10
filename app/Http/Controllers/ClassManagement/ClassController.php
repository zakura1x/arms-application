<?php

namespace App\Http\Controllers\ClassManagement;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes  = ClassModel::all();
        return view('programhead.class', compact('classes'));
    
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
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'class_school_year' => 'required|string',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);

        if($validated['background_image']){
            $imageName = time(). '.' .$validated['background_image']->extension();
            $validated['background_image']->move('class_background', $imageName);

            $validated['background_image'] = $imageName;
        

        }

        $class = ClassModel::create([
            'name' => $validated['name'],
            'class_school_year' => $validated['class_school_year'],
            'background_image' => $imageName,
        ]);
        
        return redirect()->route('ph.class-list')->with('success', 'Faculty registered successfully');

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
        //
    }
}
