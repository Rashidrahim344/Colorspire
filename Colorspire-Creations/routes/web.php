<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — ColorSpire Creations Multi-Page Architecture
|--------------------------------------------------------------------------
|
| Connected routes for ColorSpire Creations website, built following the
| ScrewFast UI structural reference: Home, Services, Portfolio, The Hub,
| About, Blog, Contact, and inquiry submission.
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/hub', [PageController::class, 'hub'])->name('hub');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.store');
Route::post('/inquiry', [PageController::class, 'submitContact'])->name('inquiry.store');
