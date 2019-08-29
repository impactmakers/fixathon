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
          <h3>Submit Your Product</h3>
          <p>  

            To submit your project for consideration you must complete our project submission form by 23:59 PT on Friday 30th August. Check it out for more information on what you need to do.
          </p>
          <br />

          <a class="intro-submit-btn" href="https://forms.gle/USjZHhi2KbM2xztJ9">
              <button type="submit" class="btn-simple btn-md btn-white-blue btn-mobile"
              >Submit your project</button>
            </a>
 
                

        </div>
      </div>

    <ul class="intro__next-list">
      <li class="intro__next-item">
            <h3>Thanks for taking part 🙌</h3>
            <p>It's been amazing to see so many people from around the globe taking part in the Fixathon. We wish you all the best and hope your projects help fix the climate!</p>
            <p>If you have a question about the event please <a href="mailto:hi@fixathon.io">email us</a> or contact <a href="https://twitter.com/shylands">@shylands</a> or <a href="https://twitter.com/jp_aulet">@jp_aulet</a>.</p>
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

  let countDown = new Date(Date.UTC('2019', '07', '31', '07', '00', '00')).getTime(),x = setInterval(function() {
    let now = new Date().getTime(),
    distance = countDown - now;
    document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
  }, second)
</script>

<!-- END INTRO -->

