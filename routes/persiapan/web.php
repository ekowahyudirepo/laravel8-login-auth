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
    return view('web.home');
});

Route::get('/blog', function () {
    return view('web.blog');
});

Route::get('/login', function () {
    return view('web.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
