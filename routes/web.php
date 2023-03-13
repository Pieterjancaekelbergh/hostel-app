<?php

use App\Http\Controllers\Dashboard\NewsController as DashboardNewsController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', [
        "title" => "Home",
        "intro" => "Welcome to my website!",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.",
    ]);
});

// news routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// dashboard routes
Route::get('/dashboard/posts/create', [DashboardNewsController::class, 'create'])->name('dashboard.posts.create');
Route::post('/dashboard/posts/create', [DashboardNewsController::class, 'store'])->name('dashboard.posts.store');