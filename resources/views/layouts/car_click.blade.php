<script>
$(function() {  
       $('.checkId').click(function(){
           var clicked = $(this);
           
           if(clicked.is(':checked')){
            clicked[0].setAttribute('disabled',true);
               var idImg = clicked.val();
               var url   = "{{route('checkImage')}}";
               $.post(url,
               {
                   "_token": "{{ csrf_token() }}",
                   id: idImg,
               },
               function(data, status, xhr) {
                var myTable = document.getElementById('main-tbl');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
                                var indexCol    = tblHeadObj.rows[0].cells.length - 1;
                   if(data.status === 'success'){
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
                        if($('#checkbox_'+idImg+'').prop("checked") == true){
                            $('#'+idImg+'').draggable({ disabled: true });
                        }
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

                        addColumn('main-tbl');
                        dropImage();
                        deleteColumn(idImg,clicked);
                   }
               
               }).done(function() {
               
               });
               $(this).disabled = true;
           }else{
            var idImg = clicked.val();
            
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
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl');
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
                }else if(index == 4){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index == 5 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    addColumn('main-tbl');
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    // addColumn('main-tbl');
                }else if(index == 3 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
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
                var x =  myTable.rows[4].cells;
                var y =  myTable.rows[5].cells;
                x[tableLength].setAttribute('rowspan',2);
                y[1].remove();
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
   