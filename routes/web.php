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

// Route::get('/', function () {
//     return view('auth/login');
// });
//========================ADMIN======================//
Auth::routes();
Route::get('/', 'HomeController@index')->name('admin');
Route::get('admin', 'HomeController@index')->name('admin');

Route::get('siswa', 'SiswaController@index')->name('siswa');
// Kegiatan
Route::get('kegiatan', 'KegiatanController@show')->name('kegiatan');
Route::get('kegiatan/ubah/{id}','KegiatanController@ubah')->name('admin.ubahk');
Route::get('kegiatan/tambah','KegiatanController@tambah')->name('tambah.k');
Route::get('kegiatan/hapus/{id}','KegiatanController@destroy')->name('kegiatan.hapus');
Route::post('kegiatan/update','KegiatanController@update')->name('kegiatan.update');
Route::post('kegiatan/store','KegiatanController@store')->name('ini');
// Pengumuman
Route::resource('pengumuman','PengumumanController');
Route::get('pengumuman', 'PengumumanController@index')->name('pengumuman');
Route::get('pengumuman/ubah/{id}','PengumumanController@ubah')->name('admin.ubahp');
Route::get('pengumuman/hapus/{id}','PengumumanController@destroy')->name('pengumuman.hapus');
Route::post('pengumuman/update','PengumumanController@update')->name('update.adminp');
Route::get('pengumuman/tambah','PengumumanController@show')->name('tambah.pengumuman');
Route::post('pengumuman/store','PengumumanController@store')->name('admin.pstore');
// Identitas
Route::resource('identitas','IdentitasController');
Route::get('identitas', 'IdentitasController@index')->name('identitas');
Route::get('identitas/edit/{id}','IdentitasController@edit')->name('identitas.edit');
Route::post('identitas/update','IdentitasController@update')->name('identitas.update');
//==========================PUBLIC=================================//
Route::resource('home','PublicController');
Route::get('home','PublicController@show')->name('public');
//Pengumuman
Route::resource('pengumuman-sekolah','PPengumumanController');
Route::get('pengumuman-sekolah','PPengumumanController@show')->name('public.pengumuman');
// Kegiataan
Route::resource('kegiatan-sekolah','PKegiatanController');
Route::get('kegiatan-sekolah','PKegiatanController@show')->name('public.kegiatan');
//tentang
Route::resource('tentang','TentangController');
Route::get('tentang','TentangController@show')->name('tentang');
//kontak
Route::resource('kontak','KontakController');
Route::get('kontak','KontakController@show')->name('kontak');