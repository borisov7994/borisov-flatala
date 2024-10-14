<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
 

Route::get('/', [MainController::class, 'show'])->name('home');

Route::get('/first', [MainController::class, 'showw'])->name('first');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{student}',[StudentController::class, 'showww'])->name('students.showww');

Route::put('/students/{student}',[StudentController::class, 'update'])->name('students.update');