<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

//Frontend
Route::get('/', [HomeController::class, 'index']); // vào func index của HomeController
Route::get('/trang-chu', [HomeController::class, 'index']);

//Backend
Route::get('/admin', [AdminController::class, 'index']); // vào func index của AdminController
Route::get('/trang-chu-admin', [AdminController::class, 'index']);
Route::get('/login-auth', [LoginController::class, 'index']);