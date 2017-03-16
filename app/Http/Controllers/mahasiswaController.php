<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
    {
    return "HIDUP MAHASISWA";
    }
    public function tambah()
	{
	return $this->simpan();
	}
	public function simpan()
	{
	$mahasiswa = new mahasiswa();
	$mahasiswa-> nama ='Nabila Safitri';
	$mahasiswa-> nim ='1515015125';
	$mahasiswa-> alamat = 'JL Selat Malaka';
	$mahasiswa-> save();
	return "data dengan username {$mahasiswa->username} telah disimpan";
	}
}