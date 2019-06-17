<!-- HEADER -->
<header class='bg-light'>
  <div class="container">

    <nav class="navbar navbar-expand-sm navbar-light no-gutters px-0">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo_sm.png')}}" class='headerLogo' height="50" alt="Fixathon Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav m-auto mt-2 mt-lg-0 px-3 px-sm-0" style="justify-content:space-evenly;">
          <li class="nav-item active">
            <a class="nav-link text-dark font-weight-bold text-right" href="#about">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold text-right" href="#prizes">Prizes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold text-right" href="#judges">Judges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold text-right" href="#sponsors">Sponsors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold text-right" href="#entries">Entries</a>
          </li>
        </ul>

        <ul class='navbar-nav m-auto mt-2 mt-lg-0 px-3 px-sm-0'>
          @guest
              <hr class='d-block d-sm-none'>
              <li class="nav-item">
                <a class="nav-link text-dark text-right" href="{{ route('login') }}">Login</a>
              </li>  
              <li class="nav-item">
                <a class="btn btn-success nav-link text-white px-2 font-weight-bold text-center col-3 col-sm-12 float-right" href="#register">Register</a>
              </li>
          @else
                Hi User!
          @endguest
        </ul>
      </div>
    </nav>
  </div>
</header>
<!-- END HEADER -->