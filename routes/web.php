<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicineController;

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

Route::get('record/search', [RecordController::class, 'search'])->name('doctor.record.search');
Route::get('patient/search', [PatientController::class, 'search'])->name('doctor.patient.search');
Route::get('medicine/search', [MedicineController::class, 'search'])->name('doctor.medicine.search');
Route::resource('/patient', PatientController::class);
Route::resource('/record', RecordController::class);
Route::resource('/medicine', MedicineController::class);

Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('/dashboard');
    Route::get('/account', 'account')->name('account');
});
