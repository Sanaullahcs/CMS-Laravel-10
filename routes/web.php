<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\PricingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/blogs', [BlogsController::class, 'index'])->name('admin.blogs');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
    Route::get('/services', [ServicesController::class, 'index'])->name('admin.services');
    Route::get('/about', [AboutUsController::class, 'index'])->name('admin.about');
    Route::get('/products', [ProductsController::class, 'index'])->name('admin.products');
    Route::get('/pricing', [PricingController::class, 'index'])->name('admin.pricing');
    // Add more admin routes here as needed
});
