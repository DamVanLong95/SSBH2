<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-VN" dir="LTR" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="{{ config('custom.seo_author') }}">
    <meta property="fb:app_id" content="{{ config('custom.facebook_appid') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ url('uploads/others/favicon.png?'.config('custom.version')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Link bootstrap -->
    <link rel="stylesheet"
          href="{{ url('assets/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css?'.config('custom.version')) }}">
    <!-- Link font-awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css" />
    <!-- Link CSS default -->

    <!-- <link type="text/css" href="{{ url('/') }}/assets/css/system.css?{{ config('custom.version') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ url('assets/lib/swiper/css/swiper.min.css?'.config('custom.version')) }}">
    <link rel="stylesheet" href="{{ url('assets/lib/jqueryModal/css/jquery.modal.min.css?'.config('custom.version')) }}" />
    <link type="text/css" href="{{ url('assets/css/styles.css?18022020') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.js"></script>
    <script src="{{ url('assets/lib/popper/js/popper.min.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/lib/swiper/js/swiper.min.js?'.config('custom.version')) }}"></script>
    {!! config('custom.embed_header') !!}


    @yield('header')
<script>


</script>
</head>

<body class="">
<!-- Menu -->
{{--sticky-top--}}
<div class="block-main-menu">
    <nav id="sidenav" class="main-menu navbar navbar-expand-lg ">
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
                <ul class="left-nav navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">TRANG CHỦ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/intro') }}">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/car') }}">SO SÁNH</a>
                        <ul>
                            <li><a href="{{ url('/car') }}">So sánh bảo hiểm vật chất ô tô</a></li>
                            <li><a href="#">So sánh bảo hiểm nhân thọ</a></li>
                            <li><a href="#">So sánh bảo hiểm sức khỏe</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mx-auto my-2 order-0 order-md-1 position-relative">
                <a class="mx-auto" href="#">
                    <img src="{{ url('/') }}/assets/images/default/logo.png?{{ config('custom.version') }}" class="logo-desktop">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
                <ul class="right-nav navbar-nav mr-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ƯU ĐÃI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CÂU HỎI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
    </nav>
</div>
<!-- Menu -->
<div class="body-page">
    <div class="page-wrapper">
        <div id="section1" class="section1">
            <div class="sec1-wrapper text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div id="slideBanner" class="swiper-container swiper-banner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slide-item">
                                    <div class="overlay-bg"></div>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner1.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="overlay-bg"></div>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner2.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="overlay-bg"></div>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner3.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <!-- Back to top -->
    <a class="scrollup"></a>
</div>
<footer>
    <div class="footer-ctn">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="foot-title">
                        <h5>Liên hệ với chúng tôi</h5>
                    </div>

                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>Giới thiệu về VICS-CORP</li>
                            <li>Ưu đãi</li>
                            <li>Câu hỏi thường gặp</li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="foot-title">
                        <h5>Liên hệ với chúng tôi</h5>
                    </div>
                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>
                                <img src="{{ url('assets/images/default/phone.png?'.config('custom.version')) }}" alt="">
                                <a href="tel:0906060784">0906.060.784</a><span> | <a href="tel:0383590784">0383.590.784</a></span>
                            </li>
                            <li>
                                <img src="{{ url('assets/images/default/address.png?'.config('custom.version')) }}" alt="">
                                Phòng 520, toà nhà 142 Lê Duẩn, Khâm Thiên, Đống Đa, Hà Nội
                            </li>
                            <li>
                                <img src="{{ url('assets/images/default/mail.png?'.config('custom.version')) }}" alt="">
                                <a href="mailto:contact@vics-corp.com">contact@vics-corp.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 text-right">
                    <div class="foot-title">
                        <h5>Khác</h5>
                    </div>
                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>
                               Tin tức
                            </li>
                            <li>
                                Phản hồi khách hàng
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    @include('layouts.default_script')
    {!! config('custom.embed_footer') !!}

    @yield('footer')
    <script src="{{ url('assets/lib/jqueryModal/js/jquery.modal.min.js?'.config('custom.version')) }}"></script>

    <script>
        $(document).ready(function(){
            // $.ui.menu.init();
        });
    </script>
    <script src="{{ url('assets/js/common.js?'.config('custom.version')) }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src='https://foliotek.github.io/Croppie/croppie.js'></script>

  <script>
    AOS.init();
  </script>
</body>
</html>
