<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanreController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new-genre', [GanreController::class, 'create'])->name('movies.gcreate.index');
Route::post('/new-genre', [GanreController::class, 'store'])->name('movies.gcreate.store');

Route::get('/new-film', [MovieController::class, 'create'])->name('movies.fcreate.index');
Route::post('/new-film', [MovieController::class, 'store'])->name('movies.fcreate.store');

Route::get('/films', [MovieController::class, 'show'])->name('movies.films.show');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
