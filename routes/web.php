<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FidelityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');

Route::get('/fidelity', [FidelityController::class, 'index'])->name('fidelity');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(MenuController::class)->group(function () {
    Route::get('/menu', 'index')->name('menu.index');
    Route::get('/menu/burgers', 'burgers')->name('menu.burgers');
    Route::get('/menu/burgers/{burger}', 'showBurgers')->name('menu.burgers.show');
    Route::get('/menu/snacks', 'snacks')->name('menu.snacks');
    Route::get('/menu/drinks', 'drinks')->name('menu.drinks');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts/{post}', 'show')->name('posts.show');
});

Route::controller(LegalController::class)->group(function () {
    Route::get('/legal/impressum', 'impressum')->name('impressum');
    Route::get('/legal/agb', 'agb')->name('agb');
    Route::get('/legal/datenschutz', 'datenschutz')->name('datenschutz');
});

Route::get('/services/contact', [ServiceController::class, 'showContactForm'])->name('service.contact');

Route::post('/services/contact', [ServiceController::class, 'submitContactForm'])->name('service.contact.submit');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
