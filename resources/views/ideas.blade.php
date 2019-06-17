@extends('layouts.app')

@section('content')
    <section class="my-2 py-3" id='ideas'>
      <div class="container py-3">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h1>Ideas</h1>
            <p class="lead">We created some ideas to inspire you, but there is lot more to do!</p>
          </div>
        </div>

        <ideas-component></ideas-component>
      </div>
    </section>
    
    @include('partials.takePart')
    @include('partials.inspiration')
    @include('partials.registrationBanner')

@endsection