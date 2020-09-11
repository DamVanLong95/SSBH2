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
<div class="contact-floating">
    <a class="btn-call-now" href="tel:1900988965" title="Gọi ngay"><span class="icon-tel"></span> <span class="tel">1900 9889 65</span></a>
</div>
<div class="section2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="right-ctn">
                    <div class="content">
                        <h5>Với Vbaohiem, mọi sự so sánh trở nên dễ dàng</h5>
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
<div id="section3" class="section3">
    <div class="sec3-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="slideKnow" class="swiper-container swiper-know">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-item">
                                <div class="item">
                                    <h4> <a href="{{ url('/so-sanh-oto') }}">  So sánh bảo hiểm vật chất xe ô tô</a></h4>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty bảo hiểm phi nhân thọ cung cấp bảo hiểm vật chất xe ô tô uy tín trên thị trường.</p>
                                    </div>
                                    <a href="{{ url('/so-sanh-oto') }}" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide slide-item ">
                                <div class="item center-item">
                                    <h4> <a href="{{ url('/so-sanh-nhan-tho') }}"> So sánh bảo hiểm Nhân thọ</a></h4>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty bảo hiểm nhân thọ, cung cấp bảo hiểm nhân thọ uy tín trên thị trường.</p>
                                    </div>
                                    <a href="so-sanh-nhan-tho" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide2.png?{{ config('custom.version') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide slide-item">
                                <div class="item">
                                    <h4> <a href="{{ url('/so-sanh-suc-khoe') }}"> So sánh Bảo hiểm sức khoẻ </a></h4>
                                    <div class="description-ctn">
                                        <p>So sánh các công ty bảo hiểm cung cấp bảo hiểm sức khoẻ uy tín trên thị trường.</p>
                                    </div>
                                    <a href="{{ url('/so-sanh-suc-khoe') }}" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide3.png?{{ config('custom.version') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="arrow-ctn ">
                            <div class="swiper-button-prev swip-prev">
                               
                            </div>
                            <div class="swiper-button-next swip-next">
                               
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
                        <h4>Bạn đã biết sử dụng Web <span>Vbaohiem</span> chưa?</h4>
                        <p>Rất đơn giản. Hãy làm như sau</p>
                    </div>
                    <div class="sec4-container">
                        <div class="section4-content ">
                            <div class="item show1">
                                <p>Bước 1</p>
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/know1.png?{{ config('custom.version') }}" alt="">
                                <h6 >Tìm kiếm</h6>
                            </div>
                            <div class="descript-p" id="descript1">
                                <p >Chọn danh mục sản phẩm bạn muốn tìm kiếm và điền thông tin để nhận gợi ý những sản phẩm phù hợp nhất cho bạn</p>
                            </div>
                            <div class="item center show2">
                                <p>Bước 2</p>
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/know2.png?{{ config('custom.version') }}" alt="">
                                <h6>So sánh</h6>
                            </div>
                            <div class="descript-p" id="descript2">
                                <p>Chọn sản phẩm từ các doanh nghiệp bảo hiểm, so sánh đánh giá các sản phẩm với nhau và cân nhắc để có sản phẩm ưng ý nhất.</p>
                            </div>
                            <div class="item show3">
                                <p>Bước 3</p>
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/know3.png?{{ config('custom.version') }}" alt="">
                                <h6>Chọn lựa</h6>
                            </div>
                            <div class="descript-p" id="descript3">
                                <p>Chọn sản phẩm bạn muốn, liên hệ trực tuyến và kết nối với các tư vấn viên để được tư vấn cụ thể.</p>
                            </div>
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
                        <h4>Truyền thông nói về chúng tôi</h4>
                    </div>
                    <div id="slideCus" class="swiper-container swiper-customer">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-item">
                                <p>
                                "VICS-CORP tiên phong trong lĩnh vực phụ trợ bảo hiểm, đặt mục tiêu tham vọng với định hướng trở thành nhà tư vấn dịch vụ bảo hiểm hàng đầu Việt Nam"
                                    <br><i><a href="https://tinnhanhchungkhoan.vn/chuyen-dong-doanh-nghiep/vics-corp-tien-phong-trong-linh-vuc-phu-tro-bao-hiem-307535.html" target="_blank">  tinnhanhchungkhoan.vn</a> </i>
                                </p>
                            </div>
                            <div class="swiper-slide slide-item">
                                <p>
                                Vbaohiem là website so sánh sản phẩm bảo hiểm đầy đủ, toàn diện trên các lĩnh vực bảo hiểm: nhân thọ, vật chất xe cơ giới, sức khỏe… của tất cả 18 công ty bảo hiểm nhân thọ và 30 công ty bảo hiểm phi nhân thọ tại Việt Nam.
                                    <br><i> cty Akitec</i>
                                </p>
                            </div>
                            <div class="swiper-slide slide-item">
                                <p>
                                "Kênh kết nối khách hàng đến tư vấn viên bảo hiểm chuyên nghiệp nhất  thông qua nền tảng công nghệ trực tuyến đơn giản, hiện đại."
                                    <br><i>cty Gỗ Châu Á</i>
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
                                <p>“V- Bảo hiểm” mang đến cho bạn những thông tin ưu đãi và tin tức mới nhất.</p>
                            </div>
                        </div>
                    <div class="blog-ctn">
                    <div id="slideKnowledge" class="swiper-container swiper-knowledge">
                        <div class="swiper-wrapper">
                        @foreach($posts as $value)
                            <div class="swiper-slide slide-item ">
                                <div class="item item-kienthuc">
                                    <a href="{{route('blog.show',['id'=>$value->id,'slug'=>$value->slug])}}" target="_blank"><img src="storage/{{$value['avatar']}}" alt="" ></a>
                                    <div class="description-ctn">
                                        <a href="{{route('blog.show',['id'=>$value->id,'slug'=>$value->slug])}}">{{$value['title']}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="arrow-ctn ">
                            <div class="swiper-button-next know-next">
                            </div>
                            <div class="swiper-button-prev know-prev">
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
                        <div class="swiper-wrapper parner-slide">
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/tila.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <!-- <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner1.png?{{ config('custom.version') }}" alt="">
                            </div> -->
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/infair.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner3.png?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/mooncover.jpg?{{ config('custom.version') }}" alt="">
                            </div>
                            <!-- <div class="swiper-slide slide-item">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner5.png?{{ config('custom.version') }}" alt="">
                            </div> -->
                        </div>
                        <!-- Add Arrows -->
                    </div>
                    <div class="arrow-ctn ">
                        <div class="swiper-button-next partner-next">
                        </div>
                        <div class="swiper-button-prev partner-prev">
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