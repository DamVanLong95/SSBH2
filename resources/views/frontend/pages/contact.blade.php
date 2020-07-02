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
<div class="contact-container">
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965">
			<i class="fa fa-phone"></i>
			<span>1900988965</span>
		</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="contact-ctn">
                    <div class="select-ctn">
                        <div class="selection-box">
                            <div class=" item select">
                                <select aria-label="Select menu example">
                                    <option selected>Họ và tên</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example">
                                    <option selected>Lĩnh vực hoạt động</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example">
                                    <option selected>Khu vực</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="item button-filter">
                            <button type="button" onclick="">Tìm</button>
                        </div>
                    </div>
                    <div class="name-list">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item active">
                                    Jonh Doe
                                </div>   
                            </div>
                            @for($i=1;$i < 12;$i++)
                                <div class=" col-sm-12 col-md-4 col-lg-4">
                                    <div class="name-item">
                                        nguyen hoan van anh
                                    </div>   
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sec-contact-detail" class="sec-contact-detail">
        <div class="section-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="detail-ctn">
                            <div class="ava-ctn">
                                <img class="img-fluid" src="{{ url('/') }}/assets/images/logo/ava.jpg?{{ config('custom.version') }}" alt="">
                            </div>
                            <div class="detail-contact">
                                <div class="name">
                                    John Doe
                                </div>
                                <div class="time-work">
                                    <p class="job-title"><strong>Quá trình công tác</strong></p>
                                    <p>Báo cáo Viên về Hội nhập kinh tế quốc tế, Bộ Công thương	</p>
                                    <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                    <p>Bảo hiểm nhân thọ: Đầu tư, tích luỹ, </p>
                                    <p class="job-title"><strong>Khu vực</strong></p>
                                    <p>Hà Nội </p>
                                    <p class="job-title"><strong>Liên hệ</strong></p>
                                    <p><a href="tel:0906060784">0906.060.784</a><span> | <a href="mailto:contact@vics-corp.com">contact@vics-corp.com</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="map-ctn">
            <div class=" contact-map mb-5 pb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.356021421427!2d105.83889371533193!3d21.01843609350559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abdc0c1b029f%3A0xfd35e2f85578d97e!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gVMawIHbhuqVuIEThu4tjaCB24bulIELhuqNvIGhp4buDbSBWaeG7h3QgTmFt!5e0!3m2!1sen!2s!4v1593676651971!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop