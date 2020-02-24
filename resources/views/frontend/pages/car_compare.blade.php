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
    

    <!-- <div class="brand-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="selection-list">
                        <ul class="brand-list">
                            <div class="brand-item">
                                <div class="brand-thumb">
                                    <label for="school">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner.png?{{ config('custom.version') }}" alt="">
                                    </label>
                                </div>
                                <li class="item">
                                    <input name="type" value="" type="checkbox" id="school"/>
                                    <label class="toggle" for="school"></label>
                                </li>
                            </div>
                            <div class="brand-item">
                                <div class="brand-thumb">
                                    <label for="home">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner1.png?{{ config('custom.version') }}" alt="">
                                    </label>
                                </div>
                                <li class="item">
                                    <input name="type" value="" type="checkbox" id="home"/>
                                    <label class="toggle" for="home"></label>
                                </li>
                            </div>
                            <div class="brand-item">
                                <div class="brand-thumb">
                                    <label for="friend">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner2.png?{{ config('custom.version') }}" alt="">
                                    </label>
                                </div>
                                <li class="item">
                                    <input name="type" value="" type="checkbox" id="friend"/>
                                    <label class="toggle" for="friend"></label>
                                </li>
                            </div>
                            <div class="brand-item">
                                <div class="brand-thumb">
                                    <label for="lamp">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner3.png?{{ config('custom.version') }}" alt="">
                                    </label>
                                </div>
                                <li class="item">
                                    <input name="type" value="" type="checkbox" id="lamp"/>
                                    <label class="toggle" for="lamp"></label>
                                </li>
                            </div>
                            <div class="brand-item">
                                <div class="brand-thumb">
                                    <label for="plane">
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner4.png?{{ config('custom.version') }}" alt="">
                                    </label>
                                </div>
                                <li class="item">
                                    <input name="type" value="" type="checkbox" id="plane"/>
                                    <label class="toggle" for="plane"></label>
                                </li>
                            </div>
                            <div class="brand-item">
                                <div class="brand-thumb">
                                    <label for="plane">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/partner5.png?{{ config('custom.version') }}" alt="">
                                    </label>
                                </div>
                                <li class="item">
                                    <input name="type" value="" type="checkbox" id="plane"/>
                                    <label class="toggle" for="plane"></label>
                                </li>
                            </div>
                        </ul>
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
            </div>
        </div>
    </div> -->
    <div class="table-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="data-compare">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
                        <td class="expand-button"></td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>

                        </tr>
                        <tr class="hide-table-padding">
                        <td></td>
                        <td colspan="3">
                        <div id="collapseOne" class="collapse in p-3">
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value 1</div>
                        </div>
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value 2</div>
                        </div>
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value 3</div>
                        </div>
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value 4</div>
                        </div>
                        </div></td>
                        </tr>
                            <tr class="accordion-toggle collapsed" id="accordion2" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        <td class="expand-button"></td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>

                        </tr>
                        <tr class="hide-table-padding">
                        <td></td>
                        <td colspan="4">
                        <div id="collapseTwo" class="collapse in p-3">
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value</div>
                        </div>
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value</div>
                        </div>
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value</div>
                        </div>
                        <div class="row">
                            <div class="col-2">label</div>
                            <div class="col-6">value</div>
                        </div>
                        </div></td>
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
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop