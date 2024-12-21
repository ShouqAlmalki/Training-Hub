@extends('layouts.app')


@section('title', 'documents')
@section('content')
<br><br>
<title>Messages and Announcements</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Aligns items at the top */
            gap: 20px; /* Adds spacing between the boxes */
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
     <h1>Submit Documents</h1>
      <form class="form-control" action="{{route('submission.documents',1)}}">
      @csrf
      <div class="mb-3">
       <label for="Types">Type :</label>
        <input list="Types" name="Type" id="Type" class="form-control">
          <datalist id="Types">
            <option value="Plan form">
             <option value="Joining form">
              <option value="Weekly report">
               <option value="Final report">
                </datalist>
                  </div>
                   <br><br>
                     <div class="input-group">
                       <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Choose File</button>
                          </div>
                            <br><br>
                              <button class="btn btn-warning">Cancel</button>
                               <button class="btn btn-success" onclick="submit()">Submit</button>
                              </form>
                            </div>




@endsection
