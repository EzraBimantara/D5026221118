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
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});
Route::get('/blog2', function () {
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
Route::get('show', 'App\Http\Controllers\DosenController@showBlog' );
	


Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//rout CRUD Latihan Pra EAS
Route::get('/indexnilai','App\Http\Controllers\NilaiKuliahController@index');
Route::post('/nilaikuliah/masukkan','App\Http\Controllers\NilaiKuliahController@masukkan');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambahnilai');

//rout CRUD Tugas Pra EAS
Route::get('/modem', 'App\Http\Controllers\ModemController@index');

Route::get('/modem/tambah','App\Http\Controllers\ModemController@tambah');

Route::post('/modem/store', 'App\Http\Controllers\ModemController@store');

Route::get('/modem/edit/{id}','App\Http\Controllers\ModemController@edit');

Route::post('/modem/update','App\Http\Controllers\ModemController@update');

Route::get('/modem/hapus/{id}','App\Http\Controllers\ModemController@hapus');

Route::get('/modem/cari','App\Http\Controllers\ModemController@cari');

Route::get('/modem/view/{id}','App\Http\Controllers\ModemController@view');

//Route EAS
Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::post('/kategori/pilih','App\Http\Controllers\KategoriController@pilih');
//Terpisah
Route::get('/pegawai/{name}', 'App\Http\Controllers\DosenController@shownama');


