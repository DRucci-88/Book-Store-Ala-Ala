<?php

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
Route::get('/book/id', function () {
    return view('admin/book_detail');
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
    return view('/history');
});
Route::get('/history/detail', function () {
    return view('/history_detail');
});
Route::get('/profile', function () {
    return view('/profile');
});
Route::get('/profile/password', function () {
    return view('/password');
});
