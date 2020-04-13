@extends('layouts.default')
@section('header')
<title>{{ config('custom.seo_title') }}</title>
<meta name="description" content="{{ config('custom.seo_description') }}">
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="{{ url('/')  }}"/>
<meta property="og:url" content="{{ Request::url()  }}" />
<meta property="og:image" content="{{ url('uploads/others/fbimage.jpg?'.config('custom.version'))  }}" />
<meta property="og:title" content="{{ config('custom.seo_title') }}" />
<meta property="og:description" content="{{ config('custom.seo_description') }}" />

@stop
@section('content')
<div class="table-section d-md-block d-lg-none d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="layout-area" class="table-ctn ">
                        <div class="table-responsive">
                            <table id="main-tbl" class="table">
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
                                        <th class="col2">
                                            <div class="img-container"></div>
                                        </th>
                                        <th class="col2">
                                            <div class="img-container"></div>
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
                                        <td  colspan="5" class="green_header">Tính phí</td>
                                    </tr>
                                    <tr class="tool-ctn">
                                        <td colspan="5" id="select_box">
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
                                                    
                                                        <option value="" id="">option1</option>
                                                        <option value="" id="">option2</option>
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
                                                        <option value="">option 1</option>
                                                        <option value=""> option2</option>
                                                    
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
                                    <tr class="header bg-head-1 fixed-header">
                                        <td  colspan="2" class="green_header">Điều khoản bổ sung

                                        </td>
                                        
                                    </tr>
                                    <tr class="select-all">
                                        <td class="td-all">
                                            <div class="choose-all">
                                                <input type="checkbox" id="selectall_bs" class="selectedAll"  onclick="" >
                                                <label class="toggle" for="selectall_bs">Chọn tất cả</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="data-detail ">
                                        <td>
                                            <input class="selectedId" type="checkbox" id="checkbox_bs" value="" data-id=""  onclick='' />
                                            <label for=""> </label><span class="first-td"><p class="ellipsis"></p>
                                            <span class="show-detail"><button type="button" class="btn btn-primary" value="" onclick=""  >...</button></span></span>
                                            <label class="drop" for="" style="display:none" id="" >0.1% phí</label>
                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr class="header">
                                        <td  colspan="2" class="green_header">Mức khấu trừ</td>
                                    </tr>
                                    <tr class="data-detail ">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td>

                                        <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                        <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                        </td> -->
                                    </tr>
                                    <tr class="header bg-head-2">
                                        <td  colspan="2" class="green_header">Điều khoản loại trừ</td>
                                        <tr class="select-all">
                                        <td>
                                            <div class="choose-all">
                                                
                                                <input type="checkbox" id="selectall_lt" name="selectall_lt" class="selectedAll" onclick="" >
                                                <label class="toggle" for="selectall_lt">Chọn tất cả</label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tr>
                                    
                                    <tr class="data-detail ">
                                        <td>
                                            <input class="selectedId2" type="" 
                                                    name="" value="" data-id=""  onclick="" />
                                            <label for=""> </label> </label><span class="first-td"><p class="ellipsis"></p>
                                            <span class="show-detail"><button value="" onclick="">...</button></span></span>
                                            <label class="drop" for="" style="display:none" id="">0.1% phí</label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      
                                    </tr>
                                    
                                    <tr class="header">
                                        <td  colspan="2" class="green_header">Chế tài trong các trường hợp</td>
                                    </tr>
                                    
                                    <tr class="data-detail ">
                                        <td><p class="ellipsis"></p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr class="header green">
                                        <td  colspan="2" class="green_header">Quyền và nghĩa vụ của chủ xe/ lái xe</td>
                                    </tr>
                                    
                                    <tr class="data-detail  ">
                                        <td><p class="ellipsis"></p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr class="header bg-head-3">
                                        <td  colspan="2" class="green_header">Năng lực tài chính</td>
                                    </tr>
                                    <tr class="select-all">
                                        <td class="td-all">
                                            Đơn vị: triệu đồng
                                        </td>
                                    </tr>
                                
                                    <tr class="data-detail " >
                                        <td><p class="ellipsis"></p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr class="header bg-head-4">
                                        <td  colspan="2" class="green_header">Mạng lưới hoạt động</td>
                                    </tr>
                                    <tr class="data-detail ">
                                        <td class="text-center empty-first-car2 "><img class="img-fluid net-img" src="{{ url('/') }}/assets/images/car/network1.png?{{ config('custom.version') }}" alt=""></td>
                                        <td class="car-td active-car-td">
                                            <img class="img-fluid toggle" src="{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}" alt="">
                                            <p class="toggle"><span>(0)</span> Chi nhánh</p>
                                            
                                        </td>
                                        <td></td>

                                        <td></td>
                                        <td></td>
                                        <tr class="data-detail" id="car-tr"><td class="empty-first-car text-center"></td>
                                            <td class="car_header" colspan="1">
                                                <div id="net-address">
                                                
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr >
                                            <div id="hospital-address">
                                            </div>
                                        </tr> -->
                                    </tr>
                                    <!-- <tr class="data-detail ">
                                        <td class="text-center"><img class="img-fluid net-img" src="{{ url('/') }}/assets/images/car/network1.png?{{ config('custom.version') }}" alt=""></td>
                                        <td>
                                            <img class="img-fluid toggle" src="{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}" alt="">
                                            <p class="toggle"><span>(0)</span> Chi nhánh</p>
                                        </td>
                                        <div id="net-address">
                                            
                                        </div>
                                    </tr> -->
                                    <tr class="header">
                                        <td  colspan="2" class="green_header">Đánh giá uy tín</td>
                                    </tr>
                                    <tr class="data-detail">
                                        <td>Example text</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="header green">
                                        <td  colspan="2" class="green_header">Mô hình GQBT</td>
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
@stop
@section('footer')
@stop