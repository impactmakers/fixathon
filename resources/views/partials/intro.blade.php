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
      <a class="intro__cta" href="https://getmakerlog.com/events/the-climate-fixathon/">
        <button type="submit" class="btn-simple btn-lg btn-green btn-mobile">View Event</button>
      </a>

      <div class="intro__secondary-cta">
        <a href="#about">
          Learn more
        </a>
      </div>
    @endif
  </div>
</section>


<!-- END INTRO -->