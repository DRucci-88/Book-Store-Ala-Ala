<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Receipt;
use App\Models\Role;
use App\Models\User;
use App\Models\Genre;
use App\Models\Transaction;

class TestingController extends Controller
{
    public function modelTesting()
    {
        return view('modelTesting', [
            'transactions' => Transaction::all(),
            'receipts' => Receipt::all(),
            'roles' => Role::all(),
            'users' => User::all(),
            'genres' => Genre::all(),
            'books' => Book::all()
        ]);
    }
}
