<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'books' => Book::latest()->filter(request('search'))->paginate(5)->withQueryString()
        ]);
    }
}
