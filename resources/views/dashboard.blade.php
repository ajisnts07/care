<!-- Extends -->
@extends('layouts/main')

<!-- Section -->
@section('container')
    <!-- Navbar -->
    @include('partials/navbar-dashboard')
    <main>
    <!-- Home -->
    @include('partials/home')
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