<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('auth.index');

Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::get('register', [AuthController::class, 'create'])->name('auth.create');

Route::post('/', [AuthController::class, 'store'])->name('auth.store');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('students', [StudentController::class, 'index'])->name('students.index');

Route::get('students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('students', [StudentController::class, 'store'])->name('students.store');

Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('students/{student}', [StudentController::class, 'update'])->name('students.update');

Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
