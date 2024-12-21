@extends('layouts.app')


@section('title', 'home') Home
@section('content')
<div class="h-auto d-inline-block" style="width: 120px;">
<title>Messages from supervisor</title>

<style>
.box {
width: 700px;
height: 500px;
background-color: lightblue;
border: 2px black solid;
padding: 10px;
margin: 20px;
text-align: center;
line-height: 100px;
border-radius: 10px;
}

</style>

<div class= "box">
<h1>Messages from supervisor</h1>
<label for="message" class="form-label">message</label>


<div class="mb-3" class="text-center">
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>

  </div>
  <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Send</button>

</div>
</body>

@endsection
