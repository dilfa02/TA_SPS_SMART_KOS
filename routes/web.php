<?php

use App\Http\Controllers\AlternatifController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;


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

Route::redirect('/', 'SPK');

Route::get('/home', function () {return view('main');});

Route::get('/SPK', [AlternatifController::class, 'hasil_all'])->name('SPK');

Route::post('/hasil', [AlternatifController::class, 'hasil'])->name('hasil');

Route::post('/filter/{jenis}', [AlternatifController::class, 'filter'])->name('filter');

Route::post('/komen', [CommentController::class, 'store'])->name('komen');