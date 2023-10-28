<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function ceklogin(Request $request)
    {
        $masyarakat = new Masyarakat();
        $petugas = new Petugas();

        $petugas = $petugas->where('username', $request->input('username'))->where('password', $request->input('password'));
        $masyarakat = $masyarakat->where('username', $request->input('username'))->where('password', $request->input('password'));

        if ($masyarakat->exists()) {
            session(['username' => $request->input('username')]);
            return redirect('/');
        } elseif ($petugas->exists()) {
            $data = $petugas->first();
            session(['dataPetugas' => $data]);
            return redirect('petugas');
        }

        return back()->with('pesan', 'Username dan Password tidak terdaftar');
    }

    public function logout(Request $request)
    {
        session()->flush();
        return back();
    }
}