<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(){
        return view('masyarakat.login');
    }
    public function ceklogin(Request $request){
        $data = new Masyarakat();
        // cek username dan password ada fi database ato tidak
        if ($data->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()) {
            session(['username'=>$request->input('username')]);
            return redirect('/');
        }
        return back()->with('pesan','Username dan Password tidak terdaftar');

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
        return redirect('login')->with('pesan','Anda Berhasil Registrasi');
    }
    public function logout(Request $request){
        session()->flush();
        return back();
    }
}
        