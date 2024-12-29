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
<body class="d-flex align-items-center py-4 bg-body-tertiary">

<nav class="navbar navbar-expand-lg fixed-top navbar-dark " >
<div class="container-fluid">
  <a class="navbar-brand active" href="{{Route('welcome')}}">Training Hub</a>
</div>
<div class="container-fluid">
  <a class="navbar-brand active" href="{{Route('student.stuHome')}}">Home</a>
</div>
<div class="container-fluid">
  <a class="navbar-brand active" href="{{Route('student.submission')}}">Submissions</a>
</div>
<div class="container-fluid">
  <a class="navbar-brand active" href="{{Route('student.experience')}}">Experiences</a>
</div>
<div class="container-fluid">
  <a class="navbar-brand active" href="{{Route('student.stuaccount')}}">Personal Account</a>
</div>
<div class="container-fluid">
<a type="button" class="btn btn-outline-danger" href="{{Route('welcome')}}">Sign Out</a>
</div>
</nav>

    <div class="content">
         @yield('content')
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
