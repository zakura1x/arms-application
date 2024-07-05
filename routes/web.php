<?php

use App\Http\Controllers\PHHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Registration\RegisterFaculty;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/program-head/dashboard',[PHHomeController::class, 'index']);


Route::middleware(['auth', CheckRole::class.':program_head'])->group(function () {
    Route::get('/program-head/dashboard',[PHHomeController::class, 'index'])->name('ph.dashboard');
    Route::get('/program-head/plan',[PHHomeController::class, 'plan'])->name('ph.plan');
    Route::get('/program-head/questionbank',[PHHomeController::class, 'questionbank'])->name('ph.questionbank');
    Route::get('/program-head/class',[PHHomeController::class, 'class'])->name('ph.class');
    Route::get('/program-head/settings',[PHHomeController::class, 'settings'])->name('ph.settings');
    
    Route::get('/program-head/faculty-list',[RegisterFaculty::class, 'view_faculty'])->name('ph.faculty-list');
    Route::get('/program-head/faculty-add',[RegisterFaculty::class, 'add_faculty'])->name('ph.faculty-add');
    Route::post('/program-head/add-faculty',[RegisterFaculty::class, 'store_faculty']);
});
