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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/pag2', function () {
    return view('pag2');
})->name('pag2');

Route::get('/pag3', function () {
    return view('pag3');
})->name('pag3');

Route::get('/pag4', function () {
    return view('pag4');
})->name('pag4');

Route::get('/pag5', function () {
    return view('pag5');
})->name('pag5');

Route::get('/pag6', function () {
    return view('pag6');
})->name('pag6');
