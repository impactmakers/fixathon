<!-- INTRO -->
<section class="container top__container intro__container">
  <div class="inner intro__inner"> 
    <h1 class="intro__title">
        @if (Auth::check())
          Congratulations! You <strong>joined</strong> the
        @else
          The
        @endif
         world's first online hackathon to help fix the climate
    </h1>
    <ul class="intro__key mobile-hide">
      <li class="intro__key-item">
        🗓 2nd-30th August</li>
      <li class="intro__key-item">
        🏆 Prize value of $10k+</li>
      <li class="intro__key-item">
        🌎 Open to everyone 
      </li>
    </ul>
    <ul class="intro__key tablet-hide">
      <li class="intro__key-item intro__key-item--mobile">
        2nd-30th August, Prize value of $10k+, Open to everyone 
      </li>
    </ul>   

    @if (!Auth::check())
      <div class='takepart__actions'>
        <a class="intro__cta intro__subcta" href="/entries">
          <button type="submit" class="btn-simple btn-md btn-green btn-mobile"
          >View the Fixathon Winners</button>
        </a>
      </div>

      <div class="intro__secondary-cta">
        <a href="#about">
          Learn more
        </a>
      </div>

      <!--
      <a class="intro__cta" href="#register" style='margin-top:50px;'>
        <div class='intro__key-item' style='margin-bottom:20px;'> 📢 Announce: We extended the deadline until 08/30. Take part!</div>
        <button type="submit" class="btn-simple btn-lg btn-green btn-mobile centered__intro"
        >Register Now</button>
      </a>
      -->
    @else
      <a class="intro__cta" href="https://getmakerlog.com/events/the-climate-fixathon/">
        <button type="submit" class="btn-simple btn-lg btn-green btn-mobile">View the Event</button>
      </a>
    @endif
  </div>
</section>
<!-- END INTRO -->