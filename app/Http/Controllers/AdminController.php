<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageBook()
    {
        return view('admin.manage_book', [
            'books' => Book::all()
        ]);
    }

    public function bookDetail(Book $book)
    {
        //        dd($book);
        return view('admin.book_detail', [
            'book' => $book
        ]);
    }
    public function updateBook(Book $book, Request $req)
    {
        //        dd($book);
        //        dd($req->input());
        $book->name = $req['name'];
        $book->author = $req['author'];
        $book->price = $req['price'];
        $book->synopsis = $req['synopsis'];
        $book->cover =  $req['cover'] ?? $req['oldCover'];

        if ($book->save()) {
            return back()->with('successMessage', 'Book Update Successfully');
        }
        return back()->with('errorMessage', 'Book Update Failed');
    }
    public function testgit()
    {
        echo "Testttttt";
    }
}
