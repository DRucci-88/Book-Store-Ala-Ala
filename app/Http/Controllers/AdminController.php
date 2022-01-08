<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageBook()
    {
        return view('admin.manage_book');
    }

    public function bookDetail(Book $book)
    {
//        dd($book);
        return view('admin.book_detail',[
            'book' => $book
        ]);
    }
    public function updateBook(Book $book, Request $req)
    {
//        dd($book);
        dd($req->input());
    }
}