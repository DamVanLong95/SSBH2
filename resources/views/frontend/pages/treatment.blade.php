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
<div class="treatment-container">
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965">
			<i class="fa fa-phone"></i>
			<span>1900988965</span>
		</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bh-car">
                    <div class="title">
                        <h4>Sản phẩm Bảo hiểm Vật chất xe</h4>
                    </div>
                    <div id="section-treatment" class="section-treatment-slide">
                        <div class="section-wrapper ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="slideTreatment" class="swiper-container swiper-treatment1">
                                            <div class="swiper-wrapper uudai-slide">
                                                @foreach($data['xe'] as $value)
                                                    <div class="swiper-slide slide-item parent">
                                                        <a class="showSingle" value="xe_{{$value['id']}}">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    {{$value['title']}}
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{asset('storage/'.$value->slide)}}" alt="" value="{{$value['id']}}"></div>
                                                                <div class="description">
                                                                    <p>{{$value['description']}}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Add Arrows -->
                                        </div>
                                        <div class="arrow-ctn ">
                                            <div class="swiper-button-prev ">
                                            </div>
                                            <div class="swiper-button-next ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($data['xe'] as $v)
                                <div id="xe_{{$v['id']}}" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                        <img class="img-fluid" src="{{asset('storage/'.$v->img_detail)}}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bh-longevity">
                    <div class="title">
                        <h4>Sản phẩm Bảo hiểm Nhân thọ</h4>
                    </div>
                    <div id="section-treatment" class="section-treatment-slide">
                        <div class="section-wrapper ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="" class="swiper-container swiper-treatment2">
                                            <div class="swiper-wrapper uudai-slide">
                                              @foreach($data['nhantho'] as $value)
                                                    <div class="swiper-slide slide-item parent2">
                                                      <a class="showSingle" value="nt_{{$value['id']}}">
                                                        <div class="treatment-item item">
                                                            <div class="title">
                                                                {{$value['title']}}
                                                            </div>
                                                            <img class="img-fluid" src="{{asset('storage/'.$value->slide)}}" alt="">
                                                            <div class="description">
                                                                <p>{{$value['description']}}</p>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Add Arrows -->
                                        </div>
                                        <div class="arrow-ctn ">
                                            <div class="swiper-button-prev">
                                            </div>
                                            <div class="swiper-button-next">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($data['nhantho'] as $v)
                                <div id="nt_{{$v['id']}}" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{asset('storage/'.$v->img_detail)}}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bh-health">
                    <div class="title">
                        <h4>Sản phẩm Bảo hiểm Sức khoẻ</h4>
                    </div>
                    <div id="section-treatment" class="section-treatment-slide">
                        <div class="section-wrapper ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="" class="swiper-container swiper-treatment3 ">
                                            <div class="swiper-wrapper uudai-slide">
                                            @foreach($data['suckhoe'] as $value)
                                              <div class="swiper-slide slide-item parent3">
                                                  <a class="showSingle" value="sk_{{$value['id']}}">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              {{$value['title']}}
                                                          </div>
                                                          <img class="img-fluid" src="{{asset('storage/'.$value->slide)}}" alt="">
                                                          <div class="description">
                                                              <p>{{$value['description']}}</p>
                                                          </div>
                                                      </div>
                                                     </a>
                                              </div>
                                              @endforeach
                                            
                                            <!-- Add Arrows -->
                                        </div>
                                        <div class="arrow-ctn ">
                                            <div class="swiper-button-prev">
                                            </div>
                                            <div class="swiper-button-next">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($data['suckhoe'] as $v)
                                <div id="sk_{{$v['id']}}" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{asset('storage/'.$v->img_detail)}}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
     <script>
        $(function(){
            var xes = <?php echo $data['xe'] ?>;
            var sk = <?php echo $data['suckhoe'] ?>;
          
            var nt = <?php echo $data['nhantho'] ?>;
            var divs = [];
            for(let i =0; i < xes.length;i++){
               
                divs.push('xe_'+ xes[i]['id']);
            }
            for(let i =0; i < sk.length;i++){
               
               divs.push('sk_'+ sk[i]['id']);
           }
           for(let i =0; i < nt.length;i++){
               
               divs.push('nt_'+ nt[i]['id']);
           }
            // console.log(divs);

            function hideNonVisibleDivs() {
             var i, div;
                for(i = 0; i < divs.length; i++) {
                    divId = divs[i];
                    div = document.getElementById(divId);
                    if(visibleDivId === divId) {
                        div.style.display = "block";
                        // console.log(div);
                    } else {
                        if(div)
                         div.style.display = "none";
                    }
                }
            }
            var visibleDivId = null;
            $('.showSingle').click(function(){
                // console.log(this);
                var divId = $(this).attr('value');
                // console.log(divId);
                if(visibleDivId === divId) {
                    visibleDivId = null;
                } else {
                    visibleDivId = divId;
                }
                hideNonVisibleDivs();
            });
        });
    </script>
@stop