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

