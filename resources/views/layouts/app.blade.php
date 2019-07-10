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

    <style type="text/css">

      @import url("http://fast.fonts.net/t/1.css?apiType=css&projectid=608430df-03a7-475c-88dd-670405b8a199");
          @font-face{
              font-family:"Helvetica Now Text W05_n4";
              src:url("fonts/34aa1526-948d-4e18-9bf7-fd91b4eae796.eot?#iefix") format("eot")
          }
          @font-face{
              font-family:"Helvetica Now Text W05";
              src:url("fonts/34aa1526-948d-4e18-9bf7-fd91b4eae796.eot?#iefix");
              src:url("fonts/34aa1526-948d-4e18-9bf7-fd91b4eae796.eot?#iefix") format("eot"),url("fonts/5eec4451-e90c-42e7-b4d8-9b8654a65568.woff2") format("woff2"),url("fonts/f7cf763b-e79b-4c28-af92-803e0c3f16d4.woff") format("woff"),url("fonts/4f32bc08-77d9-4675-bb6a-93ac6cc69cc7.ttf") format("truetype");
      font-weight: 400;
      font-style: normal;
          }
          @font-face{
              font-family:"Helvetica Now Text W05_i4";
              src:url("fonts/3c67490e-23f1-4a86-97a5-e3c16fedc7e8.eot?#iefix") format("eot")
          }
          @font-face{
              font-family:"Helvetica Now Text W05";
              src:url("fonts/3c67490e-23f1-4a86-97a5-e3c16fedc7e8.eot?#iefix");
              src:url("fonts/3c67490e-23f1-4a86-97a5-e3c16fedc7e8.eot?#iefix") format("eot"),url("fonts/db2aea0d-59aa-466a-b1c2-17f44663a0fe.woff2") format("woff2"),url("fonts/d99c363f-9e4a-47f4-b101-0ae1202ccd23.woff") format("woff"),url("fonts/5305b00d-26e8-4ffe-b991-22eeab693b07.ttf") format("truetype");
      font-weight: 400;
      font-style: italic;
          }
          @font-face{
              font-family:"Helvetica Now Text W05_n7";
              src:url("fonts/c193c18d-e4dc-4120-8e8a-09aeccba0d45.eot?#iefix") format("eot")
          }
          @font-face{
              font-family:"Helvetica Now Text W05";
              src:url("fonts/c193c18d-e4dc-4120-8e8a-09aeccba0d45.eot?#iefix");
              src:url("fonts/c193c18d-e4dc-4120-8e8a-09aeccba0d45.eot?#iefix") format("eot"),url("fonts/2a13627f-dba8-48e1-935c-a404f5293139.woff2") format("woff2"),url("fonts/ce7a1fe7-2605-427a-b064-a01ebce69295.woff") format("woff"),url("fonts/30856021-7394-4e14-b917-357ff12e6ebf.ttf") format("truetype");
      font-weight: 700;
      font-style: normal;
          }
          @font-face{
              font-family:"Poster Brush W05_o4";
              src:url("fonts/31869d5d-7941-404f-ad44-4d50ae0fe17b.eot?#iefix") format("eot")
          }
          @font-face{
              font-family:"Poster Brush W05";
              src:url("fonts/31869d5d-7941-404f-ad44-4d50ae0fe17b.eot?#iefix");
              src:url("fonts/31869d5d-7941-404f-ad44-4d50ae0fe17b.eot?#iefix") format("eot"),url("fonts/efde0365-9fbe-4819-b373-15b8d9a45f82.woff2") format("woff2"),url("fonts/e9cf1484-9392-4799-b57f-d9c465dd050b.woff") format("woff"),url("fonts/fa518b73-eade-47e4-8798-3f25e7edcc06.ttf") format("truetype");
      font-weight: 400;
      font-style: oblique;
          }

    </style>
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
</html>
