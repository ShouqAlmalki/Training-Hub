@extends('layouts.app')


@section('title', 'home')
@section('content')

{{--<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />--}}

{{--<div class="h-auto d-inline-block" style="width: 120px;">--}}

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

<br><br>
            <div class="container">

             <div class="box">
             <h1>Announcements</h1>

             </div>
        <div class="box">
            <h1>Messages from supervisor</h1>
            <label for="message" class="form-label">Message</label>

            <div class="mb-3 text-center">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Send</button>




      </div>
     </div>
    </div>

</body>
</html>



@endsection
