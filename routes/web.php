<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//////////////////////        ADMIN     ///////////////////////
Route::get('admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/add-barang', [AdminController::class, 'adminAddProduct'])->name('admin.home')->middleware('is_admin');
Route::post("admin/add-barang", [HomeController::class, 'addProduct']);
Route::post("admin/add-category", [AdminController::class, 'addCategory']);
Route::post("admin/remove-barang/{id}", [ProductController::class, 'removeProduct']);
Route::get("admin/barang", [ProductController::class, 'adminListBarang']);
Route::get("admin/category", [AdminController::class, 'category']);
Route::get("admin/remove-category/{id}", [AdminController::class, 'removeCategory']);



//////////////////////        ADMIN     ///////////////////////


// Route::get('/', function () {
//     return view('home');
// });
 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'addToCart']);
Route::get("cartlist", [ProductController::class, 'cartList']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("checkout", [ProductController::class, 'checkout']);
Route::post("orderplace", [ProductController::class, 'orderPlace']);
Route::get("myorder", [ProductController::class, 'myOrder']);

