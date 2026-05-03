<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/articles', [PostController::class, 'articles'])->name('articles.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/category/{category}', [PostController::class, 'index'])->name('posts.category');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');
Route::post('/dashboard', [DashboardController::class, 'store'])->name('posts.store')->middleware('admin');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('admin');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('admin');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('admin');
