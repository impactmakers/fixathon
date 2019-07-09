@extends('layouts.app')

@section('content')

    @if(isset($service) && $service == 'makerlog')
        <div class="title m-b-md">
            Welcome {{ $details->user['username']}} ! <br>
            Your email is : {{$details->user['email']}} <br>.
        </div>
    @endif

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