@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add New Member</h2>
        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option value="College Administrator">College Administrator</option>
                    <option value="Director for Instruction">Director for Instruction</option>
                    <option value="Dean of BSHM">Dean of BSHM</option>
                    <option value="Dean of BEED">Dean of BEED</option>
                    <option value="Director for Administration">Director for Administration</option>
                    <option value="Program Director-TVET">Program Director-TVET</option>
                    <option value="Program Coordinator-IICT">Program Coordinator-IICT</option>
                    <option value="SHS Coordinator">SHS Coordinator</option>
                    <option value="HR Coordinator">HR Coordinator</option>
                    <option value="Registrar Staff">Registrar Staff</option>
                    <option value="Payroll In-charge">Payroll In-charge</option>
                    <option value="School Registrar">School Registrar</option>
                    <option value="TECHVOC Staff">TECHVOC Staff</option>
                    <option value="Library Director">Library Director</option>
                    <option value="School Cashier">School Cashier</option>
                    <option value="Acctg. Director">Acctg. Director</option>
                    <option value="Assessment Center Processing Officer">Assessment Center Processing Officer</option>
                    <option value="EIM Trainer">EIM Trainer</option>
                    <option value="Instructor - PE">Instructor - PE</option>
                    <option value="Instructor - BSED Mathematics">Instructor - BSED Mathematics</option>
                    <option value="Instructor - English">Instructor - English</option>
                    <option value="Instructor-BioScience">Instructor-BioScience</option>
                    <option value="Clinic In-Charge">Clinic In-Charge</option>
                    <option value="Instructor - Science">Instructor - Science</option>
                    <option value="Instructor-BSED FILIPINO">Instructor-BSED FILIPINO</option>
                    <option value="Instructor- ENGLISH">Instructor- ENGLISH</option>
                    <option value="Instructor-MATHEMATICS">Instructor-MATHEMATICS</option>
                    <option value="OSA Coordinator">OSA Coordinator</option>
                    <option value="Instructor-BSBA">Instructor-BSBA</option>
                    <option value="Instructor- IT">Instructor- IT</option>
                    <option value="Scholarship Coordinator">Scholarship Coordinator</option>
                    <option value="Instructor-BSHM">Instructor-BSHM</option>
                    <option value="SHS Adviser">SHS Adviser</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-success">Add Member</button>

            <!-- Cancel Button (Redirect to the Members List Page) -->
            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection