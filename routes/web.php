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
Route::get('logout',[AuthController::class,"logout"])->name("logout");






Route::get('/', [HomeController::class,'index'])->name('homepage');
Route::get('/search', [HomeController::class,'search'])->name('search');
Route::get('/readnotif/{notifid}', [HomeController::class, 'readNotific'])->name('readnotification');

Route::post('/addPost', [PostController::class, 'store'])->name('addPost')->middleware('auth');
Route::post('/addComment', [CommentController::class, 'store'])->name('addComment')->middleware('auth');

Route::post('/addLike', [LikeController::class, 'store'])->name('addLike')->middleware('auth');
Route::post('/follows', [PostController::class, 'follows'])->name('follows')->middleware('auth');

Route::delete('/delete', [PostController::class, 'destroy'])->name('post.destroy')->middleware('auth');
Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
Route::get('EditeProfil', [AuthController::class, 'EditeProfil'])->name('EditeProfil');
Route::delete('/deletepost', [PostController::class, 'destroy'])->name('post.destroy')->middleware('auth');
Route::delete('/deletecomment', [CommentController::class, 'destroy'])->name('comment.destroy')->middleware('auth');

