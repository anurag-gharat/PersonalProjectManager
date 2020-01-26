<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/style.css">


    </head>
    <body>
        <div class="landing-page">
            <div class="row">
                <div class="col-md-6 landing-content">
                    <div class="promotional-lines">
                        <h1 class="bold">GET PRODUCTIVE!!</h1>
                        <h4>and make a todo for projects</h4>
                        <p>Plan all your projects and enlist all your tasks related to those projects and start working!Make necessary notes and add TODO'S for the same.</p>
                    </div>
                </div>
                <div class="col-md-6 landing-picture">
                    <img src="/img/landing2.png" alt="" srcset="">
                </div>
            </div>

        </div>
{{--         
        <div class="flex-center position-ref full-height">
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

<button class="button btn btn-primary" onclick="alert('hii')">click me</button>
 --}}



</body>
<script src="/js/app.js"></script>
</html>
