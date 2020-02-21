@extends('layouts.default')
@section('header')
<title>{{ config('custom.seo_title') }}</title>
<meta name="description" content="{{ config('custom.seo_description') }}">
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="{{ url('/')  }}"/>
<meta property="og:url" content="{{ Request::url()  }}" />
<meta property="og:image" content="{{ url('uploads/others/fbimage.jpg?'.config('custom.version'))  }}" />
<meta property="og:title" content="{{ config('custom.seo_title') }}" />
<meta property="og:description" content="{{ config('custom.seo_description') }}" />

@stop
@section('content')
    <!-- <div class="section1">
        <div class="slide-ctn thumb-news">
            <div class="swiper-banner-container swiper-container">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide">
                        <div class="news-item">
                            <a href="#" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner1.jpg?{{ config('custom.version') }}" alt=""></a>
                        </div>
                        <div class="news-item">
                            <a href="#" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner2.jpg?{{ config('custom.version') }}" alt=""></a>
                        </div>
                        <div class="news-item">
                            <a href="#" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner3.jpg?{{ config('custom.version') }}" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <div class="section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-ctn">
                        <div class="item phone">
                            <a class="" href="#" target="_blank">1900 9889 65</a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/mes.png?{{ config('custom.version') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="right-ctn">
                        <div class="content">
                            <h5>Với VICS CORP, mọi sự so sánh trở nên dễ dàng</h5>
                            <p>Tìm kiếm. So sánh. Chọn lựa! Cách so sánh công bằng nhất</p>
                        </div>
                        <div class="detail">
                            <p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/home/tick.png?{{ config('custom.version') }}" alt=""></span>Đánh giá và tính điểm giúp lựa chọn sản phẩm bảo hiểm phù hợp</p>
                            <p> <span><img class="img-fluid" src="{{ url('/') }}/assets/images/home/tick.png?{{ config('custom.version') }}" alt=""></span>So sánh các sản phẩm bảo hiểm từ nhiều nhà cung cấp khác nhau</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section4-ctn">
                        <div class="title-ctn">
                            <h4>Bạn đã biết cách sử dụng <span>sanbaohiem</span> chưa?</h4>
                            <p>Rất đơn giản. Hãy làm như sau</p>
                        </div>
                        <div class="sec4-container">
                            <div class="section4-content">
                                <div class="item">
                                    <p>Bước 1</p>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/know1.png?{{ config('custom.version') }}" alt="">
                                    <h6>Tìm kiếm</h6>
                                </div>
                                <div class="item center">
                                    <p>Bước 2</p>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/know2.png?{{ config('custom.version') }}" alt="">
                                    <h6>So sánh</h6>
                                </div>
                                <div class="item">
                                    <p>Bước 3</p>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/know3.png?{{ config('custom.version') }}" alt="">
                                    <h6>Chọn lựa</h6>
                                </div>
                            
                            </div>
                            <div class="descript-p">
                               <p>Chọn sản phẩm từ các tổ chức bạn tin tưởng, so sánh các sản phẩm với nhau và cân nhắc để có sản phẩm ưng ý nhất.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-container">
                        <div class="blog-title-ctn">
                            <div class="title-ctn">
                                    <h4>Kiến thức bảo hiểm</h4>
                                    <p>VICS CORP mang đến cho bạn những thông tin ưu đãi và tin tức mới nhất</p>
                                </div>
                            </div>
                        <div class="blog-ctn">
                            <div class="item">
                                <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                <div class="description-ctn">
                                    <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                                </div>
                            </div>
                            <div class="item center">
                                <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                <div class="description-ctn">
                                    <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                <div class="description-ctn">
                                    <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
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
@stop
