<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [LandingPageController::class, 'index'])->name('products.index');
Route::get('/', [LandingPageController::class, 'home'])->name('products.home');
// Route::get('/', [LandingPageController::class, 'home_new'])->name('products.home');
