<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
	public function index() {
		return view('masyarakat.home');
	}
	public function pengaduan() {
		return view('masyarakat.pengaduan');
	}
	public function komplain(Request $request) {
		$data = new pengaduan();
		$data->create([
			'tgl_pengaduan' => '2023/02/02',
			'nik' => $request->nik,
			'isi_laporan' => $request->isi_laporan,
			'foto' => $request->foto,
			'status' => '0'
		]);
		return back()->with('pesan','Pengaduan berhasil di sampaikan');
	}
	public function lapor(){
		$data = new Pengaduan();
		return view('masyarakat.laporan',['data'=>$data->where('status','0')->get()]);
	}

}