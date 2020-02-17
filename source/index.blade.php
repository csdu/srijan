@extends('_layouts.master')
@section('body')
<h1>Srijan</h1>
<p class="subtitle">
    Srijan is the annual magazine of Department of Computer Science, University of Delhi.
</p>
<div class="cta">
    <a href="{{ $page->baseUrl }}/assets/download/srijan-2020-vol-10.pdf" class="button">Read The Magazine</a> 
    <span class="small">Vol. 10 (2020)</span>
    <span class="small">
        <a href="#old" id="showOld">(See previous editions)</a> 
    </span>
</div>
@include('_partials.about')
{{-- @include('_partials.team') --}}
@include('_partials.previous-editions')
@endsection
