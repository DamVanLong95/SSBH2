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
                        Tìm kiếm doanh nghiệp bảo hiểm
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="brand-section">
        <div class="section-wrapper">
            <div class="pn-ProductNav_Wrapper">
                <nav id="pnProductNav" class="pn-ProductNav">
                    <ul id="thumbs" class="pn-ProductNav_Contents section-list">
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="1">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/bv-insurance.png?{{ config('custom.version') }}" alt="" id="1">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="checkbox1"/>
                            <label class="toggle" for="1"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="2">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/bv-life.png?{{ config('custom.version') }}" alt="" id="2">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="checkbox2"/>
                            <label class="toggle" for="2"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="3">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/prudential.png?{{ config('custom.version') }}" alt="" id="3">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="3"/>
                            <label class="toggle" for="3"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="4">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/manulife.svg?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="4"/>
                            <label class="toggle" for="4"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="5">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/aia.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="5"/>
                            <label class="toggle" for="5"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/chubb.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/mirae.png?{{ config('custom.version') }}" alt="" id="'">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/daichi.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/cathay.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/fwd.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/generali.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" width="100px" src="{{ url('/') }}/assets/images/logo/phuhung.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/fubon.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/hanwha.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/aviva.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/sunlife.svg?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/meltlife.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/vcli.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/mb.svg?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                        <li class="item">
                            <div class="brand-thumb">
                                <label for="6">
                                    <img class="thumb" src="{{ url('/') }}/assets/images/logo/ebaohiem.png?{{ config('custom.version') }}" alt="">
                                </label>
                            </div>
                            <input name="type" value="" type="checkbox" id="6"/>
                            <label class="toggle" for="6"></label>
                        </li>
                    </ul>
                </nav>
                    <button id="pnAdvancerLeft" class="pn-Advancer pn-Advancer_Left" type="button">
                        <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 551 1024"><path d="M445.44 38.183L-2.53 512l447.97 473.817 85.857-81.173-409.6-433.23v81.172l409.6-433.23L445.44 38.18z"/></svg>
                    </button>
                    <button id="pnAdvancerRight" class="pn-Advancer pn-Advancer_Right" type="button">
                        <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 551 1024"><path d="M105.56 985.817L553.53 512 105.56 38.183l-85.857 81.173 409.6 433.23v-81.172l-409.6 433.23 85.856 81.174z"/></svg>
                    </button>
            </div>
        </div>
    </div> -->
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
                                                <a class="" href="#" target="_blank">1900 9889 65</a>
                                            </div>
                                            <div class="item">
                                                <a href="#" target="_blank"><img class="img-fluid" src="{{ url('/') }}/assets/images/home/mes.png?{{ config('custom.version') }}" alt=""></a>
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
                                            <div class="mark-num"><p><span class="first-span">08</span>/<span>10</span></p></div>
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
                                    <td rowspan="2"></td>
                                </tr>
                                <tr class="data-detail price-discount">
                                    <td><button type="button" class="btn btn-discount">Phí sau khuyến mại</button></td>
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
                                @foreach($summaries as $summary)
                                <tr class="data-detail">
                                    <td>
                                        <input class="selectedId" type="checkbox" id="chk" name="chk" value="1"/>
                                        <label for="chk">{{$summary['exception']}} </label>
                                    </td>
                                    <td>
{{--                                        <p></p>--}}
{{--                                        <span><a href="#detail-td" rel="modal:open">...</a></span>--}}

{{--                                        <div class="star-td"><img class="img-fluid"--}}
{{--                                                                  src="{{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}"--}}
{{--                                                                  alt=""></div>--}}
                                    </td>
                                </tr>
                                @endforeach
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Mức khấu trừ</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td>

                                   <div class="tick-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}" alt=""></div>
                                    <div class="star-td"><img class="img-fluid" src="{{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="header bg-head-2">
                                    <td  colspan="2" class="green_header">Điều khoản loại trừ</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
                                    <td></td>
                                </tr>
                                <tr class="header">
                                    <td  colspan="2" class="green_header">Chế tài trong các trường hợp</td>
                                </tr>
                                <tr class="data-detail">
                                    <td>Example text</td>
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
                                    <td>Example text</td>
                                    <td>
                                        <img class="img-fluid toggle" src="{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}" alt="">
                                        <p class="toggle"><span>(108)</span> Chi nhánh</p>
                                    </td>
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
                    <div class="network-ctn" id="net-address">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="net-item">
                                        <h5>Trụ sở chính</h5>
                                        <div class="address"><p>Tòa nhà ABC số 12345 Hai Bà Trưng Hà Nội  |  12345678910</p></div>
                                        <div class="address-ctn">
                                            <select aria-label="Select menu example">
                                                <option selected>Tỉnh/Thành phố</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="net-item address-detail">
                                        <h5 data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/address.png?{{ config('custom.version') }}" alt=""></span>Hà Nội <span>(8)</span></h5>
                                        <hr class="line">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel">
                                                <div id="collapseOne" class="panel-collapse collapse">
                                                    <div class="cont">
                                                        <div class="address-list">
                                                            <ul>
                                                                <li class="address-item">
                                                                    <div class="no"><span>01</span>Tòa nhà ABC số 1234</div>
                                                                    <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>Tòa nhà ABC số 1235, Hai Bà Trưng, Hà nội</div>
                                                                    <div class="detail-location"></div>
                                                                    <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span> 0978654323</div>
                                                                </li>
                                                                <li class="address-item">
                                                                    <div class="no"><span>01</span>Tòa nhà ABC số 1234</div>
                                                                    <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>Tòa nhà ABC số 1235 Hai Bà Trưng Hà nội</div>
                                                                    <div class="detail-location"></div>
                                                                    <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span> 0978654323</div>
                                                                </li>
                                                                <li class="address-item">
                                                                    <div class="no"><span>01</span>Tòa nhà ABC số 1234</div>
                                                                    <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>Tòa nhà ABC số 1235 Hai Bà Trưng Hà nội</div>
                                                                    <div class="detail-location"></div>
                                                                    <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span> 0978654323</div>
                                                                </li>
                                                                <li class="address-item">
                                                                    <div class="no"><span>01</span>Tòa nhà ABC số 1234</div>
                                                                    <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>Tòa nhà ABC số 1235 Hai Bà Trưng Hà nội</div>
                                                                    <div class="detail-location"></div>
                                                                    <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span> 0978654323</div>
                                                                </li>
                                                                <li class="address-item">
                                                                    <div class="no"><span>01</span>Tòa nhà ABC số 1234</div>
                                                                    <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>Tòa nhà ABC số 1235 Hai Bà Trưng Hà nội</div>
                                                                    <div class="detail-location"></div>
                                                                    <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span> 0978654323</div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                    </div>
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
        <p>Thanks for clicking. That felt good.</p>
        <div id="notes"></div>
    </div>
  <a href="#">Mua ngay</a>

</div>
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

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop
