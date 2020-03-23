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
                                    <input name="type" value="" type="checkbox" id="ala_1"/>
                                    <label class="toggle" for="ala_1"></label>
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
                <div  class="section-wrapper">
                    <ul id="thumbs" class="section-list">
                        <li class="item">
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
                        <li class="item">
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
                                    <td  colspan="2" class="green_header">Mức khấu trừ</td>
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
                                    <td  colspan="2" class="green_header">Điều khoản loại trừ</td>
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
                                    <td  colspan="2" class="green_header">Chế tài trong các trường hợp</td>
                                </tr>
                                
                                <tr class="data-detail">
                                    <td>aloha</td>
                                    <td></td>
                                </tr>
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

    <div id="sk-section3" class="sk-section3">
        <div class="sec3-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="slideKnow" class="swiper-container swiper-sk">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slide-item">
                                    <div class="item">
                                        <h4>So sánh bảo hiểm vật chất xe ô tô</h4>
                                        <div class="description-ctn">
                                            <p>So sánh các công ty bảo hiểm phi nhân thọ cung cấp bảo hiểm vật chất xe ô tô uy tín trên thị trường.</p>
                                        </div>
                                        <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide1.png?{{ config('custom.version') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item ">
                                    <div class="item center-item">
                                        <h4>So sánh bảo hiểm Nhân thọ</h4>
                                        <div class="description-ctn">
                                            <p>So sánh các công ty bảo hiểm nhân thọ, cung cấp bảo hiểm nhân thọ uy tín trên thị trường.</p>
                                        </div>
                                        <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide2.png?{{ config('custom.version') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="item">
                                        <h4>So sánh Bảo hiểm sức khoẻ</h4>
                                        <div class="description-ctn">
                                            <p>So sánh các công ty bảo hiểm cung cấp bảo hiểm sức khoẻ uy tín trên thị trường.</p>
                                        </div>
                                        <a href="#" target="_blank"><img src="{{ url('/') }}/assets/images/home/slide3.png?{{ config('custom.version') }}" alt=""></a>
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
    @include('layouts.health_script')
@stop