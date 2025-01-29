<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ComptadorController;
use App\Http\Controllers\KnifesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/delete', [BookController::class, 'delete'])->name('books.delete');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/knifes', [KnifesController::class, 'index'])->name('knifes.index');
Route::get('/knifes/create', [KnifesController::class, 'create'])->name('knifes.create');
Route::post('/knifes', [KnifesController::class, 'store'])->name('knifes.store');
Route::get('/knifes/{knifes}', [KnifesController::class, 'show'])->name('knifes.show');
Route::get('/knifes/{knifes}/edit', [KnifesController::class, 'edit'])->name('knifes.edit');
Route::put('/knifes/{knifes}', [KnifesController::class, 'update'])->name('knifes.update');
Route::get('/knifes/{knifes}/delete', [KnifesController::class, 'delete'])->name('knifes.delete');
Route::delete('/knifes/{knifes}', [KnifesController::class, 'destroy'])->name('knifes.destroy');

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () { Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard'); });
