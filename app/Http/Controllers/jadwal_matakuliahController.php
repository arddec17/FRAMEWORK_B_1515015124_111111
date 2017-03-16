<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    return "HIDUP jadwal_matakuliah";
    }
    public function tambah()
	{
	return $this->simpan();
	}
	public function simpan()
	{
	$jadwal_matakuliah = new jadwal_matakuliah();
	$jadwal_matakuliah-> mahasiswa_id ='01245';
	$jadwal_matakuliah-> ruangan_id ='012';
	$jadwal_matakuliah-> dosen_matakuliah_id = '10';
	$jadwal_matakuliah-> save();
	return "data dengan username {$jadwal_matakuliah->username} telah disimpan";
	}
}
