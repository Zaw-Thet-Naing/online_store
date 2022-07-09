<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\PageController;
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
    // Route::get("foo", function () {
    //     return "foo page";
    // });
    // Route::redirect("bar", "foo");
    // Route::view("landing", "welcome");
    // Route::get("posts/{post}", function($post) {
    //     echo $post;
    // });
    // Route::get("posts/{post}/comments/{comment}", function($post, $comment) {
    //     echo $comment;
    // });
    
    // Route::get("user/{user_id?}", function($user_id = "0") {
    //     echo $user_id;
    // })->name("user");

    Route::resource("categories", CategoryController::class)->middleware("auth");
    Route::resource("items", ItemController::class)->middleware("auth");
    Route::get("/categories", [CategoryController::class, "index"]);
    Route::get("/items", [ItemController::class, "index"]);
    // Route::get("/category/{id}", [CategoryController::class, "show"]);
});

// Route::view("/", "order");
// Route::view("master", "layout.master");
// Route::view('home','welcome');
// Route::view('order','welcome');
// Route::view('cart','cart');
// Route::view('detail','detail');

Route::get("/", [PageController::class, "landing"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
