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
<style>
#thumbs {
    text-align: center;
    margin-bottom: 2em;
    background: #ccc;
    padding: 0.5em;
}
#thumbs img {
    width: 150px;
    height: 140px;
    margin: 0 1em;
    cursor: move;
}
#layout-area table {
    width: 100%;
    border-spacing: 2%;
    table-layout: fixed;
}


#layout-area .sized {
    display: block;
    max-width: 100%;
    max-height: 100%;
}
#layout-area .img-container {
    width: 100%;
    height: 150px;
    background: #eee;
    overflow: hidden;
    position: relative;
}
#layout-area .img-inserted {
/*     background: #fff; */
}
img.ui-draggable {
    z-index: 100000;
}
#layout-area .remove {
    width: 26px;
    height: 26px;
    cursor: pointer;
    background: #000;
    color: #fff;
    text-align: center;
    line-height: 26px;
    font-size: 20px;
    position: absolute;
    top: 0;
    right: 0;
    display: none;
}

#target2 td {
    vertical-align: top;
}
#target2 td.logo {
    width: 50%;
}
#target2 td.text {
    width: 50%;
}
#target2 td[colspan] {
    width: 100%;
}
#target2 td[colspan] input {
    width: 100%;
    margin-bottom: 0.5em;
    display: block;
    padding: 0.3em;
    border: none;
    background: #eee;
    text-align: center;
}
</style>
@stop

@section('content')
<div id="app">

    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
  <div id="thumbs">
      <img src="https://lh4.googleusercontent.com/-MP6drmKHpmc/T1Mrj1mAsDI/AAAAAAAAA3o/nqv3fXcyOCw/w387-h310/mac.jpg" class="thumb" />
      <img src="https://lh4.googleusercontent.com/-MP6drmKHpmc/T1Mrj1mAsDI/AAAAAAAAA3o/nqv3fXcyOCw/w387-h310/mac.jpg" class="thumb" />
      <img src="https://lh4.googleusercontent.com/-MP6drmKHpmc/T1Mrj1mAsDI/AAAAAAAAA3o/nqv3fXcyOCw/w387-h310/mac.jpg" class="thumb" />
</div>
  </div>
</div>
<div id="layout-area">
    <table id="target2">
        <tr>
            <td class="">
                <div class="img-container"></div>
            </td>
        </tr>
    </table>
 </div>
    
<!-- <div id="output"></div> -->
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
                        Tìm kiếm doanh nghiệp bảo hiểm
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-section">
        <div id="thumbs" class="section-wrapper">
            <ul class="section-list">
                <li class="item">
                    <div class="brand-thumb">
                        <label for="1">
                            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner.png?{{ config('custom.version') }}" alt="">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="1"/>
                    <label class="toggle" for="1"></label>
                </li>
                <li class="item">
                    <div class="brand-thumb">
                        <label for="2">
                            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner1.png?{{ config('custom.version') }}" alt="">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="2"/>
                    <label class="toggle" for="2"></label>
                </li>
                <li class="item">
                    <div class="brand-thumb">
                        <label for="3">
                            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner2.png?{{ config('custom.version') }}" alt="">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="3"/>
                    <label class="toggle" for="3"></label>
                </li>
                <li class="item">
                    <div class="brand-thumb">
                        <label for="4">
                            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner3.png?{{ config('custom.version') }}" alt="">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="4"/>
                    <label class="toggle" for="4"></label>
                </li>
                <li class="item">
                    <div class="brand-thumb">
                        <label for="5">
                            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner4.png?{{ config('custom.version') }}" alt="">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="5"/>
                    <label class="toggle" for="5"></label>
                </li>
                <li class="item">
                    <div class="brand-thumb">
                        <label for="6">
                            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner5.png?{{ config('custom.version') }}" alt="">
                        </label>
                    </div>
                    <input name="type" value="" type="checkbox" id="6"/>
                    <label class="toggle" for="6"></label>
                </li>
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
    <div  class="table-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <!-- <input type="button" value="Add New Column" onclick="addColumn();" id="columnButton" /> -->
                    <table id="main" class="table">
                        <thead>
                            <tr class="top-head" >
                                <th class='th-1'> 
                                    <div class="left-ctn">
                                        <div class="item phone">
                                            <a class="" href="#" target="_blank">1900 9889 65</a>
                                        </div>
                                        <div class="item">
                                            <a href="#" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/mes.png?{{ config('custom.version') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <h4>SANBAOHIEM</h4>
                                </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr class="sub-head">
                                <th class="th-2">
                                    <div class="star-ctn">
                                        <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}" alt=""></span>Tốt</p></div>
                                        <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></span>Khá</p></div>
                                        <div class="item"><p><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}" alt=""></span>Trung bình</p></div>
                                    </div>
                                </th>
                                <th>
                                    <div class="count-rank-ctn">
                                        <div class="mark-num"><p><span class="first-span">08</span>/<span>10</span></p></div>
                                        <div class="service">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="count-rank-ctn">
                                        <div class="mark-num"><p><span class="first-span">08</span>/<span>10</span></p></div>
                                        <div class="service">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="count-rank-ctn">
                                        <div class="mark-num"><p><span class="first-span">08</span>/<span>10</span></p></div>
                                        <div class="service">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="count-rank-ctn">
                                        <div class="mark-num"><p><span class="first-span">08</span>/<span>10</span></p></div>
                                        <div class="service">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}" alt="">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}" alt="">
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="header green">
                                <td colspan="5">Tính phí</td>
                            </tr>
                            <tr class="tool-ctn">
                                <td colspan="5">
                                <div class="select-ctn">
                                    <div class="selection-box">
                                        <div class=" item select">
                                            <select aria-label="Select menu example">
                                                <option selected>Mục đích sử dụng</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="item select">
                                            <select aria-label="Select menu example">
                                                <option selected>Hãng xe</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="item select">
                                            <select aria-label="Select menu example">
                                                <option selected>Loại xe</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="item select">
                                            <select aria-label="Select menu example">
                                                <option selected>Năm sản xuất</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="item input-filter">
                                        <span> Giá trị: </span> <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="item button-filter">
                                        <button type="button" onclick="">Tính phí</button>
                                    </div>
                                </div>
                                </td>
                               
                            </tr>
                            <tr class="data-detail price-discount">
                            <td><button type="button" class="btn btn-discount">Phí trước khuyến mại</button></td>
                                <td rowspan="2">data</td>
                                <td rowspan="2">data</td>
                                <td rowspan="2">data</td>
                                <td rowspan="2">data</td> 
                            </tr>
                            <tr class="data-detail price-discount">
                                <td><button type="button" class="btn btn-discount">Phí sau khuyến mại</button></td>
                            </tr>
                            <tr class="header green">
                                <td colspan="5">Các điều khoản bổ sung
                                </td>
                            </tr>
                            <tr class="select-all" colspan="5">
                                <td><div class="choose-all">
                                    <input type="checkbox" id="selectall"></input>
                                    <label class="toggle" for="selectall">Chọn tất cả</label>
                                </div></td>
                                
                            </tr>
                            
                            <tr class="data-detail">
                                <td>
                                    <input type="checkbox" class="selectedId" name="selectedId" />
                                    <label class="toggle" for="selectedId" id="select1">data</label>
                                </td>
                                <td><p>(Trừ trường hợp xe mới chờ đăng kiểm và không kéo dài quá 30 ngàys</p>
                                   <span><a href="#detail-td" rel="modal:open">...</a></span>
                                
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}" alt=""></div>
                                </td>
                                <td>
                                
                                   <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                </td>
                                <td><p>(Trừ trường hợp xe mới chờ đăng kiểm và không kéo dài quá 30 ngàys</p>
                                   <span><a href="#detail-td" rel="modal:open">...</a></span>
                                
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}" alt=""></div>
                                </td>
                                <td>
                                
                                   <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}" alt=""></div>
                                </td> 
                            </tr>
                            <tr class="data-detail">
                                <td>
                                    <input type="checkbox" class="selectedId" name="selectedId" />
                                    <label class="toggle" for="selectedId" id="select2">data</label>
                                    
                                </td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td><input type="checkbox" class="selectedId" name="selectedId" />data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header">
                                <td colspan="5">Mức khấu trừ</td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header green">
                                <td colspan="5">Điều khoản loại trừ </td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header">
                                <td colspan="5">Chế tài trong các trường hợp </td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header green">
                                <td colspan="5">Quyền và nghĩa vụ của chủ xe/lái xe</td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header">
                                <td colspan="5">Năng lực tài chính </td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header green">
                                <td colspan="5">Mạng lưới hoạt động </td>
                            </tr>
                            <tr class="data-detail">
                                <td colspan="1" class="text-center">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/car/network1.png?{{ config('custom.version') }}" alt=""> 
                                </td>
                                <td>
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}" alt="">
                                </td>
                                <td><img class="img-fluid" src="{{ url('/') }}/assets/images/car/network3.png?{{ config('custom.version') }}" alt=""></td>
                                <td><img class="img-fluid" src="{{ url('/') }}/assets/images/car/network4.png?{{ config('custom.version') }}" alt=""></td>
                                <td><img class="img-fluid" src="{{ url('/') }}/assets/images/car/network5.png?{{ config('custom.version') }}" alt=""></td>
                            </tr>
                            
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header">
                                <td colspan="5">Đánh giá uy tín </td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="header green">
                                <td colspan="5">Mô hình gqbt</td>
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                            <tr class="data-detail">
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
</div>
<div id="detail-td" class="modal">
    <div class="content-ctn">
        <p>Thanks for clicking. That felt good.</p>
    </div>
  <a href="#">Mua ngay</a>
 
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop