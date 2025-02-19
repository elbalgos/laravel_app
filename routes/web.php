<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\GreetController;

// Home Route (Redirect to /greet or view welcome page)
Route::get('/', function () {
    return redirect('/greet'); // Redirect to /greet
});

// Greet Route
Route::get('/greet', [GreetController::class, 'index']);

// Task API Resource Route
Route::apiResource('tasks', TaskController::class);
