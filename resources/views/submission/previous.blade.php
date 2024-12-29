@extends('layouts.stu')


@section('title', 'previous')
@section('content')

<style>

    body {
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background-color: #f4f4f9;
    }
    </style>

<h1 class="text-center">Previous submissions</h1>
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">Report</th>
        <th scope="col">File</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection
