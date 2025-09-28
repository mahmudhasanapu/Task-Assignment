<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');

Route::get('/tasks-form', function () {
    return view('tasks');
});
