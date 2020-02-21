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
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/font-awesome.min.css?'.config('custom.version')) }}"
          type="text/css" />
    <!-- Link CSS default -->

    <link type="text/css" href="{{ url('/') }}/assets/css/system.css?{{ config('custom.version') }}" rel="stylesheet">
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
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
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
                <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
    </nav>
</div>
<!-- Menu -->
<div class="body-page">
    <div class="page-wrapper">
        @yield('content')
    </div>
    <!-- Back to top -->
    <a class="scrollup"></a>
</div>
<footer>
    <div class="footer-cnt">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="sponsor-box">
                        <h5>Về chúng tôi</h5>
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
                    <div class="contact-box">
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
                <div class="col-lg-4 mt-5">
                    <div class="contact-box">
                        <h5>Khác</h5>
                    </div>
                    <div class="footer-right">
                        <p>Hotline:<a href="tel:02854135686">(028) 54135686</a></p>
                        <!-- <a href="http://m.me/"><img src="{{url('assets/images/section1/mess-icon.png')}}" alt=""></a> -->
                        <a href="https://www.facebook.com/DetoxBuiPM2.5/" target="_blank"><img src="{{url('assets/images/section1/fb-icon.png')}}" alt=""></a>
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
        (function( $ ) {
            $.fn.attachmentUploader = function() {
                const uploadControl = $(this).find('.js-form-upload-control');
                const btnClear = $(this).find('.btn-clear');
                $(uploadControl).on('change', function(e) {
                const preview = $(this).closest('.form-upload').children('.form-upload__preview');
                const files   = e.target.files;

                function previewUpload(file) {
                    if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
                    var reader = new FileReader();
                    reader.addEventListener('load', function () {
                        const html =
                            '<div class=\"form-upload__item\">' +
                            '<div class="form-upload__item-thumbnail" style="background-image: url(' + this.result + ')"></div>' +
                            '<p class="form-upload__item-name">' + file.name + '</p>' +
                            '</div>';
                        preview.append( html );
                        btnClear.show()
                    }, false);
                    reader.readAsDataURL(file);
                    } else {
                    alert('Please upload image only');
                    uploadControl.val('');
                    }
                }

                [].forEach.call(files, previewUpload);
                
                btnClear.on('click', function() {
                    $('.form-upload__item').remove();
                    uploadControl.val('');
                    $(this).hide()
                })
                })
            }
            })( jQuery )

            $('.form-upload').attachmentUploader();
    </script>
  <script>
    AOS.init();
  </script>
</body>
</html>