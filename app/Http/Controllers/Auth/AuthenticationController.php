<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{

    //Login for both dean and faculty
    public function login(Request $request)
    {
        $validated = $request->validate([
            'id_number' => 'required|string|min:8|max:8',
            'password' => 'required|min:6',
        ]);

        $user = User::where('id_number', $request->id_number)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Invalid credentials',
            ], 422);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'message' => 'User logged in successfully',
            'user' => $user,
            'token' => $token,
        ], 200);
    }
    
}
