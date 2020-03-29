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
                                    <input name="type" value="" type="checkbox" id="ala_14"/>
                                    <label class="toggle" for="ala_14"></label>
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
    <div class="table-section-nt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn">
                        <table id="main-tbl-nt" class="table">
                            <div class="add-del-ctn d-none">
                                <input type="button" value="delete column" onclick="deleteColumn('main-tbl-nt')" />
                                <input type="button" value="add column" onclick="addColumn('main-tbl-nt')" />
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
                                    <td  colspan="2" class="green_header">Minh họa quyền lợi</td>
                                </tr>
                                <tr class="container-selection">
                                    <td colspan="2" id="select_box_longevity">
                                        <div class="select-ctn-nt">
                                            <div class="selection-box">
                                                <div class="left-sec">
                                                    <div class="item-nt select-nt">
                                                        <form action="">
                                                            <select calss="nt_gender" aria-label="Select menu example" id="gender">
                                                                <option selected>Giới tính</option>
                                                                <option value="1">Nam</option>
                                                                <option value="2">Nữ</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input class="nt_age" type="number" id="nt_age" name="nt_age" placeholder="Tuổi">
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input type="text" id="nt_contract_duration" name="nt_contract" placeholder="Thời hạn hợp đồng">
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input type="text" id="nt_contract_value" name="nt_contract" placeholder="Số tiền bảo hiểm">
                                                        </form>
                                                    </div>
                                                    <div class="item-nt select-nt">
                                                        <form action="">
                                                            <select aria-label="Select menu example" id="death_right">
                                                                <option selected>Quyền lợi tử vong</option>
                                                                <option value="1">Option1</option>
                                                                <option value="2">Option2</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input type="text" id="nt_mature" name="nt_contract" placeholder="Lựa chọn đáo hạn(Tuổi)">
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input type="text" id="nt_choose_fee" name="nt_contract" placeholder="Lựa chọn đóng phí(Năm)">
                                                        </form>
                                                    </div>
                                                    <div class="item-nt select-nt">
                                                        <form action="">
                                                            <select aria-label="Select menu example" id="nt_period_fee">
                                                                <option selected>Định kì đóng phí</option>
                                                                <option value="1">Option1</option>
                                                                <option value="2">Option2</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input type="text" id="nt_contract_fee" name="nt_contract" placeholder="Phí bảo hiểm định kì">
                                                        </form>
                                                    </div>
                                                    <div class="item-nt">
                                                        <form action="">
                                                            <input type="text" id="nt_contract_more_fee" name="nt_contract" placeholder="Phí bảo hiểm đóng thêm">
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="right-sec">
                                                    <div class="item button-filter" >
                                                        <button type="button" id="calculate">Tính</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="container-download">
                                    <td></td>
                                    <td class="data-detail download-td">
                                        <button type="button" id="download-pru">Minh họa Pru
                                            <span><p><i class="fa fa-download" aria-hidden="true"></i></p></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Phạm vi bảo hiểm</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                <tr class="header green">
                                    <td  colspan="2" class="green_header">Phí</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                
                                <tr class="header bg-head-1">
                                    <td  colspan="2" class="green_header">Quyền lợi sản phẩm

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
                                <tr class="header bg-head-2">
                                    <td  colspan="2" class="green_header">Quyền lợi bổ trợ</td>
                                </tr>
                                <tr class="data-detail gray-detail">
                                    <td class="first-gray">Tai nạn</td>
                                    <td>
                                        <div class="gray-head">
                                            <form action="">
                                                <select name="sources" id="sources2" class="select-gray sources" placeholder="SPBT BH Tử Vong Và Thương Tật Do Tai Nạn Nâng Cao - Gia hạn hàng năm ">
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
                                    </td>
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
                                            @include('frontend/pages/network')
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
    $(document).ready(function(){
        $('#gender').change(function () {
        var gender =  $('#gender').val();
        var x = document.getElementsByClassName("item-nt");
        console.log("guug", x);
        // x[0].style.borderColor = "blue";
        })
    })
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
    @include('layouts.longevity_script')
@stop