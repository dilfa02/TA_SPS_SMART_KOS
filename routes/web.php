<?php

use App\Http\Controllers\AlternatifController;
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

Route::get('/1', function () {
    return view('Dashboard');
})->name('dashboard');

Route::get('/3', function () {
    return view('Hasil');
})->name('Hasil');

Route::post('/alternatif', [AlternatifController::class, 'pilih'])->name('pilih_alternatif');

Route::get('/2', [AlternatifController::class, 'tampil'])->name('alternatif');

Route::post('/hasil', [AlternatifController::class, 'hasil'])->name('hasil');

Route::post('/filter', [AlternatifController::class, 'filter'])->name('filter');




