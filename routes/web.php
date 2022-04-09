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
    return view('home', [
        'active' => 'home'
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'active' => 'galeri'
    ]);
});

Route::get('/info', function () {
    return view('info', [
        'active' => 'info'
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        'active' => 'tentang'
    ]);
});

// Route::get('/hello', [HomeController::class, 'index']);
