<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('signup',[AuthController::class,'signup'])->name('auth.signup');

Route::post('signup',[AuthController::class,'signupPost'])->name('auth.signup.post');

Route::get('signin',[AuthController::class,'signin'])->name(name: 'auth.signin');

Route::post('signin',[AuthController::class,'signinPost'])->name('auth.signin.post');

//Route::get('/welcome', [\App\Http\Controllers\TestController::class, 'welcome'])->name('welcome');
    Route::get('/welcome', function () {
    return view('welcome');
})->name('views.welcome');

//Route::get('/student/home', [\App\Http\Controllers\StudentController::class, 'stuHome'])->name('student.home');
    //Route::get('/student', function () {
    //return view('student.home');
//});

Route::get('/student/stuHome', [StudentController::class, 'stuHome'])->name('student.stuHome');
                                 //[AuthController::class,'signin'])->name(name: 'auth.signin');


//Route::get('stuHome',[StudentController::class, 'stuHome'])->name('student.stuHome');

Route::get('/student/submission', [\App\Http\Controllers\StudentController::class, 'submission'])->name('student.submission');
    Route::get('/student', function () {
    return view('student.submission');
});

Route::get('/student/experience', [\App\Http\Controllers\StudentController::class, 'experience'])->name('student.experience');
    Route::get('/student', function () {
    return view('student.experience');
});

Route::get('/student/stuaccount', [\App\Http\Controllers\StudentController::class, 'stuaccount'])->name('student.stuaccount');
    Route::get('/student', function () {
    return view('student.stuaccount');
});

Route::get('/submission/documents', [\App\Http\Controllers\StudentController::class, 'documents'])->name('submission.documents');
    Route::get('/submission', function () {
    return view('submission.documents');
});

Route::get('/submission/submission', [\App\Http\Controllers\StudentController::class, 'submission'])->name('submission.submission');
    Route::get('/submission', function () {
    return view('submission.submission');
});


Route::get('/submission/previous', [\App\Http\Controllers\StudentController::class, 'previous'])->name('submission.previous');
    Route::get('/submission', function () {
    return view('submission.previous');
});

Route::get('/supervisor/reviewing', [\App\Http\Controllers\StudentController::class, 'reviewing'])->name('supervisor.reviewing');
    Route::get('/supervisor', function () {
    return view('supervisor.reviewing');
});

Route::get('/supervisor/appPub', [\App\Http\Controllers\StudentController::class, 'appPub'])->name('supervisor.appPub');
    Route::get('/supervisor', function () {
    return view('supervisor.appPub');
});

Route::get('/supervisor/suphome', [\App\Http\Controllers\StudentController::class, 'suphome'])->name('supervisor.suphome');
    Route::get('/supervisor', function () {
    return view('supervisor.suphome');
});

Route::get('/supervisor/messaging', [\App\Http\Controllers\StudentController::class, 'messaging'])->name('supervisor.messaging');
    Route::get('/supervisor', function () {
    return view('supervisor.messaging');
});


