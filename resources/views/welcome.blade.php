<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('https://www.csu.edu.ph/img/favicon.ico') }}" rel="icon" type="image/png">

        <!-- Styles -->
        <style>
            html, body {

                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                /* height: 100% ; */
                width: 100%;
                background-color: rgb(78, 115, 223);
                clip-path: polygon(82% 0, 100% 0, 100% 65%, 18% 100%, 0 100%, 0 35%);
                position: absolute;
                z-index: -1;
            }

                /*
                background-color: #fff;
                color: #636b6f;
                */

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
                color: #fafafa;
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
/*             body>#bg{
                height: 100% ;
                width: 100%;
                background-color: rgb(2, 211, 248);
                clip-path: polygon(82% 0, 100% 0, 100% 65%, 18% 100%, 0 100%, 0 35%);
                position: absolute;
                z-index: -1; */
            }
        </style>
    </head>
    <body id="bg">
        <div  class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CSU HelpDesk System
                </div>

                <div class="links">
                    <a href="{{ route('tempreg') }}">TEMP LOGIN</a>
                    <a href="https://lens.csugonzaga.net/">CSU LENS</a>
                    <a href="https://www.csu.edu.ph/">CSU WEBSITE</a>
                    <a href="https://odms.csugonzaga.net/login">ODMS</a>
                    <a href="https://gbs.csugonzaga.net/">GBS</a>
                    <a href="https://library.csugonzaga.net/">Library Management</a>
                    <a href="https://koha.csugonzaga.net/">Koha</a>

                </div>
            </div>
        </div>
    </body>
</html>
