<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fixathon') }}</title>
    <meta name="description" content="The world's first online hackathon for makers to help fix the climate. 2nd-30th August. Thusands in cash prizes to be won. Open to everyone.">
    <meta name="keywords" content="hackathon,tech,climate change,climate emergency,climate breakdown,programmers,climate,event,global,makers,products, developers,online,impact,positive,volunteer">
    <meta name="Distribution" content="global"/>
    <meta name="Robots" content="all"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fixathon">
    <meta name="twitter:title" content="The Climate Fixathon">
    <meta name="twitter:description" content="The world's first online hackathon for makers to help fix the climate">
    <meta name="twitter:creator" content="@fixathon">
    <meta name="twitter:image:src" content="{{asset('img/share-img.jpg')}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="The Climate Fixathon" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://fixathon.io" />
    <meta property="og:image" content="{{asset('img/share-img.jpg')}}" />
    <meta property="og:description" content="The world's first online hackathon for makers to help fix the climate" />
    <meta name="theme-color" content="#052AB5"/>
    
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
  
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2193289-10"></script>
  <script>
      function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
          if (imgDefer[i].getAttribute('data-src')) {
            imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
          }
        }
      }
      window.onload = init;

      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-2193289-10', { 'anonymize_ip': true });
  </script>
</body>
</html>
