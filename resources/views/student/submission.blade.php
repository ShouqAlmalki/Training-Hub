@extends('layouts.app')

@section('title', 'student')

@section('content')

<div class="container">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            align-items: 10px;
            max-width: 1000px;
            margin: 60px auto;
            padding: 20px;
        }
        .card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e8fcfc;
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 15px 20px;
            margin-bottom: 20px;
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
    </style>
    </head>
    <body>
   <!-- Button trigger modal -->

       <div class="card">
                     <p class="fw-bold">Submit Reports</p>
                     {{--<span>Submit Reports</span>--}}
                     {{--<a class="button" href="{{ route('submission.documents') }}">Submit</a>--}}
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <div class="mb-3">
                              <label for="Types">type of report</label>
                              <input list="Types" name="Type" id="Type" class="form-control">

                              <datalist id="Types">
                              <option value="Final">
                              <option value="Weekly">
                              <option value="Joining">
                              <option value="Plan">

                              </datalist>

                              <label for="Types">upload file</label>
                              <div class="input-group">
                              <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"></button>
                              </div>
                              <br><br>
                              {{--<button class="btn btn-warning">Cancel</button>--}}
                              <button class="btn btn-success" onclick="submit()">CREATE REPORT</button>
                              </form>
                              </div>
                              </div>
                             {{-- <div class="modal-footer">--}}
                                {{--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                <div class="card">
                  <div class="card-body">
                <span>Previous Submissions</span>

               <a class="button" href="{{ route('submission.previous') }}">View</a>
            </div>
        </div>

</body>

@endsection
