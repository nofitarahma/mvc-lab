<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // $books = ['Clean Code', 'Refactoring'];
        // return view('books.index', [
        //     'books' => $books
        // ]);
        $books = Book::orderBy('title')->get();
        return view('books.index', compact('books'));
    }
}
