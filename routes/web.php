<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;







Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::resource('posts', PostsController::class);


