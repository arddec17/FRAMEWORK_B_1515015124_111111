<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
	public function awal()
	{
	return "Hello dari PenggunaController";
	}
	public function tambah()
	{
	return $this->simpan();
	}
	public function simpan()
	{
	$Pengguna = new Pengguna();
	$Pengguna-> username ='arddec';
	$Pengguna-> password ='1515015124';
	$Pengguna-> save();
	return "data dengan username {$Pengguna->username} telah disimpan";
	}

}
