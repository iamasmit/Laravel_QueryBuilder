<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('allstudent', [StudentController::class, 'showStudent']);
Route::get('addstudent', [StudentController::class, 'addStudent']);
Route::get('updatestudent', [StudentController::class, 'updateStudent']);
Route::get('delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');
Route::get('view/{id}', [StudentController::class, 'singleStudent'])->name('view.student');
