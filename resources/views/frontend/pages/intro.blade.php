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
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965">
			<i class="fa fa-phone"></i>
			<span>1900988965</span>
		</a>
    </div>
    <div class="container">
        <div class="col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
            <div class="intro-ctn box-1">
                <div class="left-ctn">
                    <a href="{{ route('detail') }}" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro0.png?{{ config('custom.version') }}" width="100%" alt=""></a>
                </div>
                <div class="right-ctn">
                    <div class="title">
                        <a href="{{route('detail')}}"><h4>Giới thiệu về Web: V-Bảo hiểm</h4></a>
                    </div>
                    <p class="ellipsis">Web so sánh bảo hiểm V-Bảo hiểm ra đời với mục đích đem đến cho người  cái nhìn tổng quan nhất về các sản phẩm bảo hiểm xe ô tô hiện nay tại Việt Nam. Với mục tiêu giúp người dùng trở thành những người mua bảo hiểm thông thái nhất. Với mục tiêu đưa web so sánh bảo hiểm xe ô tô trở thành nền tảng so sánh bảo hiểm xe ô tô bảo hiểm hàng đầu tại Việt Nam. Chúng tôi đem tới người dùng nền tảng so sánh bảo hiểm xe ô tô đầy đủ nhất hiện nay để mọi người có thể dễ dàng hiểu và chọn được sản phẩm phù hợp với mong muốn, nhu cầu của mình. Từ đó, giúp khách hàng tiết kiệm thời gian tìm hiểu để so sánh và lựa chọn sản phẩm bảo hiểm xe ô tô phù hợp nhất; nâng cao sự hiểu biết về các sản phẩm bảo hiểm xe ô tô hiện nay trên thị trường Việt nam.</p>
                    <div class="watch-more">
                        <a href="{{ route('detail') }}">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="intro-ctn box-2">
                <div class="right-ctn">
                    <div class="title">
                    <a href="{{ route('reason') }}"><h4>Lợi ích của Web</h4></a>
                    </div>
                    <p class="ellipsis">Bạn muốn mua bảo hiểm nhân thọ, bảo hiểm sức khỏe hay bảo hiểm vật chất xe ô tô. Bạn đang phân vân không biết công ty bảo hiểm nào uy tín,</p>
                    <div class="watch-more">
                        <a href="{{ route('reason') }}">Xem chi tiết</a>
                    </div>
                </div>
                <div class="left-ctn">
                    <a href="{{ route('reason') }}" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro3.png?{{ config('custom.version') }}" width="100%" alt=""></a>
                </div>
            </div>
            <div class="intro-ctn box-3">
                <div class="left-ctn">
                    <a href="{{ route('principle') }}" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro4.png?{{ config('custom.version') }}" width="100%" alt=""></a>
                </div>
                <div class="right-ctn">
                    <div class="title">
                        <a href="{{ route('principle') }}"><h4>Nguyên tắc hoạt động của Web</h4></a>
                    </div>
                    <p class="ellipsis">V-Bảo hiểm là trang thông tin so sánh các loại hình sản phẩm bảo hiểm hiện có trên thị trường bảo hiểm Việt Nam. Phục vụ nhu cầu tìm kiếm, đánh giá và lựa chọn gói,</p>
                    <div class="watch-more">
                        <a href="{{ route('principle') }}">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="intro-ctn box-4">
                <div class="right-ctn">
                    <div class="title">
                        <a href="{{ route('term') }}"><h4>Điều kiện, điều khoản Web</h4></a>
                    </div>
                    <p class="ellipsis">Điều kiện và điều khoản là nội dung thỏa thuận giữa người dùng và chúng tôi nhằm làm rõ cách thức vận hành kinh doanh của chúng tôi khi sử dụng dịch vụ</p>
                    <div class="watch-more">
                        <a href="{{ route('term') }}">Xem chi tiết</a>
                    </div>
                </div>
                <div class="left-ctn">
                    <a href="{{ route('term') }}" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro5.png?{{ config('custom.version') }}" width="100%" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop
