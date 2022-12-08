<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;

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

Route::resource('patient', PatientController::class);
Route::get('/search', [PatientController::class, 'search'])->name('doctor.patient.search');
Route::resource('record', RecordController::class);
Route::get('/search', [RecordController::class, 'search'])->name('doctor.record.search');
