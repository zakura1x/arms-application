<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\ClassManagement\AttachmentController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Module\LearningDevelopmentPlanController;
use App\Http\Controllers\Module\ModuleController;
use App\Http\Controllers\Module\TopicController;
use App\Http\Controllers\QuestionBank\AssessmentController;
use App\Http\Controllers\QuestionBank\DeanQuestionController;
use App\Http\Controllers\QuestionBank\QuestionController;
use App\Http\Controllers\Registration\RegisterFaculty;
use App\Http\Controllers\Registration\RegisterStudent;
use App\Http\Controllers\ToDo\ToDoController;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


//Login Authentication
Route::post('/login', [AuthenticationController::class, 'login']);

//Registration
//Student

//Faculty
Route::post('/faculty-register', [RegisterFaculty::class, 'facultyRegister']);
//Dean
// Route::post('/dean-register', [RegisterFaculty::class, 'deanRegister']);

//Student
Route::post('/student-register', [RegisterStudent::class, 'studentRegister']);


Route::middleware('auth:sanctum') ->group(function(){
    //Question Bank Add Questionjs
    Route::post('/questionadd', [QuestionController::class, 'createQuestion']);
    //Dean approval
    Route::post('/questions/{id}/approve', [DeanQuestionController::class, 'approval'])->middleware('role:dean');
    //Get All Questions
    Route::get('/questions', [QuestionController::class, 'getQuestions']);
    
    //Create Assessment
    Route::post('/generate-assessment', [AssessmentController:: class, 'createAssessment']);
    //Get All Assessments
    Route::get('/get-assessments', [AssessmentController::class, 'viewAssessments']);
    //View Assessment by name
    Route::get('/assessments/name/{name}', [AssessmentController::class, 'getAssessmentByName']);

    // Get all the students
    Route::get('/students', [RegisterStudent::class, 'getStudents']);
    //Student Registration
    //Route::post('/student-register', [RegisterStudent::class, 'studentRegister']);
    

    //Task Functions
    //Create a Task
    Route::post('/create-task', [ToDoController::class, 'create']);
    //Get all the tasks created by the user
    Route::get('/get-tasks', [ToDoController::class, 'getTasks']);
    //Update a Task
    Route::put('/update-task/{id}', [ToDoController::class, 'update']);
    //Delete a Task
    Route::delete('/delete-task/{id}', [ToDoController::class, 'delete']);
    //Get a Task
    
    //createLDP -1st step
    Route::post('/courses/{courseId}/create-ldp', [LearningDevelopmentPlanController::class, 'createLDP']);
    //getApprovedLDPs
    Route::get('/courses/{courseId}/approved-ldps', [LearningDevelopmentPlanController::class, 'getApprovedLDPs']);
    //approveLDP
    Route::post('/ldps/{ldpId}/approve', [LearningDevelopmentPlanController::class, 'approveLDP']);
    //assignLDP to a course
    Route::post('/ldps/{ldpId}/assign', [LearningDevelopmentPlanController::class, 'assignLDP']);

    //createAttachment - 4th step
    //Assign it to the module
    Route::post('/create-attachment', [AttachmentController::class, 'createAttachment']);

    //getModules
    Route::get('/topics/{topicId}/modules', [ModuleController::class, 'getModules']);
    //createModule -3rd step
    //Assign it to the topic
    Route::post('/create-module', [ModuleController::class, 'createModule']);

    //Create topic -2nd step
    //Assign it to the ldp
    Route::post('/create-topic', [TopicController
    ::class, 'createTopic']);
    //getTopics
    Route::get('/ldps/{ldpId}/topics', [TopicController::class, 'getTopics']);

});
