@extends('layouts.app')

@section('content')

    @include('partials.products', ['loadAll' => true])

@endsection