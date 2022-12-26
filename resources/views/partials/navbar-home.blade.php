<!-- Extends -->
@extends('layouts.header')

<!-- Section -->
@section('nav-item')
    <!-- Nav-item -->
    <div class="nav-item">
        <!-- Button Masuk -->
        <a href="/login" class="nav-link">
            <button class="btn btn-primary rounded-0 px-4 fw-bold">Masuk</button>
        </a>
    </div>
    <!-- Nav-item -->
    <div class="nav-item">
        <!-- Button Daftar -->
        <a href="/register" class="nav-link">
            <button class="btn btn-secondary rounded-0 px-4 fw-bold">Daftar</button>
        </a>
    </div>
@endsection
