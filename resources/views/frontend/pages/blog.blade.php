@extends('layouts.default')
@section('header')
    <title>{{ config('custom.seo_title') }}</title>
    <meta name="description" content="{{ config('custom.seo_description') }}">
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="{{ url('/')  }}" />
    <meta property="og:url" content="{{ Request::url()  }}" />
    <meta property="og:image" content="{{ url('uploads/others/fbimage.jpg?'.config('custom.version'))  }}" />
    <meta property="og:title" content="{{ config('custom.seo_title') }}" />
    <meta property="og:description" content="{{ config('custom.seo_description') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@stop

@section('content')
<div class="blog-container">
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965">
            <i class="fa fa-phone"></i>
            <span>1900988965</span>
        </a>
    </div>
    <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
        <div class="blog-ctn">
            <div class="title">
                <h4>{{$blog->title}}</h4>
                <p><b>Posted:</b> {{ $blog->created_at->format('d/m/Y') }}</p>
            </div>
            <div class="blog-content">
                <p>{!! nl2br($blog->content)!!}</p>
            </div>
        </div>
    </div>
</div>


@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop