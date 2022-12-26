<!-- Extends -->
@extends('layouts/main')

<!-- Section -->
@section('container')
<!-- Register Start -->
<div class="login d-flex justify-content-center align-items-center">
    <!-- Card -->
    <div class="card border-0">
        <!-- Card Header -->
        <div class="card-header text-center border-0 bg-transparent">
            <div
                class="header d-flex justify-content-center align-items-center px-5 py-2 rounded-4 shadow-sm"
            >
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
            <h1 class="my-3">Daftar</h1>
            <!-- Form -->
            <form action="#" method="post">
                <!-- Name -->
                <div class="mb-2">
                    <label for="name" class="form-label text-secondary">Nama</label>
                    <input
                        type="text"
                        class="form-control border-0 rounded-3"
                        id="name"
                        aria-describedby="name"
                        autocomplete="off"
                        required
                    />
                </div>
                <!-- Email Address -->
                <div class="mb-2">
                    <label for="email" class="form-label text-secondary">Email Address</label>
                    <input
                        type="email"
                        class="form-control border-0 rounded-3"
                        id="email"
                        aria-describedby="email"
                        autocomplete="off"
                        required
                    />
                </div>
                <!-- Password -->
                <div class="mb-2">
                    <label for="password" class="form-label text-secondary">Password</label>
                    <input
                        type="password"
                        class="form-control border-0 rounded-3"
                        id="password"
                        aria-describedby="password"
                        autocomplete="off"
                        required
                    />
                </div>
                <!-- Confirmation Password -->
                <div class="mb-4">
                    <label for="confPassword" class="form-label text-secondary"
                        >Confirmation Password</label
                    >
                    <input
                        type="password"
                        class="form-control border-0 rounded-3"
                        id="confPassword"
                        aria-describedby="confPassword"
                        autocomplete="off"
                        required
                    />
                </div>
                <!-- Button Submit -->
                <button class="btn btn-secondary rounded-0 fw-bold mb-2">
                    Daftar
                </button>
                <!-- Login -->
                <p class="text-end">
                    Sudah punya akun?
                    <a href="/login" class="text-secondary">Masuk</a>
                </p>
            </form>
        </div>
    </div>
</div>
<!-- Register End -->
