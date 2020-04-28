<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="shortcut icon" href="{{ asset('css/images/title.ico') }}" />
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="fullscreen-bg">
            <video loop muted autoplay poster="{{ asset('css/images/videoframe.jpg') }}" class="fullscreen-bg__video">
                <source src="{{ asset('css/videos/Dragons.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div id="app">  
            <div class="position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">                        
                        @auth
                            @section('url', url('/home'))
                            @include('layouts.nav')
                        @else
                            @section('url', url('/'))
                            @include('layouts.nav')
                        @endauth
                        
                    </div>
                @endif
            </div>
        </div>
        <div class="content">
            <img src="{{ asset('css/images/logo3.png') }}" alt="Overwatch Logo">
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
