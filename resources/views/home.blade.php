<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
                background-color: #fff;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                height: 100vh;

        }
        .content {
                text-align: center;
            }

        .title {
            font-size: 75px;
            margin-top: 100px;

            }
        .jumbo{
            width: 100vw;
            height: 700px;
            background-image: url(https://cdn.pixabay.com/photo/2014/11/16/15/15/field-533541_960_720.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position-y: center; 
        }
        .container{
            width: 900px;
            margin: auto;
            background-color: violet;
            height: 100%;
        }
        .menu{
            height: 10%;
            width: 100%;
            background-color: wheat;
            display: flex;
            align-items: center;
            justify-content: end;
            padding-right: 30px;
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
        <div class="jumbo">
            <div class="container">
                <div class="menu">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('about') }}">About Us</a>
                    <a href="{{ url('contacts') }}">Contacts</a>
                </div>
                <div class="title">
                    {{ $title }}
                </div>
        </div>  
            
        </div>
    </div>
</body>

</html>