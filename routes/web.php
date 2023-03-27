<?php

use App\Http\Controllers\Dashboard\NewsController as DashboardNewsController;
use App\Http\Controllers\Dashboard\CategoriesController as DashboardCategoriesController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('pages.home');

// news routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// dashboard routes

// posts for news
Route::get('/dashboard/posts', [DashboardNewsController::class, 'index'])->name('dashboard.posts.index');
Route::get('/dashboard/posts/create', [DashboardNewsController::class, 'create'])->name('dashboard.posts.create');
Route::post('/dashboard/posts/create', [DashboardNewsController::class, 'store'])->name('dashboard.posts.store');
Route::get('/dashboard/posts/edit/{id}', [DashboardNewsController::class, 'edit'])->name('dashboard.posts.edit');
Route::post('/dashboard/posts/edit/{id}', [DashboardNewsController::class, 'update'])->name('dashboard.posts.update');
Route::delete('/dashboard/posts/delete/{post}', [DashboardNewsController::class, 'delete'])->name('dashboard.posts.delete');

// categories for news (not working yet)
Route::get('/dashboard/categories', [DashboardCategoriesController::class, 'index'])->name('dashboard.categories.index');
Route::get('/dashboard/categories/create', [DashboardCategoriesController::class, 'create'])->name('dashboard.categories.create');
Route::post('/dashboard/categories/create', [DashboardCategoriesController::class, 'store'])->name('dashboard.categories.store');
Route::get('/dashboard/categories/edit/{id}', [DashboardCategoriesController::class, 'edit'])->name('dashboard.categories.edit');
Route::post('/dashboard/categories/edit/{id}', [DashboardCategoriesController::class, 'update'])->name('dashboard.categories.update');
Route::delete('/dashboard/categories/delete', [DashboardCategoriesController::class, 'delete'])->name('dashboard.categories.delete');