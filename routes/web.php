<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
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
Route::get('/admin/book', [AdminController::class, 'manageBook']);
Route::get('/book/{book}/admin', [AdminController::class, 'bookDetail']);
Route::post('/book/{book}/admin', [AdminController::class, 'updateBook']);

Route::get('/admin/genre', [AdminController::class, 'manageGenre']);
Route::post('/admin/genre', [AdminController::class, 'addGenre']);
Route::get('/genre/{genre}/admin', [AdminController::class, 'genreDetail']);
Route::post('/genre/{genre}/admin', [AdminController::class, 'updateGenre']);
Route::delete('/genre/{genre}/admin', [AdminController::class, 'deleteGenre']);

Route::get('admin/user', function () {
    return view('admin/manage_user');
});
Route::get('admin/user/id', function () {
    return view('admin/user_detail');
});

/* Member */
// Fix route with middleware
Route::get('/book/{book}', [HomeController::class, 'show']);

Route::get('/cart', [OrderController::class, 'index']);
Route::get('/cart/{book:id}', [HomeController::class, 'show']);
Route::post('/cart/{book:id}', [OrderController::class, 'update']);
Route::post('/cart/r/{book:id}', [OrderController::class, 'destroy']);

Route::post('/checkout', [OrderController::class, 'store']);

Route::get('/history', [OrderController::class, 'create']);
Route::get('/history/{receipt:id}', [OrderController::class, 'show']);
/* End of Member */

/* Guest */
// Fix route with middleware
//Route::get('/book/{book:id}/guest', [HomeController::class, 'show']);


/* End of Guest */
