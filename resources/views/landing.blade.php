@extends('layouts.app')

@section('content')

<!-- HEADER -->
<header class='bg-light'>
  <div class="container">

    <nav class="navbar navbar-expand-sm navbar-light no-gutters px-0">
      <a class="navbar-brand" href="#">
        <img src="./logo.png" class='headerLogo' height="50" alt="Fixathon Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav m-auto mt-2 mt-lg-0">
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
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold text-right" href="{{ route('register') }}">Register</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<!-- END HEADER -->


<!-- INTRO -->
<section class="py-5">
  <div class="container pt-3">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 text-center pb-md-5">
        <h1>
            Global <strong>hackathon</strong> for tech makers to help prevent <strong>climate breakdown</strong>
        </h1>

        <div class="row text-center justify-content-center pt-5">
          <div class="col-12 col-sm-4 col-lg-3 floating">
            <img alt="Dates" src="./imgs/icons/calendar.png" style='width:42px;'>
            <h5 class='pt-2 mb-0'><strong>Dates</strong></h5>
            <p>2nd Aug - 30th Aug </p>
          </div>
          <div class="col-12 col-sm-4 col-lg-3">
            <img alt="Prizes" src="./imgs/icons/trophy.png" style='width:42px;'>
            <h5 class='pt-2 mb-0'><strong>Prizes</strong></h5>
            <p>Thousands in cash to be won</p>
          </div>

          <div class="col-12 col-sm-4 col-lg-3">
            <img alt="Global" src="./imgs/icons/globe.png" style='width:42px;'>
            <h5 class='pt-2 mb-0'><strong>Global</strong></h5>
            <p>Open to Everyone</p>
          </div>
        </div>

        <div class="container register-box" style="background-image:url('imgs/icons/cup_alpha.png');">
            <h3 class="event-date col-9">
              Starting 2nd August
              <span> Join others <strong class="usersCount">45</strong> impact makers</span>
            </h3>

            <form action="register" method="POST" name="registerUser" class="registerUserForm">
              <input type="text" placeholder="Join the Fixathon, add your email" name="email" class="col-6 form-control mr-1" style="display:inline-block;" required="">
              <button type="submit" class="btn btn-success btn-inner--text col-3">Register</button>
              <div class="form-error" col-8=""></div>      
            </form>

            <div class="col-9 mx-auto px-0 text-left"><small>Full details announced soon. Subscribe to get notified</small></div>
        </div>  

      </div>
    </div>

  </div>
</section>
<!-- END INTRO -->

<!-- ABOUT -->
<section class="bg-primary my-4 py-5 px-5 text-white bg-gradient-success" id='about'>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col col-md-8 text-center">
        <h2>What is a Climate <strong>Fixathon?</strong></h2>
        <p class="lead mt-4">
            It's a month-long <small>(Earth won't be fixed in 2 days!)</small> hackathon for tech professionals to use their skills to help increase awareness of the climate change issue and people to take action.
        </p>

        <p class="lead">
            Any web or app-based project that aims to help restore a safe climate for our world is elegible. You can take part on your own or in a team. 
        </p>

        <p class="lead">
            You have the opportunity to help solving the biggest challenge of our generation! <br />Did we mention their are prizes?.
        </p>

        <h4 class='mt-5 mb-0 pb-0'>Starting 2nd August 2019</h4>
        <ul class='mx-0 px-0 text-white text-center'>
          <li class='timer'>
            <span id="days"></span>days
          </li>
          <li class='timer'>
            <span id="hours"></span>Hours
          </li>
          <li class='timer'>
            <span id="minutes"></span>Minutes
          </li>
          <li class='timer'>
            <span id="seconds"></span>Seconds
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- END ABOUT -->

<!-- CATEGORIES -->
<section class="my-4 py-5 px-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h2>What will I make?</h2>
        <p class="lead">
            There are 3 climate challenges which you can participate in with prizes for each:
        </p>
      </div>
    </div>

    <div class="row text-center mt-5">
      <div class="col-10 col-sm-8 col-md-4 col-lg-3 mx-sm-auto ml-md-auto px-3 py-3 mx-auto">
        <div class='card px-2 py-4 shadow-sm shadow-lg--hover min-height-100'>
            <img alt="image" class="img-fluid rounded m-auto mb-4" width='64' src="./imgs/icons/increase.png">
            <h5 class='mt-3'><strong>Awareness</strong></h5>
            <p class='mx-3'>Raise awareness of climate breakdown</p>
        </div>
      </div>

      <div class="col-10 col-sm-8 col-md-4 col-lg-3 mx-sm-auto ml-md-auto px-3 py-3 mx-auto">
        <div class='card px-2 py-4 shadow-sm shadow-lg--hover min-height-100'>
            <img alt="image" class="img-fluid rounded m-auto mb-4" width='64' src="./imgs/icons/heart.png">
            <h5 class='mt-3'><strong>Action</strong></h5>
            <p class='mx-3'> Help people take action against climate breakdown.</p>
        </div>
      </div>

      <div class="col-10 col-sm-8 col-md-4 col-lg-3 mx-sm-auto ml-md-auto px-3 py-3 mx-auto">
        <div class='card px-2 py-4 shadow-sm shadow-lg--hover min-height-100'>
            <img alt="image" class="img-fluid rounded m-auto mb-4" width='64' src="./imgs/icons/hammer.png">
            <h5 class='mt-3'><strong>Facilitation</strong></h5>
            <p class='mx-3'>Make Climate Emergency projects easier to create in the future.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END CATEGORIES -->

<!-- PRICES -->
<section class="bg-light my-5 py-5" id='prizes'>
  <div class="container py-3">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h1>Prizes</h1>
        <p class="lead">Our panel of climate and tech experts will chose a winner and runner up for each of the categories</p>
      </div>
    </div>

    <div class="row text-center pt-5  justify-content-center">
      <div class="col-12 col-sm-6 col-md-3">
        <img alt="medal" src="./imgs/icons/medal.png" class="img-fluid rounded m-auto mb-4" width="64">
        <h5 class='mt-3'><strong>Winner</strong></h5>
        <p class='display-4'><strong>$400</strong></p>
        <p class='lead'> +Benefit 1</p>
      </div>

      <div class="col-12 col-sm-6 col-md-3 pt-5 pt-sm-0">
        <img alt="runner up" src="./imgs/icons/runnerup.png" class="img-fluid rounded m-auto mb-4" width="64">
        <h5 class='mt-3'><strong>Runners up</strong></h5>
        <p class='display-4'>$100</p>
      </div>
    </div>
  </div>
</section>
<!-- END PRICES -->

<!-- JUDGES -->
<section class="my-4 py-5 px-2" id='judges'>
  <div class="container">
    <div class="row text-center justify-content-center mb-3">
      <div class="col-8">
        <h2>Judges</h2>
        <p class="lead">
            Our panel of climate and tech experts will choose a winner and 2 runner ups for each challenge.
        </p>
      </div>
    </div>

    <div class="row text-center mt-5 justify-content-center">
      <div class="col-10 col-sm-6 col-md-4 col-lg-3 px-3 py-3">
        <div class='min-height-100 card px-2 py-2 mb-3 shadow-md shadow-lg--hover' style=''>
            <img alt="Simon" class="img-thumbnail rounded-circle judge-img" src="./imgs/people/simon.jpg">
            <h5><strong>Simon Collison</strong></h5>
            <p class='px-2'>Designer, writer, occasional speaker. Director of New Adventures @naconf.</p>
            <a href='https://twitter.com/colly' target='_blank' class=''>@colly</a>
        </div>
      </div>

      <div class="col-10 col-sm-6 col-md-4 col-lg-3 px-3 py-3">
        <div class='min-height-100 card px-2 py-2 mb-3 shadow-md shadow-lg--hover'>
            <img alt="Michelle" class="img-thumbnail rounded-circle judge-img" src="./imgs/people/michelle.jpg">
            <h5><strong>Michelle Thorne</strong></h5>
            <p class='px-2'>Senior Program Officer at the Mozilla Foundation. Currently interested in making the internet carbon-neutral.</p>
            <a href='https://twitter.com/thornet' target='_blank' class=''>@thornet</a>
        </div>
      </div>

      <div class="col-10 col-sm-6 col-md-4 col-lg-3 px-3 py-3">
        <div class='min-height-100 card px-2 py-2 mb-3 shadow-md shadow-lg--hover'>
            <img alt="Anne-Laure" class="img-thumbnail rounded-circle judge-img" src="./imgs/people/anne.jpg">
            <h5><strong>Anne-Laure Le Cunff</strong></h5>
            <p class='px-2'>Founder @ness_labs • Running @makermag • msc #neuroscience candidate • scout @BackedVC • ex @google • creator of #diversity30.</p>
            <a href='https://twitter.com/anthilemoon' target='_blank' class=''>@anthilemoon</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END JUDGES -->

<!-- SPONSORS -->

<section class="my-4 py-5 px-2" id='sponsors'>
  <div class="container">
    <div class="row text-center justify-content-center mb-3">
      <div class="col-8">
        <h2>Sponsors</h2>
        <p class="lead">
            The Climate Fixathon prizes would not be possible without the support of the following companies and organisations.
        </p>
      </div>
    </div>

    <div class="row-70"></div>

    <div class="row text-center justify-content-center">
      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/1.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/6.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/5.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/8.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/3.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/9.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/7.png">
      </div>

      <div class="col-6 col-sm-4 col-md-3 m-sm-auto mb-2 mb-sm-5">
        <img alt="image" class="rounded-circle img-center img-fluid shadow-lg--hover p-2" src="./imgs/sponsors/2.png">
      </div>
    </div>
  </div>
</section>


<section class="section section-lg">
  <div class="container">
    <div class="card bg-gradient-success shadow-lg border-0">
      <div class="p-5">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3 class="text-white">We made the world better with you.</h3>
            <p class="lead text-white mt-3">Support all incredible impact makers by sponsoring this hackathon.</p>
          </div>
          <div class="col-lg-3 ml-lg-auto">
            <a href="./sponsors" class="btn btn-lg btn-block btn-white">Sponsor</a>
          </div>
        </div>
      </div>
    </div>
    <div class="become-donor">
      Our become a donor 💚 <a href="" class="btn btn-success ml-3">Donate</a>
    </div>
  </div>
</section>

<!-- END SPONSORS -->

<!-- ENTRIES -->
<section class="bg-dark my-5 py-3" id='entries'>
    <h2>Entries</h2>
</section>
<!-- END ENTRIES -->

<!-- TAKE PART -->
<section class="my-5">
  <div class="container">
    
    <div class="row text-right align-items-center-lg align-items-start pt-5">
      <div class="col-12 col-md-4 px-0 text-center">
        <h2>Want to Take part?</h2>

        <img src='./imgs/illustrations/<?= rand(1,3); ?>.svg' alt='Take part' class='d-none d-sm-block mt-5' />
      </div>

      <div class="col-12 col-md-7 offset-md-1 col-lg-6 col-xl-5 m-auto text-left pt-5 pt-md-0">
        <h3>
         <small class="text-muted">Anyone from around the world can take part in the Climate Fixathon as part of a team or as an individual.</small>
        </h3>

        <h5 class="mt-4 mt-xl-5"><strong>¿How to register your entry?</strong></h5>
        <p>The climate fixathon will be hosted on <a href='https://makerlog.com' target='_blank'>Makerlog</a> - a platform for makers to develop an dlaunch in the open.</p>
        <p>To take part you must create a user account on Makerlog and list your entry as a product on our Makerlog event page.</p>

        <div class='col-12 text-center my-4'>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg px-5 py-2">Register Now</a>
        </div>

        <h5 class="mt-4 mt-xl-5"><strong>¿Looking for team members?</strong></h5>
        <p>Join the Impact Makers <a href='https://join.slack.com/t/impact-makers-group/shared_invite/enQtNjQ2MTY3NDM1MjcxLWUwNjA1YWViZmI1NjQ5YTIzMjA1OWE2NzI3NzMwNzQ0ODBiMmZlMzI0YTI4MDUyMzlhNmZhZDFiOWZkODQ0Yjg' target='_blank'>#meet-makers</a> Slack channel.</p>

        <h5 class="mt-4 mt-xl-5"><strong>¿Don't know what you're going to work on yet?</strong></h5>
        <p>No problem! You could create the project when you want.</p>
      </div>
    </div>
  </div>
</section>
<!-- END TAKE PART -->

<!-- INSPIRATION -->
<section class="bg-light py-5 px-5 text-dark">
  <div class="container py-4">
    <div class="row">
      <div class="col text-center">
        <h2>Need Inspiration?</h2>
        <p class="lead">
            If you're struggling to work out an idea that you could work on for the Climate Fixathon we've got your back! Consider how you could use tech to help with any of these issues:
        </p>

        <div class="row text-left pt-4 px-5">
          <div class="col-12 col-md-6">
            <h6><strong>AWARENESS</strong></h6>
            <p class="lead pl-2">Help to increase media coverage of the issue</p>
            <p class="lead pl-2">Raise awareness for efforts to halt biodiversity loss and restore ecosystems</p>
            <p class="lead pl-2">Make people more aware of the climate impact of their personal choices</p>
            <p class="lead pl-2">Help raise awareness for political parties and charities who are prioritzing the planet</p>
          </div>

          <div class="col-12 col-md-6">
            <h6><strong>ACTION</strong></h6>
            <p class="lead pl-2">Help convince companies to reduce emissions</p>
            <p class="lead pl-2">Help reduce the demand for fossil fuels or unsustainable food soruces</p>
            <p class="lead pl-2">Help people feel the effects of climate breakdown on their lives</p>
            <p class="lead pl-2">Make it easier for people to transition to low carbon travel methods</p>
            <p class="lead pl-2">Help convince non-belivers that climate change is real</p>
          </div>

          <div class='col-12 mt-4 text-center'>
            <h3><small>Need <a href='{{ route("ideas") }}'>ideas</a>? We have a lot! </small></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END INSPIRATION -->

<!-- REGISTER SECTION -->
<section class="bg-primary py-5 px-5 text-white bg-gradient-success">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 text-center col-md-7">
        <h2>Have an idea that you like to enter? Join us!</h2>
      </div>
      <div class='col-12 text-center col-md-5 mt-4 mt-md-0 px-0'>
       <form action="/register" method="POST" name="registerUser" class="registerUserForm">
          <input type="text" placeholder="Join with email" name="email" class="col-6 form-control mr-1 col-md-12 col-lg-6" style="display:inline-block;" required="">
          <button type="submit" class="btn btn-success btn-inner--text col-3 col-md-12 mt-md-2 col-lg-5 mt-lg-0">Register</button>
          <div class="form-error" col-8=""></div>      
        </form> 
      </div>
    </div>
  </div>
</section>
<!-- END REGISTER SECTION -->

<!-- FOOTER -->
<footer class="footer-small pt-3 bg-light">
  <div class="container py-3">
    <div class="row text-center align-items-center">
      <div class="col">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Terms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container pb-3">
    <div class="row text-center align-items-center">
      <div class="col-12 col-sm-6 col-md-4 text-sm-left">
        <img alt="image" src="./logo.png" height="80" style='margin-top:-10px;'>
      </div>

      <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0 text-center text-sm-right text-md-center">
        © 2019 Impact Makers
      </div>

      <div class="col-12 col-md-4 mt-4 mt-md-0 text-center text-md-right">
        <a href="" class="mx-2"><i class="fab fa-twitter" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->

<script>
  const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

  let countDown = new Date('Aug 2, 2019 00:00:00').getTime(),
    x = setInterval(function() {
        let now = new Date().getTime(),
        distance = countDown - now;

    document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
    }, second)
</script>

@endsection