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
<div class="treatment-container">
<div class="contact-floating">
    <div class="contact-phone"><a href="tel:0906060784" target="_blank">0906060784</a></div>
    <div class="contact-email"><a href="mailto:contact@vics-corp.com" target="_blank"><img src="{{ url('/') }}/assets/images/default/email-intro.png?{{ config('custom.version') }}" alt=""></a></div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bh-car">
                    <div class="title">
                        <h4>Sản phẩm Bảo hiểm Vật chất xe</h4>
                    </div>
                    <div id="section-treatment" class="section-treatment-slide">
                        <div class="section-wrapper ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="slideTreatment" class="swiper-container swiper-treatment">
                                            <div class="swiper-wrapper uudai-slide">
                                                <div class="swiper-slide slide-item parent">
                                                    <a class="showSingle" target="1a">
                                                        <div class="treatment-item item">
                                                            <div class="title">
                                                            Bảo hiểm vật chất ô tô
                                                            </div>
                                                            <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/xe1.jpg?{{ config('custom.version') }}" alt=""></div>
                                                            <div class="description">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent">
                                                    <a class="showSingle" target="1b">
                                                        <div class="treatment-item item">
                                                            <div class="title">
                                                                Bảo hiểm vật chất ô tô
                                                            </div>
                                                            <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/xe2.jpg?{{ config('custom.version') }}" alt=""></div>
                                                            <div class="description">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent">
                                                    <a class="showSingle" target="1c">
                                                        <div class="treatment-item item">
                                                            <div class="title">
                                                            Bảo hiểm vật chất ô tô
                                                            </div>
                                                            <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/xe3.jpg?{{ config('custom.version') }}" alt=""></div>
                                                            <div class="description">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent">
                                                    <a class="showSingle" target="1d">
                                                        <div class="treatment-item item">
                                                            <div class="title">
                                                            Bảo hiểm vật chất ô tô
                                                            </div>
                                                            <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/xe4.jpg?{{ config('custom.version') }}" alt=""></div>
                                                            <div class="description">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
                                <div id="div1a" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div1b" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div1c" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div1d" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bh-longevity">
                    <div class="title">
                        <h4>Sản phẩm Bảo hiểm Nhân thọ</h4>
                    </div>
                    <div id="section-treatment" class="section-treatment-slide">
                        <div class="section-wrapper ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="slideTreatment" class="swiper-container swiper-treatment">
                                            <div class="swiper-wrapper uudai-slide">
                                                <div class="swiper-slide slide-item parent2">
                                                    <a class="showSingle" target="4a">
                                                    <div class="treatment-item item">
                                                        <div class="title">
                                                            FWD
                                                        </div>
                                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Fwd-Tuonglaitrongtamtay-anhPhuong.jpg?{{ config('custom.version') }}" alt="">
                                                        <div class="description">
                                                            <p>Tương lai trong tầm tay</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent2">
                                                    <a class="showSingle" target="4b">
                                                    <div class="treatment-item item">
                                                        <div class="title">
                                                            MB Ageas Life 
                                                        </div>
                                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/MBAGEASLIFE-Kientaouocmo-aSam.jpg?{{ config('custom.version') }}" alt="">
                                                        <div class="description">
                                                            <p>Kiến tạo ước mơ</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent2">
                                                    <a class="showSingle" target="4c">
                                                    <div class="treatment-item item">
                                                        <div class="title">
                                                           MIC 
                                                        </div>
                                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Mic-M_care-chiLinh.jpg?{{ config('custom.version') }}" alt="">
                                                        <div class="description">
                                                            <p>M_care</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent2">
                                                    <a class="showSingle" target="4d">
                                                    <div class="treatment-item item">
                                                        <div class="title">
                                                            Sunlife
                                                        </div>
                                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Sunlife-Chudongsong-chiLe.jpg?{{ config('custom.version') }}" alt="">
                                                        <div class="description">
                                                            <p>Chủ động sống</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="swiper-slide slide-item parent2">
                                                    <a class="showSingle" target="4e">
                                                    <div class="treatment-item item">
                                                        <div class="title">
                                                            Manulife
                                                        </div>
                                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Manulife-Giadinhtoiyeu-chiHa.jpg?{{ config('custom.version') }}" alt="">
                                                        <div class="description">
                                                            <p>Gia đình tôi yêu</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
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
                                <div id="div4a" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/tuonglai1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div4b" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div4c" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/aktl.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div4d" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Sunlife1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div4e" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Manulife1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bh-health">
                    <div class="title">
                        <h4>Sản phẩm Bảo hiểm Sức khoẻ</h4>
                    </div>
                    <div id="section-treatment" class="section-treatment-slide">
                        <div class="section-wrapper ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="slideTreatment" class="swiper-container swiper-treatment">
                                            <div class="swiper-wrapper uudai-slide">
                                              <div class="swiper-slide slide-item parent3">
                                                  <a class="showSingle" target="3a">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              BSH
                                                          </div>
                                                          <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/BSH-Baohiemantamgiadinh.jpg?{{ config('custom.version') }}" alt="">
                                                          <div class="description">
                                                              <p>Bảo hiểm an tâm gia đình</p>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                              <div class="swiper-slide slide-item parent3">
                                                  <a class="showSingle" target="3b">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              VBI Hope
                                                          </div>
                                                          <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/VBIhope-Baohiembenhungthu.jpg?{{ config('custom.version') }}" alt="">
                                                          <div class="description">
                                                              <p>Bảo hiểm bệnh ung thư</p>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                              <div class="swiper-slide slide-item parent3">
                                                  <a class="showSingle" target="3c">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              VBI Care
                                                          </div>
                                                          <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/VBIcare-Baohiemsuckhoe.jpg?{{ config('custom.version') }}" alt="">
                                                          <div class="description">
                                                              <p>Bảo hiểm sức khỏe</p>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
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
                                
                                <div id="div3a" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/antam1.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div3b" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/VBI-BaohiemsuckhoeVBIcare.jpg?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="div3c" class=" child3 targetDiv">
                                    <div class="detail-content ">
                                        <div class="child-content">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/VBIcare-Baohiemsuckhoe?{{ config('custom.version') }}" alt="">
                                        </div>
                                        <div class="contact-btn-ctn">
                                            <button type="button" onclick="">Liên hệ tư vấn viên</button>
                                            <button type="button" onclick=""><img class="img-fluid" src="{{ url('/') }}/assets/images/logo/call.png?{{ config('custom.version') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop