<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//Route::middleware(['auth'])->group(function () {
//    Route::get('/', function () {
//        return view('dashboard');
//    })->name('dashboard');
//
//    // Put all your other routes here, or use Route::resource, etc.
//    // Example:
//    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
//
//    // For future routes, add them inside this group!
//});

## Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

## routes that require being logged in
Route::middleware('auth')->group(function () {
    Route::get('/', function () {return view('dashboard');})->name('dashboard');
});

require __DIR__.'/auth.php';
