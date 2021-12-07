<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
