
@foreach($product_secure as $value)
    <li class="item2">
        <div class="thumb-t">
            {{$value['name']}}
        </div>
        <div class="brand-thumb">
            <label for="1">
                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
            </label>
            <div class="input-pack">
                <input name="type" value="" type="checkbox" id="checkbox_bv{{$value['id']}}"/>
                <label class="toggle" for="checkbox_bv{{$value['id']}}"></label>
            </div>
        </div>
    </li>
@endforeach
                     