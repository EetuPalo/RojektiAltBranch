<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Projekti</title>

      
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                
                position: absolute;
                left: 10px;
                top: 18px;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> 
    </head>
    <body>-->
    @extends ("layouts.app")
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Add user</a>
                        @endif
                    @endauth
                </div>
                <div class="top-left links">
                <a href="{{ route('login') }}">Home</a>
                </div>
            @endif
           -->
          
           @section('content')
            <div class="content">
           
                <div class="title m-b-md">
                    Kehitysseuranta hommeli
                </div>
                <p>Welcome to the home page of individual developement tracker!<br>
                By logging in you are able to track and add skills on your developement page.
                If you do not have accounts for the website, please contact to the admins of the page.<br>

                <h1> ¯\_(ツ)_/¯</h1></p>
            </div>
            </div>
        </div>
@endsection
