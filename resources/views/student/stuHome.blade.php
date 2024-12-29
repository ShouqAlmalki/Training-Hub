@extends('layouts.stu')


@section('title', 'Home')
@section('content')

{{--<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />--}}

{{--<div class="h-auto d-inline-block" style="width: 120px;">--}}

    <br><br>
    <title>Home</title>
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

    .container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        width: 80%;
        max-width: 1200px;
    }

    .chat-container,
    .announcement-container {
        flex: 1;
        width: 500px;
        height: 400px;
        background-color: rgb(236, 242, 247);
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .chat-box {
        flex: 1;
        overflow-y: auto;
        margin-bottom: 10px;
        padding: 10px;
        background-color: #ffffff;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
    }

    .message {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        max-width: 80%;
        word-wrap: break-word;
    }

    .message.sent {
        align-self: flex-end;
        background-color: #d1e7dd;
    }

    .message.received {
        align-self: flex-start;
        background-color: #f8d7da;
    }

    .input-group {
        display: flex;
        gap: 10px;
    }

    .input-group input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .input-group button {
        padding: 10px 20px;
        background-color:rgb(0, 62, 128);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .input-group button:hover {
        background-color:rgb(3, 89, 182);
    }

    </style>
</head>
<body>

<div class="container">
    <div class="chat-container">
        <h1>Messages from supervisor</h1>
        <div class="chat-box">
            <div class="message received">Hello, how are you?</div>
            <div class="message sent">I’m fine, thank you!</div>
            <div class="message received">Please submit your report by tomorrow.</div>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Enter message">
            <button>Send</button>
        </div>
    </div>
    <div class="announcement-container">
        <h1>Announcements</h1>
        <p>No announcements available</p>
    </div>
</div>




</body>
</html>



@endsection
