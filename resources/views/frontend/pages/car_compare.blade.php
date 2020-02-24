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
    <div class="brand-section">
        <div class="section-wrapper">
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
    <div class="table-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="data-compare">
                        <div class="table-responsive">
                            <table class="fold-table">
                                <thead>
                                    <tr>
                                        <th></th><th>Amount</th><th>Value</th><th>Premiums</th><th>Strategy A</th>
                                    </tr>
                                    <tr>
                                        <th></th><th></th><th></th><th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Tính phí</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Các điều khoản bổ sung</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view td-bg1">
                                        <td colspan="5" class="first-col">Các điều khoản bổ sung</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Mức khấu trừ</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Điều khoản loại trừ</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Chế tài trong các trường hợp</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Năng lực tài chính</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Mạng lưới hoạt động</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Đánh giá uy tín</td>
                                    </tr>
                                    <tr class="fold">
                                        <td colspan="7">
                                            <div class="fold-content">
                                            <h3>Company Name</h3>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13245</td>
                                                    <td>John Doe</td>
                                                    <td>064578</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">20000</td>
                                                    <td class="cur">33000</td>
                                                    <td class="cur">13000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>13288</td>
                                                    <td>Claire Bennet</td>
                                                    <td>064877</td>
                                                    <td>B, 100%</td>
                                                    <td class="cur">28000</td>
                                                    <td class="cur">48000</td>
                                                    <td class="cur">20000</td>
                                                </tr>
                                                <tr>
                                                    <td>Sony</td>
                                                    <td>12341</td>
                                                    <td>Barry White</td>
                                                    <td>064123</td>
                                                    <td>A, 100%</td>
                                                    <td class="cur">10000</td>
                                                    <td class="cur">22000</td>
                                                    <td class="cur">12000</td>
                                                </tr>
                                                </tbody>
                                            </table>          
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="view">
                                        <td colspan="5" class="first-col">Mô hình gqbt</td>
                                    </tr>
                                    <tr class="fold">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@stop
<script>
 
</script>
@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop