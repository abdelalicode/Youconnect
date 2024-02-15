<?php

<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
use App\Http\Controllers\HomeController;
>>>>>>> 9e13a407fb2b7748b192d7b0fb7d7d208ebb9cb9
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

<<<<<<< HEAD
Route::get('connexion',[AuthController::class,"connexion"])->name("connexion");
Route::get('inscription', [AuthController::class, "inscription"])->name("inscription");
Route::post('signup',[AuthController::class,"signup"])->name("signup");
Route::post('signing',[AuthController::class,"signing"])->name("signing");
=======
Route::get('/', [HomeController::class,'index']);





>>>>>>> 9e13a407fb2b7748b192d7b0fb7d7d208ebb9cb9
