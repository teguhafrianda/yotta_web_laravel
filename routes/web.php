<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

// ✅ Hanya satu route untuk banner, yaitu /
Route::get('/', [LandingPageController::class, 'banner'])->name('home');

// Route untuk air quality tetap ada
Route::get('/airquality', [LandingPageController::class, 'airquality'])->name('airquality');
Route::get('/solardome', [LandingPageController::class, 'solardome'])->name('solardome');
Route::get('/greenhouse', [LandingPageController::class, 'greenhouse'])->name('greenhouse');
Route::get('/soilmanag', [LandingPageController::class, 'soilmanag'])->name('soilmanag');
Route::get('/soiltest', [LandingPageController::class, 'soiltest'])->name('soiltest');
Route::get('/soilquality', [LandingPageController::class, 'soilquality'])->name('soilquality');
