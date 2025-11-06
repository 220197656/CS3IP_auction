<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home / project definition
Route::get('/', function () {
    return view('home');
});

// Static pages
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Auctions (static example pages)
Route::get('/auctions', function () {
    // In a full app this would fetch auctions from the DB.
    return view('auctions.index');
});

Route::get('/auctions/{id}', function ($id) {
    // Static example: pass ID to view. Replace with controller logic later.
    return view('auctions.show', ['id' => $id]);
})->whereNumber('id');

// Auth routes (using AuthController)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Simple register view (demo)
Route::view('/register', 'auth.register');

// Auth-only placeholders
Route::get('/account', function () {
    return view('account');
})->middleware('auth');

Route::get('/purchases', function () {
    return view('purchases');
})->middleware('auth');
