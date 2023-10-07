@extends('layout.adminLayout')

@section('content')
<div class="row justify-content-between">
    <div class="col-4">
    	<div class="card" >
			<div class="card-body ">
				<h3 class="card-title text-center my-1">Laporan Pengaduan</h3>
	
				{{-- form pengaduan masyarakat --}}
				<form action="{{url('petugas/edit')}}" method="POST">
					@csrf
					<div class="mb-3 mx-3">
						<label for="nik" class="col-sm-3 col-form-label">NIK</label>
						<input type="number" class="form-control" id="nik" name="nik">
					</div>
	
					<div class="mb-3 mx-3">
						<label for="foto" class="col-sm-3 col-form-label">Foto</label>
						<input class="form-control " type="file" id="foto" name="foto" multiple>
					</div>
	
					<div class="mb-3 mx-3">
						<label for="isi_laporan" class="col-sm-5 col-form-label">Isi Laporan</label>
						<textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3"></textarea>
					</div>
	
					<div class="mb-0 mx-3 ">
						<div class="text-end">
							<a class="btn btn-primary mb-2">Simpan</a>
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
				  <td>{{$item->nik}}</td>
				  <td>{{$item->isi_laporan}}</td>

				  <td>
					<a href="{{url('edit')}}" type="submit" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
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