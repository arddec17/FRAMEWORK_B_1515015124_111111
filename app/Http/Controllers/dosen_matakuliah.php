<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliah extends Controller
{
    public function awal()
    {
    return "HIDUP dosen_matakuliah";
    }
    public function tambah()
	{
	return $this->simpan();
	}
	public function simpan()
	{
	$dosen_matakuliah = new dosen_matakuliah();
	$dosen_matakuliah-> dosen_id ='01254';
	$dosen_matakuliah-> matakuliah_id ='0235';
	$dosen_matakuliah-> save();
	return "data dengan username {$dosen_matakuliah->username} telah disimpan";
	}
}
