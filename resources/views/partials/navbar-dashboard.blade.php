<!-- Extends -->
@extends('layouts.header')

<!-- Section -->
@section('nav-item')
    <!-- Nav-item -->
    <div class="nav-item d-flex justify-content-center align-items-center py-1 pe-2 border-end">
        <!-- Nav-link -->
        <a href="#" class="nav-link py-0">
            <iconify-icon
                inline
                icon="ion:mail-outline"
                style="color: #6c757d"
                width="16"
            ></iconify-icon>
            <p class="d-inline ms-1">Pesan Bantuan</p>
        </a>
    </div>
    <!-- Nav-item -->
    <div class="nav-item d-flex justify-content-center align-items-center py-1 ms-2 dropdown rounded-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown-menu">
        <!-- Nav-link -->
        <a href="#" class="nav-link pt-0 pb-0">
            <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="rounded-circle" width="28">
            <p class="d-inline ms-1">Aji</p>
        </a>
        <!-- Ul -->
        <ul class="dropdown-menu border-0 shadow-sm px-4 py-3" aria-labelledby="dropdown-menu">
            <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="28" />
                <p class="fw-bold">Aji</p>
            </div>
            <!-- Li -->
            <li>
                <a href="#" class="dropdown-item px-2 d-flex justify-content-start align-items-center gap-1 rounded-2">
                    <iconify-icon inline icon="ph:gear-six-thin" style="color: #6c757d" width="16"></iconify-icon>
                    <p>Pengaturan Akun</p>
                </a>
            </li>
            <!-- Li -->
            <li>
                <a href="#" class="dropdown-item px-2 d-flex justify-content-start align-items-center gap-1 rounded-2">
                    <iconify-icon inline icon="tabler:logout" style="color: #6c757d" width="16"></iconify-icon>
                    <p>Keluar</p>
                </a>
            </li>
        </ul>
    </div>
@endsection
