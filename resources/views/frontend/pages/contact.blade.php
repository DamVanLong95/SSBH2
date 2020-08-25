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
  
<!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script> -->

@stop

@section('content')
<div class="contact-container">
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965">
			<i class="fa fa-phone"></i>
			<span>1900988965</span>
		</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="contact-ctn">
                    <div class="select-ctn">
                        <div class="selection-box">
                            <div class=" item select">
                                <select aria-label="Select menu example" class="work" >
                                    <option selected style="display:none">Công việc</option>
                                    <option value="Đại lý">Đại lý</option>
                                    <option value="Tư vấn viên">Tư vấn viên</option>
                                    <option value="Cán bộ DNBH">Cán bộ DNBH</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example" class="major" >
                                    <option selected style="display:none">Lĩnh vực hoạt động</option>
                                    <option value="1">Nhân thọ</option>
                                    <option value="2">Phi nhân thọ</option>
                                    <option value="3">Cả hai</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example" class="area">
                                    <option selected style="display:none">Khu vực</option>
                                    @foreach($locations as $value)
                                        <option value="{{$value['name']}}" >{{$value['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item button-filter">
                            <button type="button" class="reset" >Chọn lại</button>
                        </div>
                       
                    </div>
                    <div class="name-list">
                        <div class="row" id="showName">
                        @foreach($advisors as $value)
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1 " target="1">
                                    <a href="javascript:void(0)"  class="{{$value['status'] ==1 ? 'active' :''}}" value="adiv{{$value['id']}}" data-id="{{$value['id']}}">{{$value['fullname']}}</a>
                                </div>
                            </div> 
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="profile">
        <div id="adiv{{$advisor['id']}}"  class=" detail-ctv targetDiv1">
            <div id="sec-contact-detail" class="sec-contact-detail">
                <div class="section-wrapper ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="detail-ctn">
                                    <div class="ava-ctn">
                                        <img class="img-fluid" src="storage/{{$advisor['avatar']}}" alt="">
                                    </div>
                                    <div class="detail-contact">
                                        <div class="name">
                                            {{$advisor['fullname']}}
                                        
                                        </div>
                                        <div class="time-work">
                                            <p class="job-title"><strong>Quá trình hoạt động</strong></p>
                                            <p>{{$advisor['working_process']}}	</p>
                                            <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                            @if($advisor['major']==2)
                                                <p>Phi nhân thọ</p>
                                            @elseif($advisor['major'] ==1)
                                                <p> Nhân thọ</p>
                                            @elseif($advisor['major'] ==3)
                                                <p>Phi nhân thọ, nhân thọ</p>
                                            @endif
                                            <p class="job-title"><strong>Công việc</strong></p>
                                            <p class="">{{$advisor['work']}}</p>
                                            <p class="job-title"><strong>Khu vực</strong></p>
                                            <p>{{$advisor['area']}}</p>
                                            <p class="job-title"><strong>Liên hệ</strong></p>
                                            <p><a href="tel:{{$advisor['phone']}}">{{$advisor['phone']}}</a><span> | <a href="mailto:{{$advisor['email']}}"> {{$advisor['email']}}</a></span></p>
                                            <p class=""><a href="{{route('contact.detail',$advisor->slug)}}" style="color:green">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="map-ctn">
                    <div class=" contact-map mb-5 pb-4"   >
                    {!!$advisor['link_map']!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
    <script type="text/javascript">
        $('iframe').css('width','100%');
        var wk, lv, kv;
        $('.work').change(function(){
             wk = $(this).val();
            // console.log(kv);
            typeof lv !== 'undefined' ? lv = lv : lv = null;
            typeof kv !== 'undefined' ? kv = kv : kv = null;
            // console.log(lv);
            var url =  "{{route('search.working')}}";
            $.post(url ,{
                "_token": "{{ csrf_token() }}",
                work : wk,
                major: lv,
                area : kv,
            }).done(function(data){
                $('#showName').html(data);
                $('#profile').html('');
            });
        });
        $('.major').change(function(){
            lv = $(this).val();
            typeof wk !== 'undefined' ? wk = wk : wk = null;
            typeof kv !== 'undefined' ? kv = kv : kv = null;
            var url =  "{{route('search.major')}}";
            $.post(url ,{
                "_token": "{{ csrf_token() }}",
                work : wk,
                major: lv,
                area : kv,
            }).done(function(data){
                $('.name-item a').removeClass("active");
                $('#showName').html(data);
                $('#profile').html('');
            });

        });
      $('.area').change(function(){
             kv = $(this).val();
            typeof wk !== 'undefined' ? wk = wk : wk = null;
            typeof lv !== 'undefined' ? lv = lv : lv = null;
            var url =  "{{route('search.area')}}";
            $.post(url ,{
                "_token": "{{ csrf_token() }}",
                work : wk,
                major: lv,
                area : kv,
            }).done(function(data){
                $('#showName').html(data);
                $('#profile').html('');
            });
        });
        $(".reset").on("click", function () {
            $('select option').prop('selected', function() {
                return this.defaultSelected;

            });
            document.location.reload(true);
        });
    </script>
   
@stop
