<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Climate Fixathon') }} - The world's first online hackathon to help fix the climate</title>
    <meta name="description" content="Global hackathon for tech makers to help prevent climate breakdown">
    <meta name="keywords" content="hackathon,tech,climate change,climate emergency,climate breakdown,programmers,climate,event,global,makers,products">
    <meta name="Distribution" content="global"/>
    <meta name="Robots" content="all"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fixathon">
    <meta name="twitter:title" content="Fixathon - The world's first online hackathon for makers to help fix the climate">
    <meta name="twitter:description" content="Global hackathon for tech makers to help prevent climate breakdown">
    <meta name="twitter:creator" content="@fixathon">
    <meta name="twitter:image:src" content="{{asset('img/logo_sm.png')}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Fixathon - The world's first online hackathon for makers to help fix the climate" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="http://fixathon.io" />
    <meta property="og:image" content="{{asset('img/logo_sm.png')}}" />
    <meta property="og:description" content="Global hackathon for tech makers to help prevent climate breakdown" />
    <meta name="theme-color" content="#325d42"/>
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="//fast.fonts.net/jsapi/608430df-03a7-475c-88dd-670405b8a199.js"></script>
</head>
<body>
    <div id="app"> 
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
