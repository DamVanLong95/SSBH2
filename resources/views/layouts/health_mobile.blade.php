<script>
    function show(val){
        $('#note').html(val);
        $('#detail-td').modal('show');
    }
</script>
<style>
    @media (max-width: 425px){
    td:first-child {
        /* width: 100px; */
        /* padding: 33px; */
    }}
</style>
<script>
    $(function() {  
    var count=0;
       $('.checkId').click(function(){
           var clicked = $(this);
           var myTable = document.getElementById('main-tbl-sk');
                                var tblBodyObj  = myTable.tBodies[0];
                                var tblHeadObj  = myTable.tHead;
                                var indexCol    = tblHeadObj.rows[0].cells.length - 1;
                                var tableLength = document.getElementById('main-tbl-sk').rows[0].cells.length;
           if(indexCol==2)count++;
           if(clicked.is(':checked') && $('div.img-container').is(":not(.dropped)")){
            // clicked[0].setAttribute('disabled',true);
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
                    divImg.setAttribute('id',"img_"+idImg);
                    // if($('#checkbox_'+idImg+'').prop("checked") == true){
                    //     $('#'+idImg+'').draggable({ disabled: true });
                    // }
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
                    $('.sources').tooltip({
                        placement: 'right',
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
                            
                            if(obj_bhs){
                                const tds =  myTable.rows[row.rowIndex+1].cells[indexCol];
                                (!obj_bhs['content']) ? tds.innerHTML = `<p class="ellipsis"></p>`
                                                :tds.innerHTML = `<p class="ellipsis">`+obj_bhs['content']+`</p>`;
                            }
                                //=====================pham vi lanh tho===========================
                                var pvlt   = document.getElementById('pvlt');
                                // console.log(pvlt.rowIndex + 1);
                               
                                if(scope){
                                    const tdsss =  myTable.rows[5].cells[indexCol]; 
                                    if(scope['content']!= null){
                                        tdsss.innerHTML = `<p class="ellipsis">`+scope['content']+`</p>`;
                                    }else{
                                        tdsss.innerHTML = '';
                                    }
                                }
                            
                                   //========================quyen loi bao hiem========================
                                   var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                                for(var i=7 ; i< pending.rowIndex ; i++){
                                    var tdss = myTable.rows[i].cells[indexCol];
                                    if(healths[i-3]){
                                        if(healths[i-3]['content']=== 'x'){
                                        tdss.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>`;
                                        }else if(healths[i-3]['content'] != null){
                                            const str = healths[i-3]['content'];
                                            if(str.length > 20){
                                                tdss.innerHTML =  `<p class="ellipsis">`+cutString(str,10)+`</p>`+
                                            `<span><button value="`+str+`" onclick="show(this.value)" >...</button></span>`;
                                            }else{
                                                tdss.innerHTML =  `<p class="ellipsis">`+str+`</p>`;
                                            }
                                           
                                        }else{
                                            tdss.innerHTML = '';
                                        }
                                    }
                                }
                                //========================THOI GIAN================================
                                for(var i =pending.rowIndex +1; i< pbh.rowIndex; i++){
                                    var tdss = myTable.rows[i].cells[indexCol];
                                    if(healths[i-7]){
                                        
                                        if(healths[i-7]['content']!=null) {
                                            const str = healths[i-7]['content'];
                                            if(str.length > 20 ){
                                                tdss.innerHTML =  `<p class="ellipsis">`+str+`</p>`+
                                                    `<span><button value="`+str+`" onclick="show(this.value)" >...</button></span>`;
                                            }else{
                                                tdss.innerHTML =  `<p class="ellipsis">`+str+`</p>`;
                                            }
                                        } else tdss.innerHTML =  '';
                                    }
                                }
                                var tdss    = myTable.rows[pbh.rowIndex+1].cells[indexCol] ;
                                
                                    //========================phi bao hiem= =================================
                                    var img     = 'storage/'+ program.img_cost;
                                tdss.innerHTML = '<a href="'+img+'" class="fancybox" style="color:#f36f21">...</a>' ; 
                                $('.fancybox').fancybox();
                            //BENH VIEN LIEN KET
                            var bvlk = document.getElementById('row-hospital');
                            var tdsss =myTable.rows[bvlk.rowIndex].cells[indexCol];
                            if(tdsss){
                                tdsss.setAttribute('id','td'+indexCol+''); 
                                tdsss.innerHTML =  `<p class="toggle active" ><span>(`+count+`)</span> Bệnh viện</p>`;
                                $('#td'+indexCol+'').click(function(){
                                    var tdnet ;
                                    for(var i =1;i<tableLength;i++){
                                        if(indexCol==1){
                                            tdnet = tdsss;
                                            tdnet.setAttribute('class','active-td');
                                            myTable.rows[86].cells[i+1].removeAttribute('class','active-td');
                                            break;
                                        }
                                        if(indexCol==i){
                                            tdnet = tdsss;
                                            tdnet.setAttribute('class','active-td');
                                        
                                        }else {
                                            tdnet= myTable.rows[86].cells[i];
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
                            }
                     
                            
                            var imgGreen = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                            var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                            for(var i=90;i < 90+ exclusions.length;i++){
                                var tds = myTable.rows[i].cells[indexCol];
                                if(exclusions[i-90]['content']==='x'){
                                    tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                `;
                                }else if(exclusions[i-90]['content']==null){
                                    tds.innerHTML = '';
                                }else{
                                    var str = exclusions[i-90]['note'];
                                    if(str.length > 10){
                                        tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                                    <p class="ellipsis">`+cutString(str,15)+`</p>`+
                                                    `<span><button value="`+str+`" onclick="show(this.value)" >...</button></span>`;
                                    }else{
                                        tds.innerHTML = `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                                        <p class="ellipsis">`+str+`</p>
                                        `;
                                    }
                                }
                            }
                        }).done(function(){
                            function isEmpty(td) {
                                if ( td.innerHTML == '') {
                                    return true;
                                }            

                                return false;
                            }
                            if (indexCol==2 || indexCol==3){
                                $("#main-tbl-sk tr.data-detail:not(.parent) ").each(function(){
                                    var trIsEmpty = true;
                                    var tr = $(this);
                                    tr.removeClass('data-empty');
                                    tr.find("td:not(:first)").each(function() {
                                        td = this;
                                        if (isEmpty(td) === false)  {
                                            trIsEmpty = false;   
                                        }
                                    });
                                    if (trIsEmpty == true) {
                                        tr.addClass('data-empty');
                                    }
                                 });
                            }
                        });
                    });
                    add('main-tbl-sk');
                    deleteColumn(idImg,clicked);
               });
              
           }
           if(clicked.is(':checked') === false ){
                var id = clicked.val();
                var imgId = clicked.parents().find('#img_'+id+'');
                var index = imgId.parent().index() +1;
                if( index ==2  && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                    add('main-tbl-sk');
                }else if(index== 2 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                }else if(index == 3 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    $('#'+idImg+'').draggable({ disabled: false });
                    add('main-tbl-sk');
                }
            }
           if(count==2) return;
       });
       function deleteColumn(idImg,clicked){

        $('span.remove').on('click', function (e ) {
                var index = ($(this).parent().index()+1);
                // console.log(index);
                if( index ==2 ){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    count=0;
                    // $('#'+idImg+'').draggable({ disabled: false });
                }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    add('main-tbl-sk');
                    count=0;
                    clicked[0].disabled = false;
                }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                    $('th:nth-child('+index+')').remove()
                    $('td:nth-child('+index+')').remove()
                    count=0;
                    add('main-tbl-sk');
                    $('#checkbox_'+idImg+'').prop("checked", false);
                    clicked[0].disabled = false;
                    // clicked[0].checked = false;
                }
            });
       }
       function add(tblId) {
            var myTable = document.getElementById('main-tbl-sk');
            var tblHeadObj = document.getElementById(tblId).tHead;
            var tableLength = document.getElementById('main-tbl-sk').rows[0].cells.length;
            for (var h = 0; h < tblHeadObj.rows.length; h++) {
            if (tableLength < 3) {
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
    });

</script>