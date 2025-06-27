<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IoTController;
use App\Http\Controllers\LandingPageController;

// ✅ Hanya satu route untuk banner, yaitu /
Route::get('/', [LandingPageController::class, 'banner'])->name('home');

// Route untuk air quality tetap ada
Route::get('/airquality', [LandingPageController::class, 'airquality'])->name('airquality');
// Route khusus untuk ambil data JSON
Route::get('/airquality/data', [LandingPageController::class, 'airqualityData'])->name('airquality.data');


Route::get('/outdoor', [LandingPageController::class, 'outdoor'])->name('outdoor');
Route::get('/greenhouse', [LandingPageController::class, 'greenhouse'])->name('greenhouse');
Route::get('/soilmanag', [LandingPageController::class, 'soilmanag'])->name('soilmanag');
Route::get('/soiltest', [LandingPageController::class, 'soiltest'])->name('soiltest');
Route::get('/iot-data', [IoTController::class, 'showSheet']);


