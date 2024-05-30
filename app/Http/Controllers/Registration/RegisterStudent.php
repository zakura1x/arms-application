<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterStudent extends Controller
{
    public function studentRegister(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'id_number' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|string|min:3',
            'birth_date' => 'required|date_format:Y-m-d', // Correct date format
            'gender' => 'required|string',
            'address' => 'required|string',
        ]);

        // Create a new user where password is the birthdate
        $user = User::create([
            'name' => $validated['first_name'].' '.$validated['last_name'],
            'id_number' => $validated['id_number'],
            'role' => 'student',
            'email' => $validated['email'],
            'password' => Hash::make($validated['birth_date']),
        ]);

        // Create a new student with the validated data
        $student = Student::create([
            'user_id' => $user->id,
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'id_number' => $validated['id_number'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'birth_date' => $validated['birth_date'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
        ]);

        // Return a JSON response with the created student
        return response()->json([
            'message' => 'Student registered successfully',
            'student' => $student,
            'user' => $user,
        ], 201);
    }

    public function studentLogin(Request $request){
        // Validate the incoming request
        $validated = $request->validate([
            'id_number' => 'required|string|min:4',
            'password' => 'required|min:6',
        ]);

        $user = User::whereUsername($request->id_number)->first();
        if(!$user || !Hash::check($request->passwordd, $user->password)){
            return response()->json([
                'message' => 'Invalid credentials',
            ], 422);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        // Return a JSON response with the created user
        return response()->json([
            'message' => 'User logged in successfully',
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    //Get all students
    public function getStudents(Request $request){
        $students = Student::all();

        return response()->json([
            'students' => $students,
        ], 200);
    }

}
