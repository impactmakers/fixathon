@extends('layouts.app')

@section('content')

    @include('partials.intro')
    @include('partials.about')
    @include('partials.prizes')
    @include('partials.judges')
    @include('partials.sponsors')
    @include('partials.becomeSponsor')
    @include('partials.participants')
    @include('partials.takePart')
    @include('partials.inspiration')
    @include('partials.registrationBanner')

@endsection

<!--
<script>
  export default {
    data() {
      return {
        event: null,
        totalParticipants: 0
      }
    },
    mounted() {
      axios.get('event')
      .then(resp => {
          this.event = resp.data;
      })
      .catch(resp => {
          console.log('Could not load participants');
      });
    }
  }
</script>
-->