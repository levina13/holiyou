@extends('layouts.public')
@section('layout_title', 'Daftar Wisata')
@section('layout_content')
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

		<section class="section-popular-content" id="popularContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
                    @foreach ($wisatas as $wisata)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ urlencode($wisata->gambar) }}');">
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
                <div aria-label="Page navigation example" class="row">
                    {{ $wisatas->links() }}
                </div>
			</div>
		</section>
@endsection