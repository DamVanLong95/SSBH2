<!-- <script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


<script>
    $(document).ready(function() {
    $('.header').click(function(){
        $(this).toggleClass('colapse-head','').nextUntil('tr.header').slideToggle(100);
    });
})
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

                $('#checkbox_'+idImg+'').prop("checked", true);
                if($('#checkbox_'+idImg+'').prop("checked") == true){
                    $('#'+idImg+'').draggable({ disabled: true });
                }
               

                var url = '{{route('droppImage')}}';
                $.post(url,
                    {
                        "_token": "{{ csrf_token() }}",
                        id: idImg
                    },
                    function(data, status, xhr) {
                        if(data.success == true) {
                            var myTable = document.getElementById('main-tbl');
                            var tblBodyObj  = document.getElementById('main-tbl').tBodies[0];
                            var tblHeadObj  = document.getElementById('main-tbl').tHead;
                            var indexCol    = tblHeadObj.rows[0].cells.length - 2;
                            var notes       = data.summaries;
                            var deductible  = data.deductible;           
                            var exception   = data.exception;  
                            var punishment  = data.punishment;
                            var promotion   = data.promotion;
                            var terms_data        = data.terms;
                            // var term       = data.terms

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
                                console.log(total);
                               
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
                            var tblBodyObj  = document.getElementById('main-tbl').tBodies[0];
                            
                            for (var i = 7; i <= 30; i++) {
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
                            var i=32;
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
                          
                            for(var j=35 ;j<35+exception.length;j++){

                                var tds =  tblBodyObj.rows[j].cells[indexCol];
                                if(exception[j-35]['note_dklt']=== "x" && exception[j-35]['rate_star_dklt']==3)
                                {
                                tds.innerHTML = 
                                    `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                    <div class="star-td">
                                        <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                    </div>
                                    `;
                              
                                }else if(exception[j-35]['rate_star_dklt']=== 5){
                                    tds.innerHTML =`<p>`+exception[j-35]['note_dklt']+`</p>`+`
                                    <span><button value="`+exception[j-35]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                    <div class="star-td">
                                    <img class="img-fluid" src="`+imgGreen+`" alt="">
                                </div>
                                    `;
                                }else if(exception[j-35]['rate_star_dklt']=== 2){
                                    tds.innerHTML =`<p>`+exception[j-35]['note_dklt']+`</p>`+`
                                    <span><button value="`+exception[j-35]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                    <div class="star-td">
                                    <img class="img-fluid" src="`+imgGray+`" alt="">
                                </div>
                                    `;
                                }else{
                                    tds.innerHTML =`<p>`+exception[j-35]['note_dklt']+`</p>
                                    `;
                                }
                            }
                            for(var i=66;i<85;i++){
                                var tds =  tblBodyObj.rows[i].cells[indexCol];
                                // console.log("line 272",tds);
                                console.log(punishment);
                                if(punishment[i-66]['rate_star_ct']== 3)
                                {
                                    tds.innerHTML =`<p class="ellipsis">`+punishment[i-66]['content']+`</p>`+`
                                                   <div class="star-td">
                                                        <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                                    </div> `;
                                }else if(punishment[i-66]['rate_star_ct']== 5){
                                    tds.innerHTML =`<p class="ellipsis">`+punishment[i-66]['content']+`</p>`+`
                                                   <div class="star-td">
                                                        <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                    </div> `;
                                   
                                }else if(punishment[i-66]['rate_star_ct']== 2){
                                    tds.innerHTML =`<p class="ellipsis">`+punishment[i-66]['content']+`</p>`+`
                                                   <div class="star-td">
                                                        <img class="img-fluid"   src="`+imgGray+`"  alt="">
                                                    </div> `;
                                }
                                else{
                                    tds.innerHTML =`<p class="ellipsis">`+punishment[i-66]['content']+`</p>`;
                                }
                            }
                          
                        }
                    }).done(function() {
                        // alert('Request done!');
                    });
                $('table th').on('click', function (e ) {
                    var index = ($(this).index()+1);
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
              $('.green_header').attr("colspan", tableLength +1)
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

          }
        }

      }
      function deleteColumn(tblId) {
        var allRows = document.getElementById(tblId).rows;
        for (var i = 0; i < allRows.length; i++) {
            if (allRows[i].cells.length > 1) {
                allRows[i].deleteCell(-1);
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
                // Display Modal
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
   /* window.onscroll = function() {fixedTop()};

    var tblHeader = document.getElementById("tableHeader");
    var sticky = tblHeader.offsetTop();
    var menuHeight = $(".block-main-menu").outerHeight();
    var sec1Height = $(".sec1-wrapper").height();
    var searchHeight = $(".search-ctn").outerHeight();
    var compareHeight = $(".compare-section").outerHeight();
    var brandHeight = $(".brand-section").outerHeight();
    console.log("menu",menuHeight);
    console.log("sec1",sec1Height);
    console.log("search ctn",searchHeight);
    console.log("compare ctn",compareHeight);
    console.log("branch ctn",brandHeight);*/

    function fixedTop() {
        // if (window.pageYOffset > sticky) {
        //     tblHeader.classList.add("sticky");
        // } else {
        //     tblHeader.classList.remove("sticky");
        // }
    }
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
    $('.toggle').click(function() {
        $('#net-address').toggle('slow');
    });
  });
</script>
