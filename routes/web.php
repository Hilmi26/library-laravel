<?php

use App\Http\Controllers\bukuController;
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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/admin_home');
});

// Route::get('/admin/book', function () {
//     return view('/admin/book');
// });

Route::get('/admin/book', [bukuController::class, 'index']);
Route::get('/book-add', [bukuController::class, 'store']);
