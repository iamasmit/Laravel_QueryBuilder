<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(StudentController::class)->group(function () {
    Route::get('allstudent',  'showStudent');
    Route::post('addstudent',  'addStudent');

    Route::put('update/{id}',  'updateStudent')->name('update.student');

    Route::get('updateview/{id}',  'updateView')->name('update.view'); //this line used to view data in update input field


    Route::get('delete/{id}',  'deleteStudent')->name('delete.student');
    Route::get('view/{id}',  'singleStudent')->name('view.student');
});
Route::view('newstudent', '/add'); //last one add is pge name
