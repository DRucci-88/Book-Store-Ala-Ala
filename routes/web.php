<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/a', function (){
//    $a = Book::all()->find(1);
//    $a->
//    return "";
//});

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/book', function () {
    return view('admin/manage_book');
});
Route::get('/book/id/admin', function () {
    return view('admin/book_detail');
});
Route::get('/book/id/member', function () {
    return view('member/book_detail');
});
Route::get('/book/id/guest', function () {
    return view('book_detail');
});
Route::get('/genre', function () {
    return view('admin/manage_genre');
});
Route::get('/genre/id', function () {
    return view('admin/genre_detail');
});
Route::get('/user', function () {
    return view('admin/manage_user');
});
Route::get('/user/id', function () {
    return view('admin/user_detail');
});
Route::get('/cart', function () {
    return view('member/cart');
});
Route::get('/cart/id', function () {
    return view('member/edit_cart');
});
Route::get('/history', function () {
    return view('member/history');
});
Route::get('/history/id', function () {
    return view('member/history_detail');
});
Route::get('/profile', function () {
    return view('member/profile');
});
Route::get('/profile/password', function () {
    return view('member/password');
});
