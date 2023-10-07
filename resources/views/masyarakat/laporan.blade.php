@extends('layout.masyarakatLayout')

@section('content')
    <div class="container pt-5">
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Isi Laporan</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              @foreach ($data as $item)                  
              <tr>
                <td>{{$item->nik}}</td>
                <td>{{$item->tgl_pengaduan}}</td>
                <td>{{$item->isi_laporan}}</td>
                <td>{{$item->foto}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection