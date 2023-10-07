<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: #D9E3FF;">
	<div class="container">
		<div class="d-flex justify-content-center align-content-center" style="height: 100vh;">
			<div class="card m-auto" style="width: 25rem; background: #9DDBE9;">
				<div class="card-body">
					<h2 class="card-title text-center mb-4 mt-2">Login</h2>

					<form action="{{url('login')}}" method="post">
						@csrf
						<div class="col-12 my-3">
							<label for="username" class="form-label">Username</label>
							<div class="input-group has-validation">
								<input type="text" name="username" class="form-control" id="username" required>
							</div>
						</div>
						<div class="col-12 my-2">
							<label for="password" class="form-label">Password</label>
							<input type="password" name="password" class="form-control" id="password" required>
						</div>

						<div class="col-12 pt-4 text-center ">
							<button class="btn btn-light w-50" type="submit">Login</button>
						</div>
						<div class="col-12 text-center mt-3">
							<p class="small mb-0">
								Belum Punya Akun? <a href="{{url('registrasi')}}">Register Sekarang!!</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>