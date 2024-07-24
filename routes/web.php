<?php

use App\Http\Controllers\AssessmentManagement\AssessmentController;
use App\Http\Controllers\ClassManagement\ClassController;
use App\Http\Controllers\LearningDevelopmentPlan\LearningDevelopmentPlanController;
use App\Http\Controllers\LearningDevelopmentPlan\ModuleController;
use App\Http\Controllers\LearningDevelopmentPlan\TopicController;
use App\Http\Controllers\PHHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionBank\QuestionController;
use App\Http\Controllers\Registration\RegisterFaculty;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/program-head/dashboard',[PHHomeController::class, 'index']);


Route::middleware(['auth', CheckRole::class.':program_head'])->group(function () {
    Route::get('/program-head/dashboard',[PHHomeController::class, 'index'])->name('ph.dashboard');
    Route::get('/program-head/questionbank',[PHHomeController::class, 'questionbank'])->name('ph.questionbank');
    Route::get('/program-head/settings',[PHHomeController::class, 'settings'])->name('ph.settings');
    
    Route::get('/program-head/faculty-list',[RegisterFaculty::class, 'view_faculty'])->name('ph.faculty-list');
    Route::get('/program-head/faculty-add',[RegisterFaculty::class, 'add_faculty'])->name('ph.faculty-add');
    Route::post('/program-head/add-faculty',[RegisterFaculty::class, 'store_faculty']);

    Route::get('/program-head/ldp',[LearningDevelopmentPlanController::class, 'index'])->name('ph.ldp-list');
    Route::get('/program-head/ldp-add',[LearningDevelopmentPlanController::class, 'new_ldp'])->name('ph.ldp-add');
    Route::post('/program-head/new-ldp',[LearningDevelopmentPlanController::class, 'create_ldp'])->name('ph.add-ldp');
    Route::get('/program-head/ldp-edit/{ldpID}',[LearningDevelopmentPlanController::class, 'edit_ldp'])->name('ph.edit-ldp');
    
    //Topic Store
    Route::post('/program-head/topic/store',[TopicController::class, 'store'])->name('ph.topic.store');
    //Module Store
    Route::post('/program-head/module/store',[ModuleController::class, 'store'])->name('ph.module.store');

    //Class View
    Route::get('/program-head/class-view/{classID}',[ClassController::class, 'class_view'])->name('ph.class-view');
    Route::get('/program-head/class',[ClassController::class, 'index'])->name('ph.class-list');
    Route::post('/program-head/add-class',[ClassController::class, 'store'])->name('ph.add-class');

    //QuestionBank
    Route::get('/program-head/questionbank',[QuestionController::class, 'index'])->name('ph.questionbank');
    Route::get('/program-head/question-create',[QuestionController::class, 'create'])->name('ph.question-create');
    Route::post('/program-head/question-store',[QuestionController::class, 'store'])->name('ph.question-store');

    //Assessment
    Route::get('/program-head/assessment-create/{classID}',[AssessmentController::class, 'assessment_create'])->name('ph.assessment-create');
    Route::post('/program-head/assessment-add',[AssessmentController::class, 'assessment_add'])->name('ph.assessment-add');
    Route::get('/program-head/assessment-edit/{assessmentID}',[AssessmentController::class, 'assessment_edit'])->name('ph.assessment-edit');
    Route::post('/program-head/assessment-store',[AssessmentController::class, 'store'])->name('ph.assessment-store');
    Route::get('/program-head/assessment-view',[AssessmentController::class, 'assessment_view'])->name('ph.assessment-view');


   

});
