@extends('layouts.public')
@section('layout_title', 'Home')
@section('layout_content')
<section class="section-popular" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
					<h2>Wisata Terpopuler</h2>
					<p>Sesuatu yang belum Anda lihat sebelumnya di dunia</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section-popular-content" id="popularContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
                    @foreach ($wisatas as $wisata)
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ urlencode($wisata->gambar) }}')">
							<div class="travel-country">{{ $wisata->nama_kecamatan }}</div>
							<div class="travel-location">{{ $wisata->nama }}</div>
							<div class="travel-button mt-auto">
								<a href="{{ route('public.wisata', $wisata->id_objek_wisata) }}" class="btn btn-travel-details px-4">
									Detail Wisata
								</a>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>

		<section class="section-testimonial-heading" id="testimonialHeading">
			<div class="container">
				<div class="row">
					<div class="col text-center">
					<h2>Ulasan</h2>
					<p>Pengalaman terbaik mereka menggunakan Holiyou</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-testimonial-content" id="testimonialContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testiominal-content">
								<img src="https://i.pravatar.cc/300" alt="User" class="mb-4 rounded-circle" />
								<h3 class="mb-4">Angga Risky</h3>
								<p class="testimonial">
                                    “ Holiyou merupakan website yang luar biasa yang sangat memudahkan perjalanan wisata keluarga kami “
								</p>
							</div>
							<hr />
							<p class="trip-to mt-2">Gunung Bromo</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testiominal-content">
								<img src="https://i.pravatar.cc/300" alt="User" class="mb-4 rounded-circle" />
								<h3 class="mb-4">Shayna</h3>
								<p class="testimonial">
									“ Perjalanan yang tidak akan pernah terlupakan berkat kemudahan dari website Holiyou. Thank's Holiyou “
								</p>
							</div>
							<hr />
							<p class="trip-to mt-2">Air Terjun Coban Rondo</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testiominal-content">
								<img src="https://i.pravatar.cc/300" alt="User" class="mb-4 rounded-circle" />
								<h3 class="mb-4">Shabrina</h3>
								<p class="testimonial">
									“ Awalnya takut untuk menggunakan website ini. Namun setelah mencoba sekali akhirnya tidak bisa lepas dari website ini“
								</p>
							</div>
							<hr />
							<p class="trip-to mt-2">Selecta, Batu</p>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
