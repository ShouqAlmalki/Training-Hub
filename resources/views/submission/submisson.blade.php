@extends('layouts.app')

@section('title', 'Report Submission')

@section('content')
<div class="container">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e8fcfc;
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 15px 20px;
            margin-bottom: 20px;
        }
        .button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }
    </style>
    <div class="card">
        <span>Submit Reports</span>
        <a class="button" href="{{ route('submission.documents') }}">Submit</a>
    </div>
    <div class="card">
        <span>Previous Submissions</span>
        <a class="button" href="{{ route('submission.previous') }}">View</a>
    </div>
</div>
@endsection

