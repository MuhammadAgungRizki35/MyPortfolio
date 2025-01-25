<?php

use Illuminate\Support\Facades\Route;



//website
Route::get('/', function () {
    return view('welcome');
});
Route::get('/courses', function () {
    return view('welcome');
});
Route::get('/projects', function () {
    return view('welcome');
});
Route::get('/blogs', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('welcome');
});



//student
Route::get('/student/login', function () {
    return view('welcome');
});
Route::get('/student/register', function () {
    return view('welcome');
});




//dashboard
Route::get('/dashboard', function () {
    return view('welcome');
});
Route::get('/dashboard/courses', function () {
    return view('welcome');
});
Route::get('/dashboard/projects', function () {
    return view('welcome');
});
Route::get('/dashboard/blogs', function () {
    return view('welcome');
});
Route::get('/dashboard/settings', function () {
    return view('welcome');
});