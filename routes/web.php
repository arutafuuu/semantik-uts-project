<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('movies.index');
});

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');
Route::get('movies/show/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('movies/edit/{id}', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('movies/update/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('movies/delete/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

Route::post('movies/search', [MovieController::class, 'search'])->name('movies.search');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
