<!-- Extends -->
@extends('layouts/main')

<!-- Section -->
@section('container')
<!-- Login Start -->
<div class="login d-flex justify-content-center align-items-center">
    <!-- Card -->
    <div class="card border-0">
        <!-- Card-header -->
        <div class="card-header text-center border-0 bg-transparent">
            <div class="header d-flex justify-content-center align-items-center px-5 py-2 rounded-4 shadow-sm">
                <img
                src="{{ asset('img/tertiary-logo.png') }}"
                alt="card-header"
                width="40"
                />
                <h3 class="d-inline mx-1 text-white">Belidaging.</h3>
                <div class="badge pt-0 rounded-5">
                    <p class="fw-bold">care</p>
                </div>
            </div>
        </div>
        <!-- Card-body -->
        <div class="card-body bg-white shadow-sm rounded-3 pb-4">
            <h1 class="my-3">Masuk</h1>
            <!-- Form -->
            <form action="#" method="post">
                <!-- Email Address -->
                <div class="mb-2">
                    <label for="email" class="form-label text-secondary">Email Address</label>
                    <input type="email" class="form-control border-0 rounded-3 py-2 text-secondary" id="email" aria-describedby="email" autocomplete="off" required>
                </div>
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label text-secondary">Password</label>
                    <input type="password" class="form-control border-0 rounded-3 py-2 text-secondary" id="password" aria-describedby="password" autocomplete="off" required>
                </div>
                <!-- Button Submit -->
                <button class="btn btn-secondary rounded-0 fw-bold mb-2">
                    Masuk
                </button>
                <!-- Forgot Password -->
                <p class="text-end">Belum punya akun? <a href="/register" class="text-secondary">Daftar</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Login End -->
@endsection
