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

    <!-- <script src="{{ url('assets/js/?'.config('custom.version')) }}"></script> -->

@stop

@section('content')
<div id="section1" class="section1">
    <div class="sec1-wrapper text-center">
        <div class="">
            <div id="slideBanner" class="swiper-container swiper-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-item">
                        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner1.jpg?{{ config('custom.version') }}" alt="">
                    </div>
                    <div class="swiper-slide slide-item">
                        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner2.jpg?{{ config('custom.version') }}" alt="">
                    </div>
                    <div class="swiper-slide slide-item">
                        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/banner3.jpg?{{ config('custom.version') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div id="section3" class="section7">
    <div class="sec3-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="slideKnow" class="swiper-container swiper-know">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-item">
                                <div class="item">
                                    <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-item">
                                <div class="item">
                                    <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-item">
                                <div class="item">
                                    <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-item">
                                <div class="item">
                                    <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/blog1.png?{{ config('custom.version') }}" alt=""></a>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="arrow-ctn ">
                            <div class="swiper-button-prev">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/section3/left.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/section3/right.png?{{ config('custom.version') }}" alt="">
                            </div>
                        </div>
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
<div id="section5" class="section5">
    <div class="sec5-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-ctn">
                        <h4>Truyền thông nói về <span>sanbaohiem</span></h4>
                    </div>
                    <div id="slideCus" class="swiper-container swiper-customer">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-item">
                                <p>
                                "VICS CORP tiên phong cung cấp giải pháp cho nhu cầu quan trọng nhất của người dùng khi họ đang phân vân giữa quá nhiều lựa chọn: sự đơn giản. Trang web này mang đến cho người dùng những công cụ hữu ích như so sánh thẻ tín dụng, tham khảo đánh giá từ người dùng khác, và bảng xếp hạng các sản phẩm tài chính cá nhân."
                                    <br><i>Báo tuổi trẻ</i>
                                </p>
                            </div>
                            <div class="swiper-slide slide-item">
                                <p>
                                W2A đã là một công cụ tạo ứng dụng tuyệt vời. Khách hàng của chúng tôi đã tỏ ra ngạc nhiên và vô cùng thích thú với ứng dụng mới cùng những tính năng mới. Ứng dụng đã giúp chúng tôi gắn kết và chăm sóc khách hàng dễ dàng hơn.
                                    <br><i></i>
                                </p>
                            </div>
                            <div class="swiper-slide slide-item">
                                <p>
                                Thông qua ứng dụng di động tôi đã thu được số lượng lớn độc giả cho blog của mình. Nhờ trình xây dựng ứng dụng di động - w2a, bây giờ, một số lượng độc giả có thể biết đến các blog của tôi.  
                                    <br><i></i>
                                </p>
                            </div>
                            <div class="swiper-slide slide-item">
                                <p>
                                Tôi đang tìm kiếm một nhà phát triển ứng dụng cho doanh nghiệp, khi đó tôi tình cờ thấy W2A. Không chỉ giá cả phải chăng mà nó còn biến trang web của tôi thành một ứng dụng hiệu quả thu hút khách hàng hiệu quả hơn.  
                                    <br><i></i>
                                </p>
                            </div>
                            <div class="swiper-slide slide-item">
                                <p>
                                Tôi chưa bao giờ nghĩ rằng việc khởi tạo một ứng dụng lại vô cùng đơn giản và dễ dàng đến như thế. Nền tảng W2A rất dễ sửu dụng và các tính năng cũng như dịch vụ được cung cấp rất tuyệt vời. Tất cả những gì tôi cần đó là vài bước thao tác đơn giản, vậy là tôi đã hoàn toàn làm chủ được việc tạo ứng dụng trên nền tảng di động.  
                                    <br><i></i>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
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
                            <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/blog1.png?{{ config('custom.version') }}" alt=""></a>
                            <div class="description-ctn">
                                <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                            </div>
                        </div>
                        <div class="item center">
                            <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/blog1.png?{{ config('custom.version') }}" alt=""></a>
                            <div class="description-ctn">
                                <p>So sánh các công ty tài chính cho vay tín chấp tiêu dùng có uy tín nhất</p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/blog1.png?{{ config('custom.version') }}" alt=""></a>
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
<div id="section7" class="section7">
    <div class="sec7-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-ctn">
                        <h4>Đối tác chính</h4>
                    </div>
                    <div id="slidePartner" class="swiper-container swiper-partner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner1.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner2.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner3.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner4.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner5.png?{{ config('custom.version') }}" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <!-- <div class="arrow-ctn ">
                            <div class="swiper-button-prev">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/section3/left.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/section3/right.png?{{ config('custom.version') }}" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop