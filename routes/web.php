<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;


// ==========================================
// PUBLIC USER DASHBOARD
// ==========================================

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [PostController::class, 'index'])
    ->name('dashboard');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');


// ==========================================
// GUEST AUTH (ADMIN LOGIN & REGISTER)
// ==========================================

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminController::class, 'showLogin'])
        ->name('login');

    Route::post('/admin/login', [AdminController::class, 'login'])
        ->name('login.store');

    Route::get('/admin/register', [AdminController::class, 'showRegister'])
        ->name('register');

    Route::post('/admin/register', [AdminController::class, 'register'])
        ->name('register.store');
});



// ==========================================
// ADMIN DASHBOARD
// ==========================================

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [PostController::class, 'adminIndex'])
        ->name('admin.dashboard');

    Route::get('/posts/create', [PostController::class, 'create'])
        ->name('admin.posts.create');

    Route::post('/posts', [PostController::class, 'store'])
        ->name('admin.posts.store');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
        ->name('admin.posts.edit');

    Route::put('/posts/{post}', [PostController::class, 'update'])
        ->name('admin.posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->name('admin.posts.destroy');

    Route::post('/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');
});
