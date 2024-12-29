@extends('layouts.stu')


@section('title', 'experience')
@section('content')

{{--@push('styles')--}}

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
        width: 600%;
        max-width: 1000px;
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

    .previous-experience {
        position: center;
        left: 0;
        top: 2;
        padding: 5px;
    }

</style>
</head>
<body>
{{--@endpush--}}

@section('content')

<br><br>
<h1 class="text-center">Experiences</h1>

<div class="container">
    <div class="card">
        <span class="fw-bold">New experience</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="button" type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">New</button>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New experience</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Organization</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                     </div>
                     <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Overview</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                      </div>
                        <div class="mb-3">
                            <label for="Type" class="form-label">rate</label>
                            <input list="Types" name="Type" id="Type" class="form-control">
                            <datalist id="Types">
                                <option value="1">
                                <option value="2">
                                <option value="3">
                                <option value="4">
                                <option value="5">
                            </datalist>
                        </div>

                        <button class="btn btn-success" onclick="submit()">Submit</button>
                    </div>
                </div>
            </div>
        </div>
      </div>


<div class="container">
<div class="card">
      <div class="card-body">
        <div class="previous-experience">
            <span class="fw-bold">Previous experience</span>
            <br><br>
            <a class="button" href="{{ route('submission.previousExperience') }}">View</a>
        </div>

    </div>
  </div>
</div>

@endsection
