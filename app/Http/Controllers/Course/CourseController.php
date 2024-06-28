<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\ClassCode;
use App\Models\ClassModel;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //COURSE CONTROLLER = CLASS 

    //Create a course
    public function createCourse(Request $request)
    {
        $user = Auth::user();
        if ($user->role !== 'faculty') {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string',
            'class_school_year' => 'string|nullable',
        ]);

        // Create the course
        $course = ClassModel::create([
            'name' => $validated['name'],
            'class_school_year' => $validated['class_school_year'],
        ]);

        // Generate a unique class code
        $classCode = strtoupper(substr(md5(rand()), 0, 6));

        // Create the class code entry
        $classCodeEntry = ClassCode::create([
            'class_id' => $course->id,
            'code' => $classCode,
            'is_active' => true,
        ]);

        // Update the course with the new class code
        $course->code = $classCodeEntry->code;
        $course->save();

        return response()->json(['message' => 'Course created successfully', 'course' => $course, 'class_code' => $classCodeEntry], 200);
    }

    //Create a class code for the course
    public function createClassCode(Request $request, $courseID)
    {
        $user = Auth::user();
        if ($user->role !== 'faculty') {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Validate or generate class code
        if (!$request->has('class_code')) {
            $validated = ['class_code' => strtoupper(substr(md5(rand()), 0, 6))];
        } else {
            $validated = $request->validate([
                'class_code' => 'required|string',
            ]);
        }

        // Get the course details
        $course = ClassModel::findOrFail($courseID);

        // Find and disable any active class codes for this class
        $previousActiveCode = $course->classCodes()->where('is_active', true)->first();
        if ($previousActiveCode) {
            $previousActiveCode->is_active = false;
            $previousActiveCode->save();
        }

        // Create the new class code
        $classCode = ClassCode::create([
            'class_id' => $course->id,
            'code' => $validated['class_code'],
            'is_active' => true,
        ]);

        // Update the class model with the new class code
        $course->code = $classCode->code;
        $course->save();

        return response()->json(['message' => 'Class code created and updated successfully', 'class' => $course, 'class_code' => $classCode], 200);
    }

    //Add a student to the course
    public function addStudent(Request $request, $courseID){
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'student_id' => 'required|integer',
        ]);

        //Get the course details
        $course = ClassModel::findOrFail($courseID);

        //Get the student details
        $student = Student::findOrFail($validated['student_id']);

        //Add the student to the course
        $course->students()->attach($student->id);

        return response()->json(['message' => 'Student added successfully'], 200);
    }




}
