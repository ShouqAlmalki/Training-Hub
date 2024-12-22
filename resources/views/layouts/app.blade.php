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
                  background-color:rgb(10, 23, 38);
                  color: white;
                  padding: 10px 20px;
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
              }
                     .navbar a {
                      color:rgb(222, 221, 206);
                         text-decoration: none;
                         margin: 0 10px;
                         font-size: 18px;
                     }


    </style>

</head>
<body>
 <nav class="navbar">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="{{route('views.welcome')}}">Training Hub</a>
                          <a class="nav-link active" aria-current="page" href="{{route('student.home')}}">Home</a>
                          <a class="nav-link active" aria-current="page" href="{{route('student.submission')}}">Submissions</a>
                          <a class="nav-link active" aria-current="page" href="{{route('student.experience')}}">Experiences</a>
                          <a class="nav-link active" aria-current="page" href="{{route('student.profile')}}">Profile</a>

</nav>



    </div>
    <div class="content">
         @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>


