<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\NewsController as DashboardNewsController;
use App\Http\Controllers\Dashboard\CategoriesController as DashboardCategoriesController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/webhooks/mollie', [WebhookController::class, 'mollie'])->name('webhooks.mollie');

Route::get('/rich', [MoneyController::class, 'index'])->name('rich');
Route::post('/rich', [MoneyController::class, 'earn'])->name('rich.earn');
Route::get('/rich/thanks', [MoneyController::class, 'thanks'])->name('rich.thanks');



Route::get('/', [PageController::class, 'home'])->name('pages.home');

// news routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// dashboard routes
Route::middleware('auth', 'auth.isalmighty')->group(function () {
    
    // test send mail route
    Route::get('/dashboard/mail', [DashboardNewsController::class, 'testSendMail'])->name('dashboard.testMail');

    // posts for news
    Route::get('/dashboard/posts', [DashboardNewsController::class, 'index'])->name('dashboard.posts.index');
    Route::get('/dashboard/posts/create', [DashboardNewsController::class, 'create'])->name('dashboard.posts.create');
    Route::post('/dashboard/posts/create', [DashboardNewsController::class, 'store'])->name('dashboard.posts.store');
    Route::get('/dashboard/posts/edit/{post}', [DashboardNewsController::class, 'edit'])->name('dashboard.posts.edit');
    Route::put('/dashboard/posts/edit/{post}', [DashboardNewsController::class, 'update'])->name('dashboard.posts.update');
    Route::delete('/dashboard/posts/delete/{post}', [DashboardNewsController::class, 'delete'])->name('dashboard.posts.delete');

    // categories for news (not working yet)
    Route::get('/dashboard/categories', [DashboardCategoriesController::class, 'index'])->name('dashboard.categories.index');
    Route::get('/dashboard/categories/create', [DashboardCategoriesController::class, 'create'])->name('dashboard.categories.create');
    Route::post('/dashboard/categories/create', [DashboardCategoriesController::class, 'store'])->name('dashboard.categories.store');
    Route::get('/dashboard/categories/edit/{id}', [DashboardCategoriesController::class, 'edit'])->name('dashboard.categories.edit');
    Route::post('/dashboard/categories/edit/{id}', [DashboardCategoriesController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('/dashboard/categories/delete', [DashboardCategoriesController::class, 'delete'])->name('dashboard.categories.delete');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'auth.isalmighty'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
