<script>
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
   function handleOncick(el){
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
           console.log(1);
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
                // document.getElementById("main-tbl-nt").style.tableLayout = "fixed";
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
        if (tableLength < 3) {
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
                newCell.setAttribute('class', "auto")
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
        var myTable = document.getElementById('main-tbl-nt');
       
        $('span.remove').on('click', function (e ) {
            var index = ($(this).parent().index()+1);
            if( index ==2 ){
                $('th:nth-child('+index+')').remove()
                $('td:nth-child('+index+')').remove()
                $(clicked[0]).attr("checked", false);;
                clicked[0].disabled = false;
                // addColumn('main-tbl-nt');
                // dropImage();
                $('#'+idImg+'').draggable({ disabled: false });
                globalId.pop(idImg);
                // document.getElementById("main-tbl-nt").style.tableLayout = "auto";
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
                
                console.log(111);
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