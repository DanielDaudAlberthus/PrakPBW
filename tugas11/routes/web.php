<?php

use App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class)->name('home');

Route::get('/dashboard',Controllers\DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('stores', Controllers\StoreController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('stores/create', [Controllers\StoreController::class, 'create'])->name('stores.create');
});

require __DIR__.'/auth.php';