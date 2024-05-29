<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterFaculty extends Controller
{
    public function facultyRegister(Request $request)
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
            'role' => 'faculty',
            'email' => $validated['email'],
            'password' => Hash::make($validated['birth_date']),
        ]);

        // Create a new student with the validated data
        $faculty = Faculty::create([
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
            'message' => 'Faculty registered successfully',
            'faculty' => $faculty,
            'user' => $user,
        ], 201);
    }
}
