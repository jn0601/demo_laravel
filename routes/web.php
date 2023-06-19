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

// Route::group(['middleware' => 'checkAdminLogin'], function() {
// 	Route::get('/admin', function() {
// 		return view('admin_pages.admin_home');
// 	});
// });

Route::get('/admin', [AdminController::class, 'index']); // vào func index của AdminController
Route::get('/trang-chu-admin', [AdminController::class, 'show_dashboard']);
Route::get('/login-auth', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
//Route::post('/admin-trang-chu', [LoginController::class, 'login']);
Route::get('/404', [AdminController::class, 'error']);

//Menu
Route::get('/add-menu', [MainMenuController::class, 'add_menu']);
Route::get('/list-menu', [MainMenuController::class, 'list_menu']);

//Category
Route::get('/add-category', [CategoryController::class, 'add_category']);
Route::get('/list-category', [CategoryController::class, 'list_category']);

//Product
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/list-product', [ProductController::class, 'list_product']);

//Post
Route::get('/add-post', [PostController::class, 'add_post']);
Route::get('/list-post', [PostController::class, 'list_post']);

//Banner
Route::get('/add-banner', [BannerController::class, 'add_banner']);
Route::get('/list-banner', [BannerController::class, 'list_banner']);

//Slider
Route::get('/add-slider', [SliderController::class, 'add_slider']);
Route::get('/list-slider', [SliderController::class, 'list_slider']);

//User
Route::get('/add-user', [UserController::class, 'add_user']);
Route::get('/list-user', [UserController::class, 'list_user']);