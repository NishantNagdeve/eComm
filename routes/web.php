<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/', [ProductController::class, 'index']);

Route::get('/admin-login', function () {
    return view('admin.admin-login');
});
Route::post('/admin-login', [AdminController::class, 'admin_login']);
Route::get('/admin-logout', function () {
    Session::forget('admin');
    return redirect('/admin-login');
});

Route::get('/product-add', function () {
    return view('admin.product-add');
});
Route::post('/product-add', [AdminController::class, 'product-add']);

Route::get('/product-detail/{id}', [ProductController::class, 'product_detail']);
Route::post('/add-to-cart', [ProductController::class, 'addToCart']);

Route::get('/search', [ProductController::class, 'Search']);
Route::get('/cartlist', [ProductController::class, 'cartList']);
Route::get('/removecart/{id}', [ProductController::class, 'removeCart']);

