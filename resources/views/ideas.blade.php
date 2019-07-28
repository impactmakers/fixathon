@extends('layouts.app')

@section('content')
    <section class="my-2 py-3" id='ideas'>
      <div class="container py-3">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h1>Ideas</h1>
            <p class="lead">We created some ideas to inspire you, but there is lot more to do!</p>
          </div>
        </div>

        <ideas-component></ideas-component>
      </div>


      <div id='register' class="container register-box mt-5 mb-5" style="background-image:url('img/icons/cup_alpha.png');">
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
    </section>

    <section class="bg-primary py-5 px-5 text-white bg-gradient-success">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 text-center">
            <h5>Join us to fight the biggest challenge of our generation, the Climate Emergency</h5>
          </div>
        </div>
      </div>
    </section>
    
    @include('partials.products')
    @include('partials.inspiration')
    @include('partials.registrationBanner')

@endsection