@extends('layout.adminLayout')

@section('judul')
    Validasi
@endsection

@section('content')
<table class="table">
    <thead>
      <tr>
				<th scope="col">ID</th>
				<th scope="col">Tanggal Pengaduan</th>
				<th scope="col">NIK</th>
				<th scope="col">Isi Laporan</th>
				<th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($data as $item)          
      <tr>
        <td scope="row">{{$item->id_pengaduan}}</td>
        <td>{{$item->tgl_pengaduan}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->isi_laporan}}</td>

        <td>
        <div class="row justify-content-center">
          <div class="col-4">
          <a href="{{url('petugas/validasi/'.$item->id_pengaduan)}}" type="submit" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
          </div>
          <div class="col-4">
          <a href="{{url('hapus')}}" class="btn btn-danger"><i class="bi bi-trash text-light"></i></a>
          </div>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection