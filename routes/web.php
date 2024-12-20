<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
    //return view('home');
});
//->name('home');

function hello ($name) {
     echo 'hello' . $name;
}
