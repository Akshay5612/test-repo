<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PaymentController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'registerStore']);
Route::get('login',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'postLogin']);
Route::get('dashboard',[AuthController::class,'dashboard']);
Route::get('/player', [PlayerController::class, 'index'])->name('player')->middleware('player');
Route::get('/admin', [AdminController::class,'index'])->name('admin')->middleware('admin');

Route::post('/pay', [PaymentController::class,'pay'])->name('payment');
