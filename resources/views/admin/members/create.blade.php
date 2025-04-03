@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add New Member</h2>

        <!-- Display error message if the name already exists -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
                       value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option disabled selected>Select a department</option>
                    <option value="College Administrator" {{ old('department') == 'College Administrator' ? 'selected' : '' }}>College Administrator</option>
                    <option value="Director for Instruction" {{ old('department') == 'Director for Instruction' ? 'selected' : '' }}>Director for Instruction</option>
                    <option value="Dean of BSHM" {{ old('department') == 'Dean of BSHM' ? 'selected' : '' }}>Dean of BSHM</option>
                    <option value="Dean of BEED" {{ old('department') == 'Dean of BEED' ? 'selected' : '' }}>Dean of BEED</option>
                    <option value="Director for Administration" {{ old('department') == 'Director for Administration' ? 'selected' : '' }}>Director for Administration</option>
                    <option value="Program Director-TVET" {{ old('department') == 'Program Director-TVET' ? 'selected' : '' }}>Program Director-TVET</option>
                    <option value="Program Coordinator-IICT" {{ old('department') == 'Program Coordinator-IICT' ? 'selected' : '' }}>Program Coordinator-IICT</option>
                    <option value="SHS Coordinator" {{ old('department') == 'SHS Coordinator' ? 'selected' : '' }}>SHS Coordinator</option>
                    <option value="HR Coordinator" {{ old('department') == 'HR Coordinator' ? 'selected' : '' }}>HR Coordinator</option>
                    <option value="Registrar Staff" {{ old('department') == 'Registrar Staff' ? 'selected' : '' }}>Registrar Staff</option>
                    <option value="Payroll In-charge" {{ old('department') == 'Payroll In-charge' ? 'selected' : '' }}>Payroll In-charge</option>
                    <option value="School Registrar" {{ old('department') == 'School Registrar' ? 'selected' : '' }}>School Registrar</option>
                    <option value="TECHVOC Staff" {{ old('department') == 'TECHVOC Staff' ? 'selected' : '' }}>TECHVOC Staff</option>
                    <option value="Library Director" {{ old('department') == 'Library Director' ? 'selected' : '' }}>Library Director</option>
                    <option value="School Cashier" {{ old('department') == 'School Cashier' ? 'selected' : '' }}>School Cashier</option>
                    <option value="Acctg. Director" {{ old('department') == 'Acctg. Director' ? 'selected' : '' }}>Acctg. Director</option>
                    <option value="Assessment Center Processing Officer" {{ old('department') == 'Assessment Center Processing Officer' ? 'selected' : '' }}>Assessment Center Processing Officer</option>
                    <option value="EIM Trainer" {{ old('department') == 'EIM Trainer' ? 'selected' : '' }}>EIM Trainer</option>
                    <option value="Instructor - PE" {{ old('department') == 'Instructor - PE' ? 'selected' : '' }}>Instructor - PE</option>
                    <option value="Instructor - BSED Mathematics" {{ old('department') == 'Instructor - BSED Mathematics' ? 'selected' : '' }}>Instructor - BSED Mathematics</option>
                    <option value="Instructor - English" {{ old('department') == 'Instructor - English' ? 'selected' : '' }}>Instructor - English</option>
                    <option value="Instructor-BioScience" {{ old('department') == 'Instructor-BioScience' ? 'selected' : '' }}>Instructor-BioScience</option>
                    <option value="Clinic In-Charge" {{ old('department') == 'Clinic In-Charge' ? 'selected' : '' }}>Clinic In-Charge</option>
                    <option value="Instructor - Science" {{ old('department') == 'Instructor - Science' ? 'selected' : '' }}>Instructor - Science</option>
                    <option value="Instructor-BSED FILIPINO" {{ old('department') == 'Instructor-BSED FILIPINO' ? 'selected' : '' }}>Instructor-BSED FILIPINO</option>
                    <option value="Instructor- ENGLISH" {{ old('department') == 'Instructor- ENGLISH' ? 'selected' : '' }}>Instructor- ENGLISH</option>
                    <option value="Instructor-MATHEMATICS" {{ old('department') == 'Instructor-MATHEMATICS' ? 'selected' : '' }}>Instructor-MATHEMATICS</option>
                    <option value="OSA Coordinator" {{ old('department') == 'OSA Coordinator' ? 'selected' : '' }}>OSA Coordinator</option>
                    <option value="Instructor-BSBA" {{ old('department') == 'Instructor-BSBA' ? 'selected' : '' }}>Instructor-BSBA</option>
                    <option value="Instructor- IT" {{ old('department') == 'Instructor- IT' ? 'selected' : '' }}>Instructor- IT</option>
                    <option value="Scholarship Coordinator" {{ old('department') == 'Scholarship Coordinator' ? 'selected' : '' }}>Scholarship Coordinator</option>
                    <option value="Instructor-BSHM" {{ old('department') == 'Instructor-BSHM' ? 'selected' : '' }}>Instructor-BSHM</option>
                    <option value="SHS Adviser" {{ old('department') == 'SHS Adviser' ? 'selected' : '' }}>SHS Adviser</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-success">Add Member</button>
            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
