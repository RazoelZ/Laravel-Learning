<?php

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

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/admin', 'App\Http\Controllers\AdminController')->middleware('auth');
Route::resource('/buku', 'App\Http\Controllers\BukuController')->middleware('auth');
Route::resource('/anggota', 'App\Http\Controllers\AnggotaController')->middleware('auth');
Route::resource('/peminjaman', 'App\Http\Controllers\PeminjamanController')->middleware('auth');
Route::resource('/kembali', 'App\Http\Controllers\KembaliController')->middleware('auth');
Route::post('jabar', 'App\Http\Controllers\PengembalianController@jabar')->name('jabar')->middleware('auth');
Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');
Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
