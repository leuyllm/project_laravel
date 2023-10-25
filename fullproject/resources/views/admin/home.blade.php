@extends('dashboard')
@section('content')

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('admin.navbar')
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           @include('admin.sale')
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            @include('admin.salechart')
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            @include('admin.recentsale')
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            @include('admin.widget')
            <!-- Widgets End -->

        </div>
        @endsection
        <!-- Content End -->

  