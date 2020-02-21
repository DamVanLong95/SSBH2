@extends('layouts.default')
@section('header')
<title>{{ config('custom.seo_title') }}</title>
<meta name="description" content="{{ config('custom.seo_description') }}">
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="{{ url('/')  }}"/>
<meta property="og:url" content="{{ Request::url()  }}" />
<meta property="og:image" content="{{ url('uploads/others/fbimage.jpg?'.config('custom.version'))  }}" />
<meta property="og:title" content="{{ config('custom.seo_title') }}" />
<meta property="og:description" content="{{ config('custom.seo_description') }}" />

@stop
@section('content')
<h1>

</h1>
@stop
@section('footer')
@stop