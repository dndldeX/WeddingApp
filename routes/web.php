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
    return view('ad/index');
});

Route::get('/contact', function () {
    return view('ad/contact');
});

Route::get('/package', function () {
    return view('ad/package');
});

Route::get('/attire', function () {
    return view('ad/attire');
});

Route::get('/portfolio', function () {
    return view('ad/portfolio');
});

Route::get('/about', function () {
    return view('ad/about');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

