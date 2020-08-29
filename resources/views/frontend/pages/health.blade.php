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
        <a class="btn-call-now" href="tel:1900988965">
			<i class="fa fa-phone"></i>
			<span>1900988965</span>
		</a>
    </div>
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
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox" value="1" />
                                (dưới 200 triệu)
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox" value="2" />
                                (từ 200 - dưới 400 triệu)
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox"  value="3" />
                               (từ 400 - dưới 500 triệu)
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox" value="4" />
                               (từ 500 - dưới 1 tỷ)
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox" value="5" />
                              (từ 1 tỷ - dưới 2 tỷ)
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox" value="6" />
                              (trên 2 tỷ)
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Mức phí</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox_2"  value="1" />
                                 duoi 1 triệu
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox_2"  value="2" />
                                Từ 1-3 triệu
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="dropdownCheckbox_2"  value="3" />
                                Từ 3-5 triệu
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="dropdownCheckbox_2"  value="4" />
                                Từ 5-8 triệu
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="dropdownCheckbox_2"  value="5" />
                                Từ 8-12 triệu
                                </label>

                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox_2"  value="6" />
                                Từ 12- 20 triệu
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group"class="dropdownCheckbox_2"  value="7" />
                                Từ 20-30 triệu
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox_2"  value="8" />
                                Từ 30-50 triệu
                                </label>
                                <input type="checkbox" name="dropdown-group" class="dropdownCheckbox_2"  value="9" />
                                tren 50 triệu
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
                                <input type="checkbox" name="dropdown-group" class="checkboxScope" value="1" />
                                 Việt Nam
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkboxScope" value="2" />
                                 Đông Nam Á
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkboxScope" value="3" />
                                 Châu Á
                                </label>
                                <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" class="checkboxScope" value="4" />
                                 Toàn cầu
                                </label>
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Chọn công ty bảo hiểm</label>
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
    <div class="pack-section">
        <div class="container" id="thumbs">
            
        </div>
        
    </div>
    <!-- <div class="pack-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="secure_list">
                    <div class="pack-title">
                        <h4>Bảo vệ <span>({{count($data['secure'])}})</span></h4>
                    </div>
                    <div  class="section-wrapper2">
                        <ul  class="section-list2">
                            @foreach($data['secure'] as $value)
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
                            @endforeach
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
        
    </div> -->
    <div class="table-section-sk">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn">
                        <div id="table-scroll" class="table-scroll">
                            <table id="main-tbl-sk" class="table">
                                <div class="add-del-ctn d-none">
                                    <input type="button" value="delete column" onclick="deleteColumn('main-tbl-sk')" />
                                    <input type="button" value="add column" onclick="addColumn('main-tbl-sks')" />
                                </div>
                                <thead>
                                    <tr class="top-head" >
                                        <th class='th-1'>
                                            
                                        </th>
                                        <th class="col2">
                                            <div class="img-container">
                                            
                                            </div>
                                        </th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <!-- <tr class="bottom-head data-detail-cf">
                                        <td class="first-select-cf"></td>
                                        <td class="health-select-cf"></td>
                                    </tr> -->
                                    <tr class="sub-head-health">
                                        <td class="th-2">
                                            <div class="star-ctn">
                                                <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}" alt=""></span>Tốt</p></div>
                                                <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></span>Khá</p></div>
                                                <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}" alt=""></span>Trung bình</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- <div class="count-rank-ctn">
                                                <div class="mark-num"><p><span class="first-span">0</span>/<span>10</span></p></div>
                                                <div class="service">
                                                <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                                <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                                <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                                </div>
                                            </div> -->

                                        </td>
                                    </tr>
                                    <!-- <tr class="green1">
                                        <td  colspan="2" class="green_header">Tính phí</td>
                                    </tr> -->
                            
                                    <tr class="header green1 bg-head-1" id="dtbh">
                                        <td  colspan="2" class="green_header">Đối tượng bảo hiểm

                                    </td>
                                </tr>
                                <tr class="data-detail ">
                                    <td class="1st-td">
                                        <!-- <input class="selectedId" type="checkbox" id="checkbox_sk" name="checkbox_sk" value="" data-id="id"  onclick='handleOncick(this);' /> -->
                                        <!-- <label for="checkbox_sk"> </label><span class="first-td"> -->
                                        <p class="ellipsis">{{$data['object_bh']['comparison']}}</p>
                                        <!-- <span class="show-detail"><button type="button" class="btn btn-primary" value="" onclick="showMore(this.value)"  >...</button></span></span> -->
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr class="header" id="pvlt">
                                    <td  colspan="2" class="green_header" >Phạm vi lãnh thổ</td>
                                </tr>
                                <tr class="data-detail">
                                    <td><p class="ellipsis">{{$data['scope']['comparison']}}</p></td>
                                    <td></td>
                                    <!-- <td>

                                   <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                    </td> -->
                                </tr>
                                <tr class="header green1 bg-head-2" id="qlbh">
                                    <td  colspan="2" class="green_header">Quyền lợi bảo hiểm</td>
                                </tr>
                                @for ($i = 4; $i < 72; $i++)
                                    @if($data['benifits'][$i]['level']==1)
                                    <tr class="data-detail parent">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_one_{{$data['benifits'][$i]['id']}}" name="checkbox_one" value="{{$data['benifits'][$i]['id']}}" data-id="id"  onclick='handleAll(this);' />
                                        <label for="checkbox_one_{{$data['benifits'][$i]['id']}}"> </label><span class="first-td">
                                        @if($agent->isMobile())
                                            @if(strlen($data['benifits'][$i]['comparison']) < 20)
                                            <p class="ellipsis" style="color: #009f49;font-weight: bold;">{{$data['benifits'][$i]['comparison']}}</p>
                                            @else
                                            <p class="ellipsis" style="color: #009f49;font-weight: bold;">{{Str::words($data['benifits'][$i]['comparison'],4)}}</p>
                                            <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$data['healths'][$i]['comparison']}}" onclick="show(this.value)"  >...</button></span>
                                            @endif
                                           
                                        @else
                                            <p class="ellipsis" style="color: #009f49;font-weight: bold;">{{$data['benifits'][$i]['comparison']}}</p>
                                        @endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    @elseif($data['benifits'][$i]['level']==2)
                                    <tr class="data-detail ">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_two_{{$data['benifits'][$i]['id']}}" name="checkbox_one" value="{{$data['benifits'][$i]['id']}}" onclick='handleCheckbox(this);'   />
                                        <label for="checkbox_two_{{$data['benifits'][$i]['id']}}"> </label><span class="first-td">
                                        @if($agent->isMobile())
                                            <p class="ellipsis" style="color: #125732">{{Str::words($data['benifits'][$i]['comparison'],4)}}</p>
                                            <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$data['benifits'][$i]['comparison']}}" onclick="show(this.value)"  >...</button></span>
                                        @else
                                            <p class="ellipsis" style="color: #125732">{{$data['benifits'][$i]['comparison']}}</p>
                                        @endif
                                            
                                        </td>
                                        <td></td>
                                    </tr>
                                    @elseif($data['benifits'][$i]['level']==3)
                                    <tr class="data-detail ">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_three_{{$data['benifits'][$i]['id']}}" name="checkbox_one" value="" data-id="id"   />
                                        <label for="checkbox_three_{{$data['benifits'][$i]['id']}}"> </label><span class="first-td">
                                          
                                            @if($agent->isMobile())
                                                <p class="ellipsis" style="color: #000">{{Str::words($data['benifits'][$i]['comparison'],4)}}</p>
                                                <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$data['benifits'][$i]['comparison']}}" onclick="show(this.value)"  >...</button></span>
                                            @else
                                                <p class="ellipsis" style="color: #000">{{$data['benifits'][$i]['comparison']}}</p>
                                            @endif
                                            
                                        </td>
                                        <td></td>
                                    </tr>
                                    @else
                                    <tr class="data-detail ">
                                        <td>
                                            <p class="ellipsis" >{{$data['benifits'][$i]['comparison']}}</p>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endif
                                @endfor
                               
                                <tr class="header" id="pending">
                                    <td  colspan="2" class="green_header">Thời gian chờ</td>
                                </tr>
                            
                                @for($i=73;$i< 81;$i++)
                                    @if($data['healths'][$i]['level']== 1)
                                    <tr class="data-detail">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_one_{{$data['healths'][$i]['id']}}" name="checkbox_one" value="{{$data['healths'][$i]['id']}}" onclick='handleCheckbox(this);'  />
                                        <label for="checkbox_one_{{$data['healths'][$i]['id']}}"> </label><span class="first-td">
                                        @if($agent->isMobile())
                                            @if(strlen($data['healths'][$i]['comparison']) < 25)
                                            <p class="ellipsis" style="color: #009f49;font-weight: bold;">{{$data['healths'][$i]['comparison']}}</p>
                                            @else
                                            <p class="ellipsis" style="color: #009f49;font-weight: bold;">{{Str::words($data['healths'][$i]['comparison'],4)}}</p>
                                            <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$data['healths'][$i]['comparison']}}" onclick="show(this.value)"  >...</button></span>
                                            @endif
                                        @else
                                        <p class="ellipsis" style="color: #009f49;font-weight: bold;">{{$data['healths'][$i]['comparison']}}</p>
                                        @endif
                                        
                                        </td>
                                        <td></td>
                                    </tr>
                                    @elseif($data['healths'][$i]['level'] == 2)
                                    <tr class="data-detail">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_two_{{$data['healths'][$i]['id']}}" name="checkbox_two" value="{{$data['healths'][$i]['id']}}"    />
                                        <label for="checkbox_two_{{$data['healths'][$i]['id']}}"> </label><span class="first-td">
                                        @if($agent->isMobile())
                                            @if(strlen($data['healths'][$i]['comparison']) < 20)
                                                <p class="ellipsis" style="color: #125732">{{$data['healths'][$i]['comparison']}}</p>
                                            @else
                                            <p class="ellipsis" style="color: #125732">{{Str::words($data['healths'][$i]['comparison'],4)}}</p>
                                            <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$data['healths'][$i]['comparison']}}" onclick="show(this.value)"  >...</button></span>
                                            @endif
                                          
                                        @else
                                        <p class="ellipsis" style="color: #125732">{{$data['healths'][$i]['comparison']}}</p>
                                        @endif
                                       
                                        </td>
                                        <td></td>
                                    </tr>
                                    @else
                                    <!-- <tr class="data-detail  ">
                                        <td> <p class="ellipsis">{{$data['healths'][$i]['comparison']}}</p></td>
                                        <td></td>
                                    
                                    </tr> -->
                                   
                                    @endif
                                @endfor
                                <tr class="header green1 green" id="pbh">
                                    <td  colspan="2" class="green_header">Phí bảo hiểm</td>
                                </tr>
                                <tr class="data-detail" >
                                    <td><p class="ellipsis">Phi bao hiem</p></td>
                                    <td></td>
                                 </tr>
                                <tr class="header bg-head-2">
                                    <td  colspan="2" class="green_header">Bệnh viện liên kết</td>
                                </tr>
                                <tr class="data-detail" id="row-hospital">
                                    <td class="text-center empty-first2 "></td>
                                    <td class="hospital-td ">
                                        <p class="toggle active"><span>(108)</span> Bệnh viện</p>
                                        
                                    </td>
                                    <tr class="data-detail" id="hospital-tr"><td class="empty-first text-center"><img class="img-fluid net-img" src="{{ url('/') }}/assets/images/health/first-td.png?{{ config('custom.version') }}" alt=""></td>
                                        <td class="hospital_header" colspan="1" id="hospital">
                                            {{--@include('frontend/pages/hospital')--}}
                                        </td>
                                    </tr>
                                    <!-- <tr >
                                        <div id="hospital-address">
                                        </div>
                                    </tr> -->
                                </tr>
                                <tr class="header green1 bg-head-3" id="ltbh">
                                    <td  colspan="2" class="green_header">Loại trừ bảo hiểm</td>
                                </tr>
                                <tr class="select-all">
                                    <td class="td-all">
                                        <div class="choose-all">
                                            <input type="checkbox" id="selectall_bs" class="selectedAll"  onclick="" >
                                            <label class="toggle" for="selectall_bs">Chọn tất cả</label>
                                        </div>
                                    </td>
                                    <td class="td-all"></td>
                                </tr>
                                @foreach($data['exclusions'] as $value)
                                <tr class="data-detail">
                                    <td>
                                        @if($agent->isMobile())
                                            @if(strlen($value['rules']) < 15)
                                            <p class="ellipsis">{{Str::words($value['rules'],4)}}</p>
                                            @else
                                            <span class="show-detail"><button value="{{$value['rules']}}" onclick="detail(this.value)">...</button></span></span>
                                            <p class="ellipsis">{{Str::words($value['rules'],4)}}</p>
                                            @endif
                                        @else
                                        <span class="show-detail"><button value="{{$value['rules']}}" onclick="detail(this.value)">...</button></span></span>
                                        <p class="ellipsis">{{Str::words($value['rules'],15)}}</p>
                                        @endif
                                       
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
                                @forelse($products as $value)
                                <div class="swiper-slide slide-item">
                                    <div class="item">
                                        <div class="description-ctn">
                                            <p>{{$value['name']}}</p>
                                        </div>
                                        <a href="javascript:void(0)" target="_blank"><img src=" storage/{{$value['url']}}" alt=""></a>
                                        <div class="modal-popup-ctn">
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Điều kiện tha gia bảo hiểm</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rel="modal:open">Thời gian chờ</a></p>
                                            <p><a href="javascript:void(0)" href="#detail-td" rsel="modal:open">Quyền lợi bảo hiểm</a></p>
                                        </div>
                                    </div>
                                </div>
                               @empty
                               <div class="swiper-slide slide-item">
                                    <div class="item">
                                        <div class="description-ctn">
                                            <p>Dữ liệu chưa cập nhật</p>
                                        </div>
                                    </div>
                                </div>
                               @endforelse
                            <!-- Add Arrows -->
                        </div>
                        <div class="arrow-ctn ">
                            <div class="swiper-button-prev sk-prev">
                            
                            </div>
                            <div class="swiper-button-next sk-next">
                            
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
      function detail(val){
        $('#note').html(val);
        $('#detail-td').modal('show');
     }
    function handleAll(el){
        var selector = $('.selectedId');
        console.log(el);
        for(var i = 1; i <= 22; i ++){
            if( $(el).val() == 5) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        }
       
        for(var i = 24; i < 28; i ++){
            if( $(el).val() == 28) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        }
        for(var i = 29; i < 32; i ++){
            if( $(el).val() == 33) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        }
        for(var i = 33; i < 36; i ++){
            if( $(el).val() == 37) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
           
        }
        for(var i = 37; i < 51; i ++)
            if( $(el).val() == 41) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        for(var i = 52; i < 56; i ++)
            if( $(el).val() == 56) el.checked ==true?selector[i].checked = true:selector[i].checked = false;

        for(var i = 57; i <62; i ++){
            if( $(el).val() == 61) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
           
        }

        for(var i = 62; i < 68; i ++){
            if( $(el).val() == 67) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
           
        }
       
    }
    function handleCheckbox(el){
        
        var selector = $('.selectedId');

        for(var i = 2; i < 8; i ++){
            if( $(el).val() == 6) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        }
        // for(var i = 2; i <= 8; i ++){
        //     if( $(el).val() == 6) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        // }
        // for(var i = 76; i < 79; i ++){
        //     if( $(el).val() == 80) el.checked ==true?selector[i].checked = true:selector[i].checked = false;
        // }
    }
    function resetChecked(){
        $('input:checkbox').removeAttr('checked');
        window.location.reload();
    }
    function searchProduct(){
        var checkedID   = []; 
        var checkedCost = [];
        var checkedScope= [];
        var checkedCompanies=[];
        $(".checkedCompanies").each(function(){
            if($(this).is(":checked"))
            checkedCompanies.push($(this).val());
        });
        $(".dropdownCheckbox").each(function(){
            if($(this).is(":checked"))
            checkedID.push($(this).val());
        });
        $(".dropdownCheckbox_2").each(function(){
            if($(this).is(":checked"))
            checkedCost.push($(this).val());
        });
        $(".checkboxScope").each(function(){
            if($(this).is(":checked"))
            checkedScope.push($(this).val());
        });
        var url = `{{route('filterHealth')}}`;
        $.post(url,
        { "_token": "{{ csrf_token() }}",
            program:checkedID,
            cost : checkedCost,
            scope :checkedScope,
            companies:checkedCompanies,
        }
        ,function(data,status){
            setTimeout(function(){
                $('#thumbs').html(data.html);
             }, 100);
        });
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