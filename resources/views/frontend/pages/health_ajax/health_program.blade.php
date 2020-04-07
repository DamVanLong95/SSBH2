<div class="select2-ctn">
<form action="">
     <div class="custom-select-fix-wrapper">
        <select name="sources" id="sources" class="custom-select-fix sources" placeholder="Tương Lai Vững Vàng" style="display: none;">
        @forelse($programs as $value)
            <option value="{{$value['id']}}">{{$value['name']}}</option>
            @empty
                <p class="">data not update</p>
        @endforelse
        </select>
        <div class="custom-select-fix sources">
            <span class="custom-select-fix-trigger">Tương Lai Vững Vàng</span>
            <div class="custom-options longevity-option">
                @forelse($programs as $value)
                <span class="custom-option undefined" data-value="{{$value['id']}}">{{$value['name']}}</span>
                @empty
                    <p class="">data not update</p>
                @endforelse
            </div>
        </div>
    </div>
 </form>
</div>

