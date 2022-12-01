<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::prefix('/')->group(function () {
    Route::get('/',[ProductController::class, 'homeView']);
    Route::get('/home',[ProductController::class, 'homeView']);
    Route::get('/product',[ProductController::class, 'productView']);
    Route::get('/about',[ProductController::class, 'aboutView']);

    Route::get('/login',[LoginController::class, 'loginView']);

    Route::get('/register',[RegisterController::class, 'registerView']);
});
