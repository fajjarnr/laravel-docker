<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/posts/{post}/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/posts/{post}/comments/{comment}', [CommentController::class, 'show'])->name('comments.show');
// Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
// Route::get('/posts/{post}/comments/create', [CommentController::class, 'create'])->name('comments.create');
// Route::get('/posts/{post}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
// Route::put('/posts/{post}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
// Route::delete('/posts/{post}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
