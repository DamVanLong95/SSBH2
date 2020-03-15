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
<div class="contact-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="contact-ctn">
                    <div class="select-ctn">
                        <div class="selection-box">
                            <div class=" item select">
                                <select aria-label="Select menu example">
                                    <option selected>Họ và tên</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example">
                                    <option selected>Lĩnh vực hoạt động</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example">
                                    <option selected>Khu vực</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="item button-filter">
                            <button type="button" onclick="">Tìm</button>
                        </div>
                    </div>
                    <div class="name-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="name-item active">
                                    Jonh Doe
                                </div>   
                            </div>
                            @for($i=1;$i < 12;$i++)
                                <div class="col-lg-4">
                                    <div class="name-item">
                                        nguyen hoan van anh
                                    </div>   
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="detail-contact">
                    
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
    <div id="section-contact" class="section-contact-slide">
        <div class="section-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="slideContact" class="swiper-container swiper-contact">
                            <div class="swiper-wrapper parner-slide">
                                @for($i=1;$i<=6;$i++)
                                    <div class="swiper-slide slide-item">
                                        <div class="ava-ctn">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/logo/ava.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                       <div class="detail-contact">
                                           <div class="name">
                                               John Doe
                                           </div>
                                           <div class="time-work">
                                               <p class="job-title"><strong>Quá trình công tác</strong></p>
                                               <p>Báo cáo Viên về Hội nhập kinh tế quốc tế, Bộ Công thương	</p>
                                               <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                               <p>Bảo hiểm nhân thọ: Đầu tư, tích luỹ, </p>
                                               <p class="job-title"><strong>Khu vực</strong></p>
                                               <p>Hà Nội </p>
                                               <p class="job-title"><strong>Liên hệ</strong></p>
                                               <p><a href="tel:0906060784">0906.060.784</a><span> | <a href="mailto:contact@vics-corp.com">contact@vics-corp.com</a></span></p>
                                           </div>
                                       </div>
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
    <div class="container-fluid p-0">
        <div class="map-ctn">
            <div class=" contact-map mb-5 pb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14899.119643477907!2d105.802919!3d21.0014577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4693ddbd9a69d120!2zS2jDoWNoIHPhuqFuIFRo4buDIFRoYW8!5e0!3m2!1svi!2s!4v1581495081028!5m2!1svi!2s" width="100%" height="300px"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop