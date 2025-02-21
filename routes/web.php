<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('students');
});

Route::get('/', [StudentController::class, 'index']);

Route::get('/add', function () {
    return view('add_student');
});

Route::post('/add', [StudentController::class, 'create']);
