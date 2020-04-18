@if(!empty($product_secure))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Bảo vệ <span>({{count($product_secure)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_secure as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                            <input name="type" value="" type="checkbox" id="checkbox_dt{{$value['id']}}"/>
                            <label class="toggle" for="checkbox_dt{{$value['id']}}"></label>
                            </div>
                        </div>
            </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
</div>
@endif
@if(isset($product_invest))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Đầu tư <span>({{count($product_invest)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_invest as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                            <input name="type" value="" type="checkbox" id="checkbox_dt{{$value['id']}}"/>
                            <label class="toggle" for="checkbox_dt{{$value['id']}}"></label>
                            </div>
                        </div>
            </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
</div>
@endif
@if(isset($product_retire))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Hưu trí <span>({{count($product_retire)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_retire as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                                <input name="type" value="" type="checkbox" id="checkbox_ht{{$value['id']}}"/>
                                <label class="toggle" for="checkbox_ht{{$value['id']}}"></label>
                            </div>
                        </div>
            </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
</div>
@endif
@if(isset($product_edu))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Giáo dục<span>({{count($product_edu)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_edu as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                            <input name="type" value="" type="checkbox" id="checkbox_edu{{$value['id']}}"/>
                                <label class="toggle" for="checkbox_edu{{$value['id']}}"></label>
                            </div>
                        </div>
            </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
</div>
@endif
@if(isset($product_concern))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Doanh nghiệp <span>({{count($product_concern)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_concern as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                                <input name="type" value="" type="checkbox" id="checkbox_dn{{$value['id']}}"/>
                                <label class="toggle" for="checkbox_dn{{$value['id']}}"></label>
                            </div>
                        </div>
            </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
</div>
@endif


