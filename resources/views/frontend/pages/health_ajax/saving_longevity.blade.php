<div class="pack-title">
<h4>Tích lũy, tiết kiệm <span>({{count($product_saving)}})</span></h4>
</div>
<div  class="section-wrapper">
    <ul id="thumbs" class="section-list">
    @foreach($product_saving as $value)
        <li class="item">
        <div class="thumb-t">
                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
            
                <div class="brand-thumb">
                    <label for="1">
                        <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                    </label>
                    <div class="input-pack">
                        <input name="type" value="" type="checkbox" id="ala_1"/>
                        <label class="toggle" for="ala_1"></label>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>