<template>    
    <li class="participant" v-for='user in users'>
        <a href='#' target='_blank'>
          <img alt="Simon Collison" class="partcipant__avatar" src="{{asset('img/people/steven.jpg')}}">
          <div class="participant__info">
            <h3>Steven Hylands</h3>
            <p>This is a short bio from Makerlog which is max 50</p>
            <p>{{user}}</p>
          </div>
        </a>
    </li>
</template>

<script>
    export default {
        //name: 'participants',
        props: [ 'users' ],
        mounted() {
          console.log('component participants');
        }
    }
</script>