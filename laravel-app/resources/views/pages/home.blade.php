{{--
|--------------------------------------------------------------------------
| Home Page (NordicAir Theme)
|--------------------------------------------------------------------------
|
| Rebuilt to match the NordicAir design specifications.
|
--}}
@extends('layouts.home')

@section('title', 'NordicAir | Expert Care For Your Home')
@section('description', "Find your perfect climate solution with NordicAir. Expert guidance, efficient systems, and lifetime support.")

@section('content')
    {{-- Hero Section --}}
    @include('sections.hero')

    {{-- Journey / Process Section --}}
    @include('sections.journey')

    {{-- Smart Solutions (Products) --}}
    @include('sections.smart-solutions')

    {{-- Science of Comfort / Inverter Tech --}}
    @include('sections.science-of-comfort')

    {{-- Trust / Reliability Section --}}
    @include('sections.trust')

    {{-- Blog / Latest Articles --}}
    @include('sections.blog-preview')

    {{-- CTA Section --}}
    @include('sections.cta')

    {{-- Footer --}}
    @include('partials.footer')
@endsection
