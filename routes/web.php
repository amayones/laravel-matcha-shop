<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::get('/keranjang', [UserController::class, 'keranjang'])->name('keranjang');

Route::get('/bayar', [UserController::class, 'bayar'])->name('bayar');

Route::get('/summary', [UserController::class, 'summary'])->name('summary');
