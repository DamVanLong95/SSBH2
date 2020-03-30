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

<div id="app">
    <div class="compare-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="compare-nav">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Chọn chương trình bảo hiểm</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                Selection One
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                Selection Two
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                Selection Three
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4" />
                                Selection Four
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5" />
                                Selection Five
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Dưới 3 triệu</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                Selection One
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                Selection Two
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                Selection Three
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4" />
                                Selection Four
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5" />
                                Selection Five
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Phạm vi bảo hiểm</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                Selection One
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                Selection Two
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                Selection Three
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4" />
                                Selection Four
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5" />
                                Selection Five
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Chọn công ty bảo hiểm</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                Selection One
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 2" />
                                Selection Two
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 3" />
                                Selection Three
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 4" />
                                Selection Four
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 5" />
                                Selection Five
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="search-ctn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-section-health">
                        <button class="btn1" type="button" onclick=""> Chọn lại</button>
                        <button class="btn2"type="button" onclick=""> Tìm kiếm </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pack-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="pack-title">
                    <h4>Tích lũy, tiết kiệm <span>(5)</span></h4>
                </div>
                <div  class="section-wrapper">
                    <ul id="thumbs" class="section-list">
                        @for($i=1;$i<=10;$i++)
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="1">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_13"/>
                                    <label class="toggle" for="ala_13"></label>
                                </div>
                            </div>
                        </li>
                        @endfor
                    </ul>
                </div>
                </div>
            </div>
            <div class="paddles">
                <button class="left-paddle paddle hidden">
                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
                </button>
                <button class="right-paddle paddle">
                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
                </button>
            </div>
        </div>
        
    </div>
    <div class="pack-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="pack-title">
                    <h4>Bảo vệ <span>(2)</span></h4>
                </div>
                <div  class="section-wrapper2">
                    <ul id="thumbs" class="section-list2">
                        <li class="item2">
                            <div class="brand-thumb">
                                <label for="1">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_1"/>
                                    <label class="toggle" for="ala_1"></label>
                                </div>
                            </div>
                        </li>
                        <li class="item2">
                            <div class="brand-thumb">
                                <label for="2">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_2"/>
                                    <label class="toggle" for="ala_2"></label>
                                </div>
                            </div>
                        </li>
                        <li class="item2">
                            <div class="brand-thumb">
                                <label for="3">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_3"/>
                                    <label class="toggle" for="ala_3"></label>
                                </div>
                            </div>
                        </li>
                        <li class="item2">
                            <div class="brand-thumb">
                                <label for="4">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_4"/>
                                    <label class="toggle" for="ala_4"></label>
                                </div>
                            </div>
                        </li>
                        <li class="item2">
                            <div class="brand-thumb">
                                <label for="5">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_5"/>
                                    <label class="toggle" for="ala_5"></label>
                                </div>
                            </div>
                        </li>
                        <li class="item2">
                            <div class="brand-thumb">
                                <label for="6">
                                    <a href="#" target="_blank"><img class="thumb" src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="" type="checkbox" id="ala_6"/>
                                    <label class="toggle" for="ala_6"></label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="paddles2">
                <button class="left-paddle2 paddle hidden">
                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
                </button>
                <button class="right-paddle2 paddle">
                <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
                </button>
            </div>
        </div>
        
    </div>
    <div class="table-section-sk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn">
                        <table id="main-tbl-sk" class="table">
                            <div class="add-del-ctn d-none">
                                <input type="button" value="delete column" onclick="deleteColumn('main-tbl-sk')" />
                                <input type="button" value="add column" onclick="addColumn('main-tbl-sks')" />
                            </div>
                            <thead>
                                <tr class="top-head" >
                                    <th class='th-1'>
                                        <div class="left-ctn">
                                            <div class="item phone">
                                                <a class="" href="tel:1900988965" target="_blank">1900 9889 65</a>
                                            </div>
                                            <div class="item">
                                                <a href="mailto:contact@vics-corp.com" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/mes.png?{{ config('custom.version') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <h4>SANBAOHIEM</h4>
                                    </th>
                                    <th class="col2">
                                        <div class="img-container">
                                            <div class="select2-ctn">
                                                <form action="">
                                                    <select name="sources" id="sources" class="custom-select-fix sources" placeholder="Tương Lai Vững Vàng">
                                                        <option value="1">Chương trình vàng</option>
                                                        <option value="2">Chương trình bạc</option>
                                                        <option value="3">Chương trình platinum</option>
                                                        <option value="4">Chương trình diamond</option>
                                                        <option value="5">Chương trình gold</option>
                                                        <option value="6">Chương trình alumnium</option>
                                                        <option value="6">Chương trình iron</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="sub-head">
                                    <td class="th-2">
                                        <div class="star-ctn">
                                            <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}" alt=""></span>Tốt</p></div>
                                            <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></span>Khá</p></div>
                                            <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}" alt=""></span>Trung bình</p></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="count-rank-ctn">
                                            <div class="mark-num"><p><span class="first-span">8</span>/<span>10</span></p></div>
                                            <div class="service">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                            <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="green1">
                                    <td  colspan="2" class="green_header">Tính phí</td>
                                </tr>
                          
                                <tr class="header bg-head-1">
                                    <td  colspan="2" class="green_header">Đối tượng bảo hiểm

                                    </td>
                                </tr>
                                <tr class="select-all">
                                    <td>
                                        <div class="choose-all">
                                            <input type="checkbox" id="selectall" class="selectedAll"></input>
                                            <label class="toggle" for="selectall">Chọn tất cả</label>
                                        </div>
                                    </td>
                                </tr>
                               
                                <tr class="data-detail">
                                    <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_sk" name="checkbox_sk" value="" data-id="id"  onclick='handleOncick(this);' />
                                        <label for="checkbox_sk"> </label><span class="first-td"><p class="ellipsis">term</p>
                                        <span class="show-detail"><button type="button" class="btn btn-primary" value="" onclick="showMore(this.value)"  >...</button></span></span>
                                        <label class="drop" for="" style="display:none" id="dksk">% phí</label>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                           
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Phạm vi lãnh thổ</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>aloha</td>
                                    <td></td>
                                    <!-- <td>

                                   <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                    </td> -->
                                </tr>
                                <tr class="header bg-head-2">
                                    <td  colspan="2" class="green_header">Quyền lợi bảo hiểm</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>
                                        <input class="selectedId" type="checkbox" id="checkbox2_sk" name="checkbox2_sk"  />
                                        <label for="checkbox2_sk"> </label> </label><span class="first-td"><p class="ellipsis">aloha</p>
                                        <span class="show-detail"><button href="#detail-td" rel="modal:open">...</button></span></span>
                                        <label class="drop" for="">0.01% phí</label>
                                    </td>
                                    <td></td>
                                </tr>
                                
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Thời gian chờ</td>
                                </tr>
                                
                                <tr class="data-detail">
                                    <td>aloha</td>
                                    <td></td>
                                </tr>
                                <tr class="header green">
                                    <td  colspan="2" class="green_header">Phí bảo hiểm</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                
                                <tr class="header bg-head-4">
                                    <td  colspan="2" class="green_header">Bệnh viện liên kết</td>
                                </tr>
                                <tr class="data-detail">
                                    <td class="text-center empty-first2 "></td>
                                    <td class="hospital-td active-td">
                                        <p class="toggle active"><span>(108)</span> Bệnh viện</p>
                                        
                                    </td>
                                    <tr class="data-detail" id="hospital-tr"><td class="empty-first text-center"><img class="img-fluid net-img" src="{{ url('/') }}/assets/images/health/first-td.png?{{ config('custom.version') }}" alt=""></td>
                                        <td class="hospital_header" colspan="1">
                                            @include('frontend/pages/hospital')
                                        </td>
                                    </tr>
                                    <!-- <tr >
                                        <div id="hospital-address">
                                        </div>
                                    </tr> -->
                                </tr>
                                <tr class="header bg-head-3">
                                    <td  colspan="2" class="green_header">Loại trừ bảo hiểm</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="sk-section3" class="sk-section3">
        <div class="sec3-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec3-title">
                            <h3>Sản phẩm bảo hiểm mới</h3>
                        </div>
                        <div id="slideKnow" class="swiper-container swiper-sk">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slide-item">
                                    <div class="item">
                                        <div class="description-ctn">
                                            <p>Pru - An tâm trọn đời kế hoạch học vấn</p>
                                        </div>
                                        <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                        <div class="modal-popup-ctn">
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Điều kiện tha gia bảo hiểm</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Thời gian chờ</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rsel="modal:open">Quyền lợi bảo hiểm</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item ">
                                    <div class="item center-item">
                                        <div class="description-ctn">
                                            <p>Pru - An tâm trọn đời kế hoạch học vấn</p>
                                        </div>
                                        <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide2.png?{{ config('custom.version') }}" alt=""></a>
                                        <div class="modal-popup-ctn">
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Điều kiện tha gia bảo hiểm</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Thời gian chờ</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rsel="modal:open">Quyền lợi bảo hiểm</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="item">
                                        <div class="description-ctn">
                                            <p>Pru - An tâm trọn đời kế hoạch học vấn</p>
                                        </div>
                                        <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide3.png?{{ config('custom.version') }}" alt=""></a>
                                        <div class="modal-popup-ctn">
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Điều kiện tha gia bảo hiểm</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Thời gian chờ</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rsel="modal:open">Quyền lợi bảo hiểm</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="arrow-ctn ">
                                <div class="swiper-button-prev">
                                
                                </div>
                                <div class="swiper-button-next">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="detail-td" class="modal">
    <div class="content-ctn">
        <div id="note"></div>
    </div>
  <a href="javascript:void(0)">Liên hệ ngay</a>

</div>
<script>
    function showMore(val){
     $('#note').html(val);
     $('#detail-td').modal('show');
    }
</script>
<script>

    $('.open').click(function(){
  $(this).toggleClass("show hide");
  $('.content').toggleClass("show hide");
});

$('.close').click(function(){
  $('.content').toggleClass("show hide");
  $('.open').toggleClass("show hide");
});
</script>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
    @include('layouts.health_script')
@stop