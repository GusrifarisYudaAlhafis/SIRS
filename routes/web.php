<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

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
    return view('landing');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
    Route::get('/dashboard', function ()
    {
        return view('dashboard.beranda');
    })->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('nurses', NurseController::class);
    Route::resource('checks', CheckController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('prescriptions', PrescriptionController::class);
});
