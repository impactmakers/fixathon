<!-- participants -->
<div class="border-img__top border-img__top--blue"></div>
<section class="container participants__container" id="participants">
  <div class="inner twocol__inner participants__inner">
    <div class="centered__header participants__header">
      <h1 class="brush__title brush__title--large centered__title participants__title">
        Participants
      </h1>
      <p class="centered__intro participants__intro">
        Discover the developers, designers and techies participating in the Climate Fixathon.
      </p>
    </div>
    <ul class="participants__list">
      <participants-component users='participants'></participants-component>
    </ul>
    
  </div>
</section>
<div class="border-img__bot border-img__bot--blue"></div>

<!-- END participants -->

<script type="module">
  export default {
    data() {
      return {
        participants: [],
        totalParticipants: 0
      }
    },
    methods: {      
    },
    mounted() {
      console.log('Loading participants...');
      axios.get('participants')
      .then(resp => {
          console.log(resp);
          this.participants = resp.data;
      })
      .catch(resp => {
          console.log('Could not load participants');
      });
    }
  }
</script>