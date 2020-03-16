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
        <div class="contact-email"><a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/default/phone-intro.png?{{ config('custom.version') }}" alt=""></a></div>
        <div class="contact-phone"><a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/default/email-intro.png?{{ config('custom.version') }}" alt=""></a></div>
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
                                                @for($i=1;$i<=6;$i++)
                                                    <div class="swiper-slide slide-item">
                                                        <a href="{{ url('/treatment_detail') }}">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    Manulife
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>Bảo hiểm bệnh hiểm nghèo</p>
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
                                                    <div class="swiper-slide slide-item">
                                                        <a href="{{ url('/treatment_detail') }}">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    Manulife
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>Bảo hiểm bệnh hiểm nghèo</p>
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
                                                    <div class="swiper-slide slide-item">
                                                        <a href="{{ url('/treatment_detail') }}">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    Manulife
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>Bảo hiểm bệnh hiểm nghèo</p>
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
@stop