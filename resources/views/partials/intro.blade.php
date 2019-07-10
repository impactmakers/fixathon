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
        2nd-30th August, +$10,000 in prizes, Open to everyone 
      </li>
    </ul>   

    @if (!Auth::check())
      <a class="intro__cta" href="#register">
        <button type="submit" class="btn-simple btn-lg btn-green btn-mobile">Register Now</button>
      </a>

      <div class="intro__secondary-cta">
      <a href="#about">
        Learn more
      </a>
    @endif
</div>
  </div>
</section>
<!-- END INTRO -->