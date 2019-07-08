<template>   
  <div> 
    <ul class="participants__list">
      <li class="participant" v-for='user in participants'>
        <a href='#' target='_blank'>
          <img alt="user.username" class="partcipant__avatar" src="user.avatar">
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
      //console.log('Loading participants...');
      axios.get('participants')
      .then(resp => {
          console.log(resp);
          this.participants = resp.data.results;
          this.totalParticipants = resp.data.count;
      })
      .catch(resp => {
          console.log('Could not load participants');
      });
    }
  }
</script>