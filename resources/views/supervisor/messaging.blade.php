@extends('layouts.app')

@section('title', 'Messaging')
@section('content')
<br><br>
<title>Messages and Announcements</title>
<style>
    .container {
        display: flex;
        justify-content: flex-start; /* Align items to the left */
        align-items: flex-start;
        gap: 20px;
        min-height: 100vh;
    }

    .box {
        width: 1400px; /* Increased width slightly to 1400px */
        height: 600px; /* Increased height from 500px to 600px to make it bigger from the bottom */
        background-color: lightblue;
        border: 2px black solid;
        padding: 10px;
        text-align: left; /* Align content to the left */
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .box h1 {
        margin-top: 0;
    }

    .select-container {
        width: 100%;
        display: flex;
        justify-content: flex-end; /* Keep selects aligned to the right */
        margin-bottom: 30px; /* Increased margin to add space below the select boxes */
    }

    select.form-select {
        width: 60%; /* Width for the first select */
    }

    select.form-select.small {
        width: 30%; /* Width for the second select (smaller) */
    }

    select.form-select.tiny { 
        width: 20%; /* Make the "Select user" dropdown very small */
        margin-right: 10px; /* Add a small gap between the selects */
    }

    /* Adjust message content styling */
    .message-content {
        background-color: #28a745; /* Green background */
        color: white; /* White text */
        padding: 5px; /* Reduced padding */
        margin-bottom: 15px; /* Increased margin-bottom to add space between the select boxes and the message box */
        border-radius: 5px;
        width: 100%; /* Full width */
    }

    /* Subtle Green Message Box with Shadow Effect */
    .message-subtle {
        background-color: #d1e7dd; /* Light subtle green background */
        color: #0f5132; /* Darker green text */
        padding: 5px; /* Reduced padding */
        margin-bottom: 15px; /* Increased margin to add space between message boxes */
        border-radius: 5px;
        width: 100%; /* Full width */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1), 0px 4px 8px rgba(0, 0, 0, 0.1), 0px 4px 10px rgba(0, 0, 0, 0.15); /* Multiple shadow layers */
    }

    /* Add small text under each message with reduced margin */
    .message-footer {
        font-size: 12px; /* Small font size */
        color: black; /* Black color for the text */
        margin-top: 2px; /* Reduced margin-top to bring 'Created' closer */
    }

    /* Add space between the last message and the input field */
    .input-container {
        margin-top: 20px; /* Adds space between the last message and the input field */
    }
</style>

<div class="container">
    <div class="box">
        <div class="select-container">
            <select class="form-select tiny" aria-label="Default select example">
                <option selected>select section</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <select class="form-select small" aria-label="Default select example">
                <option selected>select user...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <!-- Message Content Box on the Left -->
        <div class="message-content">
            <p>message content</p>
            <!-- Small "Created" text -->
            <div class="message-footer">Created</div>
        </div>

        <!-- Subtle Green Message Box with Shadow Effect - Repeated Twice -->
        <div class="message-subtle">
            <p>Created Date</p>
            <div class="message-footer">Created</div>
        </div>

        <div class="message-subtle">
            <p>Created Date</p>
            <div class="message-footer">Created</div>
        </div>

        <div class="message-subtle">
            <p>Created Date</p>
            <div class="message-footer">Created</div>
        </div>

        <!-- Added space between the last message and the input field -->
        <div class="input-container">
            <div class="mb-3">
                <label for="Input" class="form-label">message content</label>
                <input type="text" class="form-control" id="Input" placeholder="Enter message content...">
            </div>
        </div>


        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Send</button>
          </div>

         
        
        <style>
            .send-button {
                background-color: #006392; /* لون الخلفية */
                border-radius: 5px; /* جعل الزر ذو زوايا دائرية */
                font-size: 16px; /* تغيير حجم النص */
                transition: background-color 0.3s ease; /* تأثير الانتقال لتغيير اللون */
            }
        
            .send-button:hover {
                background-color: #004b69; /* تغيير اللون عند التمرير */
                cursor: pointer; /* تغيير المؤشر عند التمرير */
            }
        </style>
        

    </div>
</div>
@endsection
