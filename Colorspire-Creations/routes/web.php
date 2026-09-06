<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// English routes (default)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/insights/{id}', [InsightController::class, 'show'])->name('insights.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// French routes (/fr)
Route::prefix('fr')->name('fr.')->group(function () {
    Route::get('/', function () {
        return app(HomeController::class)->index(request(), 'fr');
    })->name('home');

    Route::get('/services', function () {
        return app(ServiceController::class)->index(request(), 'fr');
    })->name('services');

    Route::get('/products', function () {
        return app(ProductController::class)->index(request(), 'fr');
    })->name('products');

    Route::get('/products/{id}', function ($id) {
        return app(ProductController::class)->show(request(), $id, 'fr');
    })->name('products.show');

    Route::get('/blog', function () {
        return app(BlogController::class)->index(request(), 'fr');
    })->name('blog');

    Route::get('/blog/{id}', function ($id) {
        return app(BlogController::class)->show(request(), $id, 'fr');
    })->name('blog.show');

    Route::get('/insights/{id}', function ($id) {
        return app(InsightController::class)->show(request(), $id, 'fr');
    })->name('insights.show');

    Route::get('/contact', function () {
        return app(ContactController::class)->index(request(), 'fr');
    })->name('contact');

    Route::post('/contact', function () {
        return app(ContactController::class)->store(request(), 'fr');
    })->name('contact.store');
});
