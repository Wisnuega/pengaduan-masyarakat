<?php

namespace App\Http\Controllers;


use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function index()
	{
		$data = new Pengaduan();
		$status = [
			'masuk' => DB::table('pengaduan')->where('status', '0')->count(),
			'proses' => DB::table('pengaduan')->where('status', 'proses')->count(),
			'selesai' => DB::table('pengaduan')->where('status', 'selesai')->count()
		];
		return view('Admin.dashboard', ['data' => $data, 'status' => $status]);
	}
	public function validasi()
	{
		$data = new Pengaduan();
		return view('Admin.validasi', ['data' => $data->where('status', '0')->get()]);
	}
	public function validasiStatus($id)
	{
		$data = new Pengaduan();
		$data->find($id)->update(['status' => 'proses']);
		return back()->with('pesan','Validasi berhasil Emam Emih');
	}
	public function tanggapan()
	{
		$data = new Pengaduan();
		return view('Admin.tanggapan', ['data' => $data->where('status', 'proses')->get(),'tanggap'=>'']);
	}
	public function tanggapin($id)
	{
		$data = new Pengaduan();
		return view('Admin.tanggapan', ['data' => $data->where('status', 'proses')->get(),'tanggap'=>$data->find($id)]);
	}
	public function balas(Request $request)
	{
		$aduan = new Pengaduan();
		$tanggap = new Tanggapan();
		$tanggap->create([
		    'id_pengaduan' => $request->id_pengaduan,
		    'tgl_tanggapan' => date("y/m/d"),
		    'tanggapan' => $request->tanggapan,
		    'id_petugas' => session('dataPetugas')->id_petugas
		  ]);
		$aduan->find($request->id_pengaduan)->update(['status' => 'selesai ']);
		  return redirect('petugas/tanggapan');
	}
	public function registrasi()
	{
		$data = new Petugas();
		return view('Admin.registrasi',['data'=>$data->all()]);
	}
	public function simpan(Request $request)
	{
		$data = new Petugas();
		$data->create($request->all());
		return back();
	}
	public function laporan(Request $request)
	{
		$data = new Pengaduan();
		$status = $request->input('pilih')?$request->input('pilih'):'0';
		return view('Admin.laporan',['data'=>$data->where('status',$status)->get()]);
	}
}