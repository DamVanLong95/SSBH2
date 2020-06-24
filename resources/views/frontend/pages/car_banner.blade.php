<ul id="thumbs" class="section-list">

    @foreach($logos as $key => $logo)
    <li class="item">
        <div class="brand-thumb">
            <label for="1">
                <img class="thumb" src="{{asset('storage').'/'}}{{$logo[0]->logo}}" alt="" id="{{$logo[0]->id}}">
            </label>
        </div>
        <input name="type" value="{{$logo[0]->id}}" type="checkbox" id="checkbox_{{$logo[0]->id}}" class="checkId"/>
        <label class="toggle" for="checkbox_{{$logo[0]->id}}"></label>
    </li>
    @endforeach
</ul>

<script>
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
                    $('.sized').draggable({ disabled: true });
                    $('#checkbox_'+idImg+'').prop("checked", true);
                    if($('#checkbox_'+idImg+'').prop("checked") == true){
                        $('#'+idImg+'').draggable({ disabled: true });
                    }
                
                    var myTable = document.getElementById('main-tbl');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
                                var indexCol    = tblHeadObj.rows[0].cells.length - 1;
                    var url = '{{route('droppImage')}}';
                    $.post(url,
                        {
                            "_token": "{{ csrf_token() }}",
                            id: idImg
                        },
                        function(data, status, xhr) {
                            if(data.success == true) {
                                var notes       = data.summaries;
                                var deductible  = data.deductible;           
                                var exception   = data.exception;  
                                var punishment  = data.punishment;
                                var promotion   = data.promotion;
                                var terms_data  = data.terms;
                                var permissions = data.permissions;
                                var finances    = data.finances;
                                var data_activities = data.data;
                                $("#net-address").html(data.html);
                                var myTable = document.getElementById('main-tbl');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
                                var indexCol    = tblHeadObj.rows[0].cells.length - 2;
                                //calculate star
                                var count_star_green = 0;
                                var count_star_orange = 0;
                                var count_star_gray = 0;
                                for(var j=0;j<terms_data.length;j++){
                                    if(terms_data[j]['rate_star_dkbs'] == 5){
                                        count_star_green++;
                                    }else if(terms_data[j]['rate_star_dkbs'] == 3){
                                        count_star_orange++;
                                    }else if(terms_data[j]['rate_star_dkbs'] == 2){
                                        count_star_gray++;
                                    }
                                }
                                for(var k=0;k < exception.length;k++){
                                    if(exception[k]['rate_star_dklt'] == 5){
                                        count_star_green++;
                                    }else if(exception[k]['rate_star_dklt'] == 3){
                                        count_star_orange++;
                                    }else if(exception[k]['rate_star_dklt'] == 2){
                                        count_star_gray++;
                                    }
                                }
                                var total_star = count_star_gray + count_star_green +count_star_orange;
                                var point = 1/(total_star)*(count_star_green + 3/4*count_star_orange + 1/2*count_star_gray)*10;
                                var tdsss =  myTable.rows[1].cells[indexCol];
                                var path_camera = `{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}`;
                                var path_phone = `{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}`;
                                var path_mess = `{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}`;
                                tdsss.innerHTML = `
                                    <div class="count-rank-ctn" >
                                        <div class="mark-num"><p><span class="first-span" >`+Math.round(point)+`</span>/<span>10</span></p></div>
                                        <div class="service">
                                            <img src="`+path_camera+`"alt="">
                                            <img src="`+path_phone+`"alt="">
                                            <img src="`+path_mess+`"alt="">
                                        </div>
                                    </div>
                                `;
                                
                                //set id for column have price car
                                var tds         =  tblBodyObj.rows[3].cells[indexCol];
                                var creatediv   = document.createElement('div');
                                var name        ='price_'+indexCol+'';
                                creatediv.setAttribute('id', name);
                                tds.appendChild(creatediv);
                                $('#calculate').click(function(){
                                    var price = $('#price_car').val();
                                    var rate = 1.5;
                                    var checked =0;
                                    var tblBodyObj  = document.getElementById('main-tbl').tBodies[0];
                                    var chks = tblBodyObj.getElementsByTagName("INPUT");
                                    var total =0;
                                    for(var i=2; i<=25; i++){
                                        if (chks[i].checked) {
                                            checked++;
                                            total =(Number(total) + Number(chks[i].value));
                                        }
                                    }
                                    for(var i=27; i<chks.length; i++){
                                        if (chks[i].checked) {
                                            checked++;
                                            // console.log(chks[i].value);
                                            total =(Number(total) + Number(chks[i].value));
                                        }
                                    }
                                    if(checked >0){	
                                            var price     = $('#price_car').val();	
                                            var price_root= (price * 1.5)/100;	
                                            var rate      = promotion['promotion'];	
                                            var price_promotion = price_root * (1-rate/100);	
                                            var price_new = Number(price_promotion)+ Number(price_promotion*total/100);	
                                            price_new = Math.round(price_new * 100) / 100 ;	
                                            var div_price = document.getElementById('price_'+indexCol+'');	
                                            div_price.setAttribute('value',(price_new));	
                                            $('#price_'+indexCol+'').html((price_new));	
                                    }	
                                    var price_discount = document.getElementById('price_'+indexCol+'').getAttribute('value');//gia sau khuyen mai	
                                    if(checked > 0 && price_discount!=''){	
                                        // console.log(price);	
                                        var price_car = Number(price_discount)+ Number(price_discount*total/100) ;	
                                        $('#price_'+indexCol+'').html((formatMoney(price_car)));	
                                    }	
                                    else if(price !='' && checked==0){	
                                        var price_car = (price * rate)/100;	
                                        $('#price_'+indexCol+'').html((formatMoney(price_car)));	
                                        
                                    }
                                });
                                $('#discount').click(function(){
                                    var price_old = $('#price_car').val();	
                                    var price_old = (price_old * 1.5)/100;	
                                    var rate      = promotion['promotion'];	
                                    var price_new = price_old * (1-rate/100);	
                                    price_new = Math.round(price_new * 100) / 100 ;	//lam tron den phan thap phan thu 2
                                    var div_price = document.getElementById('price_'+indexCol+'');	
                                    div_price.setAttribute('value',(price_new));	
                                    $('#price_'+indexCol+'').html((price_new));
                                });
                                $('#before_discount').click(function(){
                                    var price = $('#price_car').val();	
                                    var  price_car = (price * 1.5)/100;	
                                    $('#price_'+indexCol+'').text((price_car));
                                        
                                });
                                var tblBodyObj      = document.getElementById('main-tbl').tBodies[0],
                                    max_rows_terms  =terms_data.length+7;
                                for (var i = 7; i < max_rows_terms; i++) {
                                    tblBodyObj.rows[i].setAttribute('data-rows','togglerow');
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    var imgGray  =`{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}`;
                                    var imgOrange = ` {{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}`;
                                    var imgGreen = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                                    var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                                    if(terms_data[i-7]['note_more']==="-----") {
                                        tds.innerHTML = `<p>`+terms_data[i-7]['note_more']+`</p>`;
                                    }
                                    if(terms_data[i-7]['rate_star_dkbs'] == 5){
                                        tds.innerHTML =`<p class="ellipsis">`+terms_data[i-7].note_more+`</p>`+`
                                                        <span><button value="`+terms_data[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                            <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                        </div>

                                        `;
                                    }else if(terms_data[i-7]['rate_star_dkbs']==3){
                                        tds.innerHTML =`<p class="ellipsis">`+terms_data[i-7].note_more+`</p>`+`
                                                        <span><button value="`+terms_data[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                            <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                        </div>

                                        `;
                                    }else if(terms_data[i-7]['rate_star_dkbs']==2){
                                        tds.innerHTML =`<p class="ellipsis">`+terms_data[i-7].note_more+`</p>`+`
                                                        <span><button value="`+terms_data[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                            <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                        </div>

                                        `;
                                    }else{
                                        tds.innerHTML = `<p>`+terms_data[i-7]['note_more']+`</p>
                                        `;
                                    }
                                    
                                }
                                var i= max_rows_terms+2;
                                var tds =  tblBodyObj.rows[i].cells[indexCol];
                                if(deductible[0]['note_dkkt']=== "x")
                                {
                                tds.innerHTML = 
                                    `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                    <div class="star-td">
                                        <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                    </div>
                                    `;
                                }else{
                                    tds.innerHTML =`<p>`+deductible[0]['note_dkkt']+`</p>
                                    <span><button value="`+deductible[0]['note_dkkt']+`" onclick="showNote(this.value)" >...</button></span>
                                    <div class="star-td">
                                        <img class="img-fluid" src="`+imgGray+`" alt="">
                                    </div>
                                    `;
                                }
                                var max_rows_exception = (i+3) + exception.length;
                                for(var j=i+3 ;j<max_rows_exception;j++){

                                    var tds =  tblBodyObj.rows[j].cells[indexCol];
                                    if(exception[j-36]['note_dklt']=== "x" && exception[j-36]['rate_star_dklt']==3)
                                    {
                                    tds.innerHTML = 
                                        `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                        <div class="star-td">
                                            <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                        </div>
                                        `;
                                
                                    }else if(exception[j-36]['rate_star_dklt']=== 5){
                                        tds.innerHTML =`<p>`+exception[j-36]['note_dklt']+`</p>`+`
                                        <span><button value="`+exception[j-36]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                        <div class="star-td">
                                        <img class="img-fluid" src="`+imgGreen+`" alt="">
                                    </div>
                                        `;
                                    }else if(exception[j-36]['rate_star_dklt']=== 2){
                                        tds.innerHTML =`<p>`+exception[j-36]['note_dklt']+`</p>`+`
                                        <span><button value="`+exception[j-36]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                        <div class="star-td">
                                        <img class="img-fluid" src="`+imgGray+`" alt="">
                                    </div>
                                        `;
                                    }else{
                                        tds.innerHTML =`<p>`+exception[j-36]['note_dklt']+`</p>
                                        `;
                                    }
                                }
                                  //===============CHE TAI===============================
                               
                                  for(var i=69;i < 88 ;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                   if(punishment.length >0){
                                        if(punishment[i-69]['rate_star_ct']== 3)
                                        {
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                            </div> `;
                                        }else if(punishment[i-69]['rate_star_ct']== 5){
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                            </div> `;
                                        
                                        }else if(punishment[i-69]['rate_star_ct']== 2){
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                            </div> `;
                                        }
                                        else{
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`;
                                        }
                                    }
                                }
                                //============================Quyền và nghĩa vụ của xe==============================
                                for(var i=91; i<115 ;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    if(permissions.length > 0){
                                        if(permissions[i-91]['rate_star_nv']== 3)
                                        {
                                            tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`+
                                                        `<div class="star-td">
                                                                <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                            </div> `;
                                        }else if(permissions[i-91]['rate_star_nv']== 5){
                                            tds.innerHTML =`<p class="ellipsis">`+permissions[i-91]['note_rule']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                            </div> `;
                                        
                                        }else if(permissions[i-91]['rate_star_nv']== 2){
                                            tds.innerHTML =`<p class="ellipsis">`+permissions[i-91]['note_rule']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                            </div> `;
                                        }
                                        else{
                                            if(permissions[i-91]['note_rule']=== 'x')
                                            tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                            else tds.innerHTML = `<p class="ellipsis">`+permissions[i-91]['note_rule']!=null?permissions[i-91]['note_rule']:''+`</p>`
                                        }
                                    }
                                } 
                                //=================Năng lực tài chính==================
                                for(var i =118; i<=134;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    if(finances.length > 0)
                                    tds.innerHTML =`<p class="ellipsis">`+formatMoney(finances[i-118]['money'],0)+`</p>`
                                }
                                //==============DANH GIA UY TIN===============
                                // console.log(rating_and_model);
                                var tds = tblBodyObj.rows[139].cells[indexCol];
                                if(rating_and_model.rating_agency === 'x')
                                    tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                //============= MO HINH ============
                                var tds = tblBodyObj.rows[141].cells[indexCol];
                                var tdss = tblBodyObj.rows[142].cells[indexCol];
                                //console.log(tds);
                                if(rating_and_model.business_focused ==='x')
                                    tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                if(rating_and_model.business_unfocused === 'x')
                                tdss.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                //===============MANG LUOI HOAT DONG==========
                                tds = tblBodyObj.rows[136].cells[indexCol]; 
                                var imgNet = `{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}`;
                                
                                tds.innerHTML =`<img class="img-fluid toggle" src="`+imgNet+`"  id="map`+idImg+`" alt="">
                                            <p class="toggle"><span>`+data_activities['total']+`</span> Chi nhánh</p>
                                        
                                            `;
                                    
                                    $('#map'+idImg+'').click(function(){
                                        var tdnet ;
                                        for(var i =1;i<4;i++){
                                            if(indexCol==1){
                                                tdnet = tds;
                                                tdnet.setAttribute('class','active-car-td');
                                                tblBodyObj.rows[136].cells[i+1].removeAttribute('class','active-car-td');
                                                break;
                                            }
                                            if(indexCol==i){
                                                tdnet = tds;
                                                tdnet.setAttribute('class','active-car-td');
                                               
                                            }else{
                                                tdnet= tblBodyObj.rows[136].cells[i]
                                                tdnet.removeAttribute('class','active-car-td');
                                            }
                                        }

                                        var location_id = $('#province').val();
                                        if (location_id !=0) {
                                            var location_id = $('#province').val();
                                            var url = '{{route('address')}}';
                                            $.post(url,
                                                { "_token": "{{ csrf_token() }}",
                                                location_id:location_id,
                                                company_id:idImg},
                                                function(data,status){
                                                    $('#address').html(data.html);
                                            });
                                            
                                        }else{
                                            $('#province').change(function(){
                                                var location_id = $(this).val();
                                                var url = '{{route('address')}}';
                                                $.post(url,
                                                    { "_token": "{{ csrf_token() }}",
                                                    location_id:location_id,
                                                    company_id:idImg},
                                                    function(data,status){
                                                        $('#address').html(data.html);
                                                });
                                            });
                                        }

                                      
                                    })
                            }
                        }).done(function() {
                            // alert('Request done!');
                        });
                    $('span.remove').on('click', function (e ) {
                        var index = ($(this).parent().parent().index()+1);
                            if( index ==2 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                                console.log("hi");
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index == 4){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                $('#checkbox_'+idImg+'').prop("checked", false);
                            }else if(index == 5 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){

                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                // addColumn('main-tbl');
                                dropImage();
                            }else if(index == 3 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }
                    });
                    addColumn('main-tbl');
                    dropImage();
                },
                out: function( event, ui ){
                    $(this).removeClass('dropped');
                }

            });
        }

        function addColumn(tblId) {
            var myTable = document.getElementById('main-tbl');
            var tblHeadObj = document.getElementById(tblId).tHead;
            var tableLength = document.getElementById('main-tbl').rows[0].cells.length
            for (var h = 0; h < tblHeadObj.rows.length; h++) {
            if (tableLength < 5) {
                var creatediv = document.createElement('div');
                var newTH = document.createElement('th');
                $('#select_box').attr("colspan", tableLength +1)
                $('#select_all').attr("colspan", tableLength +1)
                $('.td-all').attr("colspan", tableLength +1)
                $('.green_header').attr("colspan", tableLength +1)
                $('.car_header').attr("colspan", tableLength )
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
                var x =  myTable.rows[4].cells;
                var y =  myTable.rows[5].cells;
                x[tableLength].setAttribute('rowspan',2);
                y[1].remove();
                $('#green_header').next("td").remove()
                $('#select_box').next("td").remove()
                $('#rank_box').next("td").remove()
                $('.green_header').next("td").remove()
                $('.car_header').next("td").remove()
                $('.td-all').next("td").remove()

            }
            }

        }
    </script>
  <script>
$(function() {  
    var count =0;
       $('.checkId').click(function(){
            var clicked = $(this);
            var myTable = document.getElementById('main-tbl');
                    var tblBodyObj  = myTable.tBodies[0];
                    var tblHeadObj  = myTable.tHead;
                    var indexCol    = tblHeadObj.rows[0].cells.length - 1;

           if(indexCol==4)count++;
           
           if(clicked.is(':checked')&& count <=1){
            clicked[0].setAttribute('disabled',true);
                var idImg = clicked.val();
               var url   = "{{route('checkImage')}}";
             
                addColumn('main-tbl');
                dropImage();
                deleteColumn(idImg,clicked);
              

               $.post(url,
               {
                   "_token": "{{ csrf_token() }}",
                   id: idImg,
                   indexCol:indexCol
               },
               function(data, status, xhr) {
                
                   if(data.success == true){
                       var rating_and_model = data.data['rating_and_model'];
                        var notes       = data.summaries;
                        var deductible  = data.deductible;  
                                 
                        var exception   = data.exception;  
                        var punishment  = data.punishment;
                        var promotion   = data.promotion;
                        var terms_data  = data.terms;
                        var permissions = data.permissions;
                        var finances    = data.finances;
                        var data_activities = data.data;
                        var indexCol = data.indexCol;
                        $("#net-address").html(data.html);
                        var myTable = document.getElementById('main-tbl');
                        var tblBodyObj  = myTable.tBodies[0];
                        var tblHeadObj  = myTable.tHead;
                        var logo     = 'storage/'+data.img['logo'];
                       var thlast =  myTable.rows[0].cells[indexCol];
                        $('<span class="remove" />').text('X').appendTo(thlast);
                        $('span.remove', thlast).show();
                        var divImg = $(thlast).children()[0];
                        // console.log(divImg);
                        var img = document.createElement("img");
                        img.className = 'img-responsive';
                        img.src = ''+logo+'';
                        divImg.appendChild(img); 
                        $(img).addClass('sized');
                        $(divImg).addClass('dropped');
                        // if($('#checkbox_'+idImg+'').prop("checked") == true){
                        //     $('#'+idImg+'').draggable({ disabled: true });
                        // }
                        //======================Rows 1==========================
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
                       
                        //calculate star
                        var count_star_green = 0;
                        var count_star_orange = 0;
                        var count_star_gray = 0;
                     
                            for(var j=0;j<terms_data.length;j++){
                                if(terms_data[j]['rate_star_dkbs'] == 5){
                                    count_star_green++;
                                }else if(terms_data[j]['rate_star_dkbs'] == 3){
                                    count_star_orange++;
                                }else if(terms_data[j]['rate_star_dkbs'] == 2){
                                    count_star_gray++;
                                }
                            }
                            for(var k=0;k < exception.length;k++){
                                if(exception[k]['rate_star_dklt'] == 5){
                                    count_star_green++;
                                }else if(exception[k]['rate_star_dklt'] == 3){
                                    count_star_orange++;
                                }else if(exception[k]['rate_star_dklt'] == 2){
                                    count_star_gray++;
                                }
                            }
                            var total_star = count_star_gray + count_star_green +count_star_orange;
                            var point = 1/(total_star)*(count_star_green + 3/4*count_star_orange + 1/2*count_star_gray)*10;
                            var tdsss =  myTable.rows[1].cells[indexCol];
                            var path_camera = `{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}`;
                            var path_phone = `{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}`;
                            var path_mess = `{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}`;
                            tdsss.innerHTML = `
                                <div class="count-rank-ctn" >
                                    <div class="mark-num"><p><span class="first-span" >`+Math.round(point)+`</span>/<span>10</span></p></div>
                                    <div class="service">
                                        <img src="`+path_camera+`"alt="">
                                        <img src="`+path_phone+`"alt="">
                                        <img src="`+path_mess+`"alt="">
                                    </div>
                                </div>
                            `;
                                
                                //set id for column have price car
                                var tds         =  tblBodyObj.rows[3].cells[indexCol];
                                var tdss        =  tblBodyObj.rows[4].cells[indexCol];
                              
                                var creatediv   = document.createElement('div');
                                var div_discount   = document.createElement('div');
                                var name        ='price_'+indexCol+'';
                                var name_after       ='price_after_'+indexCol+'';
                                creatediv.setAttribute('id', name);
                                tds.appendChild(creatediv);
                                div_discount.setAttribute('id',name_after );
                                tdss.appendChild(div_discount);
                                // console.log(tdss);
                                $('#calculate').click(function(){
                                    var price = $('#price_car').val();
                                    var rate = 1.5;
                                    var checked =0;
                                    var tblBodyObj  = document.getElementById('main-tbl').tBodies[0];
                                    var chks = tblBodyObj.getElementsByTagName("INPUT");
                                    var total =0;
                                    for(var i=2; i<=25; i++){
                                        // console.log(chks[i]);
                                        if (chks[i].checked) {
                                            checked++;
                                            total =(Number(total) + Number(chks[i].value));
                                        }
                                    }
                                    for(var i=27; i<chks.length; i++){
                                        if (chks[i].checked) {
                                            checked++;
                                            total =(Number(total) + Number(chks[i].value));
                                        }
                                    }
                                    if(price !=''){	
                                            //===================muc dich su dung=============================
                                        var purpose = document.getElementById('purpose');
                                        var ref_rates_id = purpose.value;
                                        var year_sx = document.getElementById('prd_date').value;
                                        var url = '{{route('purpose')}}';
                                        if(year_sx){
                                            $.post(url,{
                                            "_token": "{{ csrf_token() }}",
                                            id: ref_rates_id,
                                            year_sx:year_sx
                                            }).done(function(data){
                                                var ratte = data.rate;
                                                rate = ratte + rate;
                                                var price_old = (price * rate)/100;	
                                                $('#price_'+indexCol+'').html((formatMoney(price_old)));

                                                var rate_promotion      = promotion['promotion'];
                                                var price_new           = price_old * (1-rate_promotion/100);
                                            
                                                if(total > 0) 
                                                price_new = Number(price_new)+ Number(price_new*total/100);

                                                price_new               = Math.round(price_new * 100) / 100 
                                                $('#price_after_'+indexCol+'')[0].setAttribute('value',price_new);
                                                $('#price_after_'+indexCol+'').html((formatMoney(price_new)));	
                                            })
                                        }
                                       
                                        // var price_old = (price * rate)/100;	
                                        // $('#price_'+indexCol+'').html((formatMoney(price_old)));

                                        // var rate_promotion      = promotion['promotion'];	
                                        // var price_new = price_old * (1-rate_promotion/100);
                                        // price_new = Math.round(price_new * 100) / 100 ;	
                                        
                                        
                                        // $('#price_after_'+indexCol+'')[0].setAttribute('value',price_new);
                                        // $('#price_after_'+indexCol+'').html((formatMoney(price_new)));	
                                    
                                        // var rate = total + rate;
                                        // var price_old = document.getElementById('price_after_'+indexCol+'').getAttribute('value');
                                        // var price_discount =  Number(price_old)+ Number(price_old*rate/100);
                                        // $('#price_after_'+indexCol+'').html((formatMoney(price_discount)));	
                                       
                                    }else{
                                        alert("Vui long nhap gia tri xe");
                                    }
                                });
                                //==============DIEU KHOAN BO SUNG============================
                              
                                var tblBodyObj      = document.getElementById('main-tbl').tBodies[0],
                                    max_rows_terms  =terms_data.length+7;
                                for (var i = 7; i < max_rows_terms; i++) {
                                    // tblBodyObj.rows[i].setAttribute('data-rows','togglerow');
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    var imgGray  =`{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}`;
                                    var imgOrange = ` {{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}`;
                                    var imgGreen = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                                    var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                                    if(terms_data[i-7]['note_more']==="-----") {
                                        tds.innerHTML = `<p>`+terms_data[i-7]['note_more']+`</p>`;
                                    }
                                    if(terms_data[i-7]['rate_star_dkbs'] == 5){
                                        tds.innerHTML =`<p class="ellipsis">`+terms_data[i-7].note_more+`</p>`+`
                                                        <span><button value="`+terms_data[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                            <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                        </div>

                                        `;
                                    }else if(terms_data[i-7]['rate_star_dkbs']==3){
                                        tds.innerHTML =`<p class="ellipsis">`+terms_data[i-7].note_more+`</p>`+`
                                                        <span><button value="`+terms_data[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                            <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                        </div>

                                        `;
                                    }else if(terms_data[i-7]['rate_star_dkbs']==2){
                                        tds.innerHTML =`<p class="ellipsis">`+terms_data[i-7].note_more+`</p>`+`
                                                        <span><button value="`+terms_data[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                            <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                        </div>

                                        `;
                                     }//else{
                                    //     tds.innerHTML = `<p>`+terms_data[i-7]['note_more']+`</p>
                                    //     `;
                                    // }
                                    
                                }
                                //===============MUC KHAU TRU===============================

                                var i= max_rows_terms+2;
                                var tds =  tblBodyObj.rows[i].cells[indexCol];
                                if(deductible.length > 0){
                                    if(deductible[0]['note_dkkt']=== "x")
                                    {
                                    tds.innerHTML = 
                                        `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                        <div class="star-td">
                                            <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                        </div>
                                        `;
                                    }else{
                                        tds.innerHTML =`<p>`+deductible[0]['note_dkkt']+`</p>
                                        <span><button value="`+deductible[0]['note_dkkt']+`" onclick="showNote(this.value)" >...</button></span>
                                        <div class="star-td">
                                            <img class="img-fluid" src="`+imgGray+`" alt="">
                                        </div>
                                        `;
                                    }
                                }
                               
                                var max_rows_exception = (i+3) + exception.length;
                                for(var j=i+3 ;j<max_rows_exception;j++){

                                    var tds =  tblBodyObj.rows[j].cells[indexCol];
                                    if(exception[j-36]['note_dklt']=== "x" && exception[j-36]['rate_star_dklt']==3)
                                    {
                                    tds.innerHTML = 
                                        `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                        <div class="star-td">
                                            <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                        </div>
                                        `;
                                
                                    }else if(exception[j-36]['rate_star_dklt']=== 5){
                                        tds.innerHTML =`<p>`+exception[j-36]['note_dklt']+`</p>`+`
                                        <span><button value="`+exception[j-36]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                        <div class="star-td">
                                        <img class="img-fluid" src="`+imgGreen+`" alt="">
                                    </div>
                                        `;
                                    }else if(exception[j-36]['rate_star_dklt']=== 2){
                                        if(exception[j-36]['note_dklt']=== "x"){
                                                tds.innerHTML = 
                                            `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                            <div class="star-td">
                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                            </div>
                                            `;
                                        }else{
                                            tds.innerHTML =`<p class="ellipsis">`+exception[j-36]['note_dklt']+`</p>`+`
                                            <span><button value="`+exception[j-36]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                            <div class="star-td">
                                            <img class="img-fluid" src="`+imgGray+`" alt="">
                                        </div>
                                            `;
                                        }
                                    }
                                }
                                   //===============CHE TAI===============================
                               
                                   for(var i=69;i < 88 ;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                   if(punishment.length >0){
                                        if(punishment[i-69]['rate_star_ct']== 3)
                                        {
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                            </div> `;
                                        }else if(punishment[i-69]['rate_star_ct']== 5){
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                            </div> `;
                                        
                                        }else if(punishment[i-69]['rate_star_ct']== 2){
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                            </div> `;
                                        }
                                        else{
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-69]['content']+`</p>`;
                                        }
                                    }
                                }
                                //============================Quyền và nghĩa vụ của xe==============================
                                for(var i=91; i<115 ;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    if(permissions.length > 0){
                                        if(permissions[i-91]['rate_star_nv']== 3)
                                        {
                                            tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`+
                                                        `<div class="star-td">
                                                                <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                            </div> `;
                                        }else if(permissions[i-91]['rate_star_nv']== 5){
                                            tds.innerHTML =`<p class="ellipsis">`+permissions[i-91]['note_rule']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                            </div> `;
                                        
                                        }else if(permissions[i-91]['rate_star_nv']== 2){
                                            tds.innerHTML =`<p class="ellipsis">`+permissions[i-91]['note_rule']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                            </div> `;
                                        }
                                        else{
                                            if(permissions[i-91]['note_rule']=== 'x')
                                            tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                            else tds.innerHTML = `<p class="ellipsis">`+permissions[i-91]['note_rule']!=null?permissions[i-91]['note_rule']:''+`</p>`
                                        }
                                    }
                                } 
                                //=================Năng lực tài chính==================
                                for(var i =118; i<=134;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    if(finances.length > 0)
                                    tds.innerHTML =`<p class="ellipsis">`+formatMoney(finances[i-118]['money'],0)+`</p>`
                                }
                                //==============DANH GIA UY TIN===============
                                // console.log(rating_and_model);
                                var tds = tblBodyObj.rows[139].cells[indexCol];
                                if(rating_and_model.rating_agency === 'x')
                                    tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                //============= MO HINH ============
                                var tds = tblBodyObj.rows[141].cells[indexCol];
                                var tdss = tblBodyObj.rows[142].cells[indexCol];
                                //console.log(tds);
                                if(rating_and_model.business_focused ==='x')
                                    tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                if(rating_and_model.business_unfocused === 'x')
                                tdss.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                //===============MANG LUOI HOAT DONG==========
                                tds = tblBodyObj.rows[136].cells[indexCol]; 
                                var imgNet = `{{ url('/') }}/assets/images/car/network2.png?{{ config('custom.version') }}`;
                                
                                tds.innerHTML =`<img class="img-fluid toggle" src="`+imgNet+`"  id="map`+idImg+`" alt="">
                                            <p class="toggle"><span>`+data_activities['total']+`</span> Chi nhánh</p>
                                        
                                            `;
                                    
                                    $('#map'+idImg+'').click(function(){
                                        var tdnet ;
                                        for(var i =1;i<4;i++){
                                            if(indexCol==1){
                                                tdnet = tds;
                                                tdnet.setAttribute('class','active-car-td');
                                                tblBodyObj.rows[136].cells[i+1].removeAttribute('class','active-car-td');
                                                break;
                                            }
                                            if(indexCol==i){
                                                tdnet = tds;
                                                tdnet.setAttribute('class','active-car-td');
                                               
                                            }else{
                                                tdnet= tblBodyObj.rows[136].cells[i]
                                                tdnet.removeAttribute('class','active-car-td');
                                            }
                                        }


                                        var location_id = $('#province').val();
                                        if (location_id !=0) {
                                            var location_id = $('#province').val();
                                            var url = '{{route('address')}}';
                                            $.post(url,
                                                { "_token": "{{ csrf_token() }}",
                                                location_id:location_id,
                                                company_id:idImg},
                                                function(data,status){
                                                    $('#address').html(data.html);
                                            });
                                            
                                        }else{
                                            $('#province').change(function(){
                                                var location_id = $(this).val();
                                                var url = '{{route('address')}}';
                                                $.post(url,
                                                    { "_token": "{{ csrf_token() }}",
                                                    location_id:location_id,
                                                    company_id:idImg},
                                                    function(data,status){
                                                        $('#address').html(data.html);
                                                });
                                            });
                                        }

                                      
                                    })
                       
                       
                   }
               
               }).done(function() {
                deleteColumn(idImg,clicked);
               });
               if(count==4) return;
            //    $(this).disabled = true;
           }
       });
      
       function deleteColumn(idImg,clicked){

            $('span.remove').on('click', function (e ) {
                var index = ($(this).parent().index()+1);
                if( index ==2 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    count=0;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl');
                    count=0;
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl');
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                    count=0;
                }else if(index == 4){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    count=0;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index == 5 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl');
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    count=0;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    count=0;
                    // addColumn('main-tbl');
                }else if(index == 3 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    count=0;
                    $('#'+idImg+'').draggable({ disabled: false });
                }
            });
       }
       function addColumn(tblId) {
            var myTable = document.getElementById('main-tbl');
            var tblHeadObj = document.getElementById(tblId).tHead;
            var tableLength = document.getElementById('main-tbl').rows[0].cells.length
            for (var h = 0; h < tblHeadObj.rows.length; h++) {
                if (tableLength < 5) {
                    var creatediv = document.createElement('div');
                    var newTH = document.createElement('th');
                    $('#select_box').attr("colspan", tableLength +1)
                    $('.select_all').attr("colspan", tableLength +1)
                    $('.td-all').attr("colspan", tableLength +1)
                    $('.green_header').attr("colspan", tableLength +1)
                    $('.car_header').attr("colspan", tableLength )
                    
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
                    // var x =  myTable.rows[4].cells;
                    // var y =  myTable.rows[5].cells;
                    // x[tableLength].setAttribute('rowspan',2);
                    // y[1].remove();
                    $('#green_header').next("td").remove()
                    $('#select_box').next("td").remove()
                    $('.select_all').next("td").remove()
                    $('#rank_box').next("td").remove()
                    $('.green_header').next("td").remove()
                    $('.car_header').next("td").remove()
                    $('.td-all').next("td").remove()

                }
            }
        }
          
});
</script>
   