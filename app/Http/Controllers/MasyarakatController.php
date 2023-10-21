<?php

namespace App\Http\Controllers;

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
			'tgl_pengaduan' => date("Y/m/d"),
			'nik' => $request->nik,
			'isi_laporan' => $request->isi_laporan,
			'foto' => $request->foto,
			'status' => '0'
		]); 
		return back()->with('pesan','Pengaduan berhasil di sampaikan');
	}
	public function lapor(Request $request){
		$data = new Pengaduan();
		$status = $request->input('pilih')?$request->input('pilih'):'0';
		return view('masyarakat.laporan',['data'=>$data->where('status',$status)->get()]);
	}

}