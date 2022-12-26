<!-- Extends -->
@extends('layouts/main')

<!-- Section -->
@section('container')
<!-- Help Start -->
<div class="login d-flex justify-content-center align-items-center">
    <!-- Card -->
    <div class="card border-0">
        <!-- Card-header -->
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
        <div class="card-body bg-white shadow-sm rounded-3 pb-3">
            <h3 class="my-3">Hai, apa yang bisa kami bantu?</h3>
            <!-- Issues -->
            <label for="issues" class="form-label text-secondary">Isu Terkait</label>
            <div class="alert alert-danger border-danger mb-3">
                <iconify-icon
                    inline
                    icon="mdi:warning-octagon-outline"
                    width="16"
                ></iconify-icon>
                Tidak bisa masuk
            </div>
            <p class="fw-bold mb-3" style="color: #232323; opacity: 1">Isi formulir di bawah ini</p>
            <!-- Form -->
            <form action="#" method="post">
                <!-- Account Name -->
                <div class="mb-2">
                    <label for="name" class="form-label text-secondary">Nama Akun</label>
                    <input type="text" class="form-control border-0 rounded-3 py-2 text-secondary" id="name" aria-describedby="name" autocomplete="off" required>
                </div>
                <!-- Account Email -->
                <div class="mb-2">
                    <label for="email" class="form-label text-secondary">Email Akun</label>
                    <input type="email" class="form-control border-0 rounded-3 py-2 text-secondary" id="email" aria-describedby="email" autocomplete="off" required>
                </div>
                <!-- Phone Number -->
                <div class="mb-2">
                    <label for="phone" class="form-label text-secondary">Nomor Hp</label>
                    <input type="number" class="form-control border-0 rounded-3 py-2 text-secondary" id="phone" aria-describedby="phone" autocomplete="off" required>
                </div>
                <!-- Problem Detail -->
                <div class="mb-4">
                    <label for="problem" class="form-label text-secondary">Detail Masalah</label>
                    <textarea class="form-control border-0 rounded-3 py-2 text-secondary" name="problem" id="problem" cols="30" rows="3" autocomplete="off" required style="background-color: #f3f4f5;
                    font-size: 14px;
                    opacity: 0.8;"></textarea>
                </div>
                <!-- Button Submit -->
                <button class="btn btn-secondary rounded-0 fw-bold">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Help End -->
