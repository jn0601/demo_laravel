<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// ->middleware('auth') để bảo mật đường dẫn
// ->name('login') để redirect về trang login
//Auth::routes();
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth'); // vào func index của AdminController
Route::get('/trang-chu-admin', [AdminController::class, 'show_dashboard'])->middleware('auth');
Route::get('/login-auth', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/404', [AdminController::class, 'error']);

//Menu
Route::get('/add-menu', [MainMenuController::class, 'add_menu'])->middleware('auth');
Route::get('/list-menu', [MainMenuController::class, 'list_menu'])->middleware('auth');

//Category
Route::get('/add-category', [CategoryController::class, 'add_category'])->middleware('auth');
Route::get('/list-category', [CategoryController::class, 'list_category'])->middleware('auth');

//Product
Route::get('/add-product', [ProductController::class, 'add_product'])->middleware('auth');
Route::get('/list-product', [ProductController::class, 'list_product'])->middleware('auth');

//Post
Route::get('/add-post', [PostController::class, 'add_post'])->middleware('auth');
Route::get('/list-post', [PostController::class, 'list_post'])->middleware('auth');

//Banner
Route::get('/add-banner', [BannerController::class, 'add_banner'])->middleware('auth');
Route::get('/list-banner', [BannerController::class, 'list_banner'])->middleware('auth');

//Slider
Route::get('/add-slider', [SliderController::class, 'add_slider'])->middleware('auth');
Route::get('/list-slider', [SliderController::class, 'list_slider'])->middleware('auth');

//User
Route::get('/add-user', [UserController::class, 'add_user'])->middleware('auth');
Route::get('/list-user', [UserController::class, 'list_user'])->middleware('auth');