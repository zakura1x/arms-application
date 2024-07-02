<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProgramHead;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        Log::info('Registration request received', $request->all());

        try {
            $validated = $request->validate([
                
                'first_name' => ['required', 'string', 'max:255'],
                'middle_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'id_number' => ['required', 'string', 'max:255', 'unique:users'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
                'phone_number' => ['required', 'string', 'max:255'],
                'birth_date' => ['required', 'date'],
                'gender' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'], // Ensure address is validated
            ]);

            Log::info('Validation passed', $validated);

            // Create the user first
            $user = User::create([
                'name' => $validated['first_name'].' '.$validated['middle_name'].' '.$validated['last_name'],
                'id_number' => $validated['id_number'],
                'role' => 'program_head',
                'email' => $validated['email'],
                'password' => Hash::make($validated['birth_date']),
            ]);

            Log::info('User created', ['id' => $user->id]);

            // Create a new program head with the validated data and user ID
            $program_head = ProgramHead::create([                
                'first_name' => $validated['first_name'],
                'middle_name' => $validated['middle_name'],
                'last_name' => $validated['last_name'],
                //'user_id' => $user->id, // Include the user_id here
                'id_number' => $validated['id_number'],
                'email' => $validated['email'],
                'phone_number' => $validated['phone_number'],
                'birth_date' => $validated['birth_date'],
                'gender' => $validated['gender'],
                'address' => $validated['address'],
            ]);

            Log::info('Program head created', ['id' => $program_head->id]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(route('dashboard'));
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed', ['errors' => $e->errors()]);
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Registration failed', ['error' => $e->getMessage()]);
            return back()->withErrors(['registration' => 'Registration failed. Please try again.']);
        }
    
    }
}
