<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController2;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function () {
//     return 'Daftar buku';
// }); //ini gaboleh

// Route::get('/books', [BookController::class, 'index']); //ini boleh
// route nya ga dipake karena udah pake resource route dibawah

Route::resource('books', BookController2::class);
