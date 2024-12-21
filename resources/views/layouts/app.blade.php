<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .navbar {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
               .navbar a {
                   color: #fffbd3;
                   text-decoration: none;
                   margin: 0 10px;
                   font-size: 18px;
               }
               .navbar a:hover {
                          text-decoration: underline;
                      }

    </style>

</head>
<body>
    <div class="navbar">
        <a href="{{ route('student.home') }}">Home</a>
         <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="{{route('student.submission')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Submissons
                      </a>
                      <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="{{ route('submission.documents') }}">Submit Documents</a></li>
                       <li><a class="dropdown-item" href="{{ route('submission.previous') }}">Previous Submissons</a></li>
                      </ul>
                    </li>
    </div>
    <div class="content">
         @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>


