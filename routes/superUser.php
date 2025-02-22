<?php

use App\Http\Controllers\SuperUser\PostController;
use Illuminate\Support\Facades\Route;



Route::prefix('dashboard-superuser')->name('dashboard-superuser.')->group(function(){
    Route::middleware(['auth', 'verified', 'superUser'])->group(function(){
        Route::get('/', function(){
            return view('dashboard-superuser');
        })->name('home');
        Route::controller(PostController::class)->prefix('post')->group(function(){
            Route::get('/index', 'index')->name('post.index');
            Route::get('/create','create')->name('post.create');
        });
    });
});
