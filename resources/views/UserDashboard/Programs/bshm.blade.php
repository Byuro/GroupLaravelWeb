@extends('layouts.app')

@section('title','Bshm')
  

@section('content')
<style>
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
        margin-top: -10px;
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


    body {
        overflow-x: hidden;
    }

</style>

<div class="container">
    <div class="title-section">
        <h1>BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT </h1>
        <h3>Aces Tagum College, Inc.</h3>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bshm1.jpg') }}" class="img-fluid img-gallery" alt="Image 1">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bshm2.jpg') }}" class="img-fluid img-gallery" alt="Image 2">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bshm3.jpg') }}" class="img-fluid img-gallery" alt="Image 3">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bshm4.jpg') }}" class="img-fluid img-gallery" alt="Image 4">
        </div>
    </div>

    
    <div class="row why-section">
        <div class="col-md-6">
            <h2>Why BSHM?</h2>
            <p style="text-align: justify;">The <b>Bachelor of Science in Hospitality Management (BSHM)</b> offers students comprehensive knowledge and practical skills essential for a thriving career in the hospitality industry. This program focuses on both theoretical aspects and hands-on experiences, preparing graduates to effectively manage and lead within the diverse sectors of hospitality, including hotels, restaurants, events, tourism, and resorts. By emphasizing key areas such as customer service, operations management, marketing, and business strategy, BSHM equips students to navigate the fast-paced and dynamic world of hospitality while providing exceptional service and ensuring operational excellence. Graduates of this program are well-prepared to take on leadership roles and make meaningful contributions to the growth and success of the hospitality industry. Additionally, BSHM offers a specialized 3-year track in <b>Hotel and Restaurant Technology (HRT)</b>, which provides students with a focused curriculum that delves deeper into the operational and managerial aspects of hotels and restaurants, preparing them for leadership positions in these sectors.</p>
        </div>
        <div class="col-md-6">
            <div class="logo">
                <img src="{{ asset('storage/IHMTVEE.png') }}" alt="IHMTVE Logo">
            </div>
        </div>
    </div>
</div>


<div class="row iict-section">
    <div class="col-md-12">
        <h2 class="iict-title">Institute of Hospitality Management & Technical-Vocational Education </h2>
        <p class="iict-description">The <b>Institute of Hospitality Management & Technical-Vocational Education (IHMTVE)</b> at Aces Tagum College, Inc. is a dynamic and forward-thinking institution dedicated to shaping the future leaders in hospitality and technical-vocational fields. With a focus on both practical skills and theoretical knowledge, IHMTVE prepares students for successful careers in the ever-expanding hospitality industry and technical sectors. The institute emphasizes a collaborative learning environment, offering students opportunities to develop their leadership, teamwork, and problem-solving abilities. By combining industry-relevant training, real-world experience, and a commitment to excellence, IHMTVE ensures that its graduates are fully equipped to meet the demands of the hospitality industry and technical professions, positioning them for success in a global workforce.

        </p>
    </div>
</div>
</div>

<div class="container">
   
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm1.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm2.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm3.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 3">
        </div>
    </div>
    
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm4.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 4">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm5.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 5">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm6.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 6">
        </div>
    </div>

   
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm7.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 7">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm8.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 8">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm9.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 9">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm10.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 10">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm11.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 11">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm12.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 12">
        </div>
    </div>

  
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm13.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 13">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm14.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 14">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/ihm15.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 15">
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
                <h5 class="modal-title" id="iictModalLabel">Institute of Hospitality Management & Technical-Vocational Education (IHMTVE)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The Institute of Hospitality Management & Technical-Vocational Education (IHMTVE) at Aces Tagum College, Inc. is a premier educational institution committed to providing top-notch education in the fields of hospitality management and technical-vocational studies. The institute offers students the opportunity to explore various aspects of the hospitality industry, including hotel and restaurant management, culinary arts, tourism, and customer service. With a curriculum designed to meet the demands of the rapidly growing hospitality sector, IHMTVE ensures that its graduates are well-prepared to thrive in diverse global environments.</p>

                <p>IHMTVE creates a vibrant and hands-on learning atmosphere, blending theoretical knowledge with practical experience. Students actively engage in internships, fieldwork, and real-world projects, allowing them to apply classroom concepts in professional settings. The institute is equipped with modern facilities, including state-of-the-art kitchens, guest rooms, and industry-standard equipment, which simulate real-world hospitality environments. This immersive learning approach helps students develop essential skills in customer service, management, communication, and problem-solving.</p>

                <p>Beyond academic excellence, IHMTVE also fosters a sense of community and leadership through various extracurricular activities, such as hospitality competitions, industry tours, and leadership development programs. By offering a well-rounded experience, IHMTVE prepares its graduates to take on leadership roles in the hospitality industry, driving innovation and excellence across different sectors such as tourism, culinary arts, and hotel management.

                </p>
            </div>
        </div>
    </div>
</div>






@endsection
