<div class="select2-ctn">
<form action="">
     <div class="custom-select-fix-wrapper">
        <div class="custom-select-fix sources" id="selected">
            <span class="custom-select-fix-trigger" id="select{{$indexCol}}" value="" >--- Chọn chương trình ---</span>
            <div class="custom-options longevity-option">
                @forelse($programs as $key=>$value)
                <span class="custom-option undefined" data-value="{{$value['id']}}" {{($key==0)? 'selected':''}}>{{$value['name']}}</span>
                @empty
                    <span class=""style="color:#fff;">data not update</span>
                @endforelse
            </div>
        </div>
    </div>
 </form>
</div>
<div class="count-rank-ctn">
    <div class="mark-num"><p><span class="first-span" >8</span>/<span>10</span></p></div>
        <div class="service">
            <img src="{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}"alt="">
            <img src="{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}"alt="">
            <img src="{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}"alt="">
        </div>
    </div>
</div>
 