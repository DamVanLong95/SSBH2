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
<div class="table-section  d-md-block ">
  <div class="container">
    <div class="row">
        <div class="col-md-12 ">
          <div id="table-scroll" class="table-scroll">
            <table id="main-tbl" class="main-table">
              <thead class="top-head">
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
                  <th scope="col">
                    <div class="img-container"></div>
                  </th>
                  <th scope="col">
                    <div class="img-container"></div>
                  </th>
                  <th scope="col">
                    <div class="img-container"></div>
                  </th>
                  <th scope="col">
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
                    <td class="green-header" colspan="5" >Tính phí</td>
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
                                        <option value="" id="brand_1">option1</option>
                                        <option value="" id="brand_2">option2</option>
                                        <option value="" id="brand_3">option3</option>
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
                                    {{$now = date('Y')}}  
                                    @for ($i = $now; $i >=2010 ; $i--)
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
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td><a href="#">Cell content longer</a></td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
                </tr>
                <tr>
                  <td>Left Column</td>
                  <td>Cell content</td>
                  <td>Cell content longer</td>
                  <td>Cell content</td>
                  <td>Cell content</td>
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