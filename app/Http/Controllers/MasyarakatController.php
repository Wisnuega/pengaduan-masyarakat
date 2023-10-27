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
		$foto = $request->file('foto');
		$namaFoto = $request->input('nik')."_".date('ymd-His').".".$foto->getClientOriginalExtension();
		$foto->move('fotoMasyarakat',$namaFoto);
		$data->create([
			'tgl_pengaduan' => date("Y/m/d"),
			'nik' => $request->nik,
			'isi_laporan' => $request->isi_laporan,
			'foto' => $namaFoto,
			'status' => '0'
		]); 
		return back()->with('pesan','Pengaduan berhasil di sampaikan');
	}
	public function lapor(Request $request){
		$data = new Pengaduan();
		$status = $request->input('pilih')?$request->input('pilih'):'0';
		return view('masyarakat.laporan',['data'=>$data->where('status',$status)->get()]);
	}
	public function registrasi(){
        return view('masyarakat.register');
    }
    public function simpan(Request $request){
        $data = new Masyarakat();

        //cek data yang akan di kirim ke database
        $validasi = $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);

        //buat data ke database
        $data->create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp
        ]);

		$masyarakat = $data->where('username',$request->input('username'))->where('password',$request->input('password'));
		if ($masyarakat->exists()) {
            session(['username'=>$request->input('username')]);
            return redirect('/');
		}
        return back()->with('pesan','Registrasi gagal');
    }
}