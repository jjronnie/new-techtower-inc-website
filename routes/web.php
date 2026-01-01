<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Auth\UserOtpController;

use Illuminate\Support\Facades\Route;



    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/{id}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.show'); 
    
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('toggle-2fa', [UserOtpController::class, 'toggle2FA'])->name('toggle2fa');
});

require __DIR__.'/auth.php';
