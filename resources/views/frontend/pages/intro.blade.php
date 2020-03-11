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

<div class="intro-container">
    <div class="container">
    <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
        <div class="intro-ctn box-1">
            <div class="left-ctn">
                <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro2.png?{{ config('custom.version') }}" width="100%" alt=""></a>
            </div>
            <div class="right-ctn">
                <div class="title">
                    <h4>Giới thiệu về Web: V-Bảo hiểm</h4>
                </div>
                <p class="ellipsis">Web so sánh bảo hiểm V-Bảo hiểm ra đời với mục đích đem đến cho người  cái nhìn tổng quan nhất về các sản phẩm bảo hiểm xe ô tô hiện nay tại Việt Nam. Với mục tiêu giúp người dùng trở thành những người mua bảo hiểm thông thái nhất. Với mục tiêu đưa web so sánh bảo hiểm xe ô tô trở thành nền tảng so sánh bảo hiểm xe ô tô bảo hiểm hàng đầu tại Việt Nam. Chúng tôi đem tới người dùng nền tảng so sánh bảo hiểm xe ô tô đầy đủ nhất hiện nay để mọi người có thể dễ dàng hiểu và chọn được sản phẩm phù hợp với mong muốn, nhu cầu của mình. Từ đó, giúp khách hàng tiết kiệm thời gian tìm hiểu để so sánh và lựa chọn sản phẩm bảo hiểm xe ô tô phù hợp nhất; nâng cao sự hiểu biết về các sản phẩm bảo hiểm xe ô tô hiện nay trên thị trường Việt nam.</p>
                <div class="watch-more">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <div class="intro-ctn box-2">
            <div class="right-ctn">
                <div class="title">
                    <h4>Giới thiệu về Web: V-Bảo hiểm</h4>
                </div>
                <p class="ellipsis">Web so sánh bảo hiểm V-Bảo hiểm ra đời với mục đích đem đến cho người  cái nhìn tổng quan nhất về các sản phẩm bảo hiểm xe ô tô hiện nay tại Việt Nam. Với mục tiêu giúp người dùng trở thành những người mua bảo hiểm thông thái nhất. Với mục tiêu đưa web so sánh bảo hiểm xe ô tô trở thành nền tảng so sánh bảo hiểm xe ô tô bảo hiểm hàng đầu tại Việt Nam. Chúng tôi đem tới người dùng nền tảng so sánh bảo hiểm xe ô tô đầy đủ nhất hiện nay để mọi người có thể dễ dàng hiểu và chọn được sản phẩm phù hợp với mong muốn, nhu cầu của mình. Từ đó, giúp khách hàng tiết kiệm thời gian tìm hiểu để so sánh và lựa chọn sản phẩm bảo hiểm xe ô tô phù hợp nhất; nâng cao sự hiểu biết về các sản phẩm bảo hiểm xe ô tô hiện nay trên thị trường Việt nam.</p>
                <div class="watch-more">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="left-ctn">
                <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro2.png?{{ config('custom.version') }}" width="100%" alt=""></a>
            </div>
        </div>
        <div class="intro-ctn box-3">
            <div class="left-ctn">
                <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro2.png?{{ config('custom.version') }}" width="100%" alt=""></a>
            </div>
            <div class="right-ctn">
                <div class="title">
                    <h4>Giới thiệu về Web: V-Bảo hiểm</h4>
                </div>
                <p class="ellipsis">Web so sánh bảo hiểm V-Bảo hiểm ra đời với mục đích đem đến cho người  cái nhìn tổng quan nhất về các sản phẩm bảo hiểm xe ô tô hiện nay tại Việt Nam. Với mục tiêu giúp người dùng trở thành những người mua bảo hiểm thông thái nhất. Với mục tiêu đưa web so sánh bảo hiểm xe ô tô trở thành nền tảng so sánh bảo hiểm xe ô tô bảo hiểm hàng đầu tại Việt Nam. Chúng tôi đem tới người dùng nền tảng so sánh bảo hiểm xe ô tô đầy đủ nhất hiện nay để mọi người có thể dễ dàng hiểu và chọn được sản phẩm phù hợp với mong muốn, nhu cầu của mình. Từ đó, giúp khách hàng tiết kiệm thời gian tìm hiểu để so sánh và lựa chọn sản phẩm bảo hiểm xe ô tô phù hợp nhất; nâng cao sự hiểu biết về các sản phẩm bảo hiểm xe ô tô hiện nay trên thị trường Việt nam.</p>
                <div class="watch-more">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <div class="intro-ctn box-4">
            <div class="right-ctn">
                <div class="title">
                    <h4>Giới thiệu về Web: V-Bảo hiểm</h4>
                </div>
                <p class="ellipsis">Web so sánh bảo hiểm V-Bảo hiểm ra đời với mục đích đem đến cho người  cái nhìn tổng quan nhất về các sản phẩm bảo hiểm xe ô tô hiện nay tại Việt Nam. Với mục tiêu giúp người dùng trở thành những người mua bảo hiểm thông thái nhất. Với mục tiêu đưa web so sánh bảo hiểm xe ô tô trở thành nền tảng so sánh bảo hiểm xe ô tô bảo hiểm hàng đầu tại Việt Nam. Chúng tôi đem tới người dùng nền tảng so sánh bảo hiểm xe ô tô đầy đủ nhất hiện nay để mọi người có thể dễ dàng hiểu và chọn được sản phẩm phù hợp với mong muốn, nhu cầu của mình. Từ đó, giúp khách hàng tiết kiệm thời gian tìm hiểu để so sánh và lựa chọn sản phẩm bảo hiểm xe ô tô phù hợp nhất; nâng cao sự hiểu biết về các sản phẩm bảo hiểm xe ô tô hiện nay trên thị trường Việt nam.</p>
                <div class="watch-more">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="left-ctn">
                <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro2.png?{{ config('custom.version') }}" width="100%" alt=""></a>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop
