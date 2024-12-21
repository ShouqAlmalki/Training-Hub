<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/home', [\App\Http\Controllers\TestController::class, 'home'])->name('student.home');
    Route::get('/home', function () {
    return view('student.home');
});

Route::get('/student/submission', [\App\Http\Controllers\TestController::class, 'submission'])->name('student.submission');
    Route::get('/student', function () {
    return view('student.submission');
});

Route::get('/submission/documents', [\App\Http\Controllers\TestController::class, 'documents'])->name('submission.documents');
    Route::get('/submission', function () {
    return view('submission.documents');
});

Route::get('/submission/previous', [\App\Http\Controllers\TestController::class, 'previous'])->name('submission.previous');
    Route::get('/submission', function () {
    return view('submission.previous');
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

