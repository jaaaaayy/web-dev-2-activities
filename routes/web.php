<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return view('students');
});

Route::get('/', [StudentController::class, 'index']);

Route::get('/add', function () {
    return view('add_student');
});

Route::post('/add', [StudentController::class, 'create']);
=======
Route::get('/', [StudentController::class, 'index'])->name('student.index');

Route::get('/create', [StudentController::class, 'create'])->name('student.create');


Route::post('/', [StudentController::class, 'store'])->name('student.store');

Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');

Route::put('/{student}', [StudentController::class, 'update'])->name('student.update');
>>>>>>> d6ec1b1 (Activity 3: Unfinish)
