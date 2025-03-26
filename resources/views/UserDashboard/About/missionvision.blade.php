@extends('layouts.app')

@section('title', 'MissionVision')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('storage/mvphoto.jpg') }}" style="background-image: url('{{ asset('storage/mvphoto.jpg') }}'); height: 500px; background-size: cover; background-position: center; position: relative; overflow: hidden;">
    <!-- Black Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container h-100 d-flex align-items-center justify-content-center text-center" style="position: relative; z-index: 2;">
        <div class="row w-100">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-4 text-white">Mission and Vision</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="cont1">
        <!-- Mission Section (Top) -->
        <div class="col-md-12 text-center">
            <h2 class="display-3 mb-4 mission-heading">Mission</h2>
            <p class="lead">In order to realize the vision, ACES shall earnestly pursue and adhere to the principles of applied competence, business incubation, consistency of work, valuing the fruits of hard labor and believing in the intervention of the Divine Providence.</p>
        </div>
    </div>

    <div class="cont1">
        <!-- Vision Section (Bottom) -->
        <div class="col-md-12 text-center">
            <h2 class="display-3 mb-4 vision-heading">Vision</h2>
            <p class="lead">ACES envisions to produce technologically skillful workforce imbued with the values of entrepreneurship in their own fields of choice.</p>
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

        .cont1 {
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
        }

        /* Increase font size for Mission and Vision headings */
        .mission-heading {
            font-size: 80px; /* Increased font size */
            font-weight: bold;
            margin-bottom: 20px; /* Optional: Space below the heading */
            margin-top: 20px;
        }

        .vision-heading {
            font-size: 80px; /* Increased font size */
            font-weight: bold;
            margin-bottom: 20px; /* Optional: Space below the heading */
            margin-top: 100px;
        }

        /* Optional: Adjusting the font size of the description */
        .lead {
            font-size: 22px; /* Adjust description font size */
        }
        
    </style>
@endpush

