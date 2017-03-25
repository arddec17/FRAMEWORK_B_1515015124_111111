<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari PenggunaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Alex J';
    	$mahasiswa->nim = '1419231287';
    	$mahasiswa->alamat = 'Jl.Nort West 14';
    	$mahasiswa->pengguna_id = '2';
    	$mahasiswa->save();
    	return "Data Dengan Username {$mahasiswa->nama} telah disimpan";
    }
}
