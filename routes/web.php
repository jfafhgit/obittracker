<?php

use App\Http\Controllers\ObituaryController;
use Illuminate\Support\Facades\Route;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Route::get('/obituary', function () {
    return view('enterObit');
})->middleware('auth')->name('obitForm');

Route::middleware([
    'auth',
    ValidateSessionWithWorkOS::class,
])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/obituary', [ObituaryController::class, 'create'])->name('obituary');
    Route::post('/obituary', [ObituaryController::class, 'store'])->name('obituary.store');
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
