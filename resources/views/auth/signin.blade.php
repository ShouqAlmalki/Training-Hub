@extends('layouts.auth')
@section('title') Sign In @endsection

@section('content')

<main class="form-sign w-100 m-auto">
  <form method="POST" action="{{route('auth.signin.post')}}">
  @csrf

    <h1 class="mb-3 fw-normal">Login</h1>

    <div class="form-floating mb-2">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="s44-------@uqu.edu.sa">
      <label for="floatingInput">Email address</label>
      @error('email')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-floating mb-2"  style='margin-bottom: 10px'>
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

    <button class="btn btn-success w-100 py-2" type="submit">Sign In</button>

    <a class="mt-2 btn btn-secondary text-center" href="{{route('auth.signup')}}">Create New Account</a>

  </form>
</main>

@endsection
