<!-- TAKE PART -->

<section class="container takepart__container" id="register">
  <div class="inner twocol__inner takepart__inner">
    <h1 class="brush__title brush__title--large twocol__title takepart__title">
    Want to Take part?
    </h1>
    <div class="twocol__text takepart__text">
      <p class="twocol__intro takepart__intro">
      Anyone from around the world can join the Climate Fixathon as an individual or as part of a team.
      </p>
      <h2 class="takepart__sub-title">How to register your entry</h2>
      <p class="takepart__p--lead">
        The Climate Fixathon will be hosted on <a href='https://getmakerlog.com' target='_blank'>Makerlog</a> - a platform for makers to develop and launch in the open.
      </p>

      @if (!Auth::check())
        <p class="takepart__p">  
          To take part you must <a href='https://getmakerlog.com/begin?next=http://www.leaguemakers.com/redirect/makerlog' target='_blank'>create a user account</a> on Makerlog and register to attend the Climate Fixathon event by 1st August 2019 at 12:00 GMT.
        </p>
                
        <a class="takepart__cta" href="{{ url('redirect/makerlog') }}" target="_blank" style='margin:0px auto 30px;'>
          <button type="submit" class="btn-simple btn-lg btn-green btn-mobile">Join with Makerlog</button>
        </a>

        <h3 class="takepart__small-title">Don't have MakerLog Account? Create one & join:</h3>
        <a class="takepart__cta" href="https://getmakerlog.com/begin?next=http://www.leaguemakers.com/redirect/makerlog" target="_blank" style='margin: 0px auto 40px;'>
          <button type="submit" class="btn-simple btn-lg btn-green btn-mobile">Register with Makerlog</button>
        </a>
      @else
        <p class="takepart__p">  
          You already joined <strong>The Climate Fixathon</strong>. You could go to Makerlog to add your product, tasks, add team members & more:
        </p>
        
        <a class="takepart__cta" href="https://getmakerlog.com/events/the-climate-fixathon" target="_blank">
          <button type="submit" class="btn-simple btn-lg btn-green btn-mobile">View Event</button>
        </a>
      @endif

      <h3 class="takepart__small-title">Looking for team members?</h3>
      <p class="takepart__p--lead">Ask in the Impact Makers <a href='https://join.slack.com/t/impact-makers-group/shared_invite/enQtNjQ2MTY3NDM1MjcxLWUwNjA1YWViZmI1NjQ5YTIzMjA1OWE2NzI3NzMwNzQ0ODBiMmZlMzI0YTI4MDUyMzlhNmZhZDFiOWZkODQ0Yjg' target='_blank'>#meet-makers</a> Slack channel or tweet with the hashtag <a href='https://twitter.com/search?f=tweets&vertical=default&q=%23fixathonteamup&src=typd' target='_blank'>#fixathonteamup</a>.</p>
      <br />
      <h3 class="takepart__small-title">Don't know what you're going to work on yet?</h3>
      <p class="takepart__p--lead">No problem! Please still register for the event. You can decide on your project later. Check out our <a href="https://coggle.it/diagram/XSNu7lj7lQY-PW-r/t/our-planet's-climate-is-breaking-down-root-causes-of-this/858ceeb6df601a9dbba5520c1d3b3443165f776450d66d3dd66b60beef969648">Climate Breakdown Root Causes Mind Map</a> to discover a problem to solve.</p>
     
      <p>To learn more read our <a href="/faq" title="FAQs">FAQs</a>.</p>
    </div>
  </div>
</section>

<!-- END TAKE PART -->