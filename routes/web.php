<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// TESTING DEVELOPMENT
Route::get('/modelTesting', [TestingController::class, 'modelTesting']);
Route::get('/controllerTesting', [TestingController::class, 'controllerTesting']);

// HOME
Route::get('/', [HomeController::class, 'index']);

/* Book details page is separated based on user */
/* End of All Users */

// AUTHENTICATED Users (admin & Member)
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/profile', [AuthController::class, 'changeProfile']);
Route::post('/profile', [AuthController::class, 'updateProfile']);
Route::get('/profile/password', [AuthController::class, 'changePassword'])->name('change_password');
Route::post('/profile/password', [AuthController::class, 'updatePassword'])->name('update_password');
Route::post('/logout', [AuthController::class, 'logout']);

// ADMIN
Route::get('/book', function () {
    return view('admin/manage_book');
});
Route::get('/book/{book}/admin', function () {
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

/* Member */
// Fix route with middleware
Route::get('/book/{book}/detail', [HomeController::class, 'show']);

Route::get('/cart', [OrderController::class, 'index']);
Route::post('/cart/{book:id}', [OrderController::class, 'update']);
Route::get('/cart/{book:id}', [OrderController::class, 'show']);
Route::post('/cart/r/{book:id}', [OrderController::class, 'destroy']);

Route::get('/history', [OrderController::class, 'create']);
Route::get('/history/{receipt:id}', [OrderController::class, 'show']);
/* End of Member */

/* Guest */
// Fix route with middleware
//Route::get('/book/{book:id}/guest', [HomeController::class, 'show']);


/* End of Guest */
