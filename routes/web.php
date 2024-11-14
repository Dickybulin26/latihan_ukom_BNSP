<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;

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

Route::get('/', [DataBarangController::class, 'index'])->name('barang.index');

Route::get('/tambah', [DataBarangController::class, 'tambahBarang'])->name('barang.tambah');

Route::post('/simpan', [DataBarangController::class, 'simpanBarang'])->name('barang.simpan');

Route::get('/edit/{id_barang}', [DataBarangController::class, 'editBarang'])->name('barang.edit');

Route::post('/update/{id_barang}', [DataBarangController::class, 'updateBarang'])->name('barang.update');

Route::get('/detail/{id_barang}', [DataBarangController::class, 'detailBarang'])->name('barang.detail');

Route::get('/hapus/{id_barang}', [DataBarangController::class, 'hapusBarang'])->name('barang.hapus');