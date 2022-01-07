<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

// Testing Development
Route::get('/modelTesting', [TestingController::class,'modelTesting']);

/* All Users */
Route::get('/', [HomeController::class,'index']);

/* Book details page is separated based on user */
/* End of All Users */

/* Authenticated Users (Admin & Member) */
Route::get('/profile', function () {
    return view('member/profile');
});
Route::get('/profile/password', function () {
    return view('member/password');
});

Route::post('/logout', [AuthController::class, 'store']);
/* End of Authenticated Users */

/* Admin */
Route::get('/book', function () {
    return view('admin/manage_book');
});
Route::get('/book/id/admin', function () {
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
/* End of Admin */

/* Member */
Route::get('/book/id/member', function () {
    return view('member/book_detail');
});

Route::get('/cart', function () {
    return view('member/cart');
});
Route::get('/cart/item_id', function () {
    return view('member/book_detail');
});

Route::get('/history', function () {
    return view('member/history');
});
Route::get('/history/transaction_id', function () {
    return view('member/history_detail');
});
/* End of Member */

/* Guest */
Route::get('/book/id/guest', function () {
    return view('book_detail');
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
/* End of Guest */
