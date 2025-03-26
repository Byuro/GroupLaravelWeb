@extends('layouts.app')

@section('title', 'CoreValues')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('storage/acesphoto.jpg') }}" style="background-image: url('{{ asset('storage/acesphoto.jpg') }}'); height: 500px; background-size: cover; background-position: center; position: relative; overflow: hidden;">
    <!-- Black Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container h-100 d-flex align-items-center justify-content-center text-center" style="position: relative; z-index: 2;">
        <div class="row w-100">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-4 text-white">Core Values</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="container py-5">
    <div class="row">
        <!-- Core Value 1: Active Citizenry -->
        <div class="col-md-6 text-center">
            <h3 class="display-4 mb-4">Active Citizenry</h3>
            <p class="lead">We believe in cultivating a sense of responsibility towards society, encouraging active participation in community development, and fostering leadership that contributes to societal progress.</p>
        </div>

        <!-- Core Value 2: Culturally Flexible -->
        <div class="col-md-6 text-center">
            <h3 class="display-4 mb-4">Culturally Flexible</h3>
            <p class="lead">Our commitment to diversity and inclusion allows us to adapt to various cultures and perspectives, promoting mutual respect and understanding among different ethnicities and backgrounds.</p>
        </div>
    </div>

    <div class="row">
        <!-- Core Value 3: Environmental Concern -->
        <div class="col-md-6 text-center">
            <h3 class="display-4 mb-4">Environmental Concern</h3>
            <p class="lead">We prioritize sustainability and the protection of the environment, actively participating in initiatives that reduce environmental impact and promote a greener future for all.</p>
        </div>

        <!-- Core Value 4: Spiritually Sensitive -->
        <div class="col-md-6 text-center">
            <h3 class="display-4 mb-4">Spiritually Sensitive</h3>
            <p class="lead">We respect the diverse spiritual beliefs of all individuals, fostering an environment that encourages ethical practices and spiritual growth for a harmonious society.</p>
        </div>
    </div>
</section>

@endsection

@push('styles')
    <style>
        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px;
            font-size: 20px;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
        }

        .display-4 {
            font-size: 35px; /* Adjusts font size for core values headings */
        }

        .lead {
            font-size: 18px; /* Adjusts font size for descriptions */
            font-weight: 400;
        }
    </style>
@endpush
