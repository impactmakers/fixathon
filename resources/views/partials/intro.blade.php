<!-- INTRO -->
<section class="py-5">
  <img class='d-none d-lg-block' src="{{asset('img/world.png')}}" style='height: 100%;position:absolute;left:-380px;opacity:0.25;margin-top:-15px;' />
  <div class="container pt-3">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 text-center pb-md-5">
        <h1>
            Global <strong>hackathon</strong> for tech makers to help prevent <strong>climate breakdown</strong>
        </h1>

        <div class="row text-center justify-content-center pt-5">
          <div class="col-12 col-sm-4 col-lg-3 floating">
            <img alt="Dates" src="{{asset('img/icons/calendar.png')}}" style='width:42px;'>
            <h5 class='pt-2 mb-0'><strong>Dates</strong></h5>
            <p>2nd Aug - 30th Aug </p>
          </div>
          <div class="col-12 col-sm-4 col-lg-3">
            <img alt="Prizes" src="{{asset('img/icons/trophy.png')}}" style='width:42px;'>
            <h5 class='pt-2 mb-0'><strong>Prizes</strong></h5>
            <p>Thousands in cash to be won</p>
          </div>

          <div class="col-12 col-sm-4 col-lg-3">
            <img alt="Global" src="{{asset('img/icons/globe.png')}}" style='width:42px;'>
            <h5 class='pt-2 mb-0'><strong>Global</strong></h5>
            <p>Open to Everyone</p>
          </div>
        </div>

        <div id='register' class="container register-box" style="background-image:url('img/icons/cup_alpha.png');">
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