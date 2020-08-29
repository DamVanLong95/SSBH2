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
<div class="question-container">
<div class="contact-floating">
    <a class="btn-call-now" href="tel:1900988965">
        <i class="fa fa-phone"></i>
        <span>1900988965</span>
    </a>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-knowledge-tab" data-toggle="tab" href="#nav-knowledge" role="tab" aria-controls="nav-knowledge" aria-selected="true">Kiến thức</a>
                        <a class="nav-item nav-link " id="nav-question-tab" data-toggle="tab" href="#nav-question" role="tab" aria-controls="nav-question" aria-selected="true">Các câu hỏi thường gặp</a>
                        <a class="nav-item nav-link" id="nav-term-tab" data-toggle="tab" href="#nav-term" role="tab" aria-controls="nav-term" aria-selected="false">Giải thích thuật ngữ</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="question-term-ctn">
                    <section id="tabs">
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-knowledge" role="tabpanel" aria-labelledby="nav-knowledge-tab">
                                <div class="knowledge-ctn">
                                    <div class="knowledge-wrapper">
                                        <div class="row">
                                            @foreach($blogs as $value)
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="item-knowledge ">
                                                        <a href="{{route('blog.show',['id'=>$value->id,'slug'=>$value->slug])}}" target="_blank"><img src="storage/{{$value['avatar'] }}" alt=""></a>
                                                        <div class="description-ctn">
                                                            <a href="{{route('blog.show',['id'=>$value->id,'slug'=>$value->slug])}}">{{$value['title']}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-question" role="tabpanel" aria-labelledby="nav-question-tab">
                                <div class="question-ctn">
                                    <div class="question-part">
                                        <div class="panel-group" id="accordion">
                                            @foreach($questions as $value)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$value['id']}}" class="collapsed" aria-expanded="false">
                                                            {{$value['content']}}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse{{$value['id']}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        {{strip_tags($value['explain'])}}
                                                   </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-term" role="tabpanel" aria-labelledby="nav-term-tab">
                                <div class="term-ctn">
                                    <div class="searchinput">
                                        <input type="text" id="keyword" name="keyword" placeholder=" search..." class="text" required>
                                        <button type="submit" class="submit">Tìm</button>
                                    </div>
                                    <div class="alpha-ctn">
                                        <div class="alpha-left" id="content">
                                            @foreach($libraries as $key=>$group_libra)
                                                <div class="sign-ctn">
                                                    <div class="sign-index">
                                                    <h3>{{$key}}</h3>
                                                    </div>
                                                    <div class="sign-content">
                                                        @foreach($group_libra as $value)
                                                            <div class="alpha-index">
                                                                <div class="alpha-left">
                                                                    <a href="javascript:void(0);" class="{{$value['content']!='' ? '' : 'disable' }}">{{$value['character']}}</a>
                                                                </div>
                                                                <div class="index-content">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$value['id']}}" class="collapsed" aria-expanded="false">
                                                                                {{$value['terms']}}</a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapse{{$value['id']}}" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <p>
                                                                                    {{strip_tags($value['content'])}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    
</div>

@stop

@section('footer')
            

<script>
    $(function () {
        $("#keyword").autocomplete({
            source:function(request,response){
                var url = "{{route('search.question')}}";
                $.post({
                    url :url,
                    data:{
                        "_token": "{{ csrf_token() }}",
                        keyword: request.term,
                    },
                    success: function( data ) {
                        response(data);
                    }
                });
              
            },
            select: function(event,ui) {
                $('#keyword').val(ui.item.label); // display the selected text
                $('.submit').val(ui.item.label);                
                return false;
            },
        });
        $('.submit').click(function(){
            var param = $(this).val();;
            $.post({
                url:"{{route('search.button')}}",
                data:{
                    "_token": "{{ csrf_token() }}",
                    param :param, 
                },
                success: function( data ) {
                    $('#content').html(data)
                }
            });
        })
    })
</script>
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
   

@stop
