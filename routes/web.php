<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/postlar",[PostController::class,"index"]);

Route::post("/postlar",[PostController::class,"store"]);

Route::post("/edit_post",[PostController::class,"update"]);

Route::get("/edit_post/{id}",[PostController::class,"edit"]);

Route::get("/delete_post/{id}",[PostController::class,"destroy"]);
