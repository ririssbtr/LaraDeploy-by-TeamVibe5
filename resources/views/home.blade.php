@extends('layouts.app')

@section('title', 'Laravel di Azure')

@section('content')
<div class="d-flex" style="min-height: 100vh;">
    <!-- Gambar UB Brone di sebelah kiri -->
    <img src="{{ asset('images/ub-brone-teamvibe5.png') }}" class="img-fluid" alt="TeamVibe5" style="max-height: 90vh; object-fit: cover; width: 40%;">

    <!-- Section teks di sebelah kanan -->
    <div class="d-flex flex-column justify-content-center p-5" style="width: 50%; margin-top: -50px;">
        <h1 class="fw-bold" style="color: #333; font-size: 3.5rem;">Hello, from TeamVibe5!</h1>
        <p style="color: #555; font-size: 1.2rem;">Selamat datang di aplikasi Laravel kami di Azure! Platform ini kami bangun sebagai bagian dari tugas pengelolaan cloud computing.</p>
        <a href="{{ route('form') }}" class="btn btn-outline-dark rounded-pill mt-3">Check It Out!</a>
    </div>
</div>
@endsection
