<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\QuestionBank\AssessmentController;
use App\Http\Controllers\QuestionBank\DeanQuestionController;
use App\Http\Controllers\QuestionBank\QuestionController;
use App\Http\Controllers\Registration\RegisterFaculty;
use App\Http\Controllers\Registration\RegisterStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


//Login Authentication
Route::post('/login', [AuthenticationController::class, 'login']);

//Registration
//Student
Route::post('/student-register', [RegisterStudent::class, 'studentRegister']);
//Faculty
Route::post('/faculty-register', [RegisterFaculty::class, 'facultyRegister']);
//Dean
// Route::post('/dean-register', [RegisterFaculty::class, 'deanRegister']);


Route::middleware('auth:sanctum') ->group(function(){
    //Question Bank
    Route::post('/questionadd', [QuestionController::class, 'createQuestion']);
    //Dean
    Route::post('/questions/{id}/approve', [DeanQuestionController::class, 'approval'])->middleware('role:dean');
    //Get All Questions
    Route::get('/questions', [QuestionController::class, 'getQuestions']);
    
    //Create Assessment
    Route::get('/generate-assessment', [AssessmentController:: class, 'createAssessment']);
    //Get All Assessments
    Route::get('/get-assessments', [AssessmentController::class, 'viewAssessments']);
    //View Assessment
    Route::get('/assessments/name/{name}', [AssessmentController::class, 'getAssessmentByName']);

});