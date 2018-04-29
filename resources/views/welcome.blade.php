@extends('layouts.app')
@section('x')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('fonts/fontawesome/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                height: 100vh;
                margin: 0;    
            }

            {{--  .full-height {
                height: 100vh;
            }  --}}

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
                font-size: 70px;
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
                margin-bottom: 25px;
            }
            
            body {
                background-color: #ffc107;
                color: #343a40;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    {{--  @else  --}}

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <b class="text-dark"> Welcome  Web Store </b> <br/> <br/>
                    <i class="fas fa-shopping-cart fa-3x"></i>
                </div>


            </div>
        </div>
    </body>
</html>
@endsection
{{-- @include('layouts.footer') --}}