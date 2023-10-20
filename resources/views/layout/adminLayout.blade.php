<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dashboard - NiceAdmin Bootstrap Template</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Vendor CSS Files -->
	<link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="/assets/css/style.css" rel="stylesheet">
	@yield('css')

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #9DDBE9;">

		<div class="d-flex align-items-center justify-content-between">
			<a href="{{url('petugas')}}" class="logo d-flex align-items-center">
				<img src="/assets/img/logo.png" alt="">
				<span class="d-none d-lg-block">NiceAdmin</span>
			</a>
			<i class="bi bi-list toggle-sidebar-btn"></i>
		</div>
		<!-- End Logo -->

		<div class="search-bar">
			<form class="search-form d-flex align-items-center" method="POST" action="#">
				<input type="text" name="query" placeholder="Search" title="Enter search keyword">
				<button type="submit" title="Search"><i class="bi bi-search"></i></button>
			</form>
		</div>
		<!-- End Search Bar -->

		<nav class="header-nav ms-auto">
			<ul class="d-flex align-items-center">

				<li class="nav-item d-block d-lg-none">
					<a class="nav-link nav-icon search-bar-toggle " href="#">
						<i class="bi bi-search"></i>
					</a>
				</li><!-- End Search Icon-->

				<li class="nav-item dropdown pe-3">

					<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
						<img src="/assets/img/default.jpeg" alt="Profile" class="rounded-circle">
						<span class="d-none d-md-block dropdown-toggle ps-2 pe-4"></span>
					</a><!-- End Profile Iamge Icon -->

					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
						<li class="dropdown-header">
							<h6>{{session('dataPetugas')->username}}</h6>
							<span>{{session('dataPetugas')->level}}</span>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>

						<li>
							<hr class="dropdown-divider">
						</li>

						<li>
							<a class="dropdown-item d-flex align-items-center" href="users-profile.html">
								<i class="bi bi-gear"></i>
								<span>Account Settings</span>
							</a>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						
						<li>
							<hr class="dropdown-divider">
						</li>

						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{url('petugas/logout')}}">
								<i class="bi bi-box-arrow-right"></i>
								<span>Sign Out</span>
							</a>
						</li>

					</ul>
					<!-- End Profile Dropdown Items -->
				</li><!-- End Profile Nav -->

			</ul>
		</nav>
		<!-- End Icons Navigation -->

	</header>
	<!-- End Header -->

	<!-- ======= Sidebar ======= -->
	<aside id="sidebar" class="sidebar" style="background-color: #9DDBE9;">

		<ul class="sidebar-nav" id="sidebar-nav">

			<li class="nav-item">
				<a class="nav-link collapsed" href="{{url('petugas')}}">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->

			<li class="nav-item">
				<a class="nav-link collapsed" href="{{url('petugas/tanggapan')}}">
					<i class="bi bi-envelope"></i>
					<span>Tanggapan</span>
				</a>
			</li><!-- End Contact Page Nav -->

			@if (session('dataPetugas')->level == 'admin')	
			<li class="nav-item">
				<a class="nav-link collapsed" href="{{url('petugas/registrasi')}}">
					<i class="bi bi-card-list"></i>
					<span>Registrasi</span>
				</a>
			</li><!-- End Register Page Nav -->
			@endif

			<li class="nav-item">
				<a class="nav-link collapsed" href="{{url('petugas/laporan')}}">
					<i class="bi bi-box-arrow-in-right"></i>
					<span>Laporan</span>
				</a>
			</li><!-- End Login Page Nav -->

			<li class="nav-item">
				<a class="nav-link collapsed" href="{{url('petugas/login')}}">
					<i class="bi bi-box-arrow-in-right"></i>
					<span>Login</span>
				</a>
			</li><!-- End Login Page Nav -->

		</ul>

	</aside>
	<!-- End Sidebar-->

	<main id="main" class="main" style="background: #D9E3FF;">

		<div class="pagetitle">
			<h1>@yield('judul')</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</nav>
		</div>
		<!-- End Page Title -->

		<section class="section dashboard">
			<div class="row">
				@yield('content')
			</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="copyright">
			&copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<!-- Vendor JS Files -->
	<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Template Main JS File -->
	<script src="/assets/js/main.js"></script>
	@yield('js')
</body>

</html>