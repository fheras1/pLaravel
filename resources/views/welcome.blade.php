<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: #fff;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Alonso left F1
                </div>

                <div class="links">
                    <a href="https://www.autosport.com/f1/news/138030/the-fallout-from-alonso-f1-bombshell">Autosport</a>
                    <a href="https://www.autobild.es/noticias/fernando-alonso-retira-f1-final-temporada-290111">Autobild</a>
                    <a href="https://www.formula1.com/en/latest/headlines/2018/8/breaking--alonso-to-step-away-from-f1-at-end-of-2018.html">F1</a>
                    <a href="https://as.com/motor/2018/08/14/formula_1/1534232493_605617.html">AS</a>
                    <a href="http://www.marca.com/motor/formula1/2018/08/15/5b74677846163fbf078b4600.html">MARCA</a>
                </div>
            </div>
        </div>
    </body>
</html>
