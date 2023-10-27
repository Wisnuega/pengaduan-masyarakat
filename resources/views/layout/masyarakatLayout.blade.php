<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelayanan Masyarakat @yield('title')</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap-icons.css">
    @yield('css')
</head>

<body style="background-color: #D9E3FF;">
    <!-- Navbar -->
    {{-- @yield('navbar') --}}
    <nav class="navbar navbar-expand-lg" style="background-color: #9DDBE9;">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pengaduan') }}">Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('laporan') }}">Laporan</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        @if (session('username'))
                        <a class="btn btn-primary btn-sm" href="{{ url('logout') }}" >Keluar</a>
                        @else
                        <a class="btn btn-primary btn-sm" href="{{ url('login') }}" >Masuk</a>  
                        <a class="btn btn-primary btn-sm" href="{{ url('registrasi') }}" >Daftar</a>  
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- Footer -->
    <div class="container sticky-bottom">
        <footer class="pt-5 my-4">
            <ul class="nav justify-content-center border-bottom pb-2 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">
                &copy; 2023 Company, Inc
            </p>
        </footer>
    </div>
    <!-- End Footer -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>

</html>
