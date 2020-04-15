<div class="pack-title">
<h4>Tích lũy, tiết kiệm <span>({{count($product_saving)}})</span></h4>
</div>
<div  class="section-wrapper">
    <ul class="section-list" >
        @forelse($product_saving as $value)
            <li class="item">
                <div class="thumb-t">
                    {{$value['name']}}
                </div>
                <div class="brand-thumb">
                    <label for="1">
                    <a href="#" target="_blank"><img class="thumb" src="{{asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                    </label>
                    <div class="input-pack">
                        <input name="type" value="" type="checkbox" id="checkbox_{{$value['id']}}"/>
                        <label class="toggle" for="checkbox_{{$value['id']}}"></label>
                    </div>
                </div>
            </li>
            @empty
            <li class="item">
            <div class="thumb-t">
            <strong class="">Yêu cầu chưa được cập nhật.Vui lòng chọn lại ! </strong>
                </div>
                <div class="brand-thumb">
                    <label for="1">
                    <a href="#" target="_blank"><img class="thumb" src="" id="" alt=""></a>
                    </label>
                </div>
            </li>
        @endforelse
    </ul>
</div>