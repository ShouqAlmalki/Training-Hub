<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

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
        <a href="{{ route('submission.submission') }}">Submission</a>
         <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="{{ route('submission.submission') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Submissons
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Submit Documents</a></li>
                        <li><a class="dropdown-item" href="#">Previous Submissons</a></li>
                      </ul>
                    </li>
        <div class="arrow">></div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>


