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
                    $('.sized').draggable({ disabled: true });
                    $('#checkbox_'+idImg+'').prop("checked", true);
                    if($('#checkbox_'+idImg+'').prop("checked") == true){
                        $('#'+idImg+'').draggable({ disabled: true });
                    }
                    $('#checkbox_bv'+idImg+'').prop("checked", true);
                    if($('#checkbox_bv'+idImg+'').prop("checked") == true){
                        $('#'+idImg+'').draggable({ disabled: true });
                    }
                    var myTable = document.getElementById('main-tbl-sk')
                                    tblBodyObj  = myTable.tBodies[0]
                                    tblHeadObj  = myTable.tHead
                                    indexCol    = tblHeadObj.rows[0].cells.length - 1;
                    var url = '{{route('droppHealth')}}';
                    
                    $.post(url, 
                    {
                        "_token": "{{ csrf_token() }}", 
                        id: idImg,
                        indexCol:indexCol
                    }
                    ,function(data , status , xhr){
                        if(data.success = true){
                            var healths = data.data['healths'];
                            var programs = data.data['programs'];
                            var count    = data.data['hospitalCount'];
                            var indexCol = data.indexCol;
                            var th =  myTable.rows[1].cells[indexCol];
                            th.setAttribute('class','health-select-cf');
                            th.innerHTML = data.html;
                            $('#hospital').html(data.html_hospital);
                            $('#select'+indexCol+'').on("click", function() {
                                $(this).parents(".custom-select-fix").toggleClass("opened");
                                event.stopPropagation();
                            });
                            $('.custom-select-fix').each(function(){
                                // console.log(this);
                                $(this).children('span').html($(this).children('.custom-options').children('.custom-option:first').html());
                                var value = $(this).children('.custom-options').children('.custom-option:first').data('value');
                                $(this).attr('value',value);
                            });
                            var program_fisrt_id = document.getElementById("selected").value;
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
                                    var myTable = document.getElementById('main-tbl-sk'),
                                        tblBodyObj  = myTable.tBodies[0];
                                    var tds =  myTable.rows[5].cells[indexCol]; 
                                    (obj_bhs===null)? tds.innerHTML = `<p class="">Data not update</p>`
                                                    :tds.innerHTML = `<p class="">`+obj_bhs['content']+`</p>`;
                                    
                                    var tds =  myTable.rows[7].cells[indexCol]; 
                                    
                                    (scope[1]===null)? tds.innerHTML = `<p class="">Data not update</p>`
                                                    :tds.innerHTML = `<p class="">`+scope[1]['content']+`</p>`;
                                    for(var i=8; i< 79; i++){
                                        var tdss = tblBodyObj.rows[i].cells[indexCol];
                                        tdss.innerHTML =  `<p>`+healths[i-6]['content']!=null?healths[i-6]['content']:''+`</p>`
                                    
                                    }
                                    //THOI GIAN
                                    var tdss = tblBodyObj.rows[80].cells[indexCol] ;
                                    // console.log(tdss);
                                    for(var i =80; i< 88; i++){
                                        var tdss = tblBodyObj.rows[i].cells[indexCol];
                                        tdss.innerHTML =  `<p>`+healths[i-6]['content']!=null?healths[i-6]['content']:''+`</p>`
                                    }
                                
                                    const row   = document.getElementById('cost');
                                    const index = row.rowIndex;
                                    var tdss    = tblBodyObj.rows[index].cells[indexCol] ;
                                    
                                    // tdss.innerHTML = `<a href='`+healths[83]['content']+`' target="_blank" hidden>Link_click</a>` ; 
                                    tdss.innerHTML = `<button onClick="clickLink()">Open Tab</button> <a id="link" href="`+healths[83]['content']+`" target="_blank" hidden></a>` ; 
                                    //BENH VIEN LIEN KET
                                    var tdsss =tblBodyObj.rows[92].cells[indexCol];
                                    tdsss.setAttribute('id','td'+indexCol+''); 
                                    tdsss.innerHTML =  `<p class="toggle active" ><span>(`+count+`)</span> Bệnh viện</p>`;
                                    document.querySelector('a').setAttribute('target', '_blank');
                                   
                                    $('#td'+indexCol+'').click(function(){
                                        var tdnet ;
                                        for(var i =1;i<4;i++){
                                            if(indexCol==1){
                                                tdnet = tdsss;
                                                tdnet.setAttribute('class','active-td');
                                                tblBodyObj.rows[92].cells[i+1].removeAttribute('class','active-td');
                                                break;
                                            }
                                            if(indexCol==i){
                                                tdnet = tdsss;
                                                tdnet.setAttribute('class','active-td');
                                            
                                            }else {
                                                tdnet= tblBodyObj.rows[92].cells[i];
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
                                    for(var i=96;i < 96 + exclusions.length;i++){
                                        var tds = tblBodyObj.rows[i].cells[indexCol];
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
     function clickLink(id) { 
        var url= document.getElementById("link").getAttribute("href");
        window.open(url, "_blank"); 
     }
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
        
            // $('#calculate').click(function(){
            //    var price = $('#price_car').val();
            //    $('#price').html(price);
                
            // })
            
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
        $(document).ready(function () {
            //   sellect All checkbox
            $('#selectall').click(function () {
                $('.selectedId').prop('checked', this.checked);
            });

            $('.selectedId').change(function () {
                var check = ($('.selectedId').filter(":checked").length == $('.selectedId').length);
                $('#selectall').prop("checked", check);
            });
            //   toogle hospital address
            $('.toggle').click(function() {
                // $('#hospital-tr').toggle('slow');
            });
        });
    </script>
