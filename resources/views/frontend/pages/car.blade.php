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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
        <!-- <a class="btn-call-now" href="tel:1900988965" title="Gọi ngay"><span class="icon-tel"></span> <span class="tel">1900 9889 65</span></a> -->
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="compare-nav">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Doanh nghiệp phí rẻ</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                @forelse($data['companies_cheap'] as $value)
                                <label class="dropdown-option">
                                     <input type="checkbox" class="dropdownCheckbox" name="companiesID[]" value="{{$value['id']}}" />
                                        {{$value->name}}
                                </label>
                                @empty
                                    <p>empty data</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Top DNBH uy tín</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                @forelse($data['companies_recoup'] as $value)
                                <label class="dropdown-option">
                                <input type="checkbox" class="dropdownCheckbox" name="companiesID[]" value="{{$value['id']}}" />
                                {{$value->name}}
                                </label>
                                @empty
                                    <p>empty data</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Tiêu chí khác</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                <!-- <label class="dropdown-option">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                Selection One
                                </label> -->
                            </div>
                        </div>
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Điều khoản bảo hiểm mở rộng</label>
                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                Check All
                                </a>
                                @forelse($terms_data as $value)
                                <label class="dropdown-option ">
                                <input type="checkbox" name="dropdown-group" value="Selection 1" />
                                    {{str_limit($value['terms'],50)}}
                                </label>
                                @empty
                                    <p>empty data</p>
                                @endforelse
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
                    <div class="search-section">
                        <button type="button" onclick=" handleFilter()"> Tìm kiếm doanh nghiệp bảo hiểm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-section" id="brand-section">
        <div  class="section-wrapper" id="banner-logo">
            <ul id="thumbs" class="section-list">
                @foreach($companies as $key => $company)
                <li class="item">
                    <div class="brand-thumb">
                        <label for="1">
                            <img class="thumb" src="{{asset('storage').'/'}}{{$company['logo']}}" alt="" id="{{$company['id']}}">
                        </label>
                    </div>
                    <input name="type" value="{{$company['id']}}" type="checkbox" id="checkbox_{{$company['id']}}" class="checkId"/>
                    <label class="toggle" for="checkbox_{{$company['id']}}"></label>
                </li>
                @endforeach
            </ul>

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
    <div class="table-section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn ">
                        <div id="table-scroll" class="table-scroll ">
                            <table id="main-tbl" class="table">
                                <thead>
                                    <tr class="top-head" >
                                        <th class='th-1'>
                                            
                                        </th>
                                        <th class="col2">
                                            <div class="img-container"></div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="sub-ctn">
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
                                    </div>
                                    
                                    <tr class="green1 sub-ctn2" style="height: 0;background: none;color: transparent;">
                                        <td  colspan="2" class="green_header" style="height: 0;padding: 0;"></td>
                                    </tr>
                                    <tr class="tool-ctn sub-ctn3">
                                        <td colspan="2" id="select_box">
                                            <div class="select-ctn">
                                                <div class="selection-box">
                                                    <div class=" item select">
                                                        <select aria-label="Select menu example" id="purpose">
                                                            <option selected hidden value="0">---Mục đích sử dụng--</option>
                                                            @foreach($data['uses'] as $value)
                                                            <option value="{{$value['id']}}">{{$value['type_car']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="item select">
                                                    
                                                    <select aria-label="Select menu example" id="brand">
                                                        <option selected hidden value="0">Hãng xe</option>
                                                            <div class="option-ctn" style="overflow:auto;height:100px">
                                                            @foreach($brands as $brand)
                                                                <option value="{{$brand['id']}}" id="brand_{{$brand['id']}}">{{$brand['name']}}</option>
                                                            @endforeach
                                                            </div>
                                                        </select>
                                                    </div>
                                                    <div class="item select">
                                                        <select aria-label="Select menu example" id="cate">
                                                            <option selected="">Loại xe</option>
                                                        </select>
                                                    </div>
                                                    <div class="item select">
                                                        <select  aria-label="Select menu example" id="prd_date">
                                                        <option selected hidden value="0">Năm sản xuất</option>
                                                        {{$now = date('Y')}}  
                                                        @for ($i = $now; $i >=2002 ; $i--)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                        </select>
                                                    </div>
                                                    <div class="item input-filter">
                                                    <span> Giá trị: </span> <input type="text" placeholder="VND"id="price_car" name="price_car" value="">
                                                    </div>
                                                </div>
                                                <div class="item button-filter" >
                                                    <button type="button" id="calculate">Tính phí</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="data-detail price-discount sub-ctn4">
                                        <td class="td-discount safari_only"><button type="button" class="btn btn-discount" id="before_discount">Phí trước khuyến mại</button></td>
                                        <td></td>
                                    </tr>
                                    <tr class="data-detail price-discount sub-ctn5">
                                        <td class="td-discount safari_only"><button type="button" class="btn btn-discount" id="discount">Phí sau khuyến mại</button></td>
                                        <td></td>
                                    </tr>
                                    <tr class="header green1 bg-head-1 fixed-header">
                                        <td  colspan="2" class="green_header term_header">Điều khoản bổ sung

                                        </td>
                                        
                                    </tr>
                                    <tr class="select-all">
                                        <td class="td-all" >
                                            <div class="choose-all">
                                          {{-- onclick="handleAll(this,{{count($terms_data)}})" --}}
                                                <input type="checkbox" id="selectall_bs" name="selectall_bs" data-id ="1" class="selectedAll" onclick="handleAll(this,{{count($terms_data)}})"  >
                                                <label class="toggle" for="selectall_bs">Chọn tất cả</label>
                                            </div>
                                        </td>
                                        <td class="td-all"></td>
                                    </tr>
                                @foreach($terms_data as $key=>$value)  
                                    <tr class="data-detail term">
                                        <td>
                                            <input class="selectedId" type="checkbox" id="checkbox_bs{{$value['id']}}" name="checkbox_bs{{$value['id']}}" value="{{isset($value['rate_fee'])? $value['rate_fee']:0}}" data-id="{{$value['id']}}"  onclick='handleOnclick(this);' />
                                            <label for="checkbox_bs{{$value['id']}}"> </label><span class="first-td"><p class="ellipsis">{{$value['terms']}} </span></p>
                                            <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$value['terms']}}" onclick="show(this.value)"  >...</button></span>
                                            <label class="drop" for="" style="display:none" id="dkbs{{$value['id']}}" >{{isset($value['rate_fee'])? $value['rate_fee']:0}}% phí</label>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                 @endforeach  
                                    </div>
                                    <tr class="header">
                                        <td  colspan="2" class="green_header">Mức khấu trừ</td>
                                    </tr>
                                    <tr class="data-detail ">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox2" 
                                                    name="checkbox2" value="" data-id=""   />
                                        <label for="checkbox2"> </label> </label><span class="first-td"><p class="ellipsis">{{$dedutible_data[0]['deductible']??""}}</p>
                                            <span class="show-detail"><button value="{{$dedutible_data[0]['deductible']}}" onclick="show(this.value)">...</button></span></span>
                                        </td>
                                        <td></td>
                                        <!-- <td>
                                            <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                            <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                        </td> -->
                                    </tr>
                                    <tr class="header green1 bg-head-2">
                                        <td  colspan="2" class="green_header exception">Điều khoản loại trừ</td>
                                        <tr class="select-all">
                                        <td class="td-all" >
                                            <div class="choose-all">
                                                <input type="checkbox" id="selectall_lt" name="selectall_lt" data-id="2" class="selectedAll" onclick="handleAll(this,{{count($exception_data)}})" >
                                                <label class="toggle" for="selectall_lt">Chọn tất cả</label>
                                            </div>
                                        </td>
                                        <td class="td-all"></td>
                                    </tr>
                                    </tr>
                                    @foreach($exception_data as $value)
                                    <tr class="data-detail dklt">
                                        <td>
                                            <input class="selectedId" type="checkbox" id="checkbox_lt{{$value['id']}}" 
                                                    name="checkbox_lt{{$value['id']}}" value="{{$value['rate_fee_dklt']}}" data-id="{{$value['id']}}"  />
                                            <label for="checkbox_lt{{$value['id']}}"> </label> </label><span class="first-td"><p class="ellipsis">{{$value['exception']}}</p>
                                            <span class="show-detail"><button value="{{$value['exception']}}" onclick="show(this.value)">...</button></span></span>
                                            <label class="drop" for="" style="display:none" id="dklt{{$value['id']}}">{{isset($value['rate_fee_dklt'])?$value['rate_fee_dklt']:0}}% phí</label>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                    <!-- <tr class="header">
                                        <td  colspan="2" class="green_header punishment">Chế tài trong các trường hợp</td>
                                    </tr> -->
                                    <tr class="header ">
                                        <td  colspan="2" class="green_header punishment">Chế tài trong các trường hợp</td>
                                        <tr class="select-all">
                                            <td class="td-all" >
                                                <div class="choose-all">
                                                    <input type="checkbox" id="selectall_ct" name="selectall_ct" data-id="3" class="selectedAll" onclick="handleAll(this,{{count($punishment)}})" >
                                                    <label class="toggle" for="selectall_ct">Chọn tất cả</label>
                                                </div>
                                            </td>
                                            <td class="td-all"></td>
                                         </tr>
                                    </tr>
                                    @foreach($punishment as $value)
                                    <tr class="data-detail ctai">
                                        <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_ct{{$value['id']}}"
                                        name="checkbox_ct{{$value['id']}}" value="" data-id="{{$value['id']}}"/>
                                        <label for="checkbox2"> </label><span class="first-td"><p class="ellipsis">{{Str::words($value['sanction'],15)}}</p>
                                            <span class="show-detail"><button value="{{$value['sanction']}}" onclick="show(this.value)">...</button></span></span>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                    <tr class="header green1 green">
                                        <td  colspan="2" class="green_header permission">Quyền và nghĩa vụ của chủ xe/ lái xe</td>
                                        <tr class="select-all">
                                            <td class="td-all" >
                                                <div class="choose-all">
                                                    <input type="checkbox" id="selectall_nv" name="selectall_nv" class="selectedAll" data-id="4" onclick="handleAll(this,25)">
                                                    <label class="toggle" for="selectall_nv">Chọn tất cả</label>
                                                </div>
                                            </td>
                                            <td class="td-all"></td>
                                         </tr>
                                    </tr>
                                    @foreach($permission as $value)
                                    <tr class="data-detail nv ">
                                        <td>
                                            <input class="selectedId" type="checkbox" id="checkbox_nv{{$value['id']}}" 
                                                    name="checkbox_nv{{$value['id']}}" value="" data-id="{{$value['id']}}"  />
                                            <label for="checkbox_nv{{$value['id']}}"> </label> </label><span class="first-td">  <p class="ellipsis">{{Str::words($value['rules_owner'],15)}}</p>
                                            <span class="show-detail"><button value="{{$value['rules_owner']}}" onclick="show(this.value)">...</button></span></span>
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                    <tr class="header bg-head-3">
                                        <td  colspan="2" class="green_header finances">Năng lực tài chính</td>
                                    </tr>
                                    <tr class="select-all">
                                        <td class="td-all" colspan="2">
                                            Đơn vị: triệu đồng
                                        </td>
                                    </tr>
                                    @foreach($finances as $value)
                                    <tr class="data-detail nltc" >
                                        <td><p class="ellipsis">{{$value['finance']}}</p></td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                    <tr class="header green1 bg-head-4">
                                        <td  colspan="2" class="green_header">Mạng lưới hoạt động</td>
                                    </tr>
                                    <tr class="data-detail network">
                                        <td class="text-center empty-first-car2 "><img class="img-fluid net-img" src="{{ url('/') }}/assets/images/car/network1.png?{{ config('custom.version') }}" alt=""></td>
                                        <td class="car-td active-car-td">
                                            <img class="img-fluid toggle" src="{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}" alt="">
                                            <p class="toggle"><span>(0)</span> Chi nhánh</p>
                                            
                                        </td>
                                    </tr>
                                    <tr class="data-detail network" id="car-tr"><td class="empty-first-car text-center"></td>
                                        <td class="car_header" colspan="1">
                                            <div id="net-address">
                                            
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="header">
                                        <td  colspan="2" class="green_header">Đánh giá uy tín</td>
                                    </tr>
                                    <tr class="data-detail">
                                        <td>Top 10 DNBH uy tín 2018</td>
                                        <td></td>
                                    </tr>
                                    <tr class="header green1 green">
                                        <td  colspan="2" class="green_header">Mô hình GQBT</td>
                                    </tr>
                                    <tr class="data-detail">
                                        <td><p class="ellipsis">Tập trung</p></td>
                                        <td></td>
                                    </tr>
                                    <tr class="data-detail">
                                        <td><p class="ellipsis">Không tập trung</p></td>
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
</div>

<div id="detail-td" class="modal">
    <div class="content-ctn" id="note">
    </div>
  <a href="javascript:void(0)">Liên hệ ngay</a>

</div>
<script>
    function show(val){
        var content = formattedText(val);
        $('#note').html(content);
        $('#detail-td').modal('show');
    }
</script>
<script>
    function handleFilter(){
        var checkedID = []; 
        var inputElements = document.getElementsByClassName('dropdownCheckbox');
        $(".dropdownCheckbox").each(function(){
            if($(this).is(":checked"))
            checkedID.push($(this).val());
        });
        var url = `{{route('filterCompanies')}}`;
        $.post(url,{ "_token": "{{ csrf_token() }}",checkedID:checkedID}
        ,function(data,status){
            $('#banner-logo').html(data.html);
        });
    }
    function handleOnclick(cb){
        var index = $(cb).data("id");
        var checkBox_bs = document.getElementById('checkbox_bs'+index+'');
        var label_bs = document.getElementById('dkbs'+index+'');
        (checkBox_bs.checked==true)  ?  label_bs.style.display = "inline-flex":  label_bs.style.display = "none";;
    }
    $(function(){
        var numShown = 5;
        var numMore = 5;  
        var table  = document.getElementById('main-tbl');
        var rows   = table.tBodies[0].rows;
        // console.log(rows);
        var length = <?php echo count($terms_data)?>;
        var length_permission = <?php echo count($permission)?>;
        $(rows[length+6]).after('<tr class="more" id="more"><td class="green_header" colspan="2"><a class="text-more">Các điều khoản khác <span>' +
               '</span></a></td></tr>');
        $(rows[65]).after('<tr class="more" id="more_exc"><td class="green_header" colspan="2"><a class="text-more">Các điều khoản khác <span>' +
            '</span></a></td></tr>');
        
        $(rows[87]).after('<tr class="more" id="more_punish"><td class="green_header" colspan="2"><a class="text-more">Các điều khoản khác <span>' +
        '</span></a></td></tr>');
        $(rows[114]).after('<tr class="more" id="more_permiss"><td class="green_header" colspan="2"><a class="text-more">Các điều khoản khác <span>' +
        '</span></a></td></tr>');
        // $(rows[132]).after('<tr class="more" id="more_finance"><td class="green_header" colspan="2"><a> style="color:#0d723b">Các điều khoản khác <span>' +
        // '</span></div</td></tr>');
    });
    $(function(){
        $('#brand').change(function() {
           
            if($("#purpose").is(':selected')){
                alert(1);
            }else{
            var id = $(this).val();
            $.ajax({
                url: "{{route('onchange')}}",
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    brand_id: id
                },
                success: function(data) {
                    $('#cate').html(data.html);
                }
            });

            }
          
        });
        $('#prd_date').change(function(){
            var year = $(this).val();
            var cate = $('#cate').val();
            var brand_id= $('#brand').val();
            $.ajax({
                url: "{{route('reference')}}",
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    brand_id: brand_id,
                    year_sx : year,
                    cate_id:cate,
                },
                success: function(data) {
                    // console.log(data);
                    $('#price_car').val(data.price_car);
                }
            });
        });
    });
    $(document).ready(function() {
        // if (screen.height > screen.width){
        //     alert("Please use Landscape!");
        // }
    $(window).scroll(function(e){
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var winHeight = $(window).height();
        var scrollPercent = (scrollTop) / (docHeight - winHeight);
        var scrollPercentRounded = Math.round(scrollPercent*100);
     
    });
});

   
$('.close').click(function(){
  $('.content').toggleClass("show hide");
  $('.open').toggleClass("show hide");
});
</script>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
    @include('layouts.default_script')
    @if($agent->isMobile())
         @include('layouts.car_mobile')
    @else
        @include('layouts.car_click')
    @endif
@stop