@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-start align-items-center" style="min-height: 80vh; padding-left: 50px; background-image: url('{{ asset('images/cloud-computing-illustration.jpg') }}'); background-size: contain; background-position: right center; background-repeat: no-repeat;">
    <!-- Login Form Minimalis di sebelah kiri -->
    <div style="max-width: 350px;">
        <h2 class="fw-bold mb-4" style="font-size: 26px; color: #333;">Login</h2>

        {{-- Menampilkan pesan sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="POST" action="{{ route('form.submit') }}" onsubmit="alert('Berhasil Login!'); return false;">
            @csrf
            <div class="mb-3">
                <label class="form-label" style="font-size: 18px;">Email</label>
                <input type="email" name="email" class="form-control rounded-pill" style="padding: 10px 20px; font-size: 16px; width: 100%;" required>
            </div>
            <div class="mb-3">
                <label class="form-label" style="font-size: 18px;">Password</label>
                <input type="password" name="password" class="form-control rounded-pill" style="padding: 10px 20px; font-size: 16px; width: 350px;" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 rounded-pill" style="padding: 12px 100px; font-size: 18px;">Submit</button>
        </form>
    </div>
</div>
@endsection
