<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
/*
|--------------------------------------------------------------------------
| Buku
|--------------------------------------------------------------------------
*/

Route::get('/buku', [BukuController::class, 'index'])
    ->name('buku.index');

Route::get('/buku/create', function () {
    return 'Halaman Tambah Buku';
})->name('buku.create');

Route::get('/buku/kategori/{kategori}', [BukuController::class, 'kategori'])
    ->name('buku.kategori');

Route::get('/buku/search', [BukuController::class, 'search'])
    ->name('buku.search');

Route::get('/buku/{id}', [BukuController::class, 'show'])
    ->name('buku.show');

Route::get('/buku/{id}/edit', function ($id) {
    return "Edit Buku ID: $id";
})->name('buku.edit');

Route::delete('/buku/{id}', function ($id) {
    return "Hapus Buku ID: $id";
})->name('buku.destroy');

/*
|--------------------------------------------------------------------------
| Anggota
|--------------------------------------------------------------------------
*/

Route::get('/anggota', [AnggotaController::class, 'index'])
    ->name('anggota.index');

Route::get('/anggota/{id}', [AnggotaController::class, 'show'])
    ->name('anggota.show');

Route::get('/anggota/create', function () {
    return 'Tambah Anggota';
})->name('anggota.create');

Route::get('/anggota/{id}/edit', function ($id) {
    return "Edit Anggota ID: $id";
})->name('anggota.edit');

Route::delete('/anggota/{id}', function ($id) {
    return "Hapus Anggota ID: $id";
})->name('anggota.destroy');