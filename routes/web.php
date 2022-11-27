<?php

use App\Http\Controllers\PenggunaController;
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
    return view('pages.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/regis', function () {
    return view('auth.register');
});

Route::get('/auth', [PenggunaController::class, 'index']);
Route::post('/auth/login', [PenggunaController::class, 'login']);
Route::get('/auth/logout', [PenggunaController::class, 'logout']);
Route::get('/register', [PenggunaController::class, 'register']);
Route::post('/auth/create', [PenggunaController::class, 'create']);
// Route::get('/', function () {
//     return view('pages.dashboard', ['title' => 'Home']);
// })->name('home');
// Route::get('register', [App\Http\Controllers\PenggunaController::class, 'register'])->name('register');
// Route::post('register', [App\Http\Controllers\PenggunaController::class, 'register_action'])->name('register.action');
// Route::get('auth', [App\Http\Controllers\PenggunaController::class, 'index'])->name('login');
// Route::post('/auth/login', [App\Http\Controllers\PenggunaController::class, 'login'])->name('login.action');
// Route::get('password', [App\Http\Controllers\PenggunaController::class, 'password'])->name('password');
// Route::post('password', [App\Http\Controllers\PenggunaController::class, 'password_action'])->name('password.action');
// Route::get('logout', [App\Http\Controllers\PenggunaController::class, 'logout'])->name('logout');