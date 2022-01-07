<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Homepage (Pagination & Searching)
    public function index()
    {
        return view('home.index', [
            'books' => Book::latest()->filter(request('search'))->paginate(5)->withQueryString()
        ]);
    }

    // Book detail (Member & Guest)
    public function show(Book $book)
    {
        return view('home.book_detail', [
            'book' => $book
        ]);
    }
}
