@extends('layout.adminLayout')

@section('content')
<div class="row justify-content-between">
    <div class="col-4">
    	<div class="card" >
			<div class="card-body ">
				<h3 class="card-title text-center my-1">Laporan Pengaduan</h3>
	
				{{-- form pengaduan masyarakat --}}
				<form action="{{url('petugas/tanggapin/'.$tanggap->id_pengaduan)}}" method="POST">
					@csrf
					<div class="mb-3 mx-3">
						<label for="id_pengaduan" class="col-sm-8 col-form-label">ID Pengaduan</label>
						<input type="number" class="form-control" id="id_pengaduan" name="id_pengaduan" value="{{$tanggap->id_pengaduan}}">
					</div>

					<div class="mb-3 mx-3">
						<label for="nik" class="col-sm-3 col-form-label">NIK</label>
						<input type="number" class="form-control" id="nik" name="nik" value="{{$tanggap->nik}}">
					</div>
	
					<div class="mb-3 mx-3">
						<label for="isi_laporan" class="col-sm-5 col-form-label">Laporan</label>
						<textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3">{{$tanggap->isi_laporan}}</textarea>
					</div>
					<div class="mb-3 mx-3">
						<label for="tanggapan" class="col-sm-5 col-form-label">Tanggapan</label>
						<textarea class="form-control" id="tanggapan" name="tanggapan" rows="3"></textarea>
					</div>
	
					<div class="mb-0 mx-3 ">
						<div class="text-end">
							<button class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
	
			</div>
		</div>
    </div>
    <div class="col-8">
		<table class="table">
			<thead>
			  <tr>
				<th scope="col">ID</th>
				<th scope="col">NIK</th>
				<th scope="col">Isi Laporan</th>
				<th scope="col">aksi</th>
			  </tr>
			</thead>
			<tbody class="table-group-divider">
				@foreach ($data as $item)          
				<tr>
				  <td scope="row">{{$item->id_pengaduan}}</td>
				  <td>{{$item->nik}}</td>
				  <td>{{$item->isi_laporan}}</td>

				  <td>
					<a href="{{url('petugas/tanggapin/'.$item->id_pengaduan)}}" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
				  </td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>
  </div>
<div class="container">

</div>

@endsection