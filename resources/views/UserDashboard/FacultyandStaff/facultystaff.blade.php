@extends('layouts.app')

@section('title', 'FacultyStaff')

@section('content')

    <style>
        body {
            background-color: #f8f9fa;
        }

        .org-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .org-item:hover {
            background-color: #4431d2;
            transition: 0.3s;
        }

        .org-item img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
            border: 3px solid #c40b0b;
            transition: transform 0.3s ease;
        }

        .org-item:hover img {
            transform: scale(1.1);
        }

        .org-details h5 {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        

        .org-details p {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin-bottom: 0;
            color: #1d0f0f;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
            text-transform: uppercase;
            color: #1025c3;
            position: relative;
        }

        .section-title::after {
            font-family: 'Poppins', sans-serif;
            content: "";
            display: block;
            width: 80px;
            height: 3px;
            background: #1025c3;
            margin: 8px auto 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center my-4">Organizational Structure</h2>

    <h3 class="section-title">Deans/Program Heads</h3>
    <ul class="list-unstyled">
        @foreach([
            ['VENTURES.JPG', 'VENTURES, ALFONSO R. (MSIS)', 'College Administrator / Dean of BSIT'],
            ['ROBLES.JPG', 'ROBLES, MA. CARMELITA D., DBM', 'Director for Instruction / Dean of BSBA'],
            ['PADASAS.JPG', 'PADASAS, GEMMA D. (MM)', 'Dean of BSHM/Specialized Trainings Director'],
            ['TEDLOS.JPG', 'TEDLOS,  NENA A., Ed.D', 'Dean of BEED'],
            ['MAYORDOMO.JPG', 'MAYORDOMO, MARLON L.', 'Director for Administration/General Services Director'],
            ['NAJERA.JPG', 'NAJERA, ORLANDO B.', 'Program Director-TVET/Linkages & Promotion Officer/Technician/AC Manager'],
            ['SENILLO.JPG', 'SENILLO, FATIMA KRISTIANNE M., LPT', 'Program Coordinator-ITE / Instructor- BSED FILIPINO'],
            ['GAJO.JPG', 'GAJO, APHRODITE M.', 'Program Coordinator-IICT / Instructor- BSIT'],
            ['NAMOCOT.JPG', 'NAMOCOT, ANNA LOU L., LPT', 'SHS Coordinator'],
        ] as $index => $person)
        <li class="org-item" style="animation-delay: {{ $index * 0.1 }}s;">
            <img src="{{ asset('storage/' . $person[0]) }}" alt="{{ $person[1] }}">
            <div class="org-details">
                <h5>{{ $person[1] }}</h5>
                <p>{{ $person[2] }}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <h3 class="section-title">Admin Staff</h3>
    <ul class="list-unstyled">
        @foreach([
            ['BALABA.JPG', 'BALABA, CRISTY L.', 'HR Coordinator'],
            ['BELTRAN.JPG', 'BELTRAN, CHRISTIAN A.', 'Registrar Staff'],
            ['BENANING.JPG', 'BENANING, JESSEL P.', 'Payroll In-charge'],
            ['FERNANDEZ N.jpg', 'FERNANDEZ, NELVIN R.', 'School Registrar'],
            ['LARGO.jpg', 'LARGO, HARROLD BENN', 'Registrar Staff'],
            ['LUCEÑO.jpg', 'LUCEÑO, JIMMY M.', 'Asst. Assessment Processing Officer/TECHVOC Staff'],
            ['NUGAS.jpg', 'NUGAS, JONALE ANN J. (RL)', 'Library Director'],
            ['PAGALAN.jpg', 'PAGALAN, LOVELY JOY F.', 'School Cashier'],
            ['SALARDE.jpg', 'SALARDE, JOY A.', 'Assistant Registrar'],
            ['SALTING.jpg', 'SALTING, CHARLINE D.', 'Acctg. Director / Bookkeeper'],
            ['SILVA.jpg', 'SILVA, DOMENIC D.', 'Assessment Center Processing Officer/Data Encoder/ Computer Operator/ Liaison Officer'],
            ['TABAT.jpg', 'TABAT, ELMER D. ', 'Electrician / EIM Trainer'],
        ] as $index => $staff)
        <li class="org-item" style="animation-delay: {{ $index * 0.1 }}s;">
            <img src="{{ asset('storage/' . $staff[0]) }}" alt="{{ $staff[1] }}">
            <div class="org-details">
                <h5>{{ $staff[1] }}</h5>
                <p>{{ $staff[2] }}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <h3 class="section-title">Faculty Members</h3>
    <ul class="list-unstyled">
        @foreach([
            ['ALBESA.JPG', 'ALBESA, JACKY O., LPT', 'Instructor - PE'],
            ['ALFEREZ.JPG', 'ALFEREZ, ARNEL B.', 'Instructor - BSED Mathematics'],
            ['BANAWAN.JPG', 'BANAWAN, CHERRY MAE T., LPT', 'Instructor - English'],
            ['BANAWAN.JPG', 'BARCENAS, JESTON RUSSEL L., LPT', 'Instructor-BioScience/School Asst. Clinic In-Charge'],
            ['BITANG.JPG', 'BITANG, JEZZA FAITH H., LPT', 'Instructor - Science'],
            ['BITANG.JPG', 'BOJA, CHERRY MAY J., LPT', 'Instructor-BSED FILIPINO / SHS Adviser'],
            ['BITANG.JPG', 'CANO, XELA A., LPT', 'Instructor- ENGLISH / OSA Coordinator'],
            ['BITANG.JPG', 'CORPUZ, APRILYN B.', 'Instructor-MATHEMATICS'],
            ['BITANG.JPG', 'DE LEON, MARK LAURENCE M., LPT', 'Instructor-BSBA'],
            ['BITANG.JPG', 'DELA CRUZ, DARLYN D.', 'Instructor- BSBA HR'],
            ['BITANG.JPG', 'DIANGCA, EBRAHIM', 'Instructor- IT'],
            ['BITANG.JPG', 'ELEFANE, JOEY R., LPT, LPT', 'Instructor-BSBA FM'],
            ['BITANG.JPG', 'FERNANDEZ, JOYMIE E., LPT, MBA', 'Scholarship Coordinator/Instructor-BSBA/Research Officer'],
            ['BITANG.JPG', 'FLORES, EILEEN JUNE D., LPT', 'Instructor-BSHM'],
            ['BITANG.JPG', 'FLORES, KENNETH R., LPT', 'Instructor-P.E'],
            ['BITANG.JPG', 'KHO, JOYCIE A.', 'Instructor- BSHM'],
            ['BITANG.JPG', 'MAHILUM, ZYRENE KATE Gutierrez., LPT', 'Instructor- ENGLISH'],
            ['BITANG.JPG', 'MALLO, ARIES P.', 'Instructor-MATHEMATICS'],
            ['BITANG.JPG', 'NATAD, MERALYN J., LPT', 'Instructor- BSED BioScienceI/School Clinic In-Charge'],
            ['BITANG.JPG', 'PADASAS, HONEY CURL D.', 'Instructor- BSHM'],
            ['BITANG.JPG', 'PAMONGCALES, JOHNMARK., LPT', 'Instructor- BSBA FM/Automotive'],
            ['BITANG.JPG', 'PILIAS, JAMMAAL EARVIN ., LPT', 'Instructor- ENGLISH / SHS Adviser'],
            ['BITANG.JPG', 'ESTACA, KERWIN J.', 'Instructor-BSHM'],
            ['BITANG.JPG', 'ESTACA, KERWIN J.', 'Instructor-BSHM'],
            ['BITANG.JPG', 'ESTACA, KERWIN J.', 'Instructor-BSHM'],
            ['BITANG.JPG', 'ESTACA, KERWIN J.', 'Instructor-BSHM'],
        ] as $index => $faculty)
        <li class="org-item" style="animation-delay: {{ $index * 0.1 }}s;">
            <img src="{{ asset('storage/' . $faculty[0]) }}" alt="{{ $faculty[1] }}">
            <div class="org-details">
                <h5>{{ $faculty[1] }}</h5>
                <p>{{ $faculty[2] }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>


@endsection