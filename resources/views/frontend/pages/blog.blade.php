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
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true"></div>

		<div id="fb-root"></div>
            <script async defer crossorigin="anonymous" 
                src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=333825553700604&autoLogAppEvents=1" 
                nonce="ePUkQYzc">
            </script>
            <div class="fb-comments" data-href="{{(url('/blog/'.$blog->slug))}}" 
                data-numposts="5" data-width="" data-share="true" >
            </div>
    </div>
</div>


@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop
