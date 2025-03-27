@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Carousel with 10 images and indicators -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Carousel indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
    </div>

    <!-- Carousel inner -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('storage/aces1.jpg') }}" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces2.jpg') }}" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces3.jpg') }}" class="d-block w-100" alt="Slide 3">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces4.jpg') }}" class="d-block w-100" alt="Slide 4">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces5.jpg') }}" class="d-block w-100" alt="Slide 5">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces6.jpg') }}" class="d-block w-100" alt="Slide 6">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces7.jpg') }}" class="d-block w-100" alt="Slide 7">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces8.jpg') }}" class="d-block w-100" alt="Slide 8">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces9.jpg') }}" class="d-block w-100" alt="Slide 9">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/aces10.jpg') }}" class="d-block w-100" alt="Slide 10">
        </div>
    </div>

    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Colored Bar with 5 Buttons -->
<div class="container-fluid" style="background-color: rgb(0, 94, 255); padding: 15px 0;">
    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-light mx-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">SHSD</button>
        <button class="btn btn-outline-light mx-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">ITE</button>
        <button class="btn btn-outline-light mx-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">IHMTVE</button>
        <button class="btn btn-outline-light mx-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">IICT</button>
        <button class="btn btn-outline-light mx-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">IBA</button>
    </div>
</div>

<!-- Section for Aces Tagum College -->
<div class="container" style="padding: 50px 0; margin-top: 100px;">
    <div class="row">
        <div class="col-md-7">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: bold; font-size: 32px;">Empowering Future-Ready Learners at Aces Tagum College, Inc.</h2>
            <p style="font-family: 'Poppins', sans-serif; font-size: 18px; color: #333;">
                Aces Tagum College, Inc. is dedicated to offering high-quality, accessible education that equips students with the skills and knowledge necessary for the future. Our vision is to cultivate well-rounded individuals who are not only critical thinkers and creative problem solvers but also responsible digital citizens and professionals. We strive to develop students who will contribute positively to society by fostering intellectual curiosity, innovation, and a strong sense of responsibility. At Aces Tagum College, we empower our students to excel academically, professionally, and socially.
            </p>
        </div>
        <div class="col-md-5">
            <!-- Display the uploaded image -->
            <img src="{{ asset('storage/acesfront.jpg') }}" style="width: 100%; height: auto; border-radius: 10px;">
        </div>
    </div>
</div>


<!-- University News and Events Section -->
<div class="container" style="padding: 50px 0; margin-top: 100px; font-family: 'Poppins', sans-serif;">
    <div class="row align-items-center mb-10">
        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
            <h2 class="display-4 mb-0">University News and Events</h2>
        </div>
        <!--/column -->
        <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
            <a href="https://www.feu.edu.ph/university-news-and-events/" class="btn btn-soft-primary rounded-pill mb-0">View All News</a>
        </div>
        <!--/column -->
    </div>
    <!--/.row -->
    <div class="swiper-container blog grid-view mb-6 swiper-container-1" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" style="cursor: grab; transform: translate3d(-345px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-a108085fb56ecc46d" aria-live="off">

                <div class="swiper-slide swiper-slide-prev" style="width: 315px; margin-right: 30px;" role="group" aria-label="1 / 6">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5 overflow-hidden" style="height:300px;"><a href="https://www.feu.edu.ph/feu-hosts-slovenian-ministers-special-lecture/"> <img src="https://www.feu.edu.ph/wp-content/uploads/2025/03/slo-09.jpg" alt="" class="center-block"><span class="bg"></span></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="https://www.feu.edu.ph/feu-hosts-slovenian-ministers-special-lecture/" class="hover" rel="category">Institute of Arts and Sciences</a>
                            </div>
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="https://www.feu.edu.ph/feu-hosts-slovenian-ministers-special-lecture/">FEU hosts Slovenian minister’s special lecture</a></h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>March 18, 2025</span></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <!-- Add more swiper slides as needed -->

            </div>
        </div>
        <div class="swiper-controls">
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
            </div>
        </div>
    </div>
</div>




@endsection
