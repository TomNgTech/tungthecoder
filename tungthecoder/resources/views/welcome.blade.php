<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/tungthecoder/public/favicon.ico" type="image/x-icon" />

        <title>Tung The Coder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="/tungthecoder/public/css/app.css" type="text/css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                        <a href="{{ url('/home') }}">Home</a>

                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>

                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    tungthecoder
                </div>
                <a class="button is-rounded is-primary is-outlined has-text-weight-semibold m-t-10" href="/home">Go To My Home Page &nbsp;<i class="fas fa-arrow-right"></i></a>

            </div>
        </div>
        
        
        <script type="text/javascript" src="/tungthecoder/public/js/app.js"></script>

    </body>
</html>
