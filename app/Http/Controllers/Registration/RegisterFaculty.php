<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterFaculty extends Controller
{
    // public function facultyRegister(Request $request)
    // {
    //     // Validate the incoming request
    //     $validated = $request->validate([
    //         'first_name' => 'required|string',
    //         'middle_name' => 'nullable|string',
    //         'last_name' => 'required|string',
    //         'id_number' => 'required|string|unique:users',
    //         'email' => 'required|email|unique:users',
    //         'phone_number' => 'required|string|min:3',
    //         'birth_date' => 'required|date_format:Y-m-d', // Correct date format
    //         'gender' => 'required|string',
    //         'address' => 'required|string',
    //     ]);

    //     // Create a new user where password is the birthdate
    //     $user = User::create([
    //         'name' => $validated['first_name'].' '.$validated['last_name'],
    //         'id_number' => $validated['id_number'],
    //         'role' => 'faculty',
    //         'email' => $validated['email'],
    //         'password' => Hash::make($validated['birth_date']),
    //     ]);

    //     // Create a new faculty with the validated data
    //     $faculty = Faculty::create([
    //         'user_id' => $user->id,
    //         'first_name' => $validated['first_name'],
    //         'middle_name' => $validated['middle_name'],
    //         'last_name' => $validated['last_name'],
    //         'id_number' => $validated['id_number'],
    //         'email' => $validated['email'],
    //         'phone_number' => $validated['phone_number'],
    //         'birth_date' => $validated['birth_date'],
    //         'gender' => $validated['gender'],
    //         'address' => $validated['address'],
    //     ]);

    //     // Return a JSON response with the created student
    //     return response()->json([
    //         'message' => 'Faculty registered successfully',
    //         'faculty' => $faculty,
    //         'user' => $user,
    //     ], 201);
    // }

    public function view_faculty(){

        $faculty = Faculty::all();
        return view('programhead.faculty_list', compact('faculty'));
    }

    public function add_faculty(){
            
        return view('programhead.faculty_add');
    }

    public function store_faculty(Request $request){

        $faculty = new Faculty();
        $user = new User();

        $user->name = $request->first_name.' '.$request->last_name;
        $user->id_number = $request->id_number;
        $user->role = 'faculty';
        $user->email = $request->email;
        $user->password = Hash::make($request->birth_date);

        $user->save();

        $faculty->first_name = $request->first_name;
        $faculty->middle_name = $request->middle_name;
        $faculty->last_name = $request->last_name;
        $faculty->id_number = $request->id_number;
        $faculty->email = $request->email;
        $faculty->phone_number = $request->phone_number;
        $faculty->birth_date = $request->birth_date;
        $faculty->gender = $request->gender;
        $faculty->address = $request->address;
        $faculty->user_id = $user->id;

        $faculty->save();



        return redirect()->back()->with('success', 'Faculty added successfully');
    

        


    }
    
}
