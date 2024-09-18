<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.welcome');
})->name('welcome');
Route::get('/home', function () {
    return view('layout.home');
})->name('home');
Route::get('/link', function () {
    return view('layout.link');
})->name('link');
