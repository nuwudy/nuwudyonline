<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Service routes
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/attestation-and-dataflow', [PageController::class, 'attestation'])->name('attestation');
    Route::get('/visa-consultancy', [PageController::class, 'visa'])->name('visa');
    Route::get('/travel-and-tours', [PageController::class, 'travel'])->name('travel');
    Route::get('/medical-tourism', [PageController::class, 'medical'])->name('medical');
    Route::get('/apostille-services', [PageController::class, 'apostille'])->name('apostille');
});
