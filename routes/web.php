<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('connexion',[AuthController::class,"connexion"])->name("connexion");
Route::get('inscription', [AuthController::class, "inscription"])->name("inscription");
Route::post('signup',[AuthController::class,"signup"])->name("signup");
Route::post('signing',[AuthController::class,"signing"])->name("signing");






Route::get('/', [HomeController::class,'index'])->name('homepage');
Route::post('/addPost', [PostController::class, 'store'])->name('addPost');
Route::post('/addComment', [CommentController::class, 'store'])->name('addComment');

Route::post('/addLike', [LikeController::class, 'store'])->name('addLike');

