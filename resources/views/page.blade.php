@extends('layouts.app')

@section('content')

@php the_post() @endphp

<div class="hero">
  <div class="inner-hero image padding-medium" style="background-image: url({{ get_the_post_thumbnail_url() }});">
    <h1 class="title text-shadow text-align-center">{!! get_the_title() !!}</h1>
  </div>
</div>

<div class="hero">
  <div class="inner-hero page">
    <div class="inner-page">
        {{ the_content() }}
    </div>
  </div>
</div>

@endsection
