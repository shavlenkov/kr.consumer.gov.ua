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
    return view('main');
})->name('main');

Route::get('/rozporiadok-roboty', function () {
    return view('rozporiadok-roboty');
})->name('rozporiadok-roboty');

Route::get('/profspilka', function () {
    return view('profspilka');
})->name('profspilka');

Route::get('/kadri', function () {
    return view('kadri');
})->name('kadri');

Route::get('/ochyshchennia-vlady', function () {
    return view('ochyshchennia-vlady');
})->name('ochyshchennia-vlady');