@extends('layouts.app')

@section('title', 'My Portfolio')

@section('content')

    @include('partials.hero')

    @include('partials.about')

    @include('partials.stats')

    @include('partials.skills')

    @include('partials.resume')

    @include('partials.portfolio')

    @include('partials.services')

    @include('partials.testimonials')

    @include('partials.contact')

@endsection