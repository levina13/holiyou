@extends('layouts.public')
@section('layout_title', $wisata->nama)
@section('layout_content')
        <section class="section-details-header details-page-header"></section>
        <section class="section-details-content details-page-content">
            <div class="container">
                <div class="row">
                    <div class="col p-3 p-lg-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Destinasi Wisata
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ $wisata->nama }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <div class="row">
                                <div class="col-12 col-lg-10">
                                    <h1>{{ $wisata->nama }}</h1>
                                    <p class="mb-0">{{ $wisata->nama_kecamatan }}</p>
                                </div>
                                <div class="col-12 col-lg-2 mb-2 mb-lg-0">
                                    <a href="{{ route('public.wisata.lokasi', $wisata->id_objek_wisata) }}" class="btn btn-md btn-block btn-danger">Lokasi</a>
                                </div>
                            </div>
                            <div class="gallery mt-3">
                                <div class="xzoom-container">
                                    <img src="{{ asset($wisata->gambar) }}" class="xzoom" id="xzoom-default" xoriginal="{{ asset($wisata->gambar) }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <h1>Tentang Wisata</h1>
                                </div>
                                <div class="col-2 text-right">
                                    <button class="btn btn-lg p-0"><i class="far fa-bookmark fa-lg"></i></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {!! $wisata->deskripsi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3 mt-lg-0 mb-3">
                        <div class="card card-details card-right card-detail">
                            <h2>Informasi Wisata</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%" class="font-weight-bold">Tipe Wisata</th>
                                    <td width="50%" class="text-right font-weight-bold">
                                        {{ $wisata->nama_kategori }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%" class="font-weight-bold">Harga</th>
                                    <td width="50%" class="text-right font-weight-bold">
                                        Rp. {{ $wisata->harga }} / <i class="fas fa-user"></i>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <form action="" method="post">
                                <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                    Agendakan Sekarang
                                </button>
                            </form>
                        </div>

                        <div class="card card-details card-right card-detail details-page-card-rating mt-3">
                            <h2>Rating dan Ulasan</h2>
                            <table class="trip-informations mb-2">
                                <tr>
                                    <td width="100%" class="text-center">
                                        <div id="rater-step" data-rating="4.5"></div>
                                    </td>
                                </tr>
                            </table>
                            <div class="row page-details">
                                <figure class="fir-image-figure">
                                    <div class="fir-imageover">
                                        <img class="fir-author-image fir-clickcircle" src="https://fir-rollup.firebaseapp.com/de-sm.jpg" alt="David East - Author" />
                                    </div>
                                    <figcaption>
                                        <div class="fig-author-figure-title">
                                            David East
                                        </div>
                                        <div class="fig-author-figure-title">
                                            Pemandangan indah, biaya masuk murah, stand
                                            makanan dan minuman sangat beragam.
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="join-container">
                            <form action="" method="post">
                                <button class="btn btn-block btn-rating mt-3 py-2" type="submit">
                                    Beri Rating dan Ulasan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection