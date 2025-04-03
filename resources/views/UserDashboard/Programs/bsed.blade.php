@extends('layouts.app')

@section('title','Bsed')
    

@section('content')

<style>
    
    body, html {
        overflow-x: hidden;
    }

    
    .img-gallery {
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        width: 100%; 
    }

    .img-gallery:hover {
        transform: scale(1.05);
    }

    .title-section {
        margin-top: 100px;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        margin-bottom: 30px;
    }

    .title-section h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        font-weight: bold;
    }

    .title-section h3 {
        margin-top: 30px;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        color: #6c757d;
    }

    .why-section {
        margin-top: 200px;
        font-family: 'Poppins', sans-serif;
    }

    .why-section h2 {
        margin-top: -40px;
        font-size: 4rem;
        font-weight: bold;
    }

    .why-section p {
        margin-top: 40px;
        font-size: 1.2rem;
        color: #6c757d;
    }

    .logo img {
        max-width: 750px;
        width: 100%;
        height: auto;
        margin-top: -100px;
    }

    
    .iict-section {
        margin-top: 130px;
        font-family: 'Poppins', sans-serif;
    }

    .iict-section h2 {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
    }

    .iict-section p {
        font-size: 1.2rem;
        color: #6c757d;
        text-align: justify;
        margin-top: 40px;
        margin-bottom: 60px;
    }

    .iict-title {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .iict-description {
        font-size: 1.9rem;
        color: #6c757d;
        text-align: justify;
        margin-top: 20px;
        line-height: 1.6;
        padding-left: 200px;
    padding-right: 200px;
    }

    
    .img-gallery-iict {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .iict-gallery-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

   

    .img-gallery-iict:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    
    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 50px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: auto;
        margin-bottom: 30px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
        cursor: pointer;
    }

    .btn-primary:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5);
    }

    
    .modal-body {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.8;
    }

    .modal-title {
        font-family: 'Poppins', sans-serif;
        font-size: 1.3rem;
        font-weight: 600;
        color: #007bff;
    }

    .modal-body p {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        color: #6c757d;
        margin-bottom: 20px;
    }

    .modal-body img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

 
    
</style>

<div class="container">
    <div class="title-section">
        <h1>BACHELOR OF SCIENCE IN SECONDARY EDUCATION </h1>
        <h3>Aces Tagum College, Inc.</h3>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsed1.jpg') }}" class="img-fluid img-gallery" alt="Image 1">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsed2.jpg') }}" class="img-fluid img-gallery" alt="Image 2">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsed3.jpg') }}" class="img-fluid img-gallery" alt="Image 3">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsed4.jpg') }}" class="img-fluid img-gallery" alt="Image 4">
        </div>
    </div>

    <div class="row why-section">
        <div class="col-md-6">
            <h2>Why BSED?</h2>
            <p style="text-align: justify;">The <b>Bachelor of Science in Secondary Education (BSED)</b> equips students with the essential knowledge and skills to become effective and compassionate educators. This program provides a deep understanding of teaching methodologies, educational psychology, and curriculum design, preparing graduates to thrive in secondary education settings. BSED students gain expertise in classroom management, instructional strategies, and educational assessment, ensuring they are well-prepared to foster student growth and development. The course offers three specialized majors: English, Filipino, and Mathematics, allowing students to choose a focus area that aligns with their passion and career aspirations. Graduates of BSED are ready to inspire the next generation and contribute to the advancement of education in their chosen subject area.</p>
        </div>
        <div class="col-md-6">
            <div class="logo">
                <img src="{{ asset('storage/ITEE.png') }}" alt="IBA Logo">
            </div>
        </div>
    </div>
</div>


<div class="row iict-section">
    <div class="col-md-12">
        <h2 class="iict-title">Institute of Teacher Education </h2>
        <p class="iict-description">The <b>Institute of Teacher Education (ITE)</b> at Aces Tagum College, Inc. is dedicated to shaping the future of education by preparing students to become highly skilled and passionate educators. With a comprehensive curriculum that blends theoretical foundations and practical teaching methods, ITE provides students with the essential tools to thrive in the classroom. The institute emphasizes key areas such as pedagogy, classroom management, educational psychology, and curriculum development, ensuring that graduates are equipped to handle the evolving needs of the education sector. ITE offers a dynamic learning environment that encourages collaboration, creativity, and innovation. Through hands-on teaching experiences and strong industry connections, ITE ensures its students are ready to inspire and lead in the classrooms of tomorrow, making a meaningful impact on the educational landscape.</p>
    </div>
</div>


<div class="container">
    <div class="row iict-gallery-row">
        
        @for ($i = 1; $i <= 15; $i++)
            <div class="col-md-4 mb-4">
                <img src="{{ asset("storage/ite{$i}.jpg") }}" class="img-fluid img-gallery-iict" alt="Image {{ $i }}">
            </div>
        @endfor
    </div>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-12 text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#iictModal">More about our Institute</button>
    </div>
</div>


<div class="modal fade" id="iictModal" tabindex="-1" aria-labelledby="iictModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iictModalLabel">Institute of Teacher Education (ITE)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The Institute of Teacher Education (ITE) at Aces Tagum College, Inc. is a prestigious institution committed to preparing the next generation of educators with the essential knowledge, skills, and values needed to excel in the teaching profession...</p>
            </div>
        </div>
    </div>
</div>

@endsection