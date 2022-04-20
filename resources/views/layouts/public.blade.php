<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>@yield('layout_title') | {{ config('app.name') }}</title>

	<link rel="stylesheet" href="/frontend/libraries/bootstrap/css/bootstrap.css" />
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="/frontend/styles/main.css" />
	<link rel="stylesheet" href="/frontend/libraries/fontawesome/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
	<div class="container sticky-top">
		<nav class="row navbar navbar-expand-lg navbar-light bg-white">
			<a href="{{ route('index') }}" class="navbar-brand">
				<img src="{{ asset('assets/img/brand/holiyou.png') }}" alt="Logo" />
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item mx-md-2">
						{{-- <a href="{{ route('public.list_wisata') }}" class="nav-link active">Destinasi Wisata</a> --}}
					</li>
				</ul>

				<!-- Search Form -->
				{{-- <form class="form-inline my-2 my-lg-0 d-block float-none float-lg-right">
					<li class="nav-item dropdown d-inline-block">
						<div class="row">
							<div class="col-8 d-flex pr-0">
								<div class="input-group align-content-center justify-content-center">
									<div class="input-group-prepend">
										<span class="input-group-text input-search-icon" id="basic-addon1"><i class="fas fa-search"></i></span>
									</div>
									<input type="text" class="form-control form-control-sm input-search" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
								</div>
							</div>
							<div class="col-2 d-flex pl-0">
								<a href="#" class="nav-link dropdown-toggle float-left align-content-center justify-content-center" id="navbardrop" data-toggle="dropdown">
									<i class="fas fa-lg fa-filter"></i>
								</a>
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item">Link</a>
									<a href="#" class="dropdown-item">Link</a>
									<a href="#" class="dropdown-item">Link</a>
								</div>
							</div>
						</div>
					</li>
				</form> --}}

				<!-- Mobile Button -->
				<form class="form-inline d-block d-md-none">
					<!-- <a href="#" data-toggle="dropdown" class="btn btn-login my-2 my-sm-0" type="button">
						Hi, User!
					</a> -->
					<li class="nav-item dropdown btn btn-login w-100 my-2 my-sm-0 d-flex">

						<button href="#" class="nav-link dropdown-toggle btn btn-login btn-block text-center align-content-center justify-content-center" id="navbardrop" data-toggle="dropdown">
							Hi, User!
						</button>
						<div class="dropdown-menu w-100">
							<a href="#" class="dropdown-item"><i class="fas fa-user-circle mr-2"></i> Profil Saya</a>
							<a href="#" class="dropdown-item"><i class="fas fa-book mr-2"></i> Agenda Wisata</a>
							<a href="#" class="dropdown-item"><i class="fas fa-bookmark mr-2"></i> Keep</a>
						</div>
					</li>
				</form>

				<!-- Desktop Button -->
				<form class="form-inline my-2 my-lg-0 d-none d-md-block float-right">
					@if (Auth::check())
					<li class="nav-item dropdown btn btn-login btn-navbar-right d-flex">
						<button href="#" class="nav-link dropdown-toggle btn btn-login" id="navbardrop" data-toggle="dropdown">
							Hi, {{ Auth::user()->name }}!
						</button>
						<div class="dropdown-menu">
							@if (Auth::user()->is_admin)
							<a href="{{ route('dashboard') }}" class="dropdown-item"><i class="fas fa-user-cog mr-2"></i> Dashboard</a>
							@endif
							<a href="{{ route('logout') }}" role="button" type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
						</div>
					</li>
					@else

					<li class="nav-item btn btn-login btn-navbar-right d-flex align-content-center">
						<a href="{{ route('login') }}" class="nav-link btn btn-login" id="navbardrop">
							Login/Register
						</a>
					</li>
					@endif
				</form>
			</div>
		</nav>
	</div>

    <!-- Header -->
	<header class="text-center">
		<h1>
			Cari Tujuan Wisata Terbaik
			<br />
			Hanya Beberapa Klik
		</h1>
		<p class="mt-3">
			Lihatlah pemandangan indah
			<br />
			yang belum Anda lihat sebelumnya
		</p>
		{{-- <a href="{{ route('public.list_wisata') }}" class="btn btn-get-started px-4 mt-4"> --}}
			{{-- Destinasi Wisata --}}
		{{-- </a> --}}
	</header>

	<main>
		@yield('layout_content')
	</main>

    {{-- <footer class="section-footer mt-auto mb-4 border-top">
		<div class="container-fluid">
			<div class="row border-top justify-content-center align-items-center pt-4">
				<div class="col-auto text-gray-500 font-weight-light">
					2021 Pariwisata Malang • All rights reserved
				</div>
			</div>
		</div>
	</footer>     --}}

	<footer class="text-center text-lg-start bg-dark text-white">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-2 mt-1 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>

      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <!-- Left -->

    <!-- Right -->
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>HOLIYOU
          </h6>
          <p>
            Website yang bergerak di bidang pariwisata. Yang memiliki fitur untuk memesan tiket secara online dan
           bisa mendapat informasi destinasi wisata di Malang Raya.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fa-regular fa-building"></i>
            Daerah
          </h6>
          <p>
            <a href="#!" class="text-reset">Batu</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Kota Malang</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Malang Kabupaten</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fa-regular fa-link"></i>
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Order</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Layanan</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fa-regular fa-circle-user"></i>
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Malang, ML 1102, INDONESIA</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            holiyou@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 0341 5943</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Holiyou</a>
  </div>
  <!-- Copyright -->
</footer>

    <script src="{{ asset("frontend/libraries/jquery/jquery-3.4.1.min.js") }}"></script>
	<script src="{{ asset("frontend/libraries/bootstrap/js/bootstrap.js") }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0-beta.1/leaflet.js" integrity="sha512-35Se9CS+xsRdx551wuOxxQrJi/ZpmMn6CKYXALlsLCCH4y24H7YUrhFxPBO72Un8E3fXl8miMlZreP6/Vxr5mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @yield('layout_script')
</body>
</html>
