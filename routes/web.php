<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'StudentsController@main_students')->name('main.students');

Route::GET('/student/{id}', 'StudentsController@student_show')->name('show.student');

Auth::routes();

Route::resource('students', 'StudentsController');

Route::resource('lectures', 'LecturesController');

Route::resource('grades', 'GradesController');

Route::get('/select', 'GradesController@select')->name('grades.select');
