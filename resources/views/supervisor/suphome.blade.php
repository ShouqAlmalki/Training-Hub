@extends('layouts.app')


@section('title', 'home')
@section('content')

{{--<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />--}}

{{--<div class="h-auto d-inline-block" style="width: 120px;">--}}

    <br><br>
    <title>ٍSend Announcements</title>
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

<br><br>
            <div class="container">

             <div class="box">
                <h1 style="color: #006392;">Send Announcements</h1>


                <style>
                    #inputTitle::placeholder, #inputDescription::placeholder {
                      font-size: 12px; /* يمكنك تعديل الحجم هنا حسب الحاجة */
                    }
                  </style>

                  <form>
                    <div class="row mb-3">
                      <label for="inputTitle" class="col-sm-2 col-form-label" style="text-align: left;">Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" placeholder="Enter Text">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputDescription" class="col-sm-2 col-form-label" style="text-align: left;padding-top: 40px;">Description</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDescription" placeholder="Enter Text" style="width: 100%; height: 119px; padding-top: 0px;">
                      </div>
                    </div>
                  </form>


                  <div class="d-flex justify-content-between">
                    <label for="inputSection" class="form-label" style="text-align: left; font-size: 14px;">Section</label>
                    <select class="form-select" aria-label="Default select example" style="width: 83%; font-size: 14px;">
                      <option selected>select</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>


                  <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 20px;">
                    <button class="btn btn-primary" type="button" style="background-color: #006392; font-size: 12px;">SEND</button>
                  </div>




             </div>
        <div class="box">
            <div style="display: flex; align-items: center;">
                <h1 style="text-align: left; color: #006392; margin-right: 140px; font-size: 35px;">list of students</h1>
                <select class="form-select" aria-label="Default select example" style="width: 150px; font-size: 14px;">
                    <option selected>select section</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>



            <label for="message" class="form-label"></label>

            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">User full name User last name</div>
                    Type of training type
                  </div>
                  <span class="badge text-bg-primary rounded-pill"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">User full name User last name</div>
                    Type of training type
                  </div>
                  <span class="badge text-bg-primary rounded-pill"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">User full name User last name</div>
                    Type of training type
                  </div>
                  <span class="badge text-bg-primary rounded-pill"></span>
                </li>
              </ol>


      </div>
     </div>
    </div>

</body>
</html>

@endsection
