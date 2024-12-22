<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\PostController;











Route::get('/',[HomeController::class, 'index']);
Route::get('/settings',[HomeController::class, 'settings']);
//Route::get('/about',[HomeController::class, 'about']);

Route::get('posts',[PostController::class,'index']);
Route::get('posts/{post}',[PostController::class,'show']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
