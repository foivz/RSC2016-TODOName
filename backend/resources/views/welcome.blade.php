<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quizzes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
            a{
                text-decoration: none;
                font-size: 30px;
                background: #dedede;


            }
            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @extends('layouts.app')

    <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Quizzes
                </div>

                @if (Route::has('login'))
                        @if (Auth::check())
                            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                        @else
                            <a href="redirectFacebook" class="btn btn-primary">Login with Facebok</a>
                            <a href="redirectGoogle" class="btn btn-primary">Login with Google</a>
                    @endif
                @endif
            </div>
        </div>
    </body>
</html>
