<template>
	<div class="inner twocol__inner participants__inner">
	    <div class="centered__header participants__header">
	      <h1 class="brush__title brush__title--large centered__title participants__title">
	        <span v-if='totalParticipants !== 0'>{{totalParticipants}}</span> Participants
	      </h1>
	      <p class="centered__intro participants__intro">
	        Discover the developers, designers and techies participating in the Climate Fixathon.
	      </p>
	    </div>      
	    <participants-component @totals="onTotalParticipants"></participants-component>           
	</div>
</template>

<script>
export default {
  data() {
    return {
      totalParticipants: 0
    };
  },
  methods: {
    onTotalParticipants (value) {
      this.totalParticipants = value;
    }
  }
};
</script>