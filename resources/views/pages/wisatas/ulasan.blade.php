@extends('layouts.public')
@section('layout_title', 'Daftar Wisata')
@section('layout_content')
<style>
    h5{
        color: blue;
    }
</style>

		<section class="section-popular main-section" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
					<h2>Destinasi Wisata</h2>
					<p>Tempat yang belum Anda lihat sebelumnya di dunia</p>
					</div>
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
                    <div class="row pt-1 gx-1 gy-1">
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-top" src="https://awsimages.detik.net.id/visual/2021/11/12/ilustrasi-manusia-jenius-dok-freepik_43.jpeg?w=450&q=90" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Gunung Bromo</h5>
                                  <p class="card-text">"Dengan menggunakan website Holiyou ini sangat memudahkan perjalanan wisata kami"</p>
                                </div>
                            </div>
					    </div>

                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-top" src="https://awsimages.detik.net.id/visual/2021/11/12/ilustrasi-manusia-jenius-dok-freepik_43.jpeg?w=450&q=90" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Air Terjun Coban Rondo</h5>
                                  <p class="card-text">"Perjalanan yang sungguh luar biasa berkat website Holiyou"</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-top" src="https://awsimages.detik.net.id/visual/2021/11/12/ilustrasi-manusia-jenius-dok-freepik_43.jpeg?w=450&q=90" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Selecta - BATU</h5>
                                  <p class="card-text">"Thank's Holiyou, website yang benar-benar memudahkan perjalanan wisata kami"</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-top" src="https://awsimages.detik.net.id/visual/2021/11/12/ilustrasi-manusia-jenius-dok-freepik_43.jpeg?w=450&q=90" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Pantai Tiga Warna</h5>
                                  <p class="card-text">"Perjalanan yang indah dengan potongan harga yang didapat karena menggunakan Holiyou"</p>
                                </div>
                            </div>
                        </div>


                    </div>



			</div>
		</section>



@endsection
