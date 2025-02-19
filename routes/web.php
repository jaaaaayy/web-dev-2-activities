<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('students');
});

Route::get('/', [StudentController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [StudentController::class, 'create']);
