<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi</title>
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: #D9E3FF;">
	<div class="container">
		<div class="d-flex justify-content-center align-content-center" style="height: 100vh;">
			<div class="card m-auto" style="width: 25rem; background: #9DDBE9;">
				<div class="card-body">
					<h2 class="card-title text-center mb-4 mt-2">Registrasi</h2>

					@if (session('pesan'))
					{{-- Alert --}}
					<div class="alert alert-success" role="alert">
						{{session('pesan')}}
					</div>
					@endif

					@if ($errors->any())
					{{-- Alert --}}
					<div class="alert alert-danger" role="alert">
						Gagal registrasi
					</div>
					@endif

					{{-- form --}}
					<form action="{{url('registrasi')}}" method="post">
						@csrf
						<div class="col-12 my-2">
							<label for="nik" class="form-label">NIK</label>
							<input type="number" name="nik" class="form-control" id="nik">
							@error('nik')
							<div class="form-text">
								{{$message}}
							</div>
							@enderror
						</div>

						<div class="col-12 my-2">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
							@error('nama')
							<div class="form-text">
								{{$message}}
							</div>
							@enderror
						</div>

						<div class="col-12 my-2">
							<label for="username" class="form-label">Username</label>
							<input type="text" name="username" class="form-control" id="username">
							@error('username')
							<div class="form-text">
								{{$message}}
							</div>
							@enderror
						</div>

						<div class="col-12 my-2">
							<label for="password" class="form-label">Password</label>
							<input type="password" name="password" class="form-control" id="password">
							@error('password')
							<div class="form-text">
								{{$message}}
							</div>
							@enderror
						</div>

						<div class="col-12 my-2">
							<label for="telp" class="form-label">No Telpon</label>
							<input type="number" name="telp" class="form-control" id="telp">
							@error('telp')
							<div class="form-text">
								{{$message}}
							</div>
							@enderror
						</div>

						<div class="col-12 pt-4 text-center">
							<button class="btn btn-light w-50" type="submit">Registrasi</button>
						</div>
						<div class="col-12 text-center mt-2">
							<p class="small mb-0">
								Sudah Punya Akun? <a href="{{url('login')}}">Login Sekarang!!</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>