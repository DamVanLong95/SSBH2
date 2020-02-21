<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-VN" dir="LTR" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="{{ config('custom.seo_author') }}">
    <meta property="fb:app_id" content="{{ config('custom.facebook_appid') }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ url('uploads/others/favicon.ico?'.config('custom.version')) }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link bootstrap -->
    <link rel="stylesheet"
          href="{{ url('assets/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css?'.config('custom.version')) }}">
    <!-- Link aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Link font-awesome -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/font-awesome.min.css?'.config('custom.version')) }}"
          type="text/css" />
    <!-- Link media-elm -->
    <link rel="stylesheet" href="{{ url('assets/lib/mediaplayer/mediaelementplayer.min.css') }}" type="text/css" />
    <!-- Link slick -->
    <link type="text/css" href="{{ url('assets/lib/slick/slick.css?'.config('custom.version')) }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/lib/slick/slick-theme.css?'.config('custom.version')) }}"
          rel="stylesheet">
    <!-- Link CSS default -->
    <link type="text/css" href="{{ url('/') }}/assets/css/base.css?{{ config('custom.version') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('/') }}/assets/css/system.css?{{ config('custom.version') }}" rel="stylesheet">
    <!-- Link page css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link type="text/css" href="{{ url('assets/css/animate.css?'.config('custom.version')) }}" rel="stylesheet" />
    <link type="text/css" href="{{ url('assets/css/styles.css?'.config('custom.version')) }}" rel="stylesheet" />
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ url('assets/lib/slick/slick.min.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/lib/mediaplayer/mediaelement-and-player.js') }}"></script>
    <script src="{{ url('assets/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/lib/swiper/js/swiper.min.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/lib/eclipsis/js/ellipsis.min.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/lib/eclipsis/js/jquery.ellipsis.min.js?'.config('custom.version')) }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
{!! config('custom.embed_header') !!}

@yield('header')

</head>

<body class="">

<!-- Menu -->
{{--sticky-top--}}
<div id="menu-main" class="block-main-menu">
    <div class="container flex-display">
        <!-- Menu -->
        <div class="logo-desktop">
            <a href="{{ url('/') }}">
                <img class="img-fluid" src="{{ url('/') }}/assets/images/section1/detox-icon.png?{{ config('custom.version') }}" alt="">
            </a>
        </div>
        <nav id="sidenav" class="main-menu">
            <div id="logo-mobile" class="d-lg-none mb-3 mt-4">
                <a href="{{ url('/') }}">
                    <img class="img-fluid" src="{{ url('/') }}/assets/images/section1/detox-icon-mb.png?{{ config('custom.version') }}" alt="">
                </a>
            </div>
            <ul>
                <li @if(request()->is('/')) class="active" @endif>
                    <a href="{{ url('/') }}">Trang chủ</a>
                </li>
                <li @if(request()->is('pages/contest_create')) class="active" @endif>
                    <a href="{{ url('pages/intro') }}">Giới thiệu</a>
                </li>
                <li @if(request()->is('pages/contest_list')) class="active" @endif>
                    <a href="{{ url('pages/compare') }}">So sánh </a>
                </li>
                <li @if(request()->is('pages/rules')) class="active" @endif>
                    <a href="{{ url('pages/preferential') }}">Ưu đãi </a>
                </li>
                <li @if(request()->is('news')) class="active" @endif>
                    <a href="{{ url('pages/question') }}">Câu hỏi </a>
                </li>
                <li @if(request()->is('bui-min-25')) class="active" @endif>
                    <a href="{{ url('pages/contact') }}">Liên hệ</a>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-default" role="navigation">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-brand navbar-brand-centered">Brand</div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Link</a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
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
                <div class="col-md-6 mt-5">
                    <div class="sponsor-box">
                        <h3 >Đơn vị đồng hành</h3>
                    </div>
                
                    <div class="footer-left">
                        <a href="https://www.lifebuoy.vn/" target="_blank">
                            <img src="{{url('assets/images/section1/lifebuoy-icon.png')}}" alt="">
                        </a>
                        <!-- <a href="http://kenh14.vn/" target="_blank">
                            <img src="{{url('assets/images/section1/k14.png')}}" alt="" style="padding-left:20px;">
                        </a> -->

                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="contact-box">
                        <h3>Thông tin liên hệ</h3>
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
<a class="scrollup"><img src="{{url('assets/images/section1/bottom-to-top.png')}}" alt=""></a>
@include('layouts.default_script')
{!! config('custom.embed_footer') !!}

@yield('footer')
<script src="{{ url('assets/js/jquery.matchHeight.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script>
    $(document).ready(function(){
        $.ui.menu.init();
        $.ui.parallax.init();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
        $('.scroll-news a').click(function (e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: ($('.wrapper-news-list').offset().top -50)
            }, 500);
            return false;
        });

        AOS.init();

        // Init click news details
        $('a.news-link').unbind('click').click(function () {
            var $href = $(this).attr('href');
            var $id = $(this).data('id');

            // Show modal
            var _cb = function (res) {
                if (res.code) {
                    if(!res.data.refer_link){
                        $('#ex2').modal();
                        $('#ex2 .modal-heading').html( res.data.title );
                        $('#ex2 .modal-content').html( res.data.fulltext );
                    }
                }
            };

            $.app.ajax(null, 'news/' + $id, {}, _cb, 'GET', '.alert-form');
        });
    });

    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });

    function _cbShare() {
        alert('Bạn đã chia sẻ thành công!');
    }
</script>


</body>
</html>
