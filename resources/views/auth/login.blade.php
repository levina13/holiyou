@extends('layouts.auth')
@section('layout_title', 'Masuk')
@section('layout_content')
    <div class="row justify-content-center form-bg-image" data-background-lg="/assets/img/illustrations/signin.svg">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <div class="text-center text-md-center mb-4 mt-md-0">
                    <h1 class="mb-0 h3">Pariwisata</h1>
                    <h1 class="mb-0 h3">Kediri</h1>
                </div>
                <form action="{{ route('auth') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <!-- Form -->
                        
                        @if (session('alert'))
                            <div class="form-group mb-4">
                                <x-alert type="{{ session('alert.type') }}" :dismissible="'true'">
                                    {{ session('alert.message') }}
                                </x-alert>
                            </div>
                        @endif
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" id="email" autofocus required>
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div> 
                            @error('email')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <input type="password" name="password" placeholder="Kata Sandi" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>  
                            @error('password')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-info">Masuk</button>
                    </div>
                </form>
                <div class="d-grid mt-4">
                    <a href="{{  route('register') }}" class="btn btn-danger">Registrasi</a>
                </div>
                <div class="d-flex justify-content-right align-items-right mt-4">
                    <span class="fw-normal">
                        <a href="{{ route('password.request') }}" class="fw-bold">Lupa Kata Sandi?</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection