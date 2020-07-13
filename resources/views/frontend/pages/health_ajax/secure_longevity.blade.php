@if(!empty($product_saving))
<div class="row">
    <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Tích lũy, tiết kiệm <span>({{count($product_saving)}})</span></h4>
        </div>
        <div  class="section-wrapper2">
            <ul id="thumbs" class="section-list2">
                @foreach($product_saving as $value)
                    <li class="item2">
                        <div class="thumb-t">
                            <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                        
                            <div class="brand-thumb">
                                <label for="1">
                                    <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                </label>
                                <div class="input-pack">
                                    <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_tl{{$value['id']}}" onclick="checkImg(this)"/>
                                    <label class="toggle" for="checkbox_tl{{$value['id']}}"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
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
@endif
@if(!empty($product_secure))
    <div class="row">
        <div class="col-lg-12" >
            <div class="pack-title">
            <h4>Bảo vệ <span>({{count($product_secure)}})</span></h4>
            </div>
            <div  class="section-wrapper2">
                <ul id="thumbs" class="section-list2">
                @foreach($product_secure as $value)
                        <li class="item2">
                            <div class="thumb-t">
                                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                            
                                <div class="brand-thumb">
                                    <label for="1">
                                        <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                    </label>
                                    <div class="input-pack">
                                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_bv{{$value['id']}}" onclick="checkImg(this)"/>
                                        <label class="toggle" for="checkbox_bv{{$value['id']}}"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
@endif
@if(isset($product_invest))
    <div class="row">
        <div class="col-lg-12" >
            <div class="pack-title">
                <h4>Đầu tư <span>({{count($product_invest)}})</span></h4>
            </div>
            <div  class="section-wrapper2">
                <ul id="thumbs" class="section-list2">
                    @foreach($product_invest as $value)
                        <li class="item2">
                            <div class="thumb-t">
                                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                            
                                <div class="brand-thumb">
                                    <label for="1">
                                        <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                    </label>
                                    <div class="input-pack">
                                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_dt{{$value['id']}}" onclick="checkImg(this)"/>
                                        <label class="toggle" for="checkbox_dt{{$value['id']}}"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
     <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div> 
@endif
@if(isset($product_retire))
    <div class="row">
        <div class="col-lg-12" >
            <div class="pack-title">
                <h4>Hưu trí <span>({{count($product_retire)}})</span></h4>
            </div>
            <div  class="section-wrapper2">
                <ul id="thumbs" class="section-list2">
                    @foreach($product_retire as $value)
                        <li class="item2">
                            <div class="thumb-t">
                                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                            
                                <div class="brand-thumb">
                                    <label for="1">
                                        <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                    </label>
                                    <div class="input-pack">
                                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_ht{{$value['id']}}" onclick="checkImg(this)"/>
                                        <label class="toggle" for="checkbox_ht{{$value['id']}}"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
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

@endif
@if(isset($product_edu))
    <div class="row">
        <div class="col-lg-12" >
            <div class="pack-title">
                <h4>Giáo dục<span>({{count($product_edu)}})</span></h4>
            </div>
            <div  class="section-wrapper2">
                <ul id="thumbs" class="section-list2">
                    @foreach($product_edu as $value)
                        <li class="item2">
                            <div class="thumb-t">
                                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                            
                                <div class="brand-thumb">
                                    <label for="1">
                                        <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                    </label>
                                    <div class="input-pack">
                                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_gd{{$value['id']}}" onclick="checkImg(this)"/>
                                        <label class="toggle" for="checkbox_gd{{$value['id']}}"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>

@endif
@if(!empty($product_concern))
    <div class="row">
        <div class="col-lg-12" >
            <div class="pack-title">
                <h4>Doanh nghiệp <span>({{count($product_concern)}})</span></h4>
            </div>
            <div  class="section-wrapper2">
                <ul id="thumbs" class="section-list2">
                @foreach($product_concern as $value)
                        <li class="item2">
                            <div class="thumb-t">
                                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                            
                                <div class="brand-thumb">
                                    <label for="1">
                                        <img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt="">
                                    </label>
                                    <div class="input-pack">
                                        <input name="type" value="{{$value['id']}}" type="checkbox" id="checkbox_dn{{$value['id']}}" onclick="checkImg(this)"/>
                                        <label class="toggle" for="checkbox_dn{{$value['id']}}"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>

@endif
<div id="detail-comparison" class="modal"  style="height: auto">
    <h1 style="text-align: center">SO SÁNH QUYỀN LỢI BỔ TRỢ</h1>
    <div class="content-ctn" >
        <div id="comparison"></div>
    </div>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <a href="javascript:void(0)">Liên hệ tư vấn</a>
    </button>
</div>
<div id="detail-insurance" class="modal" data-toggle="modal" style="height: auto">
    <h1 style="text-align: center">Danh sách</h1>
    <div class="content-ctn"  >
        <div id="insurance"></div>
    </div>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <a href="javascript:void(0)">Liên hệ tư vấn</a>
    </button>
</div>
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
<script>
    function closeModal() {
       $('#detail-comparison').modal('hide');
    }
    var globalId=[];
    dropImage();
    
    function dropImage(){
        $('img.thumb').draggable({
            containment: '#layout-area',
            revert: 'invalid',
            helper: 'clone',
        });
        $( "div.img-container" ).droppable({
            classes: {
                "ui-droppable-active": "ui-state-active",
                "ui-droppable-hover": "ui-state-hover"
            },
            accept: function( draggable ){

                if (!$(this).hasClass('dropped') || draggable.hasClass('dropped')){
                    return true;
                }
                return false;
            },

            drop: function( event, ui ) {
                var idImg = ui.draggable.attr('id');
                var th = $(this);
                var img = ui.draggable;
                var copy = img.clone();
                $(this).addClass('dropped');
                $(copy).addClass('sized').appendTo(th);
                $(this).addClass('img-inserted');
                $('<span class="remove" />').text('X').appendTo(th);
                $('span.remove', th).show();
                $('#checkbox_tl'+idImg+'').prop("checked", true);
                $('#checkbox_bv'+idImg+'').prop("checked", true);
                $('#checkbox_gd'+idImg+'').prop("checked", true);
                $('#checkbox_dt'+idImg+'').prop("checked", true);
                $('#checkbox_ht'+idImg+'').prop("checked", true);
                $('#checkbox_dn'+idImg+'').prop("checked", true);
                  
                $('.sized').draggable({ disabled: true });
                   globalId.push(idImg);
                
                var myTable = document.getElementById('main-tbl-nt')
                                 tblBodyObj  = myTable.tBodies[0]
                                 tblHeadObj  = myTable.tHead
                                 indexCol    = tblHeadObj.rows[0].cells.length - 1;
                                //  console.log(myTable.rows);
                var url = '{{route('droppLongevity')}}';
                $.post(url, {"_token": "{{ csrf_token() }}", id: idImg}
                ,function(data , status , xhr){
                    if(data.success = true){
                       
                        var longevities = data.longevities;
                        var th =  myTable.rows[0].cells[indexCol];
                        var ths =  myTable.rows[1].cells[indexCol];
                        var create = document.createElement("p");
                        create.style.color = "#0d723b";
                        create.style.position = "sticky";
                        create.style.textAlign = "center";
                        create.append(data.product_name.name);
                        th.appendChild(create);
                        var path_camera = `{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}`;
                        var path_phone = `{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}`;
                        var path_mess = `{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}`;
                        ths.innerHTML = `
                            <div class="count-rank-ctn" >
                                <div class="mark-num"><p><span class="first-span" >`+8+`</span>/<span>10</span></p></div>
                                <div class="service">
                                    <img src="`+path_camera+`"alt="">
                                    <img src="`+path_phone+`"alt="">
                                    <img src="`+path_mess+`"alt="">
                                </div>
                            </div>
                        `;
                         //===========Pham vi bao hiem=====================
                        for(var i =6; i<10;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            tds.innerHTML = `<p>`+longevities[i-6]['content']!=null?longevities[i-6]['content']:''+`</p>`;
                        }
                           //============Quyen loi san pham================
                        var row   = document.getElementById('benifit');
                        var index = row.rowIndex;
                        var row_bt   = document.getElementById('product_bt');
                        var indexRow = row_bt.rowIndex;
                        // console.log(longevities);
                        for(var i=index+1; i<indexRow ;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            if(longevities[i-8]['content']!=null){
                                tds.innerHTML =  `<p>`+longevities[i-8]['content']+`</p>`;
                            }
                          
                         }
                        //  ===========San Pham bo tro==================
                      
                        //=====================CAC LOAI PHI===========================
                        var lphi   = document.getElementById('lphi');
                        var ltbh   = document.getElementById('ltbh');
                        var row_lphi = lphi.rowIndex;
                         for(var i=row_lphi+1; i<ltbh.rowIndex ;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            if(longevities[i-10]['content']!=null){
                                if(validURL(longevities[i-10]['content'])==true){
                                    tds.innerHTML = `<button onClick="clickLink()">Open Tab</button> <a id="link" href="`+longevities[i-5]['content']+`" target="_blank" hidden></a>`;
                                }else
                                tds.innerHTML =  '<p class="text" >'+longevities[i-10]['content']+'</p>';
                            }
                          
                         }
                         //====================LOAI TRU BAO HIEM============================
                          
                         var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                         for(var i=ltbh.rowIndex+1; i<58;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            if(longevities[i-10]['content']!=null){
                                tds.innerHTML =  `<p>`+longevities[i-10]['content']+`</p>`;
                            }
                            if(longevities[i-10]['content']==="x"){
                                tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                            `;
                            }
                         }
                    }
                }).done(function() {
                    // alert('Request done!');
                });;
                $('span.remove').on('click', function (e ) {
                    var index = ($(this).parent().parent().index()+1);
                        if( index ==2 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_dt'+idImg+'').prop("checked", false);
                            $('#checkbox_gd'+idImg+'').prop("checked", false);
                            $('#checkbox_ht'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_dn'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                            console.log("hi");
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl-nt');
                            dropImage();
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_dt'+idImg+'').prop("checked", false);
                            $('#checkbox_gd'+idImg+'').prop("checked", false);
                            $('#checkbox_ht'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_dn'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl-nt');
                            dropImage();
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_dt'+idImg+'').prop("checked", false);
                            $('#checkbox_gd'+idImg+'').prop("checked", false);
                            $('#checkbox_ht'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_dn'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index == 4){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                        }else if(index == 5 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl-nt');
                            dropImage();
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_dt'+idImg+'').prop("checked", false);
                            $('#checkbox_gd'+idImg+'').prop("checked", false);
                            $('#checkbox_ht'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_dn'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){

                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            // addColumn('main-tbl-nt');
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_dt'+idImg+'').prop("checked", false);
                            $('#checkbox_gd'+idImg+'').prop("checked", false);
                            $('#checkbox_ht'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_dn'+idImg+'').prop("checked", false);
                            dropImage();
                        }else if(index == 3 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_dt'+idImg+'').prop("checked", false);
                            $('#checkbox_gd'+idImg+'').prop("checked", false);
                            $('#checkbox_ht'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_dn'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }
                });
                addColumn('main-tbl-nt');
                dropImage();
            },
            out: function( event, ui ){
                $(this).removeClass('dropped');
            },
        });
        
    }
   
    
    function validURL(str) {
        //   console.log(str);
        var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
            '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
            '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
            '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
        return !!pattern.test(str);
    }

    function clickLink(id) { 
        var url= document.getElementById("link").getAttribute("href");
        window.open(url, "_blank"); 
    }

</script>
<script>
   function handleOncick(el){
       console.log(el);
       if($(el)[0].checked == true){
            var url = '{{route('popupLongevity')}}';
            $(this).prop("checked", true);
            
            $.ajax({
                type: "POST",
                url : url,
                data:{
                    "_token": "{{ csrf_token() }}",
                    "product_group_id":el.value,
                    "product_longevity_id":globalId
                },
            }).done(function(data){
                $('#comparison').html(data.html);
                $('#detail-comparison').modal();
                if($('#detail-comparison').is(':visible') === false)
                    $('.selectedId').prop("checked", false);
            });
       }
       
    }
   
        $('.close').click(function(){
        $('.content').toggleClass("show hide");
        $('.open').toggleClass("show hide");
    });

</script>
<script>
     var globalId=[];
    function checkImg(el){
        var clicked = $(el);
        // console.log(clicked);
        if(clicked.is(':checked')){
           
            clicked[0].setAttribute('disabled',true);
            var idImg = clicked.val();
            globalId.push(idImg);
            var url   = "{{route('checkLongevity')}}";
            var myTable = document.getElementById('main-tbl-nt');
                            var tblBodyObj  = myTable.tBodies[0];
                            var tblHeadObj  = myTable.tHead;
                            var indexCol    = tblHeadObj.rows[0].cells.length - 1;
          
            $.post(url,
            {
                "_token": "{{ csrf_token() }}",
                id: idImg,
                indexCol:indexCol
            }
            ).done( function(data, status, xhr) {
                // console.log(data);
                if(data.success  ){
                    var longevities = data.longevities;
                    var indexCol = data.indexCol;
                    var image    = 'storage/'+data.product_name['url'];
                    var thlast =  myTable.rows[0].cells[indexCol];
                    $('<span class="remove" />').text('X').appendTo(thlast);
                    $('span.remove', thlast).show();
                    var divImg = $(thlast).children()[0];
                    $(divImg).addClass('dropped');
                    divImg.innerHTML ='<img class="img-responsive sized" src="'+image+'">' ; 
                    $('.sized').draggable({ disabled: true });
                    var th =  myTable.rows[0].cells[indexCol];
                    var create = document.createElement("p");
                    create.style.color = "#0d723b";
                    create.style.position = "sticky";
                    create.style.textAlign = "center";
                    // console.log(create);
                     //======================Rows 1==========================
                    create.innerHTML =(data.product_name.name);
                    var tds =  myTable.rows[1].cells[indexCol];
                        // console.log(tds);
                        var path_camera = `{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}`;
                        var path_phone = `{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}`;
                        var path_mess = `{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}`;
                        tds.innerHTML = `
                            <div class="count-rank-ctn" >
                                <div class="mark-num"><p><span class="first-span" >`+8+`</span>/<span>10</span></p></div>
                                <div class="service">
                                    <img src="`+path_camera+`"alt="">
                                    <img src="`+path_phone+`"alt="">
                                    <img src="`+path_mess+`"alt="">
                                </div>
                            </div>
                        `;
                        
                    th.append(create);
                            //===========Pham vi bao hiem=====================
                            for(var i =6; i<10;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            tds.innerHTML = `<p>`+longevities[i-6]['content']!=null?longevities[i-6]['content']:''+`</p>`;
                        }
                           //============Quyen loi san pham================
                        var row   = document.getElementById('benifit');
                        var index = row.rowIndex;
                        var row_bt   = document.getElementById('product_bt');
                        var indexRow = row_bt.rowIndex;
                        // console.log(longevities);
                        for(var i=index+1; i<indexRow ;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            if(longevities[i-8]['content']!=null){
                                tds.innerHTML =  `<p>`+longevities[i-8]['content']+`</p>`;
                            }
                          
                         }
                        //  ===========San Pham bo tro==================
                      
                        //=====================CAC LOAI PHI===========================
                        var lphi   = document.getElementById('lphi');
                        var ltbh   = document.getElementById('ltbh');
                        var row_lphi = lphi.rowIndex;
                         for(var i=row_lphi+1; i<ltbh.rowIndex ;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            if(longevities[i-10]['content']!=null){
                                if(validURL(longevities[i-10]['content'])==true){
                                    tds.innerHTML = `<button onClick="clickLink()">Open Tab</button> <a id="link" href="`+longevities[i-5]['content']+`" target="_blank" hidden></a>`;
                                }else
                                tds.innerHTML =  '<p class="text" >'+longevities[i-10]['content']+'</p>';
                            }
                          
                         }
                         //====================LOAI TRU BAO HIEM============================
                          
                         var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                        //  console.log(longevities);
                        for(var i=ltbh.rowIndex+1; i<58;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            if(longevities[i-10]['content']!=null){
                                tds.innerHTML =  `<p>`+longevities[i-10]['content']+`</p>`;
                            }
                            if(longevities[i-10]['content']==="x"){
                                tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                            `;
                            }
                         }
                         //==================== Danh sach benh==================================
                         var dsb   = document.getElementById('dsb');
                         for(var i = dsb.rowIndex+1 ; i < 63; i++){
                             var tds = myTable.rows[i].cells[indexCol];
                            //  console.log(tds);
                             tds.innerHTML = `<button class="modalSick" value="`+idImg+`" data-id="`+(i-58)+`">...</button> `;
                         }
                         $('.modalSick').click(function(){
                            var id = this.value;
                            var url = "{{route('longevity.sick')}}";
                            $.post(url,{
                                "_token": "{{ csrf_token() }}",
                                product_longevity:  id ,
                                group_sick: $(this).data('id')
                            }).done(function(data){
                                $('#insurance').html(data);
                                $('#detail-insurance').modal();
                            });

                         });
                                    
                }
                addColumn('main-tbl-nt');
                dropImage();
                deleteColumn('main-tbl-nt',clicked);
             });
            $(this).disabled = true;
           
        }
          
        
    }
    

    function addColumn(tblId) {
        var myTable = document.getElementById('main-tbl-nt');
        var tblHeadObj = document.getElementById(tblId).tHead;
        var tableLength = document.getElementById('main-tbl-nt').rows[0].cells.length
        for (var h = 0; h < tblHeadObj.rows.length; h++) {
        if (tableLength < 5) {
            var creatediv = document.createElement('div');
            var newTH = document.createElement('th');
            $('#select_box').attr("colspan", tableLength +1)
            $('.select_all').attr("colspan", tableLength +1)
            $('.td-all').attr("colspan", tableLength +1)
            $('.green_header').attr("colspan", tableLength +1)
            $('.car_header').attr("colspan", tableLength )
            $('.select_box_longevity').attr("colspan", tableLength +1)
            $('.spbt').attr("colspan", tableLength +1)
            
            tblHeadObj.rows[h].appendChild(newTH);
            creatediv.setAttribute('class', "img-container");
            newTH.appendChild(creatediv);

            // newTH.innerHTML = '[th] row:' + h + ', cell: ' + (tblHeadObj.rows[h].cells.length - 1)
            var tblBodyObj = document.getElementById(tblId).tBodies[0];
            for (var i = 0; i < tblBodyObj.rows.length; i++) {
                var newCell = tblBodyObj.rows[i].insertCell(-1);
                // newCell.innerHTML = '[td] row:' + i + ', cell: ' + (tblBodyObj.rows[i].cells.length - 1)
                var divs =  myTable.rows[1].cells[tblBodyObj.rows[i].cells.length-1];
            }
            var y =  myTable.rows[3].cells;
            y[1].remove();
            $('#green_header').next("td").remove()
            $('#select_box').next("td").remove()
            $('.select_all').next("td").remove()
            $('#rank_box').next("td").remove()
            $('.green_header').next("td").remove()
            $('.car_header').next("td").remove()
            $('.td-all').next("td").remove()
              $('#select_box_longevity').next("td").remove()
              $('.spbt').next("td").remove()

        }
    }

    }
    function deleteColumn(idImg,clicked){
        $('span.remove').on('click', function (e ) {
            var index = ($(this).parent().index()+1);
            if( index ==2 ){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
            }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                addColumn('main-tbl-nt');
                dropImage();
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
            }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                addColumn('main-tbl-nt');
                dropImage();
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
            }else if(index == 4){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
            }else if(index == 5 ){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                addColumn('main-tbl-nt');
                dropImage();
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
            }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                // addColumn('main-tbl-nt');
                globalId.pop(idImg);
            }else if(index == 3 ){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
            }
        });
    }
</script>
<script>
    
    function checkList(el){
       if(el.checked === true && globalId.length > 0){
            var url = '{{route('sick_longevity.show')}}';
            $(el).prop("checked", true);
            $.ajax({
                type: "POST",
                url : url,
                data:{
                    "_token": "{{ csrf_token() }}",
                    product_id:globalId,
                    group_sick_id:el.value
                }
               
            }).done(function(data){
                $('#insurance').html(data.html);
                $('#detail-insurance').modal();
                
                if($('#detail-insurance').is(':visible') === false)
                    $('.selectedId').prop("checked", false);
            });
       }else{
           alert("Bạn chưa chọn sản phẩm nào!");
           $(el).prop("checked", false);
       }
       
    }
</script>
