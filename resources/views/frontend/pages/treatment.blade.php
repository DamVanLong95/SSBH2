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
                                                @for($i=1;$i<=6;$i++)
                                                    <div class="swiper-slide slide-item parent">
                                                        <a class="showSingle" target="1">
                                                            <div class="treatment-item item">
                                                                <div class="title">
                                                                    Kiến tạo
                                                                </div>
                                                                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao.jpg?{{ config('custom.version') }}" alt=""></div>
                                                                <div class="description">
                                                                    <p>MB Ageas cùng bạn tiếp nối giấc mơ</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endfor
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
                                <div id="div1" class=" child3 targetDiv">
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
                                              @for($i=1;$i<=6;$i++)
                                                    <div class="swiper-slide slide-item parent2">
                                                      <a class="showSingle" target="4">
                                                        <div class="treatment-item item">
                                                            <div class="title">
                                                                Sunlife
                                                            </div>
                                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Sunlife.jpg?{{ config('custom.version') }}" alt="">
                                                            <div class="description">
                                                                <p>Ưu thế so với thị trường</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    </div>
                                                @endfor
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
                                <div id="div4" class=" child3 targetDiv">
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
                                                  <a class="showSingle" target="3">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              FWD
                                                          </div>
                                                          <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/tuonglai.jpg?{{ config('custom.version') }}" alt="">
                                                          <div class="description">
                                                              <p>Tương lai trong tầm tay</p>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                              <div class="swiper-slide slide-item parent3">
                                                  <a class="showSingle" target="2">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              An Tâm gia đình
                                                          </div>
                                                          <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/antam.jpg?{{ config('custom.version') }}" alt="">
                                                          <div class="description">
                                                              <p>Bảo hiểm an tâm gia đình</p>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                              <div class="swiper-slide slide-item parent3">
                                                  <a class="showSingle" target="5">
                                                      <div class="treatment-item item">
                                                          <div class="title">
                                                              Manulife
                                                          </div>
                                                          <img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Manulife.jpg?{{ config('custom.version') }}" alt="">
                                                          <div class="description">
                                                              <p>Bảo hiểm bệnh hiểm nghèo</p>
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
                                <!-- <section class="cnt">
                                  <div id="div1" class="targetDiv"><div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/kientao1.jpg?{{ config('custom.version') }}" alt=""></div></div>
                                  <div id="div2" class="targetDiv"><div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/antam1.jpg?{{ config('custom.version') }}" alt=""></div></div>
                                  <div id="div3" class="targetDiv"><div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/tuonglai1.jpg?{{ config('custom.version') }}" alt=""></div></div>
                                  <div id="div4" class="targetDiv"><div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Sunlife1.jpg?{{ config('custom.version') }}" alt=""></div></div>
                                  <div id="div5" class="targetDiv"><div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/treatment/Manulife1.jpg?{{ config('custom.version') }}" alt=""></div></div>
                                </section> -->
                                <div id="div3" class=" child3 targetDiv">
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
                                <div id="div2" class=" child3 targetDiv">
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
                                <div id="div5" class=" child3 targetDiv">
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
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop