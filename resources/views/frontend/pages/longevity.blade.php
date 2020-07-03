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

@stop

@section('content')

<div id="app">
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="saving" >
                 
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
        <div class="pack-section" id="secure" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-12"  >
                    <div class="pack-title">
                    <h4>Bảo vệ <span></span></h4>
                    </div>
                    <div  class="section-wrapper2">
                        <ul id="thumbs" class="section-list2">
                       
                            <li class="item2">
                                <div class="thumb-t">
                                    <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                                
                                    <div class="brand-thumb">
                                        <label for="1">
                                            <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                        </label>
                                        <div class="input-pack">
                                            <input name="type" value="" type="checkbox" id="checkbox_bv{{$value['id']}}"/>
                                            <label class="toggle" for="checkbox_bv{{$value['id']}}"></label>
                                        </div>
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
            </div> -->
            
        </div>
        <div class="pack-section" id="invest">
        </div>
        <div class="pack-section" id="edu">
        </div>
        <div class="pack-section" id="retire">
        </div>
        <div class="pack-section" id="concern">
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
                                    <tr class="header green1 bg-head-1 sub-ctn2">
                                        <td  colspan="2" class="green_header">Minh họa quyền lợi</td>
                                    </tr>
                                    <tr class="container-selection sub-ctn3">
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
                                    <tr class="container-download">
                                        <td></td>
                                        <td class="data-detail download-td">
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
                                    <tr class="data-detail "  style="color:gray">
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
                                        <td><p class="ellipsis">{{$products[$i]['comparison']}}</p></td>
                                        <td></td>
                                    </tr>
                                    @endfor
                                    <tr class="header" id="dsb">
                                        <td  colspan="2" class="green_header">Danh sách bệnh</td>
                                    </tr>
                                    @foreach($data['group_sicks'] as $value)
                                    <tr class="data-detail">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_dsb_{{$value['id']}}"  value="{{$value['id']}}" onclick="checkList(this)"/>
                                            <label for="checkbox_dsb_{{$value['id']}}" class=""> </label><span class="first-td">
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
                // else  $('#concern').html(data.html_concern);
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