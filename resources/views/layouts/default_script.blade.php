    <!-- <script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <script>
        function showMore(length,selector,nameId,visible){
            var currentIndex = 5;
            var numMore = 5;  
            var table  = document.getElementById('main-tbl');
            var rows   = table.tBodies[0].rows;
            var trs = $('#'+selector+'');
            var trsLength = trs.length;
                        trs.hide();
                        trs.slice(0, 5).show(); 
            if($('#'+nameId+'').length == 0 ){
                $(rows[length]).after('<tr class="more" id="'+nameId+'"><td class="green_header" colspan="2"><div style="color:#0d723b">Các điều khoản khác <span>' +
                 '</span></div</td></tr>');
            }
            $('#'+nameId+'').click(function() {
                $('#'+selector+'').slice(0, currentIndex + 5).show();
                currentIndex +=5;
                checkButton();
            });
                    
            function checkButton(){
                var currentLength = $('#'+visible+'').length;
                if (currentLength >= trsLength) $('#'+nameId+'').remove(); 
                else   $('#'+nameId+'').show();   
            }
        }
        $(document).ready(function() {
            var element = document.getElementsByClassName('header');
            for (var i = 0; i < element.length; i++){
                element[i].addEventListener('click', function (event) {
                    $(this).toggleClass('colapse-head').nextUntil('tr.header').slideToggle(100);
                    //====== DIEU KHOAN BO SUNG============
                    if(event.target.matches('.term_header') ){
                        var length = <?php echo count($terms_data)?>;
                        var selector = "main-tbl .term";
                        var nameId ='more';
                        var visible=  "main-tbl .term:visible";
                        showMore(length,selector,nameId,visible);
                    }
                    //==================== DIEU_KHOAN_LOAI_TRU========
                    if(event.target.matches('.exception')){
                        var length = 65;
                        var selector = "main-tbl .dklt";
                        var nameId ='more_exc';
                        var visible=  "main-tbl .dklt:visible";
                        showMore(length,selector,nameId,visible);
                    }
                     //====================CHE TAI===================
                    if(event.target.matches('.punishment')){
                        var length = 85;
                        var selector = "main-tbl .ctai";
                        var nameId ='more_punish';
                        var visible=  "main-tbl .ctai:visible";
                        showMore(length,selector,nameId,visible);
                    }
                     //====================Quyen va nghia vu=========
                    if(event.target.matches('.permission')){
                        var length = 112;
                        var selector = "main-tbl .nv";
                        var nameId ='more_permiss';
                        var visible=  "main-tbl .nv:visible";
                        showMore(length,selector,nameId,visible);
                    }
                    //====================NANG LUC TAI CHINH================
                    if(event.target.matches('.finances')){
                        var length = 132;
                        var selector = "main-tbl .nltc";
                        var nameId ='more_finance';
                        var visible=  "main-tbl .nltc:visible";
                        showMore(length,selector,nameId,visible);
                    }
                }, false);
            };

           

        })
        
    </script>


</script>
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
                    $('#checkbox_'+idImg+'')[0].setAttribute('disabled',false);
                    if($('#checkbox_'+idImg+'').prop("checked") == true){
                        $('#'+idImg+'').draggable({ disabled: true });
                    }
                    $('#'+idImg+'').draggable({ disabled: true });
                    var myTable = document.getElementById('main-tbl');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
                                var indexCol    = tblHeadObj.rows[0].cells.length - 1;
                    var url = '{{route('droppImage')}}';
                    $.post(url,
                        {
                            "_token": "{{ csrf_token() }}",
                            id: idImg,
                        },
                        function(data, status, xhr) {
                            // console.log(data.data);
                            if(data.success == true) {
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
                                $("#net-address").html(data.html);
                                var myTable = document.getElementById('main-tbl');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
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
                                                console.log(rate);
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
                                    }else{
                                        tds.innerHTML = `<p>`+terms_data[i-7]['note_more']+`</p>
                                        `;
                                    }
                                    
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
                                for(var i=68;i < 86 ;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                   if(punishment.length >0){
                                        if(punishment[i-68]['rate_star_ct']== 3)
                                        {
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-68]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                            </div> `;
                                        }else if(punishment[i-68]['rate_star_ct']== 5){
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-68]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                            </div> `;
                                        
                                        }else if(punishment[i-68]['rate_star_ct']== 2){
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-68]['content']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                            </div> `;
                                        }
                                        else{
                                            tds.innerHTML =`<p class="ellipsis">`+punishment[i-68]['content']+`</p>`;
                                        }
                                    }
                                }
                                //============================Quyền và nghĩa vụ của xe==============================
                                for(var i=89;i<=112;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    // console.log(tds)
                                    if(permissions.length > 0){
                                        if(permissions[i-89]['rate_star_nv']== 3)
                                        {
                                            tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`+
                                                        `<div class="star-td">
                                                                <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                            </div> `;
                                        }else if(permissions[i-89]['rate_star_nv']== 5){
                                            tds.innerHTML =`<p class="ellipsis">`+permissions[i-89]['note_rule']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                            </div> `;
                                        
                                        }else if(permissions[i-89]['rate_star_nv']== 2){
                                            tds.innerHTML =`<p class="ellipsis">`+permissions[i-89]['note_rule']+`</p>`+`
                                                        <div class="star-td">
                                                                <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                            </div> `;
                                        }
                                        else{
                                            if(permissions[i-89]['note_rule']=== 'x')
                                            tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                            else tds.innerHTML = `<p class="ellipsis">`+permissions[i-89]['note_rule']!=null?permissions[i-89]['note_rule']:''+`</p>`
                                        }
                                    }
                                } 
                                //=================Năng lực tài chính==================
                                for(var i =116; i<=132;i++){
                                    var tds =  tblBodyObj.rows[i].cells[indexCol];
                                    if(finances.length > 0)
                                    tds.innerHTML =`<p class="ellipsis">`+formatMoney(finances[i-116]['money'],0)+`</p>`
                                }
                                //==============DANH GIA UY TIN===============
                                // console.log(rating_and_model);
                                var tds = tblBodyObj.rows[138].cells[indexCol];
                                if(rating_and_model.rating_agency === 'x')
                                    tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                //============= MO HINH ============
                                var tds = tblBodyObj.rows[140].cells[indexCol];
                                var tdss = tblBodyObj.rows[141].cells[indexCol];
                                //console.log(tds);
                                if(rating_and_model.business_focused ==='x')
                                    tds.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                if(rating_and_model.business_unfocused === 'x')
                                tdss.innerHTML =`<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                //===============MANG LUOI HOAT DONG==========
                                tds = tblBodyObj.rows[135].cells[indexCol]; 
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
                                                tblBodyObj.rows[135].cells[i+1].removeAttribute('class','active-car-td');
                                                break;
                                            }
                                            if(indexCol==i){
                                                tdnet = tds;
                                                tdnet.setAttribute('class','active-car-td');
                                               
                                            }else{
                                                tdnet= tblBodyObj.rows[135].cells[i]
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
                                $('#checkbox_'+idImg+'')[0].removeAttribute("disabled");
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
                                $('#checkbox_'+idImg+'')[0].removeAttribute("disabled");
                            }else if(index == 5 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                                $('#checkbox_'+idImg+'')[0].removeAttribute("disabled");
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
                                $('#checkbox_'+idImg+'')[0].removeAttribute("disabled");
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
    </script>
    <script>
    function showNote(val){
            $.ajax({
                url: "{{route('show_info')}}",
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    note: val
                },
                success: function(data) {
                    // Add response in Modal body
                    $('#note').html(data.note);
                    $('#detail-td').modal('show');
                }
            });
        }
        $(function(){
        
            $("#expand").click(function() {
                $("[data-rows='togglerow']").show();
            })
            
        });
    </script>

    <script>
        function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
            try {
                decimalCount = Math.abs(decimalCount);
                decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                const negativeSign = amount < 0 ? "-" : "";

                let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                let j = (i.length > 3) ? i.length % 3 : 0;

                return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
            } catch (e) {
                console.log(e)
            }
        };
    </script>
    <script>
        function handleAll(el,length){
            var terms_data = <?php echo $terms_data?>;
            var length_terms = terms_data.length;
            var exception_data  = <?php echo $exception_data?>;
            var length_exception = exception_data.length;
            // console.log(terms_data);
        
        if(el.checked == true){
            if(length==length_terms){
                length=length_terms;
            for(var i=0; i< length ;i++){
                var label_dkbs= document.getElementById('dkbs'+terms_data[i]['id']+'');
            
                label_dkbs.style.display = "inline-flex";
            }
            $('.selectedId').prop('checked', el.checked);
            } 
            if(length==length_exception){
                length=length_exception;
                for(var i=0; i< length ;i++){
                    var label_dklt= document.getElementById('dklt'+exception_data[i]['id']+'');
                
                    label_dklt.style.display = "inline-flex";
                }
                $('.selectedId2').prop('checked', el.checked);
            }
            
        }else{
            if(length==length_terms){
                for(var i=0; i< length ;i++){
                    var text= document.getElementById('dkbs'+terms_data[i]['id']+'');
                    text.style.display = "none";
                }
                $('.selectedId').prop('checked', false);
            }
            if(length==length_exception){
                for(var i=0; i< length ;i++){
                    var text= document.getElementById('dklt'+exception_data[i]['id']+'');
                    text.style.display = "none";
                }
                $('.selectedId2').prop('checked', false);
            }
        }
        }
    $(document).ready(function () {
    
        // $('#selectall_bs').click(function () {
        //     var data = <?php echo ($terms_data);?>;
        //     var length =<?php  echo count($terms_data);?>;
        //    if(this.checked == true){
        //        for(var i=0; i< length ;i++){
        //         var text= document.getElementById('dkbs'+data[i]['id']+'');
        //         text.style.display = "inline-flex";
        //        }
        //      $('.selectedId').prop('checked', this.checked);
        //    }else{
        //         for(var i=0; i< length ;i++){
        //                 var text= document.getElementById('dkbs'+data[i]['id']+'');
        //                 text.style.display = "none";
        //         }
        //         $('.selectedId').prop('checked', false);
        //    }
        // });

        $('.selectedId').change(function () {
            var check = ($('.selectedId').filter(":checked").length == $('.selectedId').length);
            $('#selectall').prop("checked", check);
        });
        //   toogle Net address
        // $('.toggle').click(function() {
        //     $('#net-address').toggle('slow');
        // });
    });
    </script>
