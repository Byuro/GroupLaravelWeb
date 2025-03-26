@extends('layouts.app')

@section('title', 'StoryATCI')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('storage/storyphoto.jpg') }}" style="background-image: url('{{ asset('storage/storyphoto.jpg') }}'); height: 500px; background-size: cover; background-position: center; position: relative; overflow: hidden;">
    <!-- Black Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container h-100 d-flex align-items-center justify-content-center text-center" style="position: relative; z-index: 2;">
        <div class="row w-100">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-4 text-white">The Story of ATCI</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row">
        <!-- Content on the Left Side -->
        <div class="col-md-6">
            <p>Technical education in the early 90’s was not an attractive course among the youth. Vocational courses were a taboo to reckon with. Students shy away from vocational courses in pursuit of the white collar jobs. However, it came to pass that there were surplus of academicians who could not be employed even just to earn their daily bread. Every year, thousands of graduates who join the legion of the misfits and the debacle is overwhelming while the demand for skilled technicians is enormous. At best, it is realized that vocational experts are getting the upper hand.</p>
            <p>In the meanwhile, Dr. Francisco P. Dela Peña, Jr., a seasoned Vocational School Administrator, ventured in the establishment of the Southern Mindanao Institute of Technology (SMIT) in response to social needs. This development accelerated the socioeconomic progress of Panabo for its phenomenal metamorphosis as a Banana Queen City of the Country. The course offerings centered on the short courses in Auto-mechanics, Electronics, Computer Programming, Hotel and Restaurant Management, and Office Management. The need for baccalaureate degrees became inevitable when the Bachelor of Science in Hotel and Restaurant Management (BSHRM) flourished abroad. The use of computer spurred the streamlining of office functions that gave rise to the offerings of BS in Information Technology along with Business Administration.</p>
        </div>

        <!-- Image on the Right Side -->
        <div class="image1">
            <img src="{{ asset('storage/VENTURES.JPG') }}" alt="Person Image" class="img-fluid rounded" style="max-width: 80%; height: auto;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>Development in banana production and the other allied industries magnanimously spread into the fertile plains of Tagum and Nabunturan. Technical courses were the clamor and decisive efforts were conceptualized to address the demand of the time. Thus, Aces Tagum College (ATC) was opened in 1995 and Aces Nabunturan College in 1997. The schools likewise started with a humble beginning renting very limited spaces for classroom activities.</p>
            <p>At the onset of the 21st century, Aces Tagum College has acquired a new spacious site in Barangay Mankilam and ideal buildings were eventually constructed to house the modern facilities commensurate to the course offerings as earlier mentioned.</p>
            <p>Uppermost in the strategy of obtaining a quality education in keeping the strict adherence to the policy imposed by CHED, the college requires the faculty to be a Master’s degree holders. To be able to meet this requirement, the President/CEO conducted a massive Human Resource Development Program wherein the Instructors were made to pursue Masters and Doctorate Degree courses in the Leading universities in the Region.</p>
        </div>
    </div>

    <section class="container py-5">
        <div class="row">
            <!-- Image on the Left Side -->
            <div class="col-md-6">
                <img src="{{ asset('storage/acesphoto.jpg') }}" alt="Aces College" class="img-fluid rounded" style="max-width: 80%; height: auto;">
            </div>
    
            <!-- Text on the Right Side -->
            <div class="col-md-6">
                <p>Over time, millions of pesos had been invested for infrastructures which are now in full use. Modern speech laboratory was installed, new computers were acquired, and several vehicles were purchased for the auto-mechanic driving class, as well as the latest facilities in Hotel and Restaurant Management were supplied.</p>
                <p>All told, these streamlined school systems and facilities brought about a splendid performance of ACES graduating students in the National Competency Examination when they made a 100% passing rate. TESDA gave full accreditation to this enviable feat. More than these, passers of the NC II conferred upon them Sub-professional 2nd grade civil service eligibility essential for employment in government offices.</p>
                <p>The imposing ACES College building along TADECO road is an additional asset for use. Its facilities and equipment is among the latest. By and large, the beholder can anticipate for him what he can acquire in a modernized and sophisticated environment.</p>
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


        /* Add padding between text and image */
        .container .row {
            display: flex;
            justify-content: space-between;
        }

        /* Custom Styling for the Image */
        .image1 {
            border-radius: 20px; /* Rounded corners for the image */
            max-width: 50%; /* Ensures the image doesn't stretch beyond its container */
            display: block; /* Makes the image a block-level element */
            margin-left: -20px; /* Pushes the image to the right side */
            margin-right: 0; /* Removes any right margin */
        }
        
        .row {
            margin-left: 0; /* Keeps the left margin as is */
            margin-top: 20px; /* Adjust this value to move the image down or up */
        }
        
    </style>
@endpush
