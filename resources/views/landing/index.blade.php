@extends('landing.layouts.app')

@section('content')

@include('landing.partials.hero')

@include('landing.partials.about')

@include('landing.partials.services')

@include('landing.partials.how-to-report')

@include('landing.partials.faq')

@include('landing.partials.contact')

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

@endsection