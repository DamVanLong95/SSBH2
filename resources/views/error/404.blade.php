@extends('error.layout.minimal')

@section('code', '404 😭')

@section('title', __('Page Not Found'))

@section('image')

<div style="background-image: url('/assets/images/errors/404.png');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center">
</div>

@endsection

@section('message', __('Sorry, the page you are looking for could not be found.'))