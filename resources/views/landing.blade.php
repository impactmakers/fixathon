@extends('layouts.app')

@section('content')

    @include('partials.intro')

    @include('partials.submitBanner')
    @include('partials.about')
    @include('partials.prizes')
    @include('partials.judges')
    @include('partials.sponsors')
    @include('partials.becomeSponsor')
    @include('partials.participants')
    @include('partials.products')


@endsection