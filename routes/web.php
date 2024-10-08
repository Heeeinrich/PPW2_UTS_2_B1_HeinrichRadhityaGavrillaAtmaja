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

Route::get('/home', function () {
    return view('products.layouts');
});
Route::get('/create', function () {
    return view('products.create');
});
Route::get('/edit', function () {
    return view('products.edit');
});
Route::get('/', function () {
    return view('products.index');
});
Route::get('/show', function () {
    return view('products.show');
});

Route::get('/', [Produc:class, 'show']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('products.create');
Route::post('/buku', [BukuController::class, 'store'])->name('products.store');
