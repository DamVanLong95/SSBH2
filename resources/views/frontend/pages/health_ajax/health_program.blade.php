<div class="select2-ctn">
<form action="">
     <div class="custom-select-fix-wrapper">
        <div class="custom-select-fix sources" id="selected">
            <span class="custom-select-fix-trigger" id="select{{$indexCol}}">Tương Lai Vững Vàng</span>
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

