<div class="select2-ctn">
<form action="">
     <div class="custom-select-fix-wrapper">
        <div class="custom-select-fix sources">
            <span class="custom-select-fix-trigger" id="select{{$indexCol}}">Tương Lai Vững Vàng</span>
            <div class="custom-options longevity-option">
                @forelse($programs as $value)
                <span class="custom-option undefined" data-value="{{$value['id']}}">{{$value['name']}}</span>
                @empty
                    <span class="">data not update</span>
                @endforelse
            </div>
        </div>
    </div>
 </form>
</div>

