<?php

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
    return redirect(route('login'));
});



Route::get('/dashboard', 'dashboardadmin@index');

Route::get('login', 'loginAdmin@index');
Route::post('/login/checklogin', 'loginAdmin@checklogin');
Route::get('/dashboard/logout', 'loginAdmin@logout');

Route::get('/p', 'peminjaman@index');
Route::get('/p/edit/{id}','peminjaman@edit');
Route::post('/p/update','peminjaman@update');

Route::get('/ruang', 'ruang@index');
Route::get('/ruang/edit/{id}','ruang@edit');
Route::post('/ruang/update','ruang@update');
Route::get('/ruang/hapus/{id}','ruang@hapus');
Route::get('/ruang/tambah','ruang@tambah');
Route::post('/ruang/store','ruang@store');

Route::get('/barang', 'barang@index');
Route::get('/barang/edit/{id}','barang@edit');
Route::post('/barang/update','barang@update');
Route::get('/barang/hapus/{id}','barang@hapus');
Route::get('/barang/tambah','barang@tambah');
Route::post('/barang/store','barang@store');

Route::get('/user', 'daftarUser@index');
Route::get('/user/edit/{id}','daftarUser@edit');
Route::post('/user/update','daftarUser@update');
Route::get('/user/hapus/{id}','daftarUser@hapus');
Route::get('/user/tambah','daftarUser@tambah');
Route::post('/user/store','daftarUser@store');

// USER

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
})->name('home');

Route::get('signin', function () {
	return view('signin');
})->name('signin');

Route::get('register', function () {
	return view('register');
})->name('register');

Route::get('homeinfo', function () {
	return view('homeinfo');
})->name('homeinfo');

Route::get('selengkapnya', function () {
	return view('selengkapnya');
})->name('selengkapnya');

Route::get('profil', function () {
	return view('profil');
})->name('profil');

Route::get('editprofil', function () {
	return view('editprofil');
})->name('editprofil');

Route::get('fasilitas', function () {
	return view('fasilitas');
})->name('fasilitas');

Route::get('peminjaman', function () {
	return view('peminjaman');
})->name('peminjaman');

Route::get('agenda', function () {
	return view('agenda');
})->name('agenda');


