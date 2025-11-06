<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Portfolio Routes
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Contact Page (GET)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact Form (POST)
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
