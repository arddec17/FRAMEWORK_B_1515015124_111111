<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*------------------------------------------------------------------------------------------------------------------------*/
Route::get('ruangan/tambah/simpan','ruanganController@simpan');

Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('ruangan','ruanganController@awal');

/*------------------------------------------------------------------------------------------------------------------------*/
Route::get('jadwal_matakuliah/tambah/simpan','jadwal_matakuliahController@simpan');

Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');

Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('dosen_matakuliah/tambah/simpan','dosen_matakuliah@simpan');

Route::get('dosen_matakuliah/tambah','dosen_matakuliah@tambah');

Route::get('dosen_matakuliah','dosen_matakuliah@awal');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('matakuliah/tambah/simpan','matakuliahController@simpan');

Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('matakuliah','matakuliahController@awal');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('mahasiswa/tambah/simpan','mahasiswaController@simpan');

Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('dosen/tambah/simpan','dosenController@simpan');

Route::get('dosen/tambah','dosenController@tambah');

Route::get('dosen','dosenController@awal');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('pengguna','PenggunaController@awal');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hello-World', function () {
    return 'Hello-World';
});

Route::get('pengguna/{pengguna}', function ($pengguna)
 {
    return "Hello-World dari pengguna $pengguna";
});

Route::get('berita/{berita}', function ($berita = "laravel5") {
    return "berita $berita belum di baca";
});