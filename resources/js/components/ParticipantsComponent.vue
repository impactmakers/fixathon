<template>
  <div>
    <ul class="participants__list" v-if="totalParticipants !== 0">
      <li class="participant" v-for="user in participants">
        <a :href="'https://getmakerlog.com/@'+user.username" target="_blank">
          <div class="partcipant__avatar">
            <!-- <img alt="user.username" :src="user.avatar" /> -->
            <img :src="'img/avatars/'+user.username" :alt="user.username" class="product-member" @error='loadAvatarFromUrl($event,user.avatar)' style='border:0px;' />
          </div>

          <div class="participant__info">
            <h3>{{user.username}}</h3>
            <!-- <p>{{user.description}}</p> -->
          </div>
        </a>
      </li>
    </ul>

    <div style="text-align:center;margin-top:50px;width:100%;">
      <button
        style="margin:0px auto;"
        class="btn-simple btn-md btn-white-blue btn-mobile"
        v-if="more"
        @click="loadMore()"
      >
        <!-- <span v-if='loadingParticipants'><img src='/public/images/blue.gif'></span>-->
        Load More
      </button>
    </div>

    <div class="centered__intro participants__intro" v-if="totalParticipants === 0">
      <b>No participants yet. Be the first one!</b>
      <br />
      <br />

      <a class="intro__cta" href="https://getmakerlog.com/events/the-climate-fixathon/">
        <button
          type="submit"
          class="btn-simple btn-lg btn-white-blue btn-mobile centered__intro"
        >View the Event</button>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      participants: [],
      totalParticipants: 0,
      page: 1,
      loadingParticipants: false
    };
  },
  methods: {
    loadMore: function(event) {
      this.loadingParticipants = true;
      axios
        .get("participants/" + this.page)
        .then(resp => {
          this.participants = this.participants.concat(resp.data.results);
          this.totalParticipants = resp.data.count;
          this.page = this.page + 1;
          this.loadingParticipants = false;
        })
        .catch(resp => {
          console.log("Could not load more participants");
          this.loadingParticipants = false;
        });
    },
    loadAvatarFromUrl: function(event,url){
      event.target.src = url;
    }
  },
  mounted() {
    axios
      .get("participants")
      .then(resp => {
        this.participants = resp.data.results;
        this.totalParticipants = resp.data.count;
        this.$emit('totals', this.totalParticipants);
      })
      .catch(resp => {
        console.log("Could not load participants");
      });
  },
  computed: {
    more: function() {
      return this.totalParticipants > this.page * 20;
    }
  }
};
</script>