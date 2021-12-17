<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
        }
        .content {
                text-align: center;
                width: 900px;
                margin: auto;
                background-color: violet;
                height: 100%;
             }

        .title {
                font-size: 84px;
            }
        .menu{
            height: 10%;
            width: 100%;
            background-color: wheat;
            display: flex;
            align-items: center;
            justify-content: end;
        }
        .menu a{
            padding: 0px 10px;
            text-decoration: none;
            color: black;
        }
        .menu a:hover{
            border-bottom: 6px solid white;
        }
    </style>
    </head>
<body>
    <div class="content">
        <div class="menu">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('about') }}">About Us</a>
                    <a href="{{ url('contacts') }}">Contacts</a>
        </div>
        <h1 class="title">{{ $data }}</h1>
    </div>
</body>