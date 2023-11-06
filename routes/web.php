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
    return view('');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});
Route::get('/blog', function () {
	return view('blog');
});
Route::get('/latihan1', function () {
	return view('latihan1');
});
Route::get('/link', function () {
	return view('linktree');
});
Route::get('/validasi', function () {
	return view('validasi');
});
Route::get('perkalian', 'DosenController@index');
