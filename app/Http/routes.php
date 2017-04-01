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
route::get('mahasiswa_pengguna','mahasiswaController@mahasiswa');



/*------------------------------------------------------------------------------------------------------------------------*/
Route::get('ruangan','ruangancontroller@awal');

Route::get('ruangan/tambah','ruangancontroller@tambah');

Route::post('ruangan/simpan','RuanganController@simpan');

Route::get('ruangan/edit/{ruangan}','RuanganController@edit');

Route::post('ruangan/edit/{ruangan}','RuanganController@update');

Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

/*------------------------------------------------------------------------------------------------------------------------*/
Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');

Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');

Route::get('jadwal_matakuliah/hapus','jadwal_matakuliahcontroller@hapus');

Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahcontroller@lihat');

Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahcontroller@simpan');

Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@edit');

Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@update');

Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahcontroller@hapus');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');

Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');

Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','dosen_matakuliahController@lihat');

Route::post('dosen_matakuliah/simpan','dosen_matakuliahController@simpan');

Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@edit');

Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@update');

Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahController@hapus');
/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('matakuliah','matakuliahcontroller@awal');

Route::get('matakuliah/tambah','matakuliahcontroller@tambah');

Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');

Route::post('matakuliah/simpan','MatakuliahController@simpan');

Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');

Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');

Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('mahasiswa','mahasiswacontroller@awal');

Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('mahasiswa/hapus','Mahasiswacontroller@hapus');

Route::get('mahasiswa/{mahasiswa}','mahasiswacontroller@lihat');

Route::post('mahasiswa/simpan','mahasiswaController@simpan');

Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');

Route::post('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');

Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');
Route::get('dosen/lihat/{dosen}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}','dosenController@edit');
Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');

/*------------------------------------------------------------------------------------------------------------------------*/

Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('pengguna/{pengguna}','PenggunaController@lihat');

Route::post('pengguna/simpan','PenggunaController@simpan');

Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');

Route::post('pengguna/edit/{pengguna}','PenggunaController@update');

Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

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
