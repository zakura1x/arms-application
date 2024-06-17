<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //Fetch the course details by course id
    public function getLDPs($studentId){

        $user = Auth::user();
        if($user->role !== 'student'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        
        $student = Student::findOrFail($studentId);
        $course = $student->course; // Fetch the course details of the student

        if($course){
            $approvedLDPs = $course->learningDevelopmentPlans()->get(); // Fetch the approved LDPs of the course
            return response()->json(['approved_ldps' => $approvedLDPs], 200);
        }else{
            return response()->json(['message' => 'Course not found'], 404);
        
        }

        
    }


}
