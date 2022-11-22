<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/account', function () {
    return view('account');
})->middleware(['auth', 'verified'])->name('account');

Route::get('/welcome', function () {
    return view('welcome');
})->name("home");

Route::get('/', function () {
    return view('home');
})->name("homepage")->middleware('guest');

require __DIR__.'/auth.php';
