<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



    <style>
    
    
            html, body {
                background-color: #fff;
                background-image: linear-gradient(to bottom right, lightblue, gray);
                color: #636b6f;
                font-family: 'Press Start 2P', cursive;
                font-size: 12px;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color: black;
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
                padding-top: 100px;
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

            .nav {
               margin: auto;
                top 0;
            }

            #footer {
                position: absolute;
                text-align: center;
                list-style-type: none;
                bottom: 0;
                width: 100%;

            }

            #loginb {
                background-color: rgba(0,0,0,0.2);
                border: none;
                border-radius:5px;
                transition-duration: 0.4s;
                font-size: 15px;
                margin: auto;
            }

            #loginb:hover{
            color: black;
            background-color: green;
            }

            .card {
                background-image: linear-gradient(to bottom right, lightblue, gray);
                width: 50rem;
                margin: auto;
                border-radius: 15px;
                font-size: 15px;
            }

            #login {
                border-radius: 5px;
            }

            #password {
            border-radius: 5px;
            }


            .table {
                margin: auto;
                
            }

            }

}           
            
        </style>
</head>
<body>
 
    <div id="app">
   
        <nav class= "navbar navbar-expand-lg navbar-light ">
        
            <div class="container">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                     
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @endif
                        
                   @if (Auth::check())
                   @if (Route::has('logout'))
                   <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>

                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>
                                       @endif
                                       @endif
                                   

                </div>
                
                <div class="top-left links">
                
                <a href="{{ URL("/") }}">Home</a>
                @if (Auth::check())

                <a href="{{ route("skills.index") }}">Skills</a>
                @endif



 
                @if (Auth::check() && Auth::user()->isAdmin())


                    
                            <a href="{{ route("register") }}">Add User</a>
                      
                 @endif


                 <a href="{{ URL("/userlist") }}">Userlist</a>

                </div>

                 @endauth
            
            </ul>
            </li>
        </nav>
        </div>
        </div>
        
        @yield('content')
        <div class="flex-center">
    
    <div id="footer" class="justify-content-center">
    <hr>
    

    <li class="align-center p-3"> Thanks for stopping by! Copyright 2020 ©etrotech<br>   Today is {{ date("d/m/yy l")}} and the current time is {{date("H.i")}}</li>
    <hr>
    
    </div>
    </div>
    </div>
</body>
</html>
