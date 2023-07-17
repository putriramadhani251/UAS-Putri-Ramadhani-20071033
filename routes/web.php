<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('barangputri', '\App\Http\Controllers\BarangputriController@index');
Route::get('bagianputri', '\App\Http\Controllers\BagianputriController@index');
Route::get('petugasputri', '\App\Http\Controllers\PetugasputriController@index');
Route::get('pengeluaranputri', '\App\Http\Controllers\PengeluaranputriController@index');
Route::get('pengeluaranitemputri', '\App\Http\Controllers\PengeluaranitemputriController@index');
