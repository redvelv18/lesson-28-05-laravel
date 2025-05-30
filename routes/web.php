<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Models\Book;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
Route::put('/books/{id}/update', [BookController::class, 'update'])->name('books.update');

Route::get('/contact', [ContactController::class, 'create'])->name('books.contact');
Route::get('/contact/create', [ContactController::class, 'create'])->name('books.contact');
Route::post('/books', [ContactController::class, 'store'])->name('books.store');

Route::get('/books', function() { return view('books.index', ['books'=>Book::all()]); });

