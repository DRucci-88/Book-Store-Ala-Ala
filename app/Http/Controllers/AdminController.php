<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function manageBook()
    {
        return view('admin.manage_book', [
            'books' => Book::orderBy('updated_at','desc')->get()
        ]);
    }
    public function insertBook(Request $req)
    {
//        dd($req->input());
//        dd($req->file());
//        dd($req['cover']);

        $req->validate([
            'name' => ['required', 'string', 'max:250'],
            'author' => ['required', 'string', 'max:250'],
            'synopsis' => ['required', 'string',],
            'price' => ['required', 'numeric', 'min:0', 'max:100000'],
            'cover' => ['required', 'mimes:jpg,png,jpeg', 'max:5048']
        ]);

        $coverName = $req->file('cover')->getClientOriginalName();

        $respond = Book::create([
            'name' => $req['name'],
            'author' => $req['author'],
            'synopsis' => $req['synopsis'],
            'price' => $req['price'],
            'cover' => $coverName
        ]);

        if ($respond){
            $req->file('cover')->move(public_path('books'), $coverName);
            return back()->with('successMessage', 'Insert Book Success');
        }
        return back()->with('errorMessage', 'Insert Book Failed');

    }
    public function bookDetail(Book $book)
    {
        //        dd($book);
        return view('admin.book_detail', [
            'book' => $book
        ]);
    }
    public function updateBook(Book $book, Request $req): RedirectResponse
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

    public function deleteBook(Book $book)
    {
//        dd($book);
        $cover = $book['cover'];
        if ($book->delete()) {
            File::delete(public_path('books/'.$cover));
            return back()->with('successMessage', 'Book Deleted Successfully');
        }
        return back()->with('errorMessage', 'Book Delete Failed');
    }

    // Manage Genre Page
    public function manageGenre()
    {
        return view('admin.manage_genre', [
            'genres' => Genre::all()
        ]);
    }

    // Genre Detail Page
    public function genreDetail(Genre $genre)
    {
        return view('admin.genre_detail', [
            'genre' => $genre,
            'books' => $genre->books
        ]);
    }

    // Handle Add Genre
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

    // Handle Update Genre
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

    // Handle Delete Genre
    public function deleteGenre(Genre $genre)
    {
        if ($genre->delete()) {
            return redirect('/admin/genre')->with('successMessage', 'Genre Deleted Successfully');
        }
        return back()->with('errorMessage', 'Genre Delete Failed');
    }

    // Manage User Page
    public function manageUser()
    {
        return view('admin.manage_user', [
            'users' => User::all()
        ]);
    }

    // User Detail Page
    public function userDetail(User $user)
    {
        return view('admin.user_detail', [
            'user' => $user
        ]);
    }

    // Handle Update User
    public function updateUser(User $user, Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'role' => 'required'
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->role_id = $validatedData['role'] === 'Admin' ? 1 : 2;
        if ($user->save()) {
            return back()->with('successMessage', 'User Updated Successfully');
        }
        return back()->with('errorMessage', 'User Update Failed');
    }

    // Handle Delete User
    public function deleteUser(User $user)
    {
        if ($user->delete()) {
            return redirect('/admin/user')->with('successMessage', 'User Deleted Successfully');
        }
        return back()->with('errorMessage', 'User Delete Failed');
    }
}
