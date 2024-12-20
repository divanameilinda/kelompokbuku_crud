<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman KelompokJagung (menampilkan daftar produk dengan hanya tombol Show)
Route::get('/kelompokjagung', [ProductController::class, 'kelompokJagung'])->name('product.kelompokjagung');

// Menggunakan resource controller untuk produk (Add, Edit, Delete, Show)
Route::resource('/product', ProductController::class);
