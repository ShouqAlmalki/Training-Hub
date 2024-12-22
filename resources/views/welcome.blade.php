@extends('layouts.app')
@section('title') Welcome @endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .navbar {
            background-color:rgb(10, 23, 38);
            color: white;
        }
    .checked {
         color: orange;
        }
</style>
<header>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark " >
  <div class="container-fluid">
    <a class="navbar-brand active" href="{{Route('welcome')}}">Training Hub</a>

    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 text-end" role="search">
          <input type="search" class="form-control form-control text-bg" placeholder="Search..." aria-label="Search">
    </form>


  </div>
</nav>
</header>

<main>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="py-5 col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Training Hub</h1>
        <p class="lead text-body-secondary">A platform where you can learn and share your journey.</p>
        <div class="text">
          <a type="button" class="btn btn-success me-2"  href="{{route('auth.signin')}}">Sign in</a>
          <a type="button" class="btn btn-secondary"  href="{{route('auth.signup')}}">Sign up</a>
        </div>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

     <div class="col">
          <div class="card shadow-sm">
          <h5 class="fw-light mt-3 text-center">Org Name</h5>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <h5 class="fw-light mt-3 text-center">Org Name</h5>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">43 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <h5 class="fw-light mt-3 text-center">Org Name</h5>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">57 mins</small>
              </div>
            </div>
          </div>
        </div>
<!-- sec line-->
        <div class="col">
          <div class="card shadow-sm">
          <h5 class="fw-light mt-3 text-center">Org Name</h5>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">1 h</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <h5 class="fw-light mt-3 text-center">Org Name</h5>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">4 h</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <h5 class="fw-light mt-3 text-center">Org Name</h5>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">8 h</small>
              </div>
            </div>
          </div>
        </div>

    </div>
     </div>
    </div>

</main>
@endsection
