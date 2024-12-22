@extends('layouts.auth')
@section('title') Sign Up @endsection
@section('content')

<main class="form-sign w-100 m-auto">
  <form method="POST" action="{{route('auth.signup.post')}}">
  @csrf

    <h1 class=" mb-3 fw-normal">Sign Up</h1>

    <div class="form-floating mb-2">
      <input name="fname" type="text" class="form-control" id="floatingInput" placeholder="Roba">
      <label for="floatingInput">First name</label>
      @error('fname')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-floating mb-2">
      <input name="lname" type="text" class="form-control" id="floatingInput" placeholder="Altaheeni">
      <label for="floatingInput">Last name</label>
      @error('lname')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-floating mb-2">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="s44-------@uqu.edu.sa">
      <label for="floatingInput">Email address</label>
      @error('email')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-floating mb-2" style='margin-bottom: 10px'>
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @error('password')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    @if (session()->has("success"))
        <div class="alert alert-success">{{session()->get("success")}}</div>
    @endif

    @if (session("error"))
        <div class="alert alert-danger">{{session("error")}}</div>
    @endif

    <button class="btn btn-success w-100 py-2" type="submit">Sign Up</button>

    <a class="mt-2 btn btn-secondary text-end " href="{{route('auth.signin')}}"> Sign In</a>

  </form>
</main>

@endsection
