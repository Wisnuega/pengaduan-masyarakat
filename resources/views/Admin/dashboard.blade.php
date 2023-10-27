@extends('layout.adminLayout')

@section('judul')
Dashboard
@endsection

@section('css')
	<link rel="stylesheet" href="\dataTables\datatables.min.css">
@endsection

@section('content')

<div class="row">
	<div class="col-4">
		<div class="card bg-warning text-white" style="width: 18rem;">
			<div class="card-body">
				<div class="row">
					<div class="col-auto text-end">
						<i class="bi bi-chat-square-text" @style(['font-size:72px'])></i>
					</div>
					<div class="col-auto justify-content-center align-content-center flex-column d-flex">
						<h4 class="h1">{{$status['masuk']}}</h4>
						<h5 class="h5">Status Masuk</h5>
					</div>
				</div>
			</div>
		  </div>
	</div>
	<div class="col-4">
		<div class="card bg-primary text-white" style="width: 18rem;">
			<div class="card-body">
				<div class="row">
					<div class="col-auto text-end">
						<i class="bi bi-person-lines-fill" @style(['font-size:72px'])></i>
					</div>
					<div class="col-auto justify-content-center align-content-center flex-column d-flex">
						<h4 class="h1">{{$status['proses']}}</h4>
						<h5 class="h5 ">Status Proses</h5>
					</div>
				</div>
			</div>
		  </div>
	</div>
	<div class="col-4">
		<div class="card bg-success text-white" style="width: 18rem;">
			<div class="card-body">
				<div class="row">
					<div class="col-auto text-end">
						<i class="bi bi-check-square-fill" @style(['font-size:72px'])></i>
					</div>
					<div class="col-auto justify-content-center align-content-center flex-column d-flex">
						<h4 class="h1">{{$status['selesai']}}</h4>
						<h5 class="h5 text-white">Status Selesai</h5>
					</div>
				</div>
			</div>
		  </div>
	</div>
</div>

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
				@foreach ($data->all() as $item)
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