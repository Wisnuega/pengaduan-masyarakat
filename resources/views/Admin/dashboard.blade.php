@extends('layout.adminLayout')

@section('judul')
Dashboard
@endsection

@section('content')

<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tanggal Pengaduan</th>
			<th scope="col">NIK</th>
			<th scope="col">Isi Laporan</th>
			<th scope="col">Validasi</th>
		</tr>
	</thead>
	<tbody class="table-group-divider">
		@foreach ($data as $item)
		<tr>
			<td scope="row">{{$item->id_pengaduan}}</td>
			<td>{{$item->tgl_pengaduan}}</td>
			<td>{{$item->nik}}</td>
			<td>{{$item->isi_laporan}}</td>
			<td>
				<a href="{{url('petugas/status/'.$item->id_pengaduan)}}" type="submit" class="btn btn-success"><i class="bi bi-check2-square text-light"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection