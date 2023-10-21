@extends('front_master')
@section('content')

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
        @include('submenu.navbar')
        <!-- Navbar & Hero End -->
</nav>
@include('submenu.banner_page')
</div>

        <!-- Testimonial Start -->
        @include('submenu.team')
        <!-- Testimonial End -->
        

  @endsection