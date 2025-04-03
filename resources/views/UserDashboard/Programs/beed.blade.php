@extends('layouts.app')

@section('title', 'Beed')
 

@section('content')

@push('styles')
<style>
    /* Hide horizontal scrollbar */
    body {
        overflow-x: hidden; /* Hides horizontal scrollbar */
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
        margin-top: -80px;
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
    }

    /* Responsive gallery styling */
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

    /* Responsive Design for Small Screens */
    @media (max-width: 768px) {
        .title-section h1 {
            font-size: 2rem; /* Smaller font on mobile */
        }

        .title-section h3 {
            font-size: 1.2rem;
        }

        .why-section h2 {
            font-size: 3rem;
        }

        .why-section p {
            font-size: 1rem;
        }

        .iict-title {
            font-size: 2rem;
        }

        .iict-description {
            font-size: 1.6rem;
        }

        .img-gallery {
            height: 250px;
        }

        .img-gallery-iict {
            height: 200px;
        }

        /* Adjust gallery image rows for smaller screens */
        .iict-gallery-row {
            justify-content: center;
        }

        .col-md-4 {
            flex: 1 0 100%; /* Stack the images vertically */
            padding: 10px;
        }
    }
</style>

@endpush



<div class="container">
    <div class="title-section">
        <h1>BACHELOR OF ELEMENTARY EDUCATION </h1>
        <h3>Aces Tagum College, Inc.</h3>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/beed1.jpg') }}" class="img-fluid img-gallery" alt="Image 1">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/beed2.jpg') }}" class="img-fluid img-gallery" alt="Image 2">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/beed3.jpg') }}" class="img-fluid img-gallery" alt="Image 3">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/beed4.jpg') }}" class="img-fluid img-gallery" alt="Image 4">
        </div>
    </div>

    
    <div class="row why-section">
        <div class="col-md-6">
            <h2>Why BEED?</h2>
            <p style="text-align: justify;">The <b>Bachelor of Elementary Education (BEED)</b> equips students with the essential knowledge and skills to become nurturing and effective educators for young learners. This program provides a comprehensive understanding of teaching strategies, child development, educational psychology, and curriculum design, preparing graduates to excel in elementary education environments. BEED students develop expertise in classroom management, lesson planning, and educational assessment, ensuring they are well-prepared to create a positive and supportive learning environment for young children. The course emphasizes the importance of fostering holistic development, including cognitive, emotional, social, and physical growth. Graduates of BEED are ready to inspire and shape the educational foundation of future generations, contributing to the success and well-being of their students.</p>
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
</div>

<div class="container">
   
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite1.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite2.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite3.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 3">
        </div>
    </div>
    
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite4.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 4">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite5.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 5">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite6.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 6">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite7.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 7">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite8.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 8">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite9.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 9">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite10.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 10">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite11.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 11">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite12.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 12">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite13.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 13">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite14.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 14">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ite15.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 15">
        </div>
    </div>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-12 text-center">
        
        <button class="btn btn-primary" 
                style="border-radius: 50px; padding: 10px 30px; font-family: 'Poppins', sans-serif;" 
                data-bs-toggle="modal" 
                data-bs-target="#iictModal">More about our Institute</button>
    </div>
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
                <p>The Institute of Teacher Education (ITE) at Aces Tagum College, Inc. is a prestigious institution committed to preparing the next generation of educators with the essential knowledge, skills, and values needed to excel in the teaching profession. The institute offers a comprehensive curriculum that covers various aspects of education, including pedagogy, curriculum development, classroom management, educational psychology, and assessment methods. With a focus on cultivating well-rounded educators, ITE ensures that its graduates are ready to make meaningful contributions to the educational system and impact the lives of students.</p>

                <p>ITE provides a dynamic learning environment that integrates both theoretical knowledge and hands-on teaching practice. Students participate in real-world teaching experiences, field observations, and internships that help them apply classroom learning in actual school settings. The institute’s modern facilities and resources create an ideal space for collaborative learning, fostering the development of effective communication, instructional, and leadership skills necessary for success in the classroom.</p>

                <p>In addition to academic rigor, ITE emphasizes the growth of essential soft skills, including critical thinking, adaptability, and leadership. The institute offers various extracurricular opportunities such as teaching workshops, educational seminars, and student-teaching programs, providing students with additional experiences to enhance their professional growth. Through its holistic approach to education, ITE ensures that its graduates are equipped to inspire, lead, and create positive learning environments that meet the needs of students in an ever-changing educational landscape.

                </p>
            </div>
        </div>
    </div>
</div>








@endsection