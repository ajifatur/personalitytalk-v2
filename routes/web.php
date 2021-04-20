<?php

use Illuminate\Support\Facades\Route;

use Ajifatur\FaturCMS\Models\Files;

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

// Letakkan fungsi ini pada route paling atas
\Ajifatur\FaturCMS\FaturCMS::routes();

// Home
Route::get('/', 'HomeController@index')->name('site.home');

// Program
Route::get('/program/kategori/{category}', 'ProgramController@index')->name('site.program.index');
Route::get('/program/{permalink}', 'ProgramController@detail')->name('site.program.detail');

// Karir
Route::get('/karir', 'KarirController@index')->name('site.karir.index');
Route::get('/karir/{permalink}', 'KarirController@detail')->name('site.karir.detail');

// Psikolog
Route::get('/psikolog', 'PsikologController@index')->name('site.psikolog.index');

// Halaman
Route::get('/{permalink}', 'HalamanController@detail')->name('site.halaman.detail');