@extends('layouts.app')


@section('title', 'home') Home
@section('content')
<div class="h-auto d-inline-block" style="width: 120px;">
<title>Messages from supervisor</title>

<style>
.box {
width: 500px;
height: 500px;
background-color: lightblue;
border: 2px solid blue;
padding: 10px;
margin: 20px;
text-align: center;
line-height: 100px;
border-radius: 10px;
}

</style>

<div class= "message box"></div>

<div class="mb-4" class="text-center">
  <label for="message" class="form-label">message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
</div>
</body>


</div>


@endsection
