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
        @if(!session()->has('logged_in'))
          <a class="header__nav-link" href="#register">Register</a>
        @else
          Hi {{ Session::get('username')}}
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
        @if(!session()->has('logged_in'))
          <a class="header__nav-link" href="{{url('/#register')}}">Register</a>
        @else
          Hi {{ Session::get('username')}}
        @endif
      </li>
    </ul>
  </div>
</header>
@endif
<!-- END HEADER -->