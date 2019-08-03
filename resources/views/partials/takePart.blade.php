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
          To take part you must <a href='https://getmakerlog.com/begin?next=https://fixathon.io/redirect/makerlog' target='_blank'>create a user account</a> on Makerlog and register to attend the Climate Fixathon.
        </p>                

        <h2 class="takepart__sub-title">Join with Makerlog:</h2>
        <div class="takepart__actions">
          <a class="takepart__cta takepart__cta--one" href="{{ url('redirect/makerlog') }}" target="_blank">
            <button type="submit" class="btn-simple btn-md btn-green btn-mobile">I have an account</button>
          </a>

          <a class="takepart__cta" href="https://getmakerlog.com/begin?next=https://fixathon.io/redirect/makerlog" target="_blank">
            <button type="submit" class="btn-simple btn-md btn-green btn-mobile">I don't have an account</button>
          </a>
        </div>
      @else
        <p class="takepart__p">  
          You already joined <strong>The Climate Fixathon</strong>. <a title="Discover next steps" href="/welcome">Discover next steps</a>.
        </p>
      @endif

      <h3 class="takepart__small-title">Looking for team members?</h3>
      <p class="takepart__p--lead">Ask in the Impact Makers <a href='https://join.slack.com/t/impact-makers-group/shared_invite/enQtNjQ2MTY3NDM1MjcxLWUwNjA1YWViZmI1NjQ5YTIzMjA1OWE2NzI3NzMwNzQ0ODBiMmZlMzI0YTI4MDUyMzlhNmZhZDFiOWZkODQ0Yjg' target='_blank'>#meet-makers</a> Slack channel or tweet with the hashtag <a title="Tweet with #fixathonteamup" href="https://twitter.com/intent/tweet/?text=%20Team%20up%20with%20me%20for%20The%20Climate%20%40Fixathon%20%23fixathonteamup" target='_blank'>#fixathonteamup</a>.
      </p>
      <br />
      <h3 class="takepart__small-title">Don't know what you're going to work on yet?</h3>
      <p class="takepart__p--lead">No problem! Please still register for the event. You can decide on your project later. We’ve created a <a title="Fixathon Project Inspiration" href='https://www.notion.so/fixathon/Fixathon-Project-Inspiration-1b44731d0057436da6bb41f1c09207af' target='_blank'>Fixathon Project Inspiration</a> page to help guide and inspire you. Hopefully, something you find will spark an idea.</p>
     
      <p>To learn more read our <a href="/faq" title="FAQs">FAQs</a>.</p>
    </div>
  </div>
</section>
<!-- END TAKE PART -->