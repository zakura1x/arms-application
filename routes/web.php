<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\PHHomeController;
use Illuminate\Support\Facades\Route;

// Route for displaying the login form
Route::get('/',[AuthenticationController::class, 'create']);

// Route for handling the login process
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

// Route for the login page
Route::get('/login',[AuthenticationController::class, 'create'])->name('create');

// ROUTES FOR PROGRAM HEAD UI
Route::get('/programhead/home',[PHHomeController::class, 'index'])->name('home');
Route::get('/programhead/plan',[PHHomeController::class, 'plan'])->name('plan');
Route::get('/programhead/questionbank',[PHHomeController::class, 'questionbank'])->name('questionbank');
Route::get('/programhead/class',[PHHomeController::class, 'class'])->name('class');
Route::get('/programhead/settings',[PHHomeController::class, 'settings'])->name('settings');

