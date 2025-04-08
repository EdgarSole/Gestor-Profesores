<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AltaDocenteController;

Route::redirect('/', '/login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/alta-docente', [AltaDocenteController::class, 'create'])
    ->middleware('auth')
    ->name('alta_docente');

Route::post('/alta-docente', [AltaDocenteController::class, 'store'])
    ->middleware('auth')
    ->name('alta_docente.store');

Route::get('/alta-docente', [AltaDocenteController::class, 'create'])
    ->middleware('auth')
    ->name('alta_docente');

Route::post('/alta-docente', [AltaDocenteController::class, 'store'])
    ->middleware('auth')
    ->name('alta_docente.store');

require __DIR__.'/auth.php';
