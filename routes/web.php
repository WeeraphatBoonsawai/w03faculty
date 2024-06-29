<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineRecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/faculty', FacultyController::class);
Route::resource('/program', ProgramController::class);
Route::resource('/student', StudentController::class);
Route::resource('/vaccine', VaccineController::class);
Route::resource('/vaccine-record', VaccineRecordController::class);