<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionAddController;
use App\Http\Controllers\QuestionApi;
use App\Http\Controllers\QuestionController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/postlar",[PostController::class,"index"]);

Route::post("/postlar",[PostController::class,"store"]);

Route::post("/question",[QuestionController::class,"store"]);

Route::get("/question_show",[QuestionController::class,"index"]);

Route::get("/edit_post",[PostController::class,"update"]);

Route::post("/edit_post",[PostController::class,"update"]);

Route::post("/question_new_add",[QuestionAddController::class,"store"]);

Route::get("/edit_post/{id}",[PostController::class,"edit"]);

Route::get("/delete_post/{id}",[PostController::class,"destroy"]);

Route::get("/question_add",function (){
    return view('question_add');
});

Route::get("/question_api",[QuestionApi::class,'index']);

Route::get("/delete_question/{id}",[QuestionAddController::class,"destroy"]);


