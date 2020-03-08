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
Route::get('/', 'PublicController@show')->name('public');
Route::get('admin', 'HomeController@index')->name('admin');
// Kelas
Route::resource('kelas','KelasController');
Route::get('kelas','KelasController@index')->name('kelas');
Route::get('kelas/tambah','KelasController@show')->name('form.kelas');
Route::post('kelas/add','KelasController@store')->name('add.kelas');
Route::get('kelas/edit/{id}','KelasController@edit')->name('edit.kelas');
Route::post('kelas/update','KelasController@update')->name('update.kelas');
Route::get('kelas/hapus/{id}','KelasController@destroy')->name('destroy.kelas');

// Siswa
Route::resource('siswa','SiswaController');
Route::get('siswa', 'SiswaController@index')->name('siswa');
Route::get('siswa/tambah','SiswaController@show')->name('form.siswa');
Route::post('siswa/add','SiswaController@store')->name('add.siswa');
Route::get('siswa/edit/{id}','SiswaController@edit')->name('edit.siswa');
Route::post('siswa/update','SiswaController@update')->name('update.siswa');
Route::get('siswa/hapus/{id}','SiswaController@destroy')->name('destroy.siswa');
Route::post('siswa/ubah','SiswaController@ubah')->name('ubah.siswa');
// Kegiatan
Route::get('kegiatan', 'KegiatanController@show')->name('kegiatan');
Route::get('kegiatan/ubah/{id}','KegiatanController@ubah')->name('admin.ubahk');
Route::get('kegiatan/tambah','KegiatanController@tambah')->name('tambah.k');
Route::get('kegiatan/hapus/{id}','KegiatanController@destroy')->name('kegiatan.hapus');
Route::post('kegiatan/update','KegiatanController@update')->name('kegiatan.update');
Route::post('kegiatan/store','KegiatanController@store')->name('ini');
// Pengumuman
Route::resource('pengumuman','PengumumanController');
 Route::get('smpn2patrol', 'PengumumanController@tampilisidatabase');
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
// User
Route::resource("User",'UserController');
Route::get("User",'UserController@show')->name('user');
Route::get("User/edit",'UserController@edit')->name('edit.user');
Route::post("User/update",'UserController@update')->name('update.user');
//========================PUBLIC=================================//
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
// Postingan
Route::resource('post','PostController');
Route::get('post-kegiatan/{id}','PostController@kegiatan')->name('post.k');
Route::get('post-pengumuman/{id}','PostController@pengumuman')->name('post.p');
Route::get('siswa-sekolah','PostController@siswa')->name('post.siswa');
Route::get('album-sekolah/{id}','PostController@album')->name('post.album');
Route::post('post-kelas','PostController@kelas')->name('post.ukelas');
// Galety
Route::resource('galery','GaleryController');
Route::get('galery-sekolah','GaleryController@index')->name('public.galery');

Route::get('galery-admin/tambah','GaleryController@add')->name('tambah.galery');
Route::get('galery-admin','GaleryController@show')->name('admin.galery');
Route::get('galery/edit/{id}','GaleryController@edit')->name('edit.galery');
Route::get('galery/hapus/{id}','GaleryController@destroy')->name('destroy.album');
Route::post('galery/add','GaleryController@store')->name('add.galery');
Route::post('galery/update','GaleryController@update')->name('update.album');
Route::get('galery/detail/{id}','GaleryController@detail')->name('detail.album');
Route::post('gelary-admin/add-foto','GaleryController@addFoto')->name('add.foto');
Route::get('galery-admin/tambah-foto/{id}','GaleryController@tambahFoto')->name('tambah.foto');
Route::get('galery-admin/hapus-foto/{id}','GaleryController@hapusFoto')->name('hapus.foto');