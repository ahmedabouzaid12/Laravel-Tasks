<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteController,AboutController,ContactController,PostController};


Route::get('/',[SiteController::class,'home']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/send-message',[ContactController::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);

 