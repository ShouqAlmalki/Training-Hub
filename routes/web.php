<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/welcome', [\App\Http\Controllers\TestController::class, 'welcome'])->name('welcome');
    Route::get('/welcome', function () {
    return view('welcome');
})->name('views.welcome');

Route::get('/student/home', [\App\Http\Controllers\TestController::class, 'home'])->name('student.home');
    Route::get('/home', function () {
    return view('student.home');
});

Route::get('/student/submission', [\App\Http\Controllers\TestController::class, 'submission'])->name('student.submission');
    Route::get('/student', function () {
    return view('student.submission');
});

Route::get('/student/experience', [\App\Http\Controllers\TestController::class, 'experience'])->name('student.experience');
    Route::get('/student', function () {
    return view('student.experience');
});

Route::get('/student/profile', [\App\Http\Controllers\TestController::class, 'profile'])->name('student.profile');
    Route::get('/student', function () {
    return view('student.profile');
});

Route::get('/submission/documents', [\App\Http\Controllers\TestController::class, 'documents'])->name('submission.documents');
    Route::get('/submission', function () {
    return view('submission.documents');
});

Route::get('/submission/submission', [\App\Http\Controllers\TestController::class, 'submission'])->name('submission.submission');
    Route::get('/submission', function () {
    return view('submission.submission');
});


Route::get('/submission/previous', [\App\Http\Controllers\TestController::class, 'previous'])->name('submission.previous');
    Route::get('/submission', function () {
    return view('submission.previous');
});

Route::get('/supervisor/reviewing', [\App\Http\Controllers\TestController::class, 'reviewing'])->name('supervisor.reviewing');
    Route::get('/supervisor', function () {
    return view('supervisor.reviewing');
});

Route::get('/supervisor/appPub', [\App\Http\Controllers\TestController::class, 'appPub'])->name('supervisor.appPub');
    Route::get('/supervisor', function () {
    return view('supervisor.appPub');
});

//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

// Default home route
//Route::get('/', function () {
    //return view('welcome');
//});

// Student home route
//Route::get('/student/home', [TestController::class, 'home'])->name('student.home');

// General home route
//Route::get('/home', function () {
   // return view('student.home');
//});

