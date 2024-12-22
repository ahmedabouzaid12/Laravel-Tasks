<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SiteController,
    AboutController,
    ContactController,
    PostController,
    AuthController,
    AdminHomeController,
    CommentController
};
use App\Http\Controllers\admin\AdminCategoryController;

Route::get('/', [SiteController::class, 'home'])->name('home');


Route::get('/about', [AboutController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);
Route::post('/send-message', [ContactController::class, 'sendMessage']);


Route::get('/posts', [PostController::class, 'index']);
// add posts
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show']);


// Authentication
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'storeUser'])->name('store.user');

Route::get('/login-page', [AuthController::class, 'login'])->name('login');
Route::post('/login-page', [AuthController::class, 'loginUser'])->name('login.user');

// Route protection using the 'auth' middleware
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


//admin route
Route::get("admin-home",[AdminHomeController::class,"index"])->name('admin.home');


Route::get('admin-category',[AdminCategoryController::class,'index'])->name('category.index');
Route::get('admin-category-create',[AdminCategoryController::class,'create'])->name('category.create');

Route::post('admin-category-store',[AdminCategoryController::class,'store'])->name('category.store');

//comments route
Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('comment.store');
Route::post('/posts/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');

