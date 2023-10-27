@extends('layout.masyarakatLayout')

@section('content')
<div class="container">
	<div class="card mt-5 m-auto" style="width: 35rem;">
		<div class="card-body ">
			<h3 class="card-title text-center mb-4 mt-2">Laporan Pengaduan</h3>

			@if (session('pesan'))
			<div class="alert alert-success" role="alert">{{session('pesan')}}</div>
			@endif
			{{-- form pengaduan masyarakat --}}
			<form action="{{url('pengaduan')}}" method="POST" enctype="multipart/form-data">
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
					<label for="isi_laporan" class="col-sm-3 col-form-label">Isi Laporan</label>
					<textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3"></textarea>
				</div>

				<div class="row justify-content-end">
					<div class="col-3">
						<button class="btn btn-primary mb-2">Simpan</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
@endsection