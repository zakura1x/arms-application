<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\PHController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DController;
use App\Http\Controllers\FController;
use Illuminate\Support\Facades\Route;

// Route for displaying the login form
Route::get('/',[AuthenticationController::class, 'create']);

// Route for handling the login process
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

// Route for the login page
Route::get('/login',[AuthenticationController::class, 'create'])->name('create');

// ROUTES FOR PROGRAM HEAD UI
Route::get('/programhead/home', [PHController::class, 'index'])->name('ph.home');

Route::get('/programhead/plan', [PHController::class, 'plan'])->name('ph.plan');

Route::get('/programhead/questionbank', [PHController::class, 'questionbank'])->name('ph.questionbank');

Route::get('/programhead/class', [PHController::class, 'class'])->name('ph.class');

Route::get('/programhead/facultymanagement', [PHController::class, 'faculty'])->name('ph.faculty');
Route::get('/programhead/facultymanagement/assignfaculty', [PHController::class, 'addfaculty'])->name('ph.addfaculty');

Route::get('/programhead/settings', [PHController::class, 'settings'])->name('ph.settings');

// // ROUTES FOR DEAN UI
// Route::get('/dean/home',[DController::class, 'index'])->name('home');
// Route::get('/dean/plan',[DController::class, 'plan'])->name('plan');
// Route::get('/dean/questionbank',[DController::class, 'questionbank'])->name('questionbank');
// Route::get('/dean/class',[DController::class, 'class'])->name('class');
// Route::get('/dean/settings',[DController::class, 'settings'])->name('settings');

// // ROUTES FOR FACULTY UI
// Route::get('/faculty/home',[FController::class, 'index'])->name('home');
// Route::get('/faculty/plan',[FController::class, 'plan'])->name('plan');
// Route::get('/faculty/questionbank',[FController::class, 'questionbank'])->name('questionbank');
// Route::get('/faculty/class',[FController::class, 'class'])->name('class');
// Route::get('/faculty/settings',[FController::class, 'settings'])->name('settings');
// Route::get('/faculty/class/nameofclass',[FController::class, 'clickedClass'])->name('class1');
