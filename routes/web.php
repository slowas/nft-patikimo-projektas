<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/seller/{nftSeller:id}', [\App\Http\Controllers\HomeController::class, 'seller'])->name('seller.show');
Route::get('/nft/{nft:id}', [\App\Http\Controllers\HomeController::class, 'nft'])->name('nft.show');
