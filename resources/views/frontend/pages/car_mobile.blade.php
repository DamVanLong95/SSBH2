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
<div class="table-section  d-md-block d-lg-none d-xl-none">
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