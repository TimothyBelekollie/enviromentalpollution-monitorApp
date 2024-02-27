<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorDataController;
use App\Http\Controllers\AuthController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
});

Route::get('/fetch-sensor-data', [SensorDataController::class, 'fetchSensorData']);
Route::get('/sensor-data/alcohol-concentration', [SensorDataController::class,'getMQ135Data']);
Route::get('/sensor-data/aqi', [SensorDataController::class,'getMQ7Data']);
Route::get('/latest-gps-data', [SensorDataController::class,'latestGPS'])->name('latest-gps-data');

Route::get('/admin-profile',[AuthController::class,'userProfile'])->name('admin.profile')->middleware('auth');

Route::get('/admin-adduser',[AuthController::class,'addUser'])->name('add.user')->middleware('auth');

Route::post('/admin-storeuser',[AuthController::class,'saveUser'])->name('save.user')->middleware('auth');
Route::get('/admin-edituser/{id}',[AuthController::class,'editUser'])->name('edit.user')->middleware('auth');
Route::post('/admin-updatetuser/{id}',[AuthController::class,'updateUser'])->name('update.user')->middleware('auth');
Route::get('/admin-destroytuser/{id}',[AuthController::class,'destroyUser'])->name('destroy.user')->middleware('auth');
Route::get('/logout',[AuthController::class,'userlogout'])->name('user.logout')->middleware('auth');
