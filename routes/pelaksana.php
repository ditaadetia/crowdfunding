<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\PenggalanganController;
use App\Http\Controllers\PantiController;


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
Route::prefix('pelaksana')->name('pelaksana.')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::prefix('donasi')->name('donasi.')->controller(DonasiController::class)->group(function () {
            Route::get('/donasi', [DonasiController::class, 'index'])->name('index');
            Route::get('/donasi/create/index', [DonasiController::class, 'createIndex'])->name('create.index');
            Route::post('/donasi/create', [DonasiController::class, 'create'])->name('create');
        });
        Route::prefix('penggalangan')->name('penggalangan.')->controller(PenggalanganController::class)->group(function () {
            Route::get('/penggalangan', [PenggalanganController::class, 'index'])->name('index');
            Route::get('/pengalangan/create/index', [PenggalanganController::class, 'createIndex'])->name('create.index');
            Route::post('/penggalangan/create', [PenggalanganController::class, 'create'])->name('create');
        });
        Route::prefix('panti')->name('panti.')->controller(PantiController::class)->group(function () {
            Route::get('/panti', [PantiController::class, 'index'])->name('index');
            Route::get('/panti/create/index', [PantiController::class, 'createIndex'])->name('create.index');
            Route::post('/panti/create', [PantiController::class, 'create'])->name('create');
        });
    });
    Route::prefix('panti')->name('panti.')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::prefix('donasi')->name('donasi.')->controller(DonasiController::class)->group(function () {
            Route::get('/donasi', [DonasiController::class, 'index'])->name('index');
            Route::get('/donasi/create/index', [DonasiController::class, 'createIndex'])->name('create.index');
            Route::post('/donasi/create', [DonasiController::class, 'create'])->name('create');
        });
        Route::prefix('penggalangan')->name('penggalangan.')->controller(PenggalanganController::class)->group(function () {
            Route::get('/penggalangan', [PenggalanganController::class, 'index'])->name('index');
            Route::get('/pengalangan/create/index', [PenggalanganController::class, 'createIndex'])->name('create.index');
            Route::post('/penggalangan/create', [PenggalanganController::class, 'create'])->name('create');
        });
        Route::prefix('panti')->name('panti.')->controller(PantiController::class)->group(function () {
            Route::get('/panti', [PantiController::class, 'index'])->name('index');
            Route::get('/panti/create/index', [PantiController::class, 'createIndex'])->name('create.index');
            Route::post('/panti/create', [PantiController::class, 'create'])->name('create');
        });
    });
});
