<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function index() {
		$data = new Pengaduan();
		
		return view('Admin.dashboard', ['data' => $data->where('status','0')->get()]);
	}
	public function validasiStatus($id){
		$data = new Pengaduan();
		$data->find($id)->update(['status'=>'proses']);
		return back();
	}
	public function tanggapan() {
		$data = new Pengaduan();
		return view('Admin.tanggapan',['data'=>$data->where('status','proses')->get()]);
	}
	public function registrasi() {
		return view('Admin.registrasi');
	}
	public function laporan() {
		return view('Admin.laporan');
	}
	public function login() {
		return view('Admin.login');
	}

}