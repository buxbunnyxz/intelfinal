<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Routes that require being logged in
Route::middleware('auth')->group(function () {
    Route::get('/', function () { return view('dashboard'); })->name('dashboard');
});

require __DIR__.'/auth.php';
