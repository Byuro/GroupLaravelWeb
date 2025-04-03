@extends('layouts.app')

@section('title', 'Bsba')
   

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

    .p  {
        text-align: justify;
    }   


</style>

<div class="container">
    <div class="title-section">
        <h1>BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION </h1>
        <h3>Aces Tagum College, Inc.</h3>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsba1.jpg') }}" class="img-fluid img-gallery" alt="Image 1">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsba2.jpg') }}" class="img-fluid img-gallery" alt="Image 2">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsba3.jpg') }}" class="img-fluid img-gallery" alt="Image 3">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsba4.jpg') }}" class="img-fluid img-gallery" alt="Image 4">
        </div>
    </div>

    
    <div class="row why-section">
        <div class="col-md-6">
            <h2>Why BSBA?</h2>
            <p>The <b>Bachelor of Science in Business Administration (BSBA)</b> offers students a comprehensive understanding of business fundamentals, preparing them for successful careers across diverse industries. This program covers key areas such as management, marketing, finance, economics, and human resources, ensuring graduates develop both theoretical knowledge and practical skills. BSBA students gain expertise in business operations, strategic decision-making, and leadership, equipping them to thrive in a dynamic global marketplace. The course also provides two specialized majors: <b>Human Resource Management (HR)</b> and <b> Financial Management (FM) </b>, allowing students to focus on areas that align with their career goals. Graduates are prepared to take on leadership roles and drive success within organizations.</p>
        </div>
        <div class="col-md-6">
            <div class="logo">
                <img src="{{ asset('storage/IBAA.png') }}" alt="IBA Logo">
            </div>
        </div>
    </div>
</div>


<div class="row iict-section">
    <div class="col-md-12">
        <h2 class="iict-title">Institute of Business Administration </h2>
        <p class="iict-description">The <b>Institute of Business Administration (IBA)</b> at Aces Tagum College, Inc. is a forward-looking institution committed to developing the next generation of business leaders and professionals. With a balanced approach that combines theoretical knowledge and practical experience, IBA prepares students for successful careers in the dynamic world of business. The institute fosters a collaborative learning environment, focusing on key areas such as management, finance, marketing, and human resources. By offering industry-relevant training and real-world experiences, IBA equips students with the skills needed to excel in various business sectors. Through its commitment to excellence and innovation, IBA ensures that its graduates are well-prepared to take on leadership roles and contribute to the success of businesses in a global economy.</p>
    </div>
</div>
</div>

<div class="container">
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba1.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba2.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba3.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 3">
        </div>
    </div>
    
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba4.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 4">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba5.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 5">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba6.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 6">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba7.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 7">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba8.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 8">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba9.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 9">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba10.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 10">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba11.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 11">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba12.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 12">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba13.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 13">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba14.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 14">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iba15.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 15">
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
                <h5 class="modal-title" id="iictModalLabel">Institute of Business Administration (IBA)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The Institute of Business Administration (IBA) at Aces Tagum College, Inc. is a distinguished educational institution focused on equipping students with the essential knowledge and skills needed to succeed in the dynamic world of business. The institute offers a comprehensive curriculum that covers various facets of business, including management, marketing, finance, economics, and human resources. Designed to meet the needs of the ever-evolving business landscape, IBA ensures that its graduates are well-prepared to take on leadership roles and make significant contributions across different industries.</p>

                <p>IBA fosters a dynamic learning environment that integrates both theoretical instruction and practical application. Students engage in real-world projects, case studies, and internships that provide them with hands-on experience and a deeper understanding of business operations. The institute's modern facilities and resources create an optimal learning space, allowing students to gain the skills necessary for effective decision-making, strategic planning, and team leadership.</p>

                <p>In addition to academic rigor, IBA emphasizes the development of critical soft skills, including communication, problem-solving, and leadership. The institute offers various extracurricular opportunities, such as business competitions, industry networking events, and leadership training programs, to further enhance students' personal and professional growth. Through a well-rounded education, IBA prepares its graduates to lead with integrity and drive innovation in the global business environment.

                </p>
            </div>
        </div>
    </div>
</div>



@endsection