<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosenController extends Controller
{
    public function awal(){
        return "Hello dari PenggunaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen->nama = 'Lesty';
    	$dosen->nip = '091297392197';
    	$dosen->alamat = 'Jl.Westen 07';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data Dengan Username {$dosen->nama} telah disimpan";
    }
}