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


<script>
  export default {
    data() {
      return {
        event: null,
        totalParticipants: 0
      }
    },
    mounted() {
      console.log('Loading event...');
      axios.get('event')
      .then(resp => {
          console.log(resp);
          this.event = resp.data;
          debugger;
      })
      .catch(resp => {
          console.log('Could not load participants');
      });
    }
  }
</script>