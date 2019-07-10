<!-- HEADER -->
@if(Request::path() === '/')
<header class="container header__container">
  <div class="inner header__inner">
    <ul class="header__nav header__nav--left">
      <li class="header__nav-item">
        <a class="header__nav-link" href="#about">What is it?</a>
      </li>
      <li class="header__nav-item mobile-hide">
        <a class="header__nav-link" href="#prizes">Prizes</a>
      </li>

    </ul>
    <a class="header__logo" href="/">
      <img src="{{asset('img/logo_sm.png')}}" class='header__logo--img' alt="Fixathon Logo">
    </a>
    <ul class="header__nav header__nav--right">

      <li class="header__nav-item mobile-hide">
        <a class="header__nav-link" href="#sponsors">Sponsors</a>
      </li>
      <li class="header__nav-item">
        @if (!Auth::check())
          <a class="header__nav-link" href="#register">Register</a>
        @else
          <a class="header__nav-link" href="/welcome">
            <span>Hi</span>
            <img alt="{{ Auth::user()->name }}" src="{{ Auth::user()->avatar }}" class="footer__im-from-avatar" style='margin-left:8px;border-radius:30px;margin-top:3px;'>
          </a>
        @endif
      </li>
    </ul>
  </div>
</header>
@else
<header class="container header__container">
  <div class="inner header__inner">
    <ul class="header__nav header__nav--left">
      <li class="header__nav-item">
        <a class="header__nav-link" href="{{url('/#about')}}">What is it?</a>
      </li>
      <li class="header__nav-item mobile-hide">
        <a class="header__nav-link" href="{{url('/#prizes')}}">Prizes</a>
      </li>

    </ul>
    <a class="header__logo" href="/">
      <img src="{{asset('img/logo_sm.png')}}" class='header__logo--img' alt="Fixathon Logo">
    </a>
    <ul class="header__nav header__nav--right">

      <li class="header__nav-item mobile-hide">
        <a class="header__nav-link" href="{{url('/#sponsors')}}">Sponsors</a>
      </li>
      <li class="header__nav-item">
        @if (!Auth::check())
          <a class="header__nav-link" href="{{url('/#register')}}">Register</a>
        @else
          <a class="header__nav-link" target='_blank' href="https://getmakerlog.com/@<?php echo Auth::user()->name ?>">
            <span>Hi</span>
            <img alt="{{ Auth::user()->name }}" src="{{ Auth::user()->avatar }}" class="footer__im-from-avatar" style='margin-left:8px;border-radius:30px;margin-top:3px;'>
          </a>
        @endif
      </li>
    </ul>
  </div>
</header>
@endif
<!-- END HEADER -->