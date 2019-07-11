<!-- PRICES -->
<section class="container prizes__container" id="prizes">
  <div class="inner prizes__inner">
    <div class="centered__header prizes__header">
      <h1 class="brush__title brush__title--large centered__title prizes__title">
        What can I win?
      </h1>
      <p class="centered__intro prizes__intro">
      If your project is selected as the winner of our <strong>Action</strong>, <strong>Awareness</strong> or <strong>Facilitation</strong> award you’ll receive:
      </p>
    </div>
    <div class="prizes">
      <div class="prize prize__winner">
        <h3 class="prize__title prize__title--winner">
          <img alt="Winners" class="prize__icon" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('img/icons/winners.svg')}}">
          Winners
        </h3>
        <h2 class="prize__amount">$1,500</h2>
        <span class="prize__strapline">Cash for your team to spend</span>
        <ul class="prize__items">
          <li>+ Free <a href='https://sketchapp.com' target='_blank'>Sketch</a> licenses</li>
          <li>+ Free <a href='https://egghead.io' target='_blank'>Egghead.io</a> licenses</li>
          <li>+ Free <a href='https://getkirby.com' target='_blank'>Kirby</a> licenses</li>
          <li>+ Free <a href='https://drawkit.io' target='_blank'>Drawkit</a> illustrations</li>

          <li>+ 100 trees planted by <a href='https://offset.earth' target='_blank'>Offset Earth</a></li>
        </ul>
      </div>
      <div class="prize prize__runnerups">
        <h3 class="prize__title prize__title--runnerups">
          <img alt="Runner ups" class="prize__icon" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('img/icons/runnerups.svg')}}">
          Runner ups
        </h3>
        <h2 class="prize__amount">$300</h2>
        <span class="prize__strapline">Cash for your team to spend</span>
        <ul class="prize__items">
          <li>+ 25 trees planted by <a href='https://offset.earth' target='_blank'>Offset Earth</a></li>
        </ul>
      </div>
    </div>

    @if (!Auth::check())
      <div class="prizes__cta-banner">
        <h1 class="prizes__cta-title">
          Want to take part in the Climate Fixathon?
        </h1>
        <a class="prizes__cta" href="#register">
          <button type="submit" class="btn-simple btn-md btn-green btn-mobile">Register Now</button>
        </a>
      </div>
    @endif    
  </div>
</section>
<!-- END PRICES -->