<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('allstudent', [StudentController::class, 'showStudent']);
Route::post('addstudent', [StudentController::class, 'addStudent']);
Route::view('newstudent', '/add'); //last one add is page name

Route::post('update/{id}', [StudentController::class, 'updateStudent'])->name('update.student');

Route::get('updateview/{id}', [StudentController::class, 'updateView'])->name('update.view'); //this line used to view data in update input field


Route::get('delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');
Route::get('view/{id}', [StudentController::class, 'singleStudent'])->name('view.student');
