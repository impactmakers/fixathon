<template>
  <div>
    <ul class="participants__list" v-if="totalParticipants !== 0">
      <li class="participant" v-for="user in participants">
        <a :href="'https://getmakerlog.com/@'+user.username" target="_blank">
          <img alt="user.username" class="partcipant__avatar" :src="user.avatar" />
          <div class="participant__info">
            <h3>{{user.username}}</h3>
            <p>{{user.description}}</p>
          </div>
        </a>
      </li>
    </ul>

    <div class="centered__intro participants__intro" v-if="totalParticipants === 0">
      <b>No participants yet. Be the first one!</b>
      <br />
      <br />

      <a class="intro__cta" href="#register">
        <button
          type="submit"
          class="btn-simple btn-lg btn-white-blue btn-mobile centered__intro"
        >Register Now</button>
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
    };
  },
  methods: {},
  mounted() {
    axios
      .get("participants")
      .then(resp => {
        this.participants = resp.data.results;
        this.totalParticipants = resp.data.count;
      })
      .catch(resp => {
        console.log("Could not load participants");
      });
  }
};
</script>