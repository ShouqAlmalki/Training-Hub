@extends('layouts.app')


@section('title', 'submission') Submissions
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Submission</title>
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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <span>Submit Reports</span>
            <button class="button" onclick="submit" href="{{route('submission.documents')}}">Submit</button>
        </div>
        <div class="card">
            <span>Previous Submissions</span>
            <button class="button" onclick="view" href="{{route('submission.previous')}}">View</button>
        </div>
    </div>
</body>
</html>


@endsection
