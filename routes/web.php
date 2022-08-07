<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SessionCartController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;

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

Route::prefix("admin")->group(function() {
    Route::redirect("/", "admin/orders");
    Route::resource("categories", CategoryController::class);
    Route::resource("items", ItemController::class);
    Route::get("orders", [AdminOrderController::class, "index"]);
    Route::get("cart", [SessionCartController::class, "cart"]);
});

// Route::view("/", "order");
// Route::view("master", "layout.master");
// Route::view('home','welcome');
// Route::view('order','welcome');
// Route::view('cart','cart');
// Route::view('detail','detail');

Route::get("/", [PageController::class, "landing"]);
Route::get("/buy/now/check/out/form/{item_id}", [OrderController::class, "buyNowCheckOutForm"]);
Route::post("/buy/now/check/out/{item_id}", [OrderController::class, "buyNowCheckOut"]);
Route::get("add/session/cart/{item_id}", [SessionCartController::class, "addSessionCart"]);

Route::post("cart/check/out", [OrderController::class, "sessionOrderCheckout"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
