@if(!empty($product_saving))
<div class="pack-title">
<h4>Tích lũy, tiết kiệm <span>({{count($product_saving)}})</span></h4>
</div>
<div  class="section-wrapper">
    <ul id="thumbs" class="section-list">
    @foreach($product_saving as $value)
        <li class="item">
        <div class="thumb-t">
                <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
            
                <div class="brand-thumb">
                    <label for="1">
                        <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                    </label>
                    <div class="input-pack">
                        <input name="type" value="" type="checkbox" id="checkbox_tl{{$value['id']}}"/>
                        <label class="toggle" for="checkbox_tl{{$value['id']}}"></label>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>

@endif
@if(!empty($product_secure))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Bảo vệ <span>({{count($product_secure)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_secure as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                            <input name="type" value="" type="checkbox" id="checkbox_bv{{$value['id']}}"/>
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
</div>
@endif
@if(isset($product_invest))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Đầu tư <span>({{count($product_invest)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_invest as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                            <input name="type" value="" type="checkbox" id="checkbox_dt{{$value['id']}}"/>
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
</div>
@endif
@if(isset($product_retire))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Hưu trí <span>({{count($product_retire)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_retire as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                                <input name="type" value="" type="checkbox" id="checkbox_ht{{$value['id']}}"/>
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
    <div class="paddles2">
        <button class="left-paddle2 paddle hidden">
            <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-left-active.png?{{ config('custom.version') }}" alt="">
        </button>
        <button class="right-paddle2 paddle">
        <img class="img-fluid" src="{{ url('/') }}/assets/images/home/arrow-right-active.png?{{ config('custom.version') }}" alt="">
        </button>
    </div>
</div>
@endif
@if(isset($product_edu))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Giáo dục<span>({{count($product_edu)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_edu as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                            <input name="type" value="" type="checkbox" id="checkbox_gd{{$value['id']}}"/>
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
</div>
@endif
@if(!empty($product_concern))
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <div class="pack-title">
        <h4>Doanh nghiệp <span>({{count($product_concern)}})</span></h4>
        </div>
        <div  class="section-wrapper">
            <ul id="thumbs" class="section-list">
            @foreach($product_concern as $value)
                <li class="item">
                <div class="thumb-t">
                        <p class="break-txt ">{{str_limit($value['name'],40)}}</p>
                    
                        <div class="brand-thumb">
                            <label for="1">
                                <a href="#" target="_blank"><img class="thumb" src="{{ asset('storage').'/'.$value['url']}}" id="{{$value['id']}}" alt=""></a>
                            </label>
                            <div class="input-pack">
                                <input name="type" value="" type="checkbox" id="checkbox_dn{{$value['id']}}"/>
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
</div>
@endif
<script>
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
                if($('#checkbox_tl'+idImg+'').prop("checked") == true)
                    $('#'+idImg+'').draggable({ disabled: true });
                
                if($('#checkbox_bv'+idImg+'').prop("checked") == true)
                    $('#'+idImg+'').draggable({ disabled: true });
                
                if($('#checkbox_dt'+idImg+'').prop("checked") == true)
                    $('#'+idImg+'').draggable({ disabled: true });
                
                if($('#checkbox_ht'+idImg+'').prop("checked") == true)
                    $('#'+idImg+'').draggable({ disabled: true });
                
                if($('#checkbox_gd'+idImg+'').prop("checked") == true)
                    $('#'+idImg+'').draggable({ disabled: true });

                if($('#checkbox_dn'+idImg+'').prop("checked") == true)
                    $('#'+idImg+'').draggable({ disabled: true });

                   globalId.push(idImg);
                //   var els = $('.selectedId');
                //   for(var i=0; i<els.length; i++){
                //     els[i].setAttribute('data-options',[idImg]);
                //   }
                //   console.log(els);
                
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
                        //  console.log(longevities);
                         for(var i=ltbh.rowIndex+1; i<64;i++){
                            var tds =  myTable.rows[i].cells[indexCol];
                            // console.log(tds);
                            if(longevities[i-12]['content']!=null){
                                tds.innerHTML =  `<p>`+longevities[i-12]['content']+`</p>`;
                            }
                            if(longevities[i-12]['content']==='x'){
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
   
      function addColumn(tblId) {
        var myTable = document.getElementById('main-tbl-nt');
        var tblHeadObj = document.getElementById(tblId).tHead;
        var tableLength = document.getElementById('main-tbl-nt').rows[0].cells.length
        for (var h = 0; h < tblHeadObj.rows.length; h++) {
          if (tableLength < 5) {
              var creatediv = document.createElement('div');
              var newTH = document.createElement('th');
              $('#select_box').attr("colspan", tableLength +1)
              $('#select_all').attr("colspan", tableLength +1)
              $('.green_header').attr("colspan", tableLength +1)
              $('.hospital_header').attr("colspan", tableLength )
              $('#select_box_longevity').attr("colspan", tableLength +1 )
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
            //   var x =  myTable.rows[4].cells;
            //   var y =  myTable.rows[5].cells;
            //   x[tableLength].setAttribute('rowspan',2);
            //   y[1].remove();
              $('#green_header').next("td").remove()
              $('#select_box').next("td").remove()
              $('#rank_box').next("td").remove()
              $('.green_header').next("td").remove()
              $('.hospital_header').next("td").remove()
              $('#select_box_longevity').next("td").remove()
              $('.spbt').next("td").remove()

          }
        }

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
       console.log(globalId);
        var url = '{{route('popupLongevity')}}';
        $.ajax({
            type: "POST",
            url : url,
            data:{
                "_token": "{{ csrf_token() }}",
                "product_group_id":el.value,
                "product_longevity_id":globalId
            },
        }).done(function(data){
            $('#note').html(data.html);
            $('#detail-td').modal('show');
        });
      
    }
</script>

