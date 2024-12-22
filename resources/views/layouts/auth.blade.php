<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
html,
body {
  height: 100%;
}

.form-sign {
  max-width: 330px;
  padding: 1rem;
}

.form-sign .form-floating:focus-within {
  z-index: 2;
}

.form-sign input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-sign input[type="password"] {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
            background-color:rgb(10, 23, 38);
            color: white;
}
.checked {
         color: orange;
}
</style>
</head>

  <body class="d-flex align-items-center py-4 bg-body-tertiary">

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark " >
  <div class="container-fluid">
    <a class="navbar-brand active" href="{{Route('welcome')}}">Training Hub</a>
  </div>
  </nav>

  <div class="container">
    @yield("content")
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
