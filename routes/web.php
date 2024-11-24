<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {
    return view('login');
})->name('login');

// Google OAuth routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// Home route (after login redirection)
Route::get('/home', function () {
    return view('home'); // Ensure you have a `home.blade.php` view created
})->name('home')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
