<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function awal()
    {
    return "Selamat Datang Dosen FKTI";
    }
    public function tambah()
	{
	return $this->simpan();
	}
	public function simpan()
	{
	$dosen = new dosen();
	$dosen-> nama ='Ardan Luthfy Arganta';
	$dosen-> nip ='15150151240101';
	$dosen-> alamat = 'jl.tri dharma';
	$dosen-> save();
	return "data dengan username {$dosen->username} telah disimpan";
	}
}
