<!-- INTRO -->
<section class="container top__container intro__container">
  <div class="inner intro__inner"> 
    <div class="intro__header">
      <div class="intro__header-content">
        <h1 class="intro__title">
          The Fixathon is underway ⏰ 
        </h1>
        <ul class="intro__key intro__key--welcome">
          <li class="intro__key-item">
            Here's what to do next:
          </li>
        </ul>   
      </div>


      <div class="intro__timer">
        <h4 class=''>It ends in</h4>
        <ul class=''>
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


    <div class="intro__sections">
      <div class="intro__todo">
        <div class="intro__todo-content">
          <h2>It's time to get to work. We'd love to see everyone working as publically as possible to raise awareness in the tech community of climate breakdown. Here are a few ideas of things you can do:</h2>
          <ol>
          

            <li>We'll be adding <a href="https://getmakerlog.com/discussions/">Daily Standup threads on Makerlog</a>. Feel free to reply with what you plan to work on that day.</li>
            <li>Add your completed tasks and milestones to <a href="https://getmakerlog.com/log/">your Makerlog profile</a>.</li>
            <li>Live stream via Twitch on the Makerlog event.</li>
            <li>Tweet your progress using the <a href="https://twitter.com/search?q=fixathon&src=typed_query">#fixathon</a> and <a href="https://twitter.com/search?q=%23fixtheclimate&src=typed_query">#FixTheClimate</a> hashtags.</li>
            <li>Create a project channel in <a href="https://techimpactmakers.com/">Impact Makers</a> to communicate/get feedback.</li>
          </ol>
          <div class="intro__todo-thanks">
            <h3>Thanks for taking part 🙌</h3>

            <p>It's amazing to see so many people from around the globe taking part in the Fixathon. We wish you all the best and hope your projects help fix the climate!</p>
            <p>If you have a question about the event please <a href="mailto:hi@fixathon.io">email us</a> or contact <a href="https://twitter.com/shylands">@shylands</a> or <a href="https://twitter.com/jp_aulet">@jp_aulet</a>.</p>
          </div>

        </div>
      </div>



    <ul class="intro__next-list">
      <li class="intro__next-item">
        <h3>Add your Product</h3>
        <p>You must add your project to Makerlog before 23:59 PT on August 1st. All you need to do is visit your <a href="https://getmakerlog.com/products/">Makerlog products page</a> > Add your product > Whilst editing access the Events tab > Press 'Add Product' on the Fixathon event.</p>
        <p> That's it! Please note that only the product owner can do this, don't forget to add your teammates on the Team tab too!</p>
        <div class="intro__next-cta">
          <a href="https://getmakerlog.com/products/" title="Add your Product now" target='_blank'>
            <button type="submit" class="btn-simple btn-sm btn-green btn-full-width">Add your Product now</button>
          </a>
        </div>

      </li>
      <li class="intro__next-item">
        <h3>Join Our Weekly Video Chat</h3>
        <p>Online hackathons lack that IRL event buzz, so we've decided to hold a weekly Zoom call for all participants. It's a great opportunity to get to know each other, chat about your project and the climate emergency. 
        </p><p>The first one will be this Saturday 3rd August at 9:00AM CEST for 1 hour, feel free to drop in! Click here to <a href="https://everytimezone.com/s/eeb3c996">see the time in your timezone</a>.</p>
        <div class="intro__next-cta">
          <a href="https://zoom.us/j/790951563" title="Join the Zoom Call" target='_blank'>
            <button type="submit" class="btn-simple btn-sm btn-green btn-full-width">Join the Zoom Call</button>
          </a>
        </div>
      </li>
    </ul> 
  
    </div>

  </div>
</section>

<script>
  const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;
  let countDown = new Date('Aug 30, 2019 00:00:00').getTime(),
    x = setInterval(function() {
        let now = new Date().getTime(),
        distance = countDown - now;
    document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
    }, second)
</script>

<!-- END INTRO -->

