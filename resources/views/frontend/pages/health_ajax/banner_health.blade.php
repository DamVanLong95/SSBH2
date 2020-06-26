<div class="pack-title">
<h4>kết quả <span>({{count($products)}})</span></h4>
</div>
<div  class="section-wrapper">
    <ul class="section-list" >
        @forelse($products as $value)
            <li class="item">
                <div class="thumb-t">
                    {{$value['name']}}
                </div>
                <div class="brand-thumb">
                    <label for="1">
                    <a href="#" target="_blank"><img class="thumb" src="{{asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                    </label>
                    <div class="input-pack">
                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_{{$value['id']}}" class="checkId"/>
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
    @if($agent->isMobile())
         @include('layouts.health_mobile')
    @else
        @include('layouts.health_load_script')
    @endif
