<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
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
    public function manageGenre()
    {
        return view('admin.manage_genre', [
            'genres' => Genre::all()
        ]);
    }

    public function genreDetail(Genre $genre)
    {
        return view('admin.genre_detail', [
            'genre' => $genre,
            'books' => $genre->books
        ]);
    }
    public function addGenre(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|unique:genres'
        ]);

        if (Genre::create($validatedData)) {
            return back()->with('successMessage', 'Genre Added Successfully');
        }
        return back()->with('errorMessage', 'Genre Add Failed');
    }
    public function updateGenre(Genre $genre, Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|unique:genres'
        ]);

        $genre->name = $validatedData['name'];
        if ($genre->save()) {
            return back()->with('successMessage', 'Genre Updated Successfully');
        }
        return back()->with('errorMessage', 'Genre Update Failed');
    }
    public function deleteGenre(Genre $genre)
    {
        if ($genre->delete()) {
            return redirect('/admin/genre')->with('successMessage', 'Genre Deleted Successfully');
        }
        return back()->with('errorMessage', 'Genre Delete Failed');
    }
}
