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

    <!-- <script src="{{ url('assets/js/?'.config('custom.version')) }}"></script> -->
<style>
body {
    margin: 2em auto;
    max-width: 600px;
}
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
#target, #target2 {
/*     display: none; */
}
#target td {
    width: 30%;
    height: 140px;
    vertical-align: top;
}
textarea.caption {
    display: block;
    width: 95%;
    margin: 10px auto;
    height: 50px;
    border: none;
    background: #eee;
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
#target td.header {
    width: 100%;
}
#target td.header input, #target2 td.text input {
    width: 100%;
    margin-bottom: 0.5em;
    display: block;
    padding: 0.3em;
    border: none;
    text-align: center;
    background: #eee;
}
#choose-layout {
    width: 480px;
    margin: 2em auto;
    overflow: hidden;
}
#choose-layout div {
    width: 230px;
    text-align: center;
}
#choose-layout .layout {
    height: 180px;
    line-height: 180px;
    background: #eee;
}
#layout-1 {
    float: left;
}
#layout-2 {
    float: right;
}
#choose-layout img {
    display: block;
    max-width: 100%;
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
<!--     <div id="choose-layout">
        <h3>Choose a layout</h3>
        <div id="layout-1">
            <div class="layout">1</div>
            <p>
                <input type="radio" value="target2" id="l1" />
            </p>
        </div>
    </div> -->
    <table id="target2">
        <tr>
            <td class="">
                <div class="img-container"></div>
            </td>
<!--             <td class="half">
                <div class="img-container"></div>
                <textarea class="caption"></textarea>
            </td> -->
        </tr>
        <tr>
            <td colspan="2" class="data">
                <input type="text" id="dati" value="Data" />
            </td>
        </tr>
    </table>
    </div>
    
<!-- <div id="output"></div> -->
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop