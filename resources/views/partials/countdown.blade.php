<!-- CATEGORIES -->
<section class="my-4 py-5 px-2">

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




</section>
<!-- END CATEGORIES -->


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