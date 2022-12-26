<!-- Extends -->
@extends('layouts/main')

<!-- Section -->
@section('container')
    <!-- Navbar -->
    @include('partials/navbar-home')
    <main>
    <!-- Home -->
    @include('partials/home')
    <!-- Box-login -->
    @include('partials/box-login')
    <!-- Topic -->
    @include('partials/topic')
    <!-- Question -->
    @include('partials/question')
    <!-- Complain -->
    @include('partials/complain')
    </main> 
    <!-- Footer -->
    @include('layouts/footer')
@endsection
