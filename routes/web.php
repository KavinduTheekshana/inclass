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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


// Teacher Routes--------------------------------------------------------
Route::middleware(['auth:sanctum', 'verified','autheditor'])->get('editor/dashboard', function () {
    return view('editor.dashboard');
})->name('editor.dashboard');

Route::middleware(['auth:sanctum', 'verified','autheditor'])->get('editor/courses',  [App\Http\Controllers\CourseController::class, 'index'])->name('editor.courses');

Route::get('get-data', 'App\Http\Controllers\CourseController@show')->name('get-data');
Route::get('class_delete/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->middleware('autheditor');
Route::post('store-data', [App\Http\Controllers\CourseController::class, 'store'])->name('store-data');

Route::middleware(['auth:sanctum', 'verified','authstudent'])->get('student/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard');
