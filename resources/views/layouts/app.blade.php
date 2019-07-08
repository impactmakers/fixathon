<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fixathon') }}</title>
    <meta name="description" content="Global hackathon for tech makers to help prevent climate breakdown">
    <meta name="keywords" content="hackathon,tech,climate change,climate emergency,climate breakdown,programmers,climate,event,global,makers,products">
    <meta name="Distribution" content="global"/>
    <meta name="Robots" content="all"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fixathon">
    <meta name="twitter:title" content="The Climate Fixathon">
    <meta name="twitter:description" content="The world's first online hackathon for makers to help fix the climate">
    <meta name="twitter:creator" content="@fixathon">
    <meta name="twitter:image:src" content="{{asset('img/logo_sm.png')}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="The Climate Fixathon" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://fixathon.io" />
    <meta property="og:image" content="{{asset('img/logo_sm.png')}}" />
    <meta property="og:description" content="The world's first online hackathon for makers to help fix the climate" />
    <meta name="theme-color" content="#052AB5"/>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="//fast.fonts.net/jsapi/608430df-03a7-475c-88dd-670405b8a199.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style='display: none;'>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="./logo.png" class='headerLogo' height="50" alt="Fixathon Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
