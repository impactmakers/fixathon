
<div class="border-img__top border-img__top--blue"></div>
<section class="container about__container" id="about">
  <div class="inner twocol__inner about__inner">
    <h1 class="brush__title brush__title--large twocol__title about__title">
      What is a climate fixathon?
    </h1>
    <div class="twocol__text about__text">
      <p class="twocol__intro about__intro">
        It’s a month-long hackathon for tech professionals to use their skills to help increase awareness of the climate change issue and people to take action.
      </p>

      <p class="">
          Any web or app-based project that aims to help restore a safe climate for our world is elegible. You can take part on your own or in a team. 
      </p>

      <p class="">
          You have the opportunity to help solving the biggest challenge of our generation! <br />Did we mention their are prizes?.
      </p>

      <h4 class='mt-5 mb-0 pb-0'>Starting 2nd August 2019</h4>
      <ul class='mx-0 px-0 text-white text-center'>
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
</section>
<div class="border-img__bot border-img__bot--blue"></div>

<script>
  const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

  let countDown = new Date('Aug 2, 2019 00:00:00').getTime(),
    x = setInterval(function() {
        let now = new Date().getTime(),
        distance = countDown - now;

    document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
    }, second)
</script>