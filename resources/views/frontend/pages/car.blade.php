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
                            <label class="dropdown-label">Doanh nghiệp phí rẻ</label>
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
                            <label class="dropdown-label">Bồi thường tốt</label>
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
                            <label class="dropdown-label">Tiêu chí khác</label>
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
                            <label class="dropdown-label">Điều khoản bảo hiểm mở rộng</label>
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
                    <div class="search-section">
                        <button type="button" onclick=""> Tìm kiếm doanh nghiệp bảo hiểm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-section">
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
                @foreach($companies as $key => $company)
                <li class="item">
                    <div class="brand-thumb">
                        <label for="1">
                            <img class="thumb" src="{{asset('storage').'/'}}{{$company['logo']}}" alt="" id="{{$company['id']}}">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="checkbox_{{$company['id']}}"/>
                    <label class="toggle" for="1"></label>
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
    <div class="table-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn">
                        <table id="main-tbl" class="table">
                            <div class="add-del-ctn d-none">
                                <input type="button" value="delete column" onclick="deleteColumn('main-tbl')" />
                                <input type="button" value="add column" onclick="addColumn('main-tbl')" />
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
                                        <div class="img-container"></div>
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
                                <tr class="tool-ctn">
                                    <td colspan="2" id="select_box">
                                        <div class="select-ctn">
                                            <div class="selection-box">
                                                <div class=" item select">
                                                    <select aria-label="Select menu example" id="purpose">
                                                        <option selected>Mục đích sử dụng</option>
                                                        <option value="1">Xe kinh doanh không vận tải</option>
                                                        <option value="1">Xe kinh doanh chở người</option>
                                                    </select>
                                                </div>
                                                <div class="item select">
                                                
                                                <select aria-label="Select menu example" id="brand">
                                                    <option selected>Hãng xe</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand['id']}}" id="brand_{{$brand['id']}}">{{$brand['name']}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="item select">
                                                    <select aria-label="Select menu example" id="cate">
                                                        <option selected="">Loại xe</option>
                                                    </select>
                                                </div>
                                                <div class="item select">
                                                    <select aria-label="Select menu example" id="prd_date">
                                                        <option selected>Năm sản xuất</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>

                                                      
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
                                <tr class="data-detail price-discount">
                                    <td><button type="button" class="btn btn-discount" id="before_discount">Phí trước khuyến mại</button></td>
                                    <td rowspan="2"></td>
                                </tr>
                                <tr class="data-detail price-discount">
                                    <td><button type="button" class="btn btn-discount" id="discount">Phí sau khuyến mại</button></td>
                                </tr>
                                <tr class="header bg-head-1">
                                    <td  colspan="2" class="green_header">Điều khoản bổ sung

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
                               @foreach($terms_data as $key=>$value)  
                                <tr class="data-detail">
                                    <td>
                                        <input class="selectedId" type="checkbox" id="checkbox_bs{{$value['id']}}" name="checkbox_bs{{$value['id']}}" value="{{$value['rate_fee']}}" data-id="{{$value['id']}}"  onclick='handleOncick(this);' />
                                        <label for="checkbox_bs{{$value['id']}}"> </label><span class="first-td"><p class="ellipsis">{{$value['terms']}}</p>
                                        <span class="show-detail"><button type="button" class="btn btn-primary" value="{{$value['terms']}}" onclick="showMore(this.value)"  >...</button></span></span>
                                        <label class="drop" for="" style="display:none" id="dkbs{{$value['id']}}">{{$value['rate_fee']}}% phí</label>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                             @endforeach  
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Mức khấu trừ</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>{{$dedutible_data[0]['deductible']??""}}</td>
                                    <td></td>
                                    <!-- <td>

                                   <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                    </td> -->
                                </tr>
                                <tr class="header bg-head-2">
                                    <td  colspan="2" class="green_header">Điều khoản loại trừ</td>
                                </tr>
                                @foreach($exception_data as $value)
                                <tr class="data-detail">
                                    <td>
                                        <input class="selectedId" type="checkbox" id="checkbox2_{{$value['id']}}" name="checkbox2_{{$value['id']}}"  />
                                        <label for="checkbox2_{{$value['id']}}"> </label> </label><span class="first-td"><p class="ellipsis">{{$value['exception']}}</p>
                                        <span class="show-detail"><button href="#detail-td" rel="modal:open">...</button></span></span>
                                        <label class="drop" for="">0.01% phí</label>
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Chế tài trong các trường hợp</td>
                                </tr>
                                @foreach($punishment as $value)
                                <tr class="data-detail">
                                    <td>{{$value['sanction']}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                                <tr class="header green">
                                    <td  colspan="2" class="green_header">Quyền và nghĩa vụ của chủ xe/ lái xe</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                <tr class="header bg-head-3">
                                    <td  colspan="2" class="green_header">Năng lực tài chính</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                <tr class="header bg-head-4">
                                    <td  colspan="2" class="green_header">Mạng lưới hoạt động</td>
                                </tr>
                                <tr class="data-detail">
                                    <td class="text-center"><img class="img-fluid net-img" src="{{ url('/') }}/assets/images/car/network1.png?{{ config('custom.version') }}" alt=""></td>
                                    <td>
                                        <img class="img-fluid toggle" src="{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}" alt="">
                                        <p class="toggle"><span>(108)</span> Chi nhánh</p>
                                    </td>
                                    <div id="net-address">
                                        @include('frontend/pages/network')
                                    </div>
                                </tr>
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Đánh giá uy tín</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                <tr class="header green">
                                    <td  colspan="2" class="green_header">Mô hình GQPT</td>
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
</script>
<script>
    
    function handleOncick(cb){
        var index = $(cb).data("id");
        var checkBox = document.getElementById('checkbox_bs'+index+'');
        var text = document.getElementById('dkbs'+index+'');
        if(checkBox.checked==true){
           text.style.display = "inline-flex";

        }else{
           text.style.display = "none";
        }
       
    }
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

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop