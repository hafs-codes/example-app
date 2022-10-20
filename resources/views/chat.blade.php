<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('/css/chat.css')}}">
</head>

@extends('navbar')

@section('content')

<body class="main">
    <div class="wrapper">
        <div class="title">AI Chatbot</div>
        <div class="box">
            <div class="item">
                <div class="icon">
                <i class='bx bxs-user'></i>
                </div>
                <div class="msg">
                    <p>Hello everyone, How are you?</p>
                </div>
            </div>

            <br clear="both">

            <div class="item right">
                <div class="msg">
                    <p>Nice</p>
                </div>
            </div>
        </div>

        <div class="typing-area">
            <div class="input-field">
                <input type="text" placeholder="Type your message" required>
                <button>Send</button>
            </div>
        </div>
    </div>

</body>
</html>
@endsection