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
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> -->
<style>
    .wait{
        display: block;
        position: absolute;
        background-color: rgba(0,0,0,0.5);
        width: 100%;
        height: 100vh;
        z-index: 30;
    }
    .wait img{
        display: block;
        position: absolute;
        transform: translate(50%, 50%);
        top: 5%;
        z-index: 50;
        left: 50%;
        bottom: 0;
        margin: auto;
    }
</style>
@stop

@section('content')

<div id="app" style="position:relative;">
<div id="wait" class="wait" style="display:none;"><img src="{{asset('assets/images/25.gif')}}" width="64" height="64" /><br>Loading..</div>
    <div class="compare-section">
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965" title="Gọi ngay"><span class="icon-tel"></span> <span class="tel">1900 9889 65</span></a>
    </div>
  
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="compare-nav">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Nhu cầu tài chính</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                @foreach($classifies as $value)
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkedbox" value=" {{$value['id']}}" />
                               {{$value['name']}}
                                </label>  
                                @endforeach
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Độ tuổi tham gia</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkedbox" value=" 7" />
                                Từ 0- 18 tuổi
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkedbox" value=" 8" />
                                Từ 18- 65 tuổi
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="checkedbox" value=" 9" />
                                Trên 65 tuổi
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Giải pháp gia tăng bảo vệ</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkedbox" value=" 10" />
                                Bảo hiểm Tử vong/Thương tật
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="checkedbox" value=" 11" />
                                Bảo hiểm bệnh hiểm nghèo
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkedbox" value=" 12" />
                                Quyền lợi miễn đóng phí
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="checkedbox" value="13" />
                                Quyền lợi trợ cấp y tế/ CSSK
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Công ty BHNT</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                @foreach($data['companies'] as $value)
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkedCompanies" value="{{$value['id']}}" />
                                    {{$value['name']}}
                                </label>
                                @endforeach
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
                        <button class="btn1" type="button" onclick="resetChecked()"> Chọn lại</button>
                        <button class="btn2"type="button" onclick="searchProduct()"> Tìm kiếm </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="pack-section" >
            <div class="container" id="saving">
                
            </div>
        </div>
        <div class="pack-section"  >
             <div class="container" id="secure">
                
            </div>
            
        </div>
        <div class="pack-section" >
                <div class="container" id="invest">
                
                </div>
        </div>
        <div class="pack-section" >
                <div class="container" id="edu">
                
                </div>
        </div>
        <div class="pack-section" >
        <div class="container" id="retire">
                
                </div>
        </div>
        <div class="pack-section">
                <div class="container"  id="concern">
                
                </div>
        </div>
    <div class="table-section-nt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn">
                        <div id="table-scroll" class="table-scroll">
                            <table id="main-tbl-nt" class="table">
                                <div class="add-del-ctn d-none">
                                    <input type="button" value="delete column" onclick="deleteColumn('main-tbl-nt')" />
                                    <input type="button" value="add column" onclick="addColumn('main-tbl-nt')" />
                                </div>
                                <thead>
                                    <tr class="top-head" >
                                        <th class='th-1'>
                                        
                                        </th>
                                        <th class="col2">
                                            <div class="img-container">
                                                <div class="select2-ctn">
                                                    
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
                                                <div class="mark-num"><p><span class="first-span">0</span>/<span>10</span></p></div>
                                                <div class="service">
                                                <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                                <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                                <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr class="header green1 bg-head-1 sub-ctn2 d-none">
                                        <td  colspan="2" class="green_header">Minh họa quyền lợi</td>
                                    </tr>
                                    <tr class="container-selection sub-ctn3 d-none">
                                        <td colspan="2" class="select_box_longevity" id="select_box_longevity">
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
                                    <tr class="container-download hide">
                                        <td></td>
                                        <td class="data-detail download-td d-none">
                                            <button type="button" id="download-pru">Minh họa Pru
                                                <span><p><i class="fa fa-download" aria-hidden="true"></i></p></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="header green1 bg-head-2 ">
                                        <td  colspan="2" class="green_header">Phạm vi bảo hiểm</td>
                                    </tr>
                                    @foreach($data['scope_secure'] as $key=>$value)
                                        <tr class="data-detail ">
                                            <td><p class="ellipsis">{{$value['comparison']}}</p></td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                    <!-- <tr class="header green1 green">
                                        <td  colspan="2" class="green_header">Phí</td>
                                    </tr>
                                    
                                    <tr class="data-detail">
                                        <td><p class="ellipsis"></p></td>
                                        <td></td>
                                    </tr>
                                    -->
                                    <tr class="header bg-head-2" id="benifit">
                                        <td  colspan="2" class="green_header">Quyền lợi sản phẩm

                                        </td>
                                    </tr>
                                 
                                    @for($i=5;$i < count($data['benifits']); $i++)
                                    <tr class="data-detail ">
                                        <td>
                                            <p class="ellipsis">{{$data['benifits'][$i]['comparison']}}</p>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    @endfor
                                    <tr class="header green1 bg-head-2" id="product_bt">
                                        <td  colspan="2" class="green_header">Sản phẩm bổ trợ</td>
                                    </tr>
                                    @foreach($data['benifits_group'] as $value)
                                    <tr class="data-detail detail-bt"  style="color:gray">
                                        <td colspan="2" class="spbt">
                                        <input class="selectedId" type="checkbox" id="checkbox_bt{{$value['id']}}" name="checkbox_bt{{$value['id']}}" value="{{$value['id']}}" data-options=''  onclick='handleOncick(this);' />
                                            <label for="checkbox_bt{{$value['id']}}" class=""> </label> </label><span class="first-td"><p class="ellipsis">{{$value['name']}}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="header " id="lphi">
                                        <td  colspan="2" class="green_header">Các loại phí</td>
                                    </tr>
                                    @for($i =29 ; $i < 36 ; $i++)
                                    <tr class="data-detail">
                                        <td><p class="ellipsis">{{$products[$i]['comparison']}}</p></td>
                                        <td></td>
                                    </tr>
                                    @endfor
                                    <tr class="header green1 bg-head-3" id="ltbh">
                                        <td  colspan="2" class="green_header">Loại trừ bảo hiểm</td>
                                    </tr>
                                    @for($i =36; $i < 48 ; $i++)
                                    <tr class="data-detail">
                                        <td>
                                            <span class="show-detail"><button value="{{$products[$i]['comparison']}}" onclick="showMore(this.value)">...</button></span></span>
                                            <p class="ellipsis">{{Str::words($products[$i]['comparison'],15)}}</p>
                                        
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endfor
                                    <tr class="header" id="dsb">
                                        <td  colspan="2" class="green_header">Danh sách bệnh</td>
                                    </tr>
                                    @foreach($data['group_sicks'] as $value)
                                    <tr class="data-detail">
                                        <td>
                                            <p class="ellipsis">{{$value['stage']}}</p>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
   
    function resetChecked(){
        $(".checkedbox").removeAttr('checked');
        $(".checkedCompanies").removeAttr('checked');
    }
   
   
    function searchProduct(){
        var params =[];
        var param_companies=[];
        $(".checkedbox").each(function(){
            if($(this).is(":checked"))
            params.push($(this).val());
        });
        $(".checkedCompanies").each(function(){
            if($(this).is(":checked"))
            param_companies.push($(this).val());
        });
        // console.log(param_companies);
        var url = `{{route('filterLongevity')}}`;
     
        $.ajax({
            type: 'POST',
            url: url,
            data:{
                "_token": "{{ csrf_token() }}",
                params:params,
                param_companies:param_companies,
            },
            dataType: 'json',
            success: function(data) {
                
                if(data.product_saving!='')
                    $('#saving').html(data.html_saving);
                    else  $('#saving').html(''); 

                if(data.product_secure!='')
                $('#secure').html(data.html_secure);
                else  $('#secure').html(''); 

                if(data.product_invest!='')
                $('#invest').html(data.html_invest);
                else  $('#invest').html('');

                if(data.product_edu!='')
                $('#edu').html(data.html_edu);
                else  $('#edu').html(''); 

                if(data.product_retire!='')
                $('#retire').html(data.html_retire);
                else  $('#retire').html('');

                // if(data.product_concern!='')
                $('#concern').html(data.html_concern);
                function swiperButton(left, right ,section){
                    var scrollDuration = 300;
                    // paddles
                    var leftPaddle2 = document.getElementsByClassName(left);
                
                    var rightPaddle2 = document.getElementsByClassName(right);
                    //get items dimensions
                    var itemsLength2 = $('.item2').length;
                    var itemSize2 = $('.item2').outerWidth(true);

                    var getBrandWrapperSize = function() {
                        return $('.section-wrapper2').outerWidth();
                    }
                    var brandWrapperSize2 = getBrandWrapperSize();
                    $(window).on('resize', function() {
                        brandWrapperSize2 = getBrandWrapperSize();
                    });
                    var brandVisibleSize2 = brandWrapperSize2;

                // get total width of all brand items
                    var getBrandSize = function() {
                        return itemsLength2 * itemSize2;
                    };
                    var brandSize2 = getBrandSize();
                    // get how much of brand is invisible
                    var brandInvisibleSize2 = brandSize2 - brandWrapperSize2;

                // get how much have we scrolled to the left
                    var getBrandPosition2 = function() {
                        return $(section).scrollLeft();
                    };

                // finally, what happens when we are actually scrolling the brand
                    $(section).on('scroll', function() {
                        // get how much of brand is invisible
                        brandInvisibleSize2 = brandSize2 - brandWrapperSize2;
                        // get how much have we scrolled so far
                        var brandPosition2 = getBrandPosition2();
                        // get some relevant size for the paddle triggering point
                        var paddleMargin2 = 20;
                        // console.log("brandPosition", brandPosition);
                        var brandEndOffset2 = brandInvisibleSize2 - paddleMargin2;
                    
                    
                        if (brandPosition2 <= paddleMargin2) {
                            $(leftPaddle2).addClass('hidden');
                            $(rightPaddle2).removeClass('hidden');
                        } else if (brandPosition2 < brandEndOffset2) {
                            // show both paddles in the middle
                            $(leftPaddle2).removeClass('hidden');
                            $(rightPaddle2).removeClass('hidden');
                        } else  {
                            $(leftPaddle2).removeClass('hidden');
                            $(rightPaddle2).addClass('hidden');
                        }

                    });
                     // scroll to left
                $(rightPaddle2).on('click', function() {
                    if(this.value == 1){
                        $('#thumbs_saving').animate({
                        scrollLeft: "+=301px"
                        }, "slow");
                    }else if(this.value == 2){
                        $('#thumbs_secure').animate({
                        scrollLeft: "+=301px"
                        }, "slow");
                    }else if(this.value == 3){
                        $('#thumbs_invest').animate({
                        scrollLeft: "+=301px"
                        }, "slow");
                    }else if(this.value == 5){
                        $('#thumbs_edu').animate({
                        scrollLeft: "+=301px"
                        }, "slow");
                    }else if(this.value == 4){
                        $('#thumbs_retire').animate({
                        scrollLeft: "+=301px"
                        }, "slow");
                    }else if(this.value == 6){
                        $('#thumbs_concern').animate({
                        scrollLeft: "+=301px"
                        }, "slow");
                    }
                
                });

                // scroll to right
                $(leftPaddle2).on('click', function() {
                    if(this.value == 1){
                        $('#thumbs_saving').animate({
                            scrollLeft: "-=301px"
                        }, "slow");
                    }else if(this.value == 2){
                        $('#thumbs_secure').animate({
                        scrollLeft: "-=301px"
                        }, "slow");
                    }else if(this.value == 3){
                        $('#thumbs_invest').animate({
                        scrollLeft: "-=301px"
                        }, "slow");
                    }else if(this.value == 5){
                        $('#thumbs_edu').animate({
                        scrollLeft: "-=301px"
                        }, "slow");
                    }else if(this.value == 4){
                        $('#thumbs_retire').animate({
                        scrollLeft: "-=301px"
                        }, "slow");
                    }else if(this.value == 6){
                        $('#thumbs_concern').animate({
                        scrollLeft: "-=301px"
                        }, "slow");
                    }
                });
                }
                swiperButton('left-saving','right-saving','.saving-list');
                swiperButton('left-secure','right-secure','.secure-list');
                swiperButton('left-invest','right-invest','.invest-list');
                swiperButton('left-edu','right-edu','.edu-list');
                swiperButton('left-retire','right-retire','.retire-list');
                swiperButton('left-concern','right-concern','.concern-list');

               
            },
        });
          
    }

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