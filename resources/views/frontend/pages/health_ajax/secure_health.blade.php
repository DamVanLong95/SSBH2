<div class="pack-title">
<h4>Bảo vệ <span>({{count($product_secure)}})</span></h4>
</div>
<div  class="section-wrapper2">
    <ul  class="section-list2">
    @forelse($product_secure as $value)
        <li class="item2">
            <div class="thumb-t">
                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                <div class="brand-thumb">
                    <label for="1">
                        <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                    </label>
                    <div class="input-pack">
                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_bv{{$value['id']}}"/>
                        <label class="toggle" for="checkbox_bv{{$value['id']}}"></label>
                    </div>
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



                     