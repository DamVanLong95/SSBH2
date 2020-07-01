<div class="row">
    <div class="col-lg-12" >
    <div class="pack-title">
        <h4>kết quả <span>({{count($products)}})</span></h4>
        </div>
        <div  class="section-wrapper2">
            <ul class="section-list2" >
                @forelse($products as $value)
                    <li class="item2">
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
                    <li class="item2">
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
    </div>
</div>
<div class="paddles">
    <button class="left-paddle2 paddle hidden">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
    </button>
    <button class="right-paddle2 paddle">
    <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
    </button>
</div>
    @if($agent->isMobile())
         @include('layouts.health_mobile')
    @else
        @include('layouts.health_load_script')
    @endif
<script>
     var scrollDuration = 300;
        // paddles
        var leftPaddle2 = document.getElementsByClassName('left-paddle2');
        var rightPaddle2 = document.getElementsByClassName('right-paddle2');
        // get items dimensions
        var itemsLength2 = $('.item2').length;
        var itemSize2 = $('.item2').outerWidth(true);
        // console.log("huhu", leftPaddle2)

        // get wrapper width
        var getBrandWrapperSize = function() {
            return $('.section-wrapper2').outerWidth();
        }
        var brandWrapperSize2 = getBrandWrapperSize();
        // the wrapper is responsive
        $(window).on('resize', function() {
            brandWrapperSize2 = getBrandWrapperSize();
        });
        // size of the visible part of the brand is equal as the wrapper size 
        var brandVisibleSize2 = brandWrapperSize2;

        // get total width of all brand items
        var getBrandSize = function() {
            return itemsLength2 * itemSize2;
        };
        var brandSize2 = getBrandSize();
        // get how much of brand is invisible
        var brandInvisibleSize2 = brandSize2 - brandWrapperSize2;

        // get how much have we scrolled to the left
        var getBrandPosition2 = function() {
            return $('.section-list2').scrollLeft();
        };

        // finally, what happens when we are actually scrolling the brand
        $('.section-list2').on('scroll', function() {

            // get how much of brand is invisible
            brandInvisibleSize2 = brandSize2 - brandWrapperSize2;
            // get how much have we scrolled so far
            var brandPosition2 = getBrandPosition2();
            // get some relevant size for the paddle triggering point
            var paddleMargin2 = 20;
            // console.log("brandPosition", brandPosition);
            var brandEndOffset2 = brandInvisibleSize2 - paddleMargin2;
            // console.log("brandPositiontrtsrtsrtwr", brandEndOffset);
            // show & hide the paddles 
            // depending on scroll position
            if (brandPosition2 <= paddleMargin2) {
                $(leftPaddle2).addClass('hidden');
                $(rightPaddle2).removeClass('hidden');
            } else if (brandPosition2 < brandEndOffset2) {
                // show both paddles in the middle
                $(leftPaddle2).removeClass('hidden');
                $(rightPaddle2).removeClass('hidden');
            } else if (brandPosition2 >= brandEndOffset2) {
                $(leftPaddle2).removeClass('hidden');
                $(rightPaddle2).addClass('hidden');
            }

        });

        // scroll to left
        $(rightPaddle2).on('click', function() {
            $('.section-list2').animate({
                scrollLeft: "+=301px"
            }, "slow");
        });

        // scroll to right
        $(leftPaddle2).on('click', function() {
            $('.section-list2').animate({
                scrollLeft: "-=301px"
            }, "slow");
        });
</script>