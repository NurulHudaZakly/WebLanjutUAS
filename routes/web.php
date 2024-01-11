<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OlahragaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard
Route::get('/', [OlahragaController::class, 'index']);
// Menampilkan halaman dashboard.

Route::get('/olahraga/{id}', [OlahragaController::class, 'detail']);
// Menampilkan detail film berdasarkan ID.

// CRUD Movie
Route::get('/olahragas/data', [OlahragaController::class, 'data'])->middleware('auth');
// Memerlukan otentikasi untuk membaca data film.

Route::get('/olahragas/create', [OlahragaController::class, 'create'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pembuatan film.

Route::post('/olahraga/store', [OlahragaController::class, 'store'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan data film baru.

Route::get('/olahraga/{id}/edit', [OlahragaController::class, 'edit'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pengeditan film berdasarkan ID.

Route::post('/olahraga/{id}/edit', [OlahragaController::class, 'update'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan perubahan pada data film berdasarkan ID.

Route::get('/olahraga/delete/{id}', [OlahragaController::class, 'delete'])->middleware('auth');
// Memerlukan otentikasi untuk menghapus data film berdasarkan ID.

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Menampilkan formulir login, hanya dapat diakses oleh tamu.
// Memberikan nama 'login' pada rute untuk referensi lebih mudah.
// Memerlukan pengguna untuk menjadi tamu (belum login).

Route::post('/login', [LoginController::class, 'authenticate']);
// Memproses permintaan login.

Route::post('/logout', [LoginController::class, 'logout']);
// Memproses permintaan logout.
