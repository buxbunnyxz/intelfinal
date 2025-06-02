<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Make the homepage public
Route::get('/', function () { return view('dashboard'); })->name('dashboard');

// If you want other routes to still require login, keep them here
Route::middleware('auth')->group(function () {
    // Protected routes go here, e.g.:
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

require __DIR__.'/auth.php';
x
