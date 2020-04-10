<ul id="thumbs" class="section-list">

    @foreach($logos as $key => $logo)
    <li class="item">
        <div class="brand-thumb">
            <label for="1">
                <img class="thumb" src="{{asset('storage').'/'}}{{$logo[0]->logo}}" alt="" id="{{$logo[0]->id}}">
            </label>
        </div>
        <input name="type" value="" type="checkbox" id="checkbox_{{$logo[0]->id}}"/>
        <label class="toggle" for="1"></label>
    </li>
    @endforeach
</ul>