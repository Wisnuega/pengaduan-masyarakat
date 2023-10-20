@extends('layout.adminLayout')

@section('judul')
Dashboard
@endsection

@section('css')
	<link rel="stylesheet" href="\dataTables\datatables.min.css">
@endsection

@section('content')

<div class="card pt-3">
	<div class="card-body ">
		<table class="table" id="Table_dashboard">
			<thead>
				<tr>
					<th scope="col">{{session('coba')}}</th>
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
						@switch($item->status)
                                @case('proses')
                                    <button type="button" class="btn btn-primary">{{ $item->status }}</button>
                                @break

                                @case('selesai')
                                    <button type="button" class="btn btn-success">{{ $item->status }}</button>
                                @break

                                @default
                                    <button type="button" class="btn btn-warning">Tertunda</button>
                            @endswitch
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
  </div>
@endsection

@section('js')
	<script src="\dataTables\datatables.min.js"></script>
	<script>
		let table = new DataTable('#Table_dashboard', {
    // options
});
	</script>
@endsection