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

Route::get('/posts/{id}', function($id) {
    return view('post')->with('post', App\Models\Post::find($id));
})->name('post');

Route::get('/generate/{id}', function($id) {
    return view('generate')->with('submenu', App\Models\Submenu::find($id));
})->name('generate');

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
