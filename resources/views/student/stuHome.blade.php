@extends('layouts.stu')

@section('title', 'Submissions')

@push('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        max-width: 800px;
        padding: 20px;
        text-align: center;
    }

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #e8fcfc;
        border: 1px solid #ccc;
        border-radius: 25px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .card span {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .modal-content {
        border-radius: 15px;
    }

    .modal-header h1 {
        font-size: 20px;
    }

    .input-group button {
        background-color: #007bff;
        color: white;
        border: none;
    }

    .input-group button:hover {
        background-color: #0056b3;
    }
</style>
@endpush

@section('content')

<div class="container">
    <div class="card">
        <span>Submit Reports</span>
        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">SUBMIT</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Report Submission</h1>
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
                                <button class="btn" type="button" id="inputGroupFileAddon04">Upload</button>
                            </div>
                        </div>
                        <button class="btn btn-success" onclick="submit()">Create Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <span>Previous Submissions</span>
        <a class="button" href="{{ route('submission.previous') }}">VIEW</a>
    </div>
</div>

@endsection
