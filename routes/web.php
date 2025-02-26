<?php

use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('page.home');
    Route::get('/', 'post')->name('page.home');
});

Route::prefix('/posts')->as('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'user'])->name('dashboard');

Route::get('/dashboard-moder', function () {
    return view('dashboard-moder');
})->middleware(['auth', 'verified', 'moder'])->name('dashboard-moder');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/superUser.php';
