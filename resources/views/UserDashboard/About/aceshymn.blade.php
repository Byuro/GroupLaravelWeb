@extends('layouts.app')

@section('title')
    @parent 
    - aceshymn
@endsection

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('storage/new.jpg') }}" style="background-image: url('{{ asset('storage/new.jpg') }}'); height: 500px; background-size: cover; background-position: center; position: relative; overflow: hidden;">
    
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container h-100 d-flex align-items-center justify-content-center text-center" style="position: relative; z-index: 2;">
        <div class="row w-100">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-4 text-white">Aces Hymn</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mb-4">The Aces Hymn</h2>
            <p>As a melody in my heart<br>
            I feel to sing this song in delight<br>
            For the vision I was once dreaming<br>
            Now it’s here with me as I have seen</p>

            <p>Every time I think of the memory<br>
            The way you share your wisdom to me<br>
            It lightens my path to pursue my goals<br>
            With courage, firm, and unfailing hopes</p>

            <p><strong>Refrain:</strong><br>
            Oh my ACES, Alma Mater dear<br>
            In your arms, thanks for the care<br>
            I live my life to light of your spirit<br>
            A compass on my way</p>

            <p>As I live by the words of your counsel<br>
            It brings me to work how to prosper<br>
            You’d equipped me the skills that I’ve needed<br>
            In coping my life, in my struggles indeed</p>

            <p>Oh my ACES, Alma Mater dear<br>
            Through your guidance, my future’s clear<br>
            You taught my life to tap my potentials<br>
            To serve my fellowmen</p>

            <p>Oh my ACES, Alma Mater dear<br>
            With God’s glory, your name I’ll always bear<br>
            I’ll always be proud to be one of your alumni<br>
            I hold you forever!<br>
            I hold you forever!</p>
        </div>
    </div>
</section>



@push('styles')
    <style>
        
        body, h1, h2, h3, h4, h5, h6, p, .post-header {
            font-family: 'Poppins', sans-serif;
        }
        
        .story-section {
            font-size: 20px;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
        }

        .story-section .row {
            display: flex;
            justify-content: space-between;
        }

        .story-section .image1 {
            border-radius: 20px;
            max-width: 50%;
            display: block;
            margin-left: -20px;
            margin-right: 0;
        }

        .story-section .row {
            margin-top: 20px;
        }

        body {
            overflow-x: hidden;
        }
    </style>
@endpush



@endsection