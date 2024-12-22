@extends('layouts.app')


@section('title', 'documents')
@section('content')
<br><br>
<title>Messages and Announcements</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            min-height: 100vh;
        }

        .box {
            width: 700px;
            height: 500px;
            background-color: lightblue;
            border: 2px black solid;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
        }

        .box h1 {
            margin-top: 0;
        }
    </style>

    </head>
    <body>
    <div class="container">
     <div class="box">
     <h1>Report submission</h1>
      <form class="form-control" action="{{route('submission.documents',1)}}">
      @csrf
      <div class="mb-3">
       <label for="Types">type of report</label>
        <input list="Types" name="Type" id="Type" class="form-control">
          <datalist id="Types">
            <option value="Final">
             <option value="Weekly">
              <option value="Joining">
               <option value="Plan">
                </datalist>
                  </div>
                   <br><br>
                   <label for="Types">upload file</label>
                     <div class="input-group">
                       <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"></button>
                          </div>
                            <br><br>
                              {{--<button class="btn btn-warning">Cancel</button>--}}
                               {{--<button class="btn btn-success" onclick="submit()">Submit</button>--}}
                              </form>
                            </div>




@endsection
