<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('products.index');
Route::get('/home', [LandingPageController::class, 'home'])->name('products.home');
