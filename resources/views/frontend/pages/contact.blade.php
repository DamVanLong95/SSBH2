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
                                    <option selected>Công việc</option>
                                    <option value="1">Đại lý</option>
                                    <option value="2">Tư vấn viên</option>
                                    <option value="3">Cán bộ DNBH</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example">
                                    <option selected>Lĩnh vực hoạt động</option>
                                    <option value="1">Nhân thọ</option>
                                    <option value="2">Phi nhân thọ</option>
                                    <option value="3">Cả hai</option>
                                </select>
                            </div>
                            <div class="item select">
                                <select aria-label="Select menu example">
                                    <option selected>Khu vực</option>
                                    <option value="An Giang">An Giang
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                    <option value="Bắc Giang">Bắc Giang
                                    <option value="Bắc Kạn">Bắc Kạn
                                    <option value="Bạc Liêu">Bạc Liêu
                                    <option value="Bắc Ninh">Bắc Ninh
                                    <option value="Bến Tre">Bến Tre
                                    <option value="Bình Định">Bình Định
                                    <option value="Bình Dương">Bình Dương
                                    <option value="Bình Phước">Bình Phước
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Cà Mau">Cà Mau
                                    <option value="Cao Bằng">Cao Bằng
                                    <option value="Đắk Lắk">Đắk Lắk
                                    <option value="Đắk Nông">Đắk Nông
                                    <option value="Điện Biên">Điện Biên
                                    <option value="Đồng Nai">Đồng Nai
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Gia Lai">Gia Lai
                                    <option value="Hà Giang">Hà Giang
                                    <option value="Hà Nam">Hà Nam
                                    <option value="Hà Tĩnh">Hà Tĩnh
                                    <option value="Hải Dương">Hải Dương
                                    <option value="Hậu Giang">Hậu Giang
                                    <option value="Hòa Bình">Hòa Bình
                                    <option value="Hưng Yên">Hưng Yên
                                    <option value="Khánh Hòa">Khánh Hòa
                                    <option value="Kiên Giang">Kiên Giang
                                    <option value="Kon Tum">Kon Tum
                                    <option value="Lai Châu">Lai Châu
                                    <option value="Lâm Đồng">Lâm Đồng
                                    <option value="Lạng Sơn">Lạng Sơn
                                    <option value="Lào Cai">Lào Cai
                                    <option value="Long An">Long An
                                    <option value="Nam Định">Nam Định
                                    <option value="Nghệ An">Nghệ An
                                    <option value="Ninh Bình">Ninh Bình
                                    <option value="Ninh Thuận">Ninh Thuận
                                    <option value="Phú Thọ">Phú Thọ
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Ngãi">Quảng Ngãi
                                    <option value="Quảng Ninh">Quảng Ninh
                                    <option value="Quảng Trị">Quảng Trị
                                    <option value="Sóc Trăng">Sóc Trăng
                                    <option value="Sơn La">Sơn La
                                    <option value="Tây Ninh">Tây Ninh
                                    <option value="Thái Bình">Thái Bình
                                    <option value="Thái Nguyên">Thái Nguyên
                                    <option value="Thanh Hóa">Thanh Hóa
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                    <option value="Tiền Giang">Tiền Giang
                                    <option value="Trà Vinh">Trà Vinh
                                    <option value="Tuyên Quang">Tuyên Quang
                                    <option value="Vĩnh Long">Vĩnh Long
                                    <option value="Vĩnh Phúc">Vĩnh Phúc
                                    <option value="Yên Bái">Yên Bái
                                    <option value="Phú Yên">Phú Yên
                                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                    <option value="Tp.Hà Nội">Tp.Hà Nội
                                    <option value="TP HCM">TP HCM
                                </select>
                            </div>
                        </div>
{{--                        <div class="item button-filter">--}}
{{--                            <button type="button" onclick="">Tìm</button>--}}
{{--                        </div>--}}
                    </div>
                    <div class="name-list">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1 " target="1">
                                    <a href="javascript:void(0)" class="active" value="adiv1">Phạm Thị Hồng Diệp</a>
                                </div>
                            </div> 
                            
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="2" >
                                    <a href="javascript:void(0)" class="" value="adiv2">Đinh Quang Sâm</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="3">
                                    <a href="javascript:void(0)" class="" value="adiv3">Nguyễn Hoàng Giang</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4" target="4">
                                <div class="name-item showSingle1">
                                    <a href="javascript:void(0)" class="" value="adiv4">Vũ Thị Lĩnh</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="5">
                                    <a href="javascript:void(0)" class="" value="adiv5">Lê Thị Hà</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="6">
                                    <a href="javascript:void(0)" class="" value="adiv6">Trịnh Thị Lệ</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="7">
                                    <a href="javascript:void(0)"class="" value="adiv7">Nguyễn Đình Phượng</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="8">
                                    <a href="javascript:void(0)" class="" value="adiv8">Vũ Sang</a>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4 col-lg-4">
                                <div class="name-item showSingle1" target="9">
                                    <a href="javascript:void(0)" class="" value="adiv9">Nguyễn Thế Kiên</a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="adiv1" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/diep.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                        Phạm Thị Hồng Diệp
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>Công ty Cổ phần tư vấn dịch vụ bảo hiểm Việt Nam	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm phi nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Đống Đa, Hà Nội</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:0963711375">0963711375</a><span> | <a href="mailto:dieppth@vics-corp.com"> dieppth@vics-corp.com</a></span></p>
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
    <div id="adiv2" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/avtanhSam.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                        Đinh Quang Sâm
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>MB ageas	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm phi nhân thọ</p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Bắc Ninh</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:0988636594">0988636594</a><span> | <a href="mailto:quangsambn@gmail.com"> quangsambn@gmail.com</a></span></p>
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
    <div id="adiv3" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/profile.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Nguyễn Hoàng Giang
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm phi nhân thọ</p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Cầu giấy, Hà Nội</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:0886976777">0886976777</a><span> | <a href="mailto:giang.hfs@gmail.com"> giang.hfs@gmail.com</a></span></p>
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
    <div id="adiv4" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/profile.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Vũ Thị Lĩnh
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>Moncover</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm sức khỏe</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Đống Đa, Hà Nội</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:"></a><span> | <a href="mailto:"> </a></span></p>
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
    <div id="adiv5" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/avtchiHa.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Lê Thị Hà
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>Manulife</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Vinh, Nghệ An</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:0933297555">0933297555</a><span> | <a href="mailto:ha.manulife.mdrt@gmail.com"> ha.manulife.mdrt@gmail.com</a></span></p>
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
    <div id="adiv6" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/avtchiLe.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Trịnh Thị Lệ
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>Bảo Việt</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Yên Định, Thanh Hóa</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:0987683453">0987683453/0948101928</a><span> | <a href="mailto:trinhle.yd@gmail.com"> trinhle.yd@gmail.com</a></span></p>
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
    <div id="adiv7" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/avtanhPhuong.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Nguyễn Đình Phượng
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>Daiichi	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Bắc Từ Liêm, Hà Nội</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:"></a><span> | <a href="mailto:phuong.daichi68@gmail.com"> phuong.daichi68@gmail.com</a></span></p>
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
    <div id="adiv8" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/avtanhSang.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Vũ Sang
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>GĐKD công ty TCA	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm phi nhân thọ</p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Hà Nội và Bắc Ninh </p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:988006997">988006997</a><span> | <a href="mailto:vusang99bn@gmail.com"> vusang99bn@gmail.com</a></span></p>
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
    <div id="adiv9" class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/contact/avtanhKien.jpg?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                    Nguyễn Thế Kiên
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình công tác</strong></p>
                                        <p>TCA Thanh Hóa	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        <p>Bảo hiểm nhân thọ</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>Thanh Hóa</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:944374347">944374347</a><span> | <a href="mailto:tcathanhhoa368@gmail.com"> tcathanhhoa368@gmail.com</a></span></p>
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
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop
