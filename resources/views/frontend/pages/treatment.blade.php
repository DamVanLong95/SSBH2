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
    <div class="contact-phone"><a href="tel:0906060784" target="_blank">0906060784</a></div>
    <div class="contact-email"><a href="mailto:contact@vics-corp.com" target="_blank"><img src="{{ url('/') }}/assets/images/default/email-intro.png?{{ config('custom.version') }}" alt=""></a></div>
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
                                        <div id="slideTreatment" class="swiper-container swiper-treatment">
                                            <div class="swiper-wrapper uudai-slide">
                                                @foreach($treatments["xe"][0] as $xe)
                                                    <div class="swiper-slide slide-item parent">
                                                        <a href="javascript:void(0)">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    {{$xe['title']}}
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}{{$xe['img1']}}?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>{{$xe['description']}}</p>
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
                                <div class="child">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Manulife1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
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
                                        <div id="slideTreatment" class="swiper-container swiper-treatment">
                                            <div class="swiper-wrapper uudai-slide">
                                                    @for($i=1;$i<=6;$i++)
                                                    <div class="swiper-slide slide-item parent2">
                                                        <a href="javascript:void(0)">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    Bảo hiểm An tâm gia đình
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/antam.jpg?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>Bảo hiểm gia đình</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endfor

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
                                <div class="child2">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/antam1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
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
                                        <div id="slideTreatment" class="swiper-container swiper-treatment">
                                            <div class="swiper-wrapper uudai-slide">
                                                @for($i=1;$i<=6;$i++)
                                                    <div class="swiper-slide slide-item parent3">
                                                        <a href="javascript:void(0)">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    MB Ageas Life
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao.jpg?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>Tiếp nối ước mơ</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endfor
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
                                <div class="child3">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@php

    foreach ($treatments['xe'] as $a){
        var_dump($a);
    }

@endphp
@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop
