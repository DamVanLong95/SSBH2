@section('title')
@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <a href="">
                        <h1 class="title">{!! $post->title !!}</h1>
                    </a>
                    <p><b>Posted:</b> {!!  Carbon\Carbon::parse($post->created_at)->diffForHumans() !!}</p>
                    <p>{!! nl2br($post->content)!!}</p>
            
            </div>
        </div>
</div>
@endsection