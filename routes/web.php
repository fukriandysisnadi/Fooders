<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('login/google', [AuthenticationController::class, 'redirectToGoogle'])->name(name: 'login.google');
Route::get('login/google/callback', [AuthenticationController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [AuthenticationController::class, 'redirectToFacebook'])->name(name: 'login.facebook');
Route::get('login/facebook/callback', [AuthenticationController::class, 'handleFacebookCallback']);

Route::get('/searchView', [HomeController::class, 'searchView']);

Route::get('/login', [AuthenticationController::class, 'loginView']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/register', [AuthenticationController::class, 'registerView']);
Route::post('/register', [AuthenticationController::class, 'register']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profileView'])->middleware('security');
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->middleware('security');
Route::get('/transactionhistory', [UserController::class, 'transactionView'])->middleware('security');

Route::get('/createFood', [FoodController::class, 'createFood'])->middleware('security');;
Route::get('/manageFood', [FoodController::class, 'manageFood'])->middleware('security');;
Route::post('/nambahFood', [FoodController::class, 'nambahFood'])->middleware('security');;
Route::post('/ubahFood', [FoodController::class, 'ubahFood'])->middleware('security');;

Route::delete('/hapusFood/{id}', [FoodController::class, 'hapusFood'])->middleware('security');;
Route::get('/updateFood/{id}', [FoodController::class, 'updateFood'])->middleware('security');;
Route::get('/{id}', [FoodController::class, 'index']);


Route::get('/fooddetail/{id}', [FoodController::class, 'fooddetail']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
