<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitanteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/visitante', [VisitanteController::class, 'index'])->name('visitante.index');
    Route::get('/visitante/create', [VisitanteController::class, 'create'])->name('visitante.create');
    Route::post('/visitante/store', [VisitanteController::class, 'store'])->name('visitante.store');
    Route::get('/visitante/edit/{visitante}', [VisitanteController::class, 'edit'])->name('visitante.edit');
    Route::patch('/visitante/update/{visitante}', [VisitanteController::class, 'update'])->name('visitante.update');
    Route::delete('/visitante/destroy/{visitante}', [VisitanteController::class, 'destroy'])->name('visitante.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
