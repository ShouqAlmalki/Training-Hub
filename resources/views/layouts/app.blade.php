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
        .navbar .arrow {
            font-size: 24px;
            color: #3a3a3a;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('student.home') }}">Home</a>

        <div class="arrow">></div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>


