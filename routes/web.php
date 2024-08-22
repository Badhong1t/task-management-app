<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tasks', taskController::class);
