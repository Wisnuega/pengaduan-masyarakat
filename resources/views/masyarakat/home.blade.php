@extends('layout.masyarakatLayout')
@section('content')
    <div class="container text-center d-flex align-items-center justify-content-center" style="height: 65vh">
        <div class="text-center">
            <h3 class="mt-4">Layanan Pengaduan</h3>
            <h3>Masyarakat</h3>
            <p class="my-4">Laporkan Keluhan Anda Kepada Kami</p>
            <a class="btn btn-light" href="{{ url('pengaduan') }}">Lapor Sekarang!!</a>
        </div>
    </div>
@endsection
