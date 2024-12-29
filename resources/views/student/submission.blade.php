@extends('layouts.stu')

@section('title', 'student')

@push('styles')

<style>

    body {
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background-color: #f4f4f9;
    }

    .container {
        max-width: 1000px;
        margin: 60px auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .card {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        background-color: #e8fcfc;
        border: 1px solid #ccc;
        border-radius: 15px;
        padding: 15px 20px;
        margin-bottom: 20px;
        width: 100%;
        max-width: 600px;
    }


    .button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none;
    }

    .previous-submissions {
        position: absolute;
        left: 0;
        top: 2;
        padding: 10px;
    }

</style>
</head>
<body>
@endpush

@section('content')
<br><br>
<h1 class="text-center">Submissions</h1>

<div class="container">
    <div class="card">
        <span class="fw-bold">Submit Reports</span>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Report Submission</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Type" class="form-label">Type of Report</label>
                            <input list="Types" name="Type" id="Type" class="form-control">
                            <datalist id="Types">
                                <option value="Final">
                                <option value="Weekly">
                                <option value="Joining">
                                <option value="Plan">
                            </datalist>
                        </div>

                        <div class="mb-3">
                            <label for="inputGroupFile04" class="form-label">Upload File</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
                            </div>
                        </div>
                        <button class="btn btn-success" onclick="submit()">Create Report</button>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <br><br>

    <div class="card">
        <div class="card-body">
            <span class="fw-bold previous-submissions">Previous Submissions</span>
            <a class="button" href="{{ route('submission.previous') }}">View</a>
        </div>
    </div>
</div>
@endsection
