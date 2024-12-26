<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangBarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/barang', [HomeController::class, 'barang'])->name('barang');
Route::get('/kategori', [HomeController::class, 'kategori'])->name('kategori');
Route::get('/gudang', [HomeController::class, 'gudang'])->name('gudang');

Route::get('/barang/tambah', [BarangController::class, 'formTambah'])->name('form.barang.tambah');
Route::post('/barang/tambah', [BarangController::class, 'tambahBarang'])->name('barang.tambah');
Route::get('/barang/perbarui/{id}', [BarangController::class, 'formPerbarui'])->name('form.barang.perbarui');
Route::put('/barang/perbarui/{id}', [BarangController::class, 'perbaruiBarang'])->name('barang.perbarui');
Route::delete('/barang/hapus/{id}', [BarangController::class, 'hapusBarang'])->name('barang.hapus');

Route::get('/kategori/tambah', [KategoriController::class, 'formTambah'])->name('form.kategori.tambah');
Route::post('/kategori/tambah', [KategoriController::class, 'tambahKategori'])->name('kategori.tambah');
Route::get('/kategori/perbarui/{id}', [KategoriController::class, 'formPerbarui'])->name('form.kategori.perbarui');
Route::put('/kategori/perbarui/{id}', [KategoriController::class, 'perbaruiKategori'])->name('kategori.perbarui');
Route::delete('/kategori/hapus/{id}', [KategoriController::class, 'hapusKategori'])->name('kategori.hapus');

Route::get('/gudang/tambah', [GudangController::class, 'formTambah'])->name('form.gudang.tambah');
Route::post('/gudang/tambah', [GudangController::class, 'tambahGudang'])->name('gudang.tambah');
Route::get('/gudang/perbarui/{id}', [GudangController::class, 'formPerbarui'])->name('form.gudang.perbarui');
Route::put('/gudang/perbarui/{id}', [GudangController::class, 'perbaruiGudang'])->name('gudang.perbarui');
Route::delete('/gudang/hapus/{id}', [GudangController::class, 'hapusGudang'])->name('gudang.hapus');
Route::get('/gudang/barang/{id}', [GudangController::class, 'tampilkanBarang'])->name('gudang.barang');

Route::get('/barang-gudang/{id}', [GudangBarangController::class, 'formTambah'])->name('form.barang.gudang');
Route::post('/barang-gudang', [GudangBarangController::class, 'tambahGudangBarang'])->name('tambah.barang.gudang');
Route::delete('/barang-gudang/hapus/{id}', [GudangBarangController::class, 'hapusGudangBarang'])->name('hapus.barang.gudang');