
@extends('landing.layouts.app')

@section('content')

@include('landing.partials.hero')

@include('landing.partials.about')

@include('landing.partials.services')

@include('landing.partials.how-to-report')

@include('landing.partials.faq')

@include('landing.partials.contact')

{{-- Tombol kembali ke atas --}}
<a href="#hero"
   id="scroll-top"
   class="scroll-top d-flex align-items-center justify-content-center"
   aria-label="Kembali ke atas">
    <i class="bi bi-arrow-up-short"></i>
</a>

@endsection
