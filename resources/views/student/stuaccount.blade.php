@extends('layouts.app')


@section('title', 'stupersonalaccount')
@section('content')

<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background for contrast */
        }
        .container {
            max-width: 800px; /* Increased width of the container */
            margin-top: 50px; /* Spacing above */
        }
        .form-label {
            font-weight: bold; /* Bold labels */
        }
        .form-control {
            border: 1px solid #ced4da; /* Light border */
            width: 100%; /* Full width */
            padding: 15px; /* Increased padding for visual comfort */
        }
        .btn-save {
            background-color:rgb(10,23,38); /* Blue background */
            color: white; /* White text */
            padding: 15px; /* Increased padding */
            width: 100%; /* Full width */
        }
        .btn-cancel {
            background-color: transparent; /* Transparent background */
            color:rgb(10,23,38); /* Blue text */
            padding: 15px; /* Increased padding */
            width: 100%; /* Full width */
            border: 1px solid rgb(10,23,38); /* Blue border */
        }
        .btn-save:hover {
            background-color: rgb(10,23,38); /* Darker blue on hover */
        }
        .btn-cancel:hover {
            background-color: #e9ecef; /* Light gray on hover */
        }
        .button-group {
            display: flex; /* Flex for button alignment */
            gap: 10px; /* Space between buttons */
            margin-top: 20px; /* Spacing above button group */
        }
        .button-group button {
            flex: 1; /* Equal width for buttons */
        }
    </style>
</head>
<body>

<div class="container">
    <form>
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" required placeholder="Enter your first name">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" required placeholder="Enter your last name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="type_of_training" class="form-label">Type of Training</label>
            <select class="form-control" name="type_of_training" id="type_of_training" required>
            <option value="" selected>Select type of training...</option>
                <option value="on-site" >On-site</option>
                <option value="online">Online</option>
                <option value="integrated">Integrated</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="date_of_training" class="form-label">Date of Training</label>
            <input type="date" class="form-control" name="date_of_training" id="date_of_training" required>
        </div>

        <div class="mb-3">
            <label for="section" class="form-label">Section</label>
            <select class="form-control" name="section" id="section" required >
            <option value="" selected>Select Section...</option>
                <option value="4" >4</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <div class="button-group mt-4">
            <button type="submit" class="btn btn-success">SAVE</button>
            <button type="button" class="btn btn-cancel">CANCEL</button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>





@endsection
