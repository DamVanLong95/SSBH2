
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-VN" dir="LTR" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <meta charset="UTF-8">
    <title>{{ config('custom.seo_title') }}</title>
    <meta name="description" content="{{ config('custom.seo_description') }}">
    <meta name="author" content="{{ config('custom.seo_author') }}">
    <meta property="fb:app_id" content="{{ config('custom.facebook_appid') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ url('uploads/others/favicon.png?'.config('custom.version')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ url('media/uploads/others/fbimage.jpg?'.config('version.version'))  }}" />
    <meta property="og:title" content="{{ config('custom.seo_title') }}" />
    <meta property="og:description" content="{{ config('custom.seo_description') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Link bootstrap -->
    
    <link rel="stylesheet"
          href="{{ url('assets/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css?'.config('custom.version')) }}">
    <!-- Link font-awesome -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css" />
    <!-- Link CSS default -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link type="text/css" href="{{ url('/') }}/assets/css/system.css?{{ config('custom.version') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ url('assets/lib/swiper/css/swiper.min.css?'.config('custom.version')) }}">
    <link rel="stylesheet" href="{{ url('assets/lib/jqueryModal/css/jquery.modal.min.css?'.config('custom.version')) }}" />
    <link type="text/css" href="{{ url('assets/css/styles.css?'.config('custom.version')) }}" rel="stylesheet" />
    <link type="text/css" href="{{ url('assets/css/select2.min.css?'.config('custom.version')) }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />



    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- <script>
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf('safari') != -1) {
        var url = `{{ url('assets/css/safari.css') }}`;
        if (ua.indexOf('chrome') > -1) {
        } else {
            link = document.createElement('link');
            link.id = 'id2';
            link.rel = 'stylesheet';
            link.href = url;
            document.head.appendChild(link);
        }
    }
</script> -->
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.js"></script>
    <script src="{{ url('assets/lib/popper/js/popper.min.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/lib/swiper/js/swiper.min.js?'.config('custom.version')) }}"></script>
    {!! config('custom.embed_header') !!}


    @yield('header')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RGD8Z61PDT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RGD8Z61PDT');
</script>


</head>

<body class="">
<!-- Menu -->
{{--sticky-top--}}
<div id="menu-main" class="block-main-menu">
        <!-- Menu -->
        <div class="logo-mobile-nav d-lg-none">
            <a href="{{ url('/') }}">
                <img class="img-fluid" src="{{ url('/') }}/assets/images/default/logo.png?{{ config('custom.version') }}" alt="">
            </a>
        </div>
            <nav id="sidenav" class="main-menu navbar navbar-expand-lg ">
                <div id="logo-mobile" class="d-lg-none mb-3 mt-4">
                    <a href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ url('/') }}/assets/images/default/logo.png?{{ config('custom.version') }}" alt="">
                    </a>
                </div>
                <div class=" d-flex w-100 dual-collapse2 order-1 order-md-0">
                    <ul class="left-nav navbar-nav ml-auto text-center">
                        <li @if(request()->is('/')) class="active" @endif >
                            <a class="nav-link" href="{{ url('/') }}">TRANG CHỦ </a>
                        </li>
                        <li @if(\Request::route()->getName() == 'intro'|| request()->is('gioi-thieu/*')) class="active" @endif>
                            <a class="nav-link" href="{{route('intro')}}">GIỚI THIỆU</a>
                        </li>
                        <!-- <li >
                            <a class="nav-link has-subnav" href="#">SO SÁNH</a>
                            <ul class="menu-hover">
                                <li @if(request()->is('pages/car')) class="active" @endif><a class="nav-link" href="{{ url('/car') }}">So sánh bảo hiểm vật chất ô tô</a></li>
                                <li @if(request()->is('pages/health')) class="active" @endif><a class="nav-link" href="{{ url('/health') }}">So sánh bảo hiểm sức khỏe</a></li>
                                <li @if(request()->is('pages/longevity')) class="active" @endif><a class="nav-link" href="{{ url('/longevity') }}">So sánh bảo hiểm nhân thọ</a></li>

                            </ul>
                        </li> -->
                        <li  @if(request()->is('so-sanh*')) class="active" @endif  >
                            <a href="javascript:void(0)" class="nav-link has-subnav dropdown-toggle" data-toggle="dropdown">SO SÁNH </a>
                            <ul class="menu-hover dropdown-menu">
                                <li @if(Request::route()->getName()=='car.index') class="active" @endif><a class="nav-link" href="{{ url('/so-sanh-oto') }}">So sánh bảo hiểm vật chất ô tô</a></li>
                                <li @if(request()->is('pages/health')) class="active" @endif><a class="nav-link" href="{{ url('/so-sanh-suc-khoe') }}">So sánh bảo hiểm sức khỏe</a></li>
                                <li @if(request()->is('pages/longevity')) class="active" @endif><a class="nav-link" href="{{ url('/so-sanh-nhan-tho') }}">So sánh bảo hiểm nhân thọ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto my-2 order-0 order-md-1 position-relative">
                    <a class="mx-auto" href="#">
                        <img src="{{ url('/') }}/assets/images/default/logo.png?{{ config('custom.version') }}" class="logo-desktop">
                    </a>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                </div>
                <div class=" d-flex w-100 dual-collapse2 order-2 order-md-2">
                    <ul class="right-nav navbar-nav mr-auto text-center">
                        <li @if(\Request::route()->getName()=='treatment') class="active" @endif>
                            <a class="nav-link" href="{{ url('/uu-dai') }}">ƯU ĐÃI</a>
                        </li>
                        <li  @if(Request::route()->getName()== 'question.index' || request()->is('blog/*')) class="active" @endif>
                            <a class="nav-link" href="{{ url('/kien-thuc') }}">KIẾN THỨC</a>
                        </li>
                        <li @if(Request::route()->getName()=='contact'|| request()->is('lien-he/*')) class="active" @endif>
                            <a class="nav-link" href="{{ url('/lien-he') }}">KẾT NỐI TƯ VẤN VIÊN</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- /.Menu -->

        <!-- overlay -->
        <div class="block-overlay"></div>
        <!-- /.overlay -->

        <!-- icon bar -->
        <div class="open-sidemenu">
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
        </div>
        <!-- /.icon bar -->

</div>
<!-- Menu -->
<div class="body-page">
    <div class="page-wrapper">
    @include('frontend/pages/section1')
        @yield('content')
    </div>
    <!-- Back to top -->
    <a class="scrollup"></a>
</div>
<footer>
    <div class="footer-ctn">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-3">
                    <div class="foot-title">
                        <h5>Giới thiệu</h5>
                    </div>

                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li><a href="{{ url('/gioi-thieu') }}">Giới thiệu về VICS-CORP</a></li>
                            <li><a href="{{ url('/uu-dai') }}">Ưu đãi</a></li>
                            <li><a href="{{ url('/kien-thuc') }}">Câu hỏi thường gặp</a></li>
                            <li><a href="{{ url('/lien-he') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="foot-title">
                        <h5>Liên hệ với chúng tôi</h5>
                    </div>
                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>
                                <img src="{{ url('assets/images/default/phone.png?'.config('custom.version')) }}" alt="">
                                <a href="tel:0906060784">0906.060.784</a><span> | <a href="tel:1900 9889 65">1900 9889 65</a></span>
                            </li>
                            <li>
                                <img src="{{ url('assets/images/default/address.png?'.config('custom.version')) }}" alt="">
                                Phòng 520, toà nhà 142 Lê Duẩn, Khâm Thiên, Đống Đa, Hà Nội
                            </li>
                            <li>
                                <img src="{{ url('assets/images/default/mail.png?'.config('custom.version')) }}" alt="">
                                <a href="mailto:lienhe@vbaohem.vn">lienhe@vbaohem.vn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 footer-text-right">
                    <div class="foot-title">
                        <h5>Khác</h5>
                    </div>
                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>
                                <a href="{{ url('/kien-thuc') }}">Tin tức</a>
                            </li>
                            <!-- <li>
                                Phản hồi khách hàng
                            </li> -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollup"><img src="{{url('assets/images/default/bottom-to-top.png')}}" alt=""></a>
    {!! config('custom.embed_footer') !!}

    @yield('footer')
    <script src="{{ url('assets/lib/jqueryModal/js/jquery.modal.min.js?'.config('custom.version')) }}"></script>
    <script>
        $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <script>
        $(document).ready(function(){
            // $.ui.menu.init();
            $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();

            } else {
                $('.scrollup').fadeOut();

            }
            });
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.contact-floating').fadeIn();
                } else {
                    $('.contact-floating').fadeOut();
                }
            });
            $('.scrollup').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });

    </script>
    <!-- script contact collaspse -->
    <script>
        $(function(){
            $('.name-item a').each(function(index,value){
                if ($(this).hasClass('active')==true) {
                    var id = $($(this)[index]).attr("value");
                    $('#'+id+'').show();
                }else{
                    $('#'+value.getAttribute("value")+'').hide();
                }
            });
            $('.showSingle1').click(function(){
                $('.name-item a').removeClass("active");
                $(this).find('a').addClass("active");
                $('.name-item a').each(function(index,value){
                    if ($(this).hasClass('active')==true) {
                        var id = $(this).attr("value");
                        $('#'+id+'').show();
                    }else{
                        $('#'+value.getAttribute("value")+'').hide();
                    }
                });
                var url = "{{route('contact.googleMap')}}";
                var advisor_id = $(this).find('a').data('id');
                $.post(url,{
                    "_token": "{{ csrf_token() }}",
                    advisor_id: advisor_id

                }).done(function(data){
                    $('#profile').html(data);
                    $('iframe').css('width','100%');
                })
            });
        });
    </script>
   <script>
        function killCopy(e){
            return false
        }
        function reEnable(){
            return true
        }
        document.onselectstart = new Function ("return false")
        if (window.sidebar){
            document.onmousedown=killCopy
            document.onclick=reEnable
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ url('assets/js/custom.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/js/select2.min.js?'.config('custom.version')) }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src='https://foliotek.github.io/Croppie/croppie.js'></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    function formattedText (text) {
        return text
        .replace(new RegExp('\r\n', 'g'), '\n')
        .split('\n\n')
        .map(p => `<p>${p}</p>`)
        .join('')
        .replace(new RegExp('\n', 'g'), '<br>')
    }

    function cutString(s, n){
        var cut= s.indexOf(' ', n);
        if(cut== -1) return s;
        return s.substring(0, cut)
    }

</script>
</body>
</html>
