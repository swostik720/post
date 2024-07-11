<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[UserController::class,'login']);
Route::get('register',[UserController::class,'register']);
Route::post('register',[UserController::class,'store']);
Route::get('/forgot_password',[UserController::class,'forgot_password']);
Route::get('/index',[UserController::class,'index']);
Route::get('/post', [PostController::class,'post']);
