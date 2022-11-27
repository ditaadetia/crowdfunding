<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/panti', [PantiController::class, 'index'])->name('panti.pantiIndex');
Route::get('/panti/create/index', [PantiController::class, 'createPantiIndex'])->name('panti.createPantiIndex');
Route::post('/panti/create', [PantiController::class, 'createPanti'])->name('panti.createPanti');
