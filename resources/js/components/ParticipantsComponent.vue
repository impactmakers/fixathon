<template> 
  <section class="container participants__container" id="participants">
    <div class="inner twocol__inner participants__inner">
      <div class="centered__header participants__header">
        <h1 class="brush__title brush__title--large centered__title participants__title">
          <span v-if='totalParticipants !== 0'>{{totalParticipants}}</span> Participants
        </h1>
        <p class="centered__intro participants__intro">
          Discover the developers, designers and techies participating in the Climate Fixathon.
        </p>
      </div>
      
      <ul class="participants__list">
        <li class="participant" v-for='user in participants'>
          <a href='#' target='_blank'>
            <img alt="user.username" class="partcipant__avatar" :src="user.avatar">
            <div class="participant__info">          
              <p>{{user.username}}</p>
            </div>
          </a>
        </li> 
      </ul>

      <div class='centered__intro participants__intro' v-if="totalParticipants === 0">
        No participants yet. Be the first one! <br /><br />

        <a class="intro__cta" href="#register">
          <button type="submit" class="btn-simple btn-lg btn-green btn-mobile centered__intro">Register Now</button>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
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
      axios.get('participants')
      .then(resp => {
          this.participants = resp.data.results;
          this.totalParticipants = resp.data.count;
      })
      .catch(resp => {
          console.log('Could not load participants');
      });
    }
  }
</script>