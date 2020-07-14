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
                        $('#'+idImg+'').draggable({ disabled: false });
                    }
                    var myTable = document.getElementById('main-tbl-sk')
                                    tblBodyObj  = myTable.tBodies[0]
                                    tblHeadObj  = myTable.tHead
                                    indexCol    = tblHeadObj.rows[0].cells.length - 1;
                                    // console.log(tblBodyObj.rows);
                    var url = '{{route('droppHealth')}}';
                    $.post(url, 
                    {
                        "_token": "{{ csrf_token() }}", 
                        id: idImg,
                        indexCol:indexCol
                    }
                    ,function(data , status , xhr){
                        // console.log(data);
                        if(data.success = true){
                            var healths = data.data['healths'];
                            var programs = data.data['programs'];
                            var count    = data.data['hospitalCount'];
                            var indexCol = data.indexCol;
                            // var th =  myTable.rows[0].cells[indexCol];
                            var ths =  myTable.rows[1].cells[indexCol];
                           
                            // console.log(data.html);
                            var div = document.createElement('div');
                            div.setAttribute('class','health-select-cf');
                            div.innerHTML =data.html;
                            // console.log(div);

                            ths.appendChild(div);
                            // var path_camera = `{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}`;
                            // var path_phone = `{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}`;
                            // var path_mess = `{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}`;
                            // ths.innerHTML = `

                            //     <div class="count-rank-ctn" >
                            //         <div class="mark-num"><p><span class="first-span" >`+8+`</span>/<span>10</span></p></div>
                            //         <div class="service">
                            //             <img src="`+path_camera+`"alt="">
                            //             <img src="`+path_phone+`"alt="">
                            //             <img src="`+path_mess+`"alt="">
                            //         </div>
                            //     </div>
                            // `;
                                
                            // var indexCol = data.indexCol;	
                            // var th =  myTable.rows[1].cells[indexCol];	
                            // th.setAttribute('class','health-select-cf');	
                            // th.innerHTML = data.html;
                            // th.innerHTML = data.html;
                            $('#hospital').html(data.html_hospital);
                            $('#select'+indexCol+'').on("click", function() {
                                $(this).parents(".custom-select-fix").toggleClass("opened");
                                event.stopPropagation();
                            });
                            $(".custom-option").on("click", function() {
                                // $(this).parents(".custom-select-fix-wrapper").find("select").val($(this).data("value"));
                                $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
                                $(this).addClass("selection");
                                $(this).parents(".custom-select-fix").removeClass("opened");
                                $(this).parents(".custom-select-fix").find(".custom-select-fix-trigger").text($(this).text());
                                var program_id = $(this).data("value");
                                var url ='{{route('selectProgram')}}';
                                $.post(url,{
                                    "_token": "{{ csrf_token() }}", 
                                    product_id: idImg,
                                    program_id:program_id
                                },function(data, status){
                                    var healths = data.healths;
                                    var scope   = data.scope;
                                    var obj_bhs= data.obj_bhs;
                                    var exclusions = data.exclusions;
                                    var program  = data.program;
                                    var myTable = document.getElementById('main-tbl-sk');
                                    // console.log(myTable.rows);
                                    var row   = document.getElementById('dtbh');
                                    var qlbh  = document.getElementById('qlbh');
                                    var pending   = document.getElementById('pending');
                                    var pbh   = document.getElementById('pbh');
                                  
                                    var tds =  myTable.rows[row.rowIndex+1].cells[indexCol]; 
                                    (obj_bhs===null)? tds.innerHTML = `<p class="">Data not update</p>`
                                                    :tds.innerHTML = `<p class="">`+obj_bhs['content']+`</p>`;
                                    //=====================pham vi lanh tho===========================
                                    var pvlt   = document.getElementById('pvlt');
                        
                                    var tds =  myTable.rows[pvlt.rowIndex+1].cells[indexCol]; 
                                    (!scope)? tds.innerHTML = `<p class="">Data not update</p>`
                                                    :tds.innerHTML = `<p class="">`+scope['content']+`</p>`;
                                
                                    //========================quyen loi bao hiem========================
                                    for(var i=qlbh.rowIndex+1 ; i< pending.rowIndex ; i++){
                                        var tdss = myTable.rows[i].cells[indexCol];
                                        
                                        tdss.innerHTML =  `<p class="">`+healths[i-3]['content']!=null?healths[i-3]['content']:''+`</p>`
                                    
                                    }
                                    //========================THOI GIAN================================
                                    for(var i =pending.rowIndex +1; i< pbh.rowIndex; i++){
                                        var tdss = myTable.rows[i].cells[indexCol];
                                        tdss.innerHTML =  `<p class="">`+healths[i-3]['content']!=null?healths[i-3]['content']:''+`</p>`
                                    }

                                    var tdss    = myTable.rows[pbh.rowIndex+1].cells[indexCol] ;
                                  
                                      //========================phi bao hiem= =================================
                                     var img     = 'storage/'+ program.img_cost;
                                    tdss.innerHTML = '<a href="'+img+'" class="fancybox" style="color:#f36f21">...</a>' ; 
                                    $('.fancybox').fancybox();
                                    //BENH VIEN LIEN KET
                                    var tdsss =myTable.rows[92].cells[indexCol];
                                    tdsss.setAttribute('id','td'+indexCol+''); 
                                    tdsss.innerHTML =  `<p class="toggle active" ><span>(`+count+`)</span> Bệnh viện</p>`;
                                    $('#td'+indexCol+'').click(function(){
                                        var tdnet ;
                                        for(var i =1;i<4;i++){
                                            if(indexCol==1){
                                                tdnet = tdsss;
                                                tdnet.setAttribute('class','active-td');
                                                myTable.rows[92].cells[i+1].removeAttribute('class','active-td');
                                                break;
                                            }
                                            if(indexCol==i){
                                                tdnet = tdsss;
                                                tdnet.setAttribute('class','active-td');
                                            
                                            }else {
                                                tdnet= myTable.rows[92].cells[i];
                                                tdnet.removeAttribute('class','active-td');
                                            }
                                        }
                                        var provinceID = $('#province').val();
                                        if(provinceID){
                                            var url = '{{route('filterProvince')}}';
                                                $.post(url ,
                                                {
                                                    "_token": "{{ csrf_token() }}", 
                                                    location_id: provinceID,
                                                    product_id :idImg,
                                                }
                                                ,function(data){
                                                    $('#info_address').html(data.html_hospital);
                                                    $('#district').html(data.html_district);
                                                
                                                });
                                        }else{
                                            $('select[name="province"]').on('change', function(){
                                                var provinceID = $(this).val();
                                            // alert(provinceID);
                                                var url = '{{route('filterProvince')}}';
                                                $.post(url ,
                                                {
                                                    "_token": "{{ csrf_token() }}", 
                                                    location_id: provinceID,
                                                    product_id :idImg,
                                                }
                                                ,function(data){
                                                    $('#info_address').html(data.html_hospital);
                                                    $('#district').html(data.html_district);
                                                
                                                });
                                            });
                                        }
                                        $('select[name="province"]').on('change', function(){
                                                var provinceID = $(this).val();
                                            // alert(provinceID);
                                                var url = '{{route('filterProvince')}}';
                                                $.post(url ,
                                                {
                                                    "_token": "{{ csrf_token() }}", 
                                                    location_id: provinceID,
                                                    product_id :idImg,
                                                }
                                                ,function(data){
                                                    $('#info_address').html(data.html_hospital);
                                                    $('#district').html(data.html_district);
                                                
                                                });
                                            });
                                        $('select[name="district"]').on('change', function(){
                                            var districtID = $(this).val();
                                        
                                            if(districtID){
                                                var url = '{{route('filterDistrict')}}';
                                                $.post(url ,
                                                {
                                                    "_token": "{{ csrf_token() }}", 
                                                    district_id: districtID,
                                                    product_id :idImg,
                                                }
                                                ,function(data){
                                                    $('#info_address').html(data.html_hospital);
                                                });

                                            }
                                        });
                                    });
                                    
                                    var imgGreen = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                                    var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                                    for(var i=96;i < 95 + exclusions.length;i++){
                                        var tds = myTable.rows[i].cells[indexCol];
                                        if(exclusions[i-96]['content']==='x'){
                                            tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                        `;
                                        }else if(exclusions[i-96]['content']==null){
                                            tds.innerHTML = `<p class=""></p>`;
                                        }else{
                                            tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                                        <p class="">`+exclusions[i-96]['note']+`</p>
                                            `;
                                        }
                                    }
                                });
                              
                            });
                        } 
                    }).done(function() {
                        // alert('Request done!');
                    });;
                    
                    $('span.remove').on('click', function (e ) {
                        var index = ($(this).parent().parent().index()+1);
                        if( index ==2 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#checkbox_bv'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                                console.log("hi");
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl-sk');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#checkbox_bv'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl-sk');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#checkbox_bv'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index == 4){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#checkbox_bv'+idImg+'').prop("checked", false);
                            }else if(index == 5 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                addColumn('main-tbl-sk');
                                dropImage();
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#checkbox_bv'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                // addColumn('main-tbl-sk');
                                dropImage();
                            }else if(index == 3 ){
                                $('th:nth-child('+index+')').remove()
                                $('td:nth-child('+index+')').remove()
                                $('#checkbox_'+idImg+'').prop("checked", false);
                                $('#checkbox_bv'+idImg+'').prop("checked", false);
                                $('#'+idImg+'').draggable({ disabled: false });
                            }
                    });
                    addColumn('main-tbl-sk');
                    dropImage();
                },
                out: function( event, ui ){
                    $(this).removeClass('dropped');
                }

            });
        }

        function addColumn(tblId) {
            var myTable = document.getElementById('main-tbl-sk');
            var tblHeadObj = document.getElementById(tblId).tHead;
            var tableLength = document.getElementById('main-tbl-sk').rows[0].cells.length;
           
            for (var h = 0; h < tblHeadObj.rows.length; h++) {
                if (tableLength < 5) {
                    var creatediv = document.createElement('div');
                    var newTH = document.createElement('th');
                    $('#select_box').attr("colspan", tableLength +1)
                    $('#select_all').attr("colspan", tableLength +1)
                    $('.green_header').attr("colspan", tableLength +1)
                    $('.td-all').attr("colspan", tableLength +1)
                    $('.hospital_header').attr("colspan", tableLength )
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
                    $('.td-all').next("td").remove()

                }
            }

        }
 </script>
 <script>
$(function() {  
    var count=0;
       $('.checkId').click(function(){
           var clicked = $(this);
           var myTable = document.getElementById('main-tbl-sk');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
                                var indexCol    = tblHeadObj.rows[0].cells.length - 1;
           if(indexCol==4)count++;
           if(clicked.is(':checked') && count <=1){
            clicked[0].setAttribute('disabled',true);
               var idImg = clicked.val();
               var url   = "{{route('checkHealth')}}";
              
             $.post(url,
               {
                   "_token": "{{ csrf_token() }}",
                   id: idImg,
                   indexCol:indexCol,
               },
               function(data, status, xhr) {
                    var healths = data.data['healths'];
                    var programs = data.data['programs'];
                    var count    = data.data['hospitalCount'];
                    var logo     = 'storage/'+data.img['url'];
                    var thlast =  myTable.rows[0].cells[indexCol];
                    $('<span class="remove" />').text('X').appendTo(thlast);
                    $('span.remove', thlast).show();
                    var divImg = $(thlast).children()[0];
                    var img = document.createElement("img");

                    img.className = 'img-responsive';
                    img.src = ''+logo+'';
                    $(img).addClass('sized');
                    $(divImg).addClass('dropped');
                    divImg.appendChild(img); 
                    
                    if($('#checkbox_'+idImg+'').prop("checked") == true){
                        $('#'+idImg+'').draggable({ disabled: true });
                    }
                    //====================select option================
                    var ths =  myTable.rows[1].cells[indexCol];
                           
                    var div = document.createElement('div');
                    div.setAttribute('class','health-select-cf');
                    div.innerHTML =data.html;

                    ths.appendChild(div);
                    $('#hospital').html(data.html_hospital);
                    $('#select'+indexCol+'').on("click", function() {
                        $(this).parents(".custom-select-fix").toggleClass("opened");
                        event.stopPropagation();
                    });
                    $(".custom-option").on("click", function() {
                            // $(this).parents(".custom-select-fix-wrapper").find("select").val($(this).data("value"));
                            $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
                            $(this).addClass("selection");
                            $(this).parents(".custom-select-fix").removeClass("opened");
                            $(this).parents(".custom-select-fix").find(".custom-select-fix-trigger").text($(this).text());
                            var program_id = $(this).data("value");
                            var url ='{{route('selectProgram')}}';
                            $.post(url,{
                                "_token": "{{ csrf_token() }}", 
                                product_id: idImg,
                                program_id:program_id
                            },function(data, status){
                                var program  = data.program;
                                var healths = data.healths;
                                var scope   = data.scope;
                                var obj_bhs= data.obj_bhs;
                                var exclusions = data.exclusions;
                                var myTable = document.getElementById('main-tbl-sk');
                                // console.log(myTable.rows);
                                var row   = document.getElementById('dtbh');
                                var qlbh  = document.getElementById('qlbh');
                                var pending   = document.getElementById('pending');
                                var pbh   = document.getElementById('pbh');
                                
                                var tds =  myTable.rows[row.rowIndex+1].cells[indexCol]; 
                                    (obj_bhs===null)? tds.innerHTML = `<p class="">Data not update</p>`
                                                    :tds.innerHTML = `<p class="">`+obj_bhs['content']+`</p>`;
                                    //=====================pham vi lanh tho===========================
                                    var pvlt   = document.getElementById('pvlt');
                        
                                    var tds =  myTable.rows[pvlt.rowIndex+1].cells[indexCol]; 
                                    (!scope)? tds.innerHTML = `<p class="">Data not update</p>`
                                                    :tds.innerHTML = `<p class="">`+scope['content']+`</p>`;
                                
                                    //========================quyen loi bao hiem========================
                                    for(var i=qlbh.rowIndex+1 ; i< pending.rowIndex ; i++){
                                        var tdss = myTable.rows[i].cells[indexCol];
                                        
                                        tdss.innerHTML =  `<p class="">`+healths[i-3]['content']!=null?healths[i-3]['content']:''+`</p>`
                                    
                                    }
                                    //========================THOI GIAN================================
                                    for(var i =pending.rowIndex +1; i< pbh.rowIndex; i++){
                                        var tdss = myTable.rows[i].cells[indexCol];
                                        tdss.innerHTML =  `<p class="">`+healths[i-3]['content']!=null?healths[i-3]['content']:''+`</p>`
                                    }

                                    var tdss    = myTable.rows[pbh.rowIndex+1].cells[indexCol] ;
                                  
                                      //========================phi bao hiem= =================================
                                     var img     = 'storage/'+ program.img_cost;
                                    tdss.innerHTML = '<a href="'+img+'" class="fancybox" style="color:#f36f21">...</a>' ; 
                                    $('.fancybox').fancybox();
                                //BENH VIEN LIEN KET
                                var tdsss =myTable.rows[92].cells[indexCol];
                                tdsss.setAttribute('id','td'+indexCol+''); 
                                tdsss.innerHTML =  `<p class="toggle active" ><span>(`+count+`)</span> Bệnh viện</p>`;
                                $('#td'+indexCol+'').click(function(){
                                    var tdnet ;
                                    for(var i =1;i<4;i++){
                                        if(indexCol==1){
                                            tdnet = tdsss;
                                            tdnet.setAttribute('class','active-td');
                                            myTable.rows[92].cells[i+1].removeAttribute('class','active-td');
                                            break;
                                        }
                                        if(indexCol==i){
                                            tdnet = tdsss;
                                            tdnet.setAttribute('class','active-td');
                                        
                                        }else {
                                            tdnet= myTable.rows[92].cells[i];
                                            tdnet.removeAttribute('class','active-td');
                                        }
                                    }
                                    var provinceID = $('#province').val();
                                    if(provinceID){
                                        var url = '{{route('filterProvince')}}';
                                            $.post(url ,
                                            {
                                                "_token": "{{ csrf_token() }}", 
                                                location_id: provinceID,
                                                product_id :idImg,
                                            }
                                            ,function(data){
                                                $('#info_address').html(data.html_hospital);
                                                $('#district').html(data.html_district);
                                            
                                            });
                                    }else{
                                        $('select[name="province"]').on('change', function(){
                                            var provinceID = $(this).val();
                                        // alert(provinceID);
                                            var url = '{{route('filterProvince')}}';
                                            $.post(url ,
                                            {
                                                "_token": "{{ csrf_token() }}", 
                                                location_id: provinceID,
                                                product_id :idImg,
                                            }
                                            ,function(data){
                                                $('#info_address').html(data.html_hospital);
                                                $('#district').html(data.html_district);
                                            
                                            });
                                        });
                                    }
                                    var provinceID ;
                                    $('select[name="province"]').on('change', function(){
                                             provinceID = $(this).val();
                                        // alert(provinceID);
                                            var url = '{{route('filterProvince')}}';
                                            $.post(url ,
                                            {
                                                "_token": "{{ csrf_token() }}", 
                                                location_id: provinceID,
                                                product_id :idImg,
                                            }
                                            ,function(data){
                                                $('#info_address').html(data.html_hospital);
                                                $('#district').html(data.html_district);
                                            
                                            });
                                        });
                                    $('select[name="district"]').on('change', function(){
                                        var districtID = $(this).val();
                                    
                                        if(districtID){
                                            var url = '{{route('filterDistrict')}}';
                                            $.post(url ,
                                            {
                                                "_token": "{{ csrf_token() }}", 
                                                district_id: districtID,
                                                product_id :idImg,
                                                location_id: provinceID,
                                            }
                                            ,function(data){
                                                $('#info_address').html(data.html_hospital);
                                            });

                                        }
                                    });
                                });
                                
                                var imgGreen = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                                var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                                for(var i=96;i < 95 + exclusions.length;i++){
                                    var tds = myTable.rows[i].cells[indexCol];
                                    // console.log(tds);
                                    if(exclusions[i-96]['content']==='x'){
                                        tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                    `;
                                    }else if(exclusions[i-96]['content']==null){
                                        tds.innerHTML = `<p class=""></p>`;
                                    }else{
                                        tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                                    <p class="">`+exclusions[i-96]['note']+`</p>
                                        `;
                                    }
                                }
                            });
                        });
                    addColumn('main-tbl-sk');
                    dropImage();
                    deleteColumn(idImg,clicked);
               });
              
           }
           if(count==4) return;
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
                   
                }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                    console.log("hi");
                    count=0;
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl-sk');
                    dropImage();
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    $('#'+idImg+'').draggable({ disabled: true });
                    clicked[0].disabled = false;
                    count=0;
                   
                }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl-sk');
                    dropImage();
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    $('#checkbox_bv'+idImg+'').prop("checked", false);
                    $('#'+idImg+'').draggable({ disabled: false });
                    clicked[0].disabled = false;
                    count=0;
                }else if(index == 4){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    $('#'+idImg+'').draggable({ disabled: false });
                    clicked[0].disabled = false;
                    count=0;
                }else if(index == 5 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl-sk');
                    dropImage();
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                    count=0;
                    
                }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    // addColumn('main-tbl-sk');
                    dropImage();
                    count=0;
                }else if(index == 3 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    $('#checkbox_bv'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                    count=0;
                }
                       

            });
       }
    });
</script>
