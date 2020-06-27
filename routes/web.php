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
    return view('admin/adminlte');
});

Route::get('/dashboard', 'dashboardadmin@index');

Route::get('/login', 'loginAdmin@index');

Route::get('/t', 'template@index');

Route::get('/p', 'peminjaman@index');

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


