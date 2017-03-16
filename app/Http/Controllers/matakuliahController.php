<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal()
    {
    return "pilih matakuliah";
    }
    public function tambah()
	{
	return $this->simpan();
	}
	public function simpan()
	{
	$matakuliah = new matakuliah();
	$matakuliah-> title ='12po';
	$matakuliah-> keterangan ='habis';
	$matakuliah-> save();
	return "data dengan username {$matakuliah->username} telah disimpan";
	}
}
