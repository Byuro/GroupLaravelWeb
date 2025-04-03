@extends('layouts.app')

@section('title','shs')
 

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
        text-align: justify; /
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
        <h1>SENIOR HIGH SCHOOL </h1>
        <h3>Aces Tagum College, Inc.</h3>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/shs1.jpg') }}" class="img-fluid img-gallery" alt="Image 1">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/shs2.jpg') }}" class="img-fluid img-gallery" alt="Image 2">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/shs3.jpg') }}" class="img-fluid img-gallery" alt="Image 3">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/shs4.jpg') }}" class="img-fluid img-gallery" alt="Image 4">
        </div>
    </div>

    
    <div class="row why-section">
        <div class="col-md-6">
            <h2>Why SHS?</h2>
            <p style="text-align: justify;">The <b>Senior High School (SHS)</b> program at Aces Tagum College offers specialized strands to prepare students for higher education or the workforce. The program includes five strands: ABM (Accountancy, Business, and Management), STEM (Science, Technology, Engineering, and Mathematics), HUMSS (Humanities and Social Sciences), GAS (General Academic Strand), and Tech-Voc (Technical-Vocational). Each strand provides tailored knowledge and skills—ABM focuses on business, STEM on science and technology, HUMSS on critical thinking and communication, GAS offers flexibility in subject selection, and Tech-Voc includes practical courses in Industrial Arts, Home Economics, Computer System Servicing, and Agri-Fishery Arts. This comprehensive program equips students for success in their careers or higher education.</p>
        </div>
        <div class="col-md-6">
            <div class="logo">
                <img src="{{ asset('storage/shslogo copy.png') }}" alt="IHMTVE Logo">
            </div>
        </div>
    </div>
</div>


<div class="row iict-section">
    <div class="col-md-12">
        <h2 class="iict-title">Senior High School Department </h2>
        <p class="iict-description">The <b>Senior High School Department (SHSD)</b> at Aces Tagum College, Inc. fosters a sense of unity and collaboration between Grade 11 and Grade 12 students. With a focus on community-building and peer support, SHS creates an environment where students can work together across different strands, including ABM, STEM, HUMSS, GAS, and Tech-Voc. The department emphasizes teamwork, leadership, and mutual respect, encouraging students to support each other in their academic and personal growth. By promoting a united learning experience, SHS ensures that both Grade 11 and Grade 12 students are prepared for their future educational and career paths, with a strong sense of community and shared goals.

        </p>
    </div>
</div>
</div>

<div class="container">
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd1.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd2.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd3.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 3">
        </div>
    </div>
    
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd4.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 4">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd5.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 5">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd6.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 6">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd7.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 7">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd8.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 8">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd9.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 9">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd10.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 10">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd11.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 11">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd12.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 12">
        </div>
    </div>

   
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd13.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 13">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd14.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 14">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/shsd15.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 15">
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
                <h5 class="modal-title" id="iictModalLabel">Senior High School Department (SHSD)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The Senior High School Department (SHS) at Aces Tagum College, Inc. is dedicated to providing a well-rounded educational experience that equips students with the necessary knowledge and skills for success in both higher education and the workforce. Offering a wide range of strands—ABM, STEM, HUMSS, GAS, and Tech-Voc—the department allows students to specialize in areas aligned with their interests and career goals, preparing them for future challenges in their chosen fields.</p>

                <p>SHS creates a dynamic and engaging learning environment, combining academic rigor with hands-on experiences. Students are encouraged to participate in projects, extracurricular activities, and real-world applications, helping them develop essential skills in critical thinking, leadership, teamwork, and problem-solving. The department offers modern facilities and resources, ensuring students are well-prepared for higher education or immediate entry into their respective industries.</p>

                <p>In addition to academic excellence, SHS fosters a strong sense of community and unity between Grade 11 and Grade 12 students. Through collaborative learning, mentorship programs, and school-wide events, students build lasting relationships that help them grow personally and professionally. The Senior High School Department at Aces Tagum College is committed to shaping future leaders who are ready to make meaningful contributions in their chosen fields and society.

                </p>
            </div>
        </div>
    </div>
</div>








@endsection