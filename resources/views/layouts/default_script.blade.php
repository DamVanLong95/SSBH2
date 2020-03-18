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
                        var term       = data.terms;
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
                            var term       = data.terms

                            var tds =  tblBodyObj.rows[3].cells[indexCol];
                            var creatediv = document.createElement('div');
                            var name ='price_'+indexCol+'';
                            creatediv.setAttribute('id', name);
                            tds.appendChild(creatediv);
                            $('#calculate').click(function(){
                                var price = $('#price_car').val();
                                var count = 0;
                                for(var i =0; i<term.length;i++){
                                    var checkBox = document.getElementById('checkbox_bs'+term[i]['id']+'');
                                    if(checkBox.checked==true){
                                        count++;
                                    }
                                }
                                var rate = 1.5;
                                if(price !=''){
                                    if(count==0){
                                        price = price.replace(/\./g,'').replace(',','.');
                                        var price_car = (price * rate)/100;
                                        $('#price_'+indexCol+'').html((formatMoney(price_car)));
                                    }else{
                                        console.log(count);
                                       var rate = rate+count * 0.1;
                                       var price_car = (price * rate)/100;
                                     $('#price_'+indexCol+'').html((formatMoney(price_car)));
                                    }
                                }else{
                                    alert("Please enter price car !");
                                }
                            });
                            $('#discount').click(function(){
                                var price_old = $('#price_car').val();
                                var price_old = price_old.replace(/\./g,'').replace(',','.')
                                var price_old = (price_old * 1.5)/100;
                                var rate      = promotion['promotion']
                                var price_new = price_old * (1-rate/100);
                                $('#price_'+indexCol+'').html((price_new));
                            });
                            $('#before_discount').click(function(){
                                var price = $('#price_car').val();
                                var price = price.replace(/\./g,'').replace(',','.');
                                var  price_car = (price * 1.5)/100;
                                $('#price_'+indexCol+'').html((price_car));
                                    
                            });
                            for (var i = 7; i < 30; i++) {
                                var tds =  tblBodyObj.rows[i].cells[indexCol];
                                var imgGray  =`{{ url('/') }}/assets/images/car/gray-star.png?{{ config('custom.version') }}`;
                                var imgOrange = ` {{ url('/') }}/assets/images/car/orange-star.png?{{ config('custom.version') }}`;
                                var imgGreen = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                                var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                                if(notes[i-7]['note_more']==="-----") {
                                    tds.innerHTML = `<p>`+notes[i-7]['note_more']+`</p>`;
                                }else{
                                    tds.innerHTML =`<p class="ellipsis">`+notes[i-7].note_more+`</p>`+`
                                                    <span><button value="`+notes[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                   <div class="star-td">
                                                        <img class="img-fluid"   src="`+imgGreen+`"  alt="">
                                                    </div>

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
                            for(var j=34 ;j<64;j++){
                                var tds =  tblBodyObj.rows[j].cells[indexCol];
                                if(exception[j-34]['note_dklt']=== "x")
                                {
                                tds.innerHTML = 
                                    `<div class="tick-td"><img class="img-fluid" src="`+tink+`" alt=""></div>
                                    <div class="star-td">
                                        <img class="img-fluid"   src="`+imgOrange+`"  alt="">
                                    </div>
                                    `;
                                }else if(exception[j-34]['note_dklt']=== "-----"){
                                    tds.innerHTML =`<p>`+exception[j-34]['note_dklt']+`</p>
                                    `;
                                }else{
                                    tds.innerHTML =`<p>`+exception[j-34]['note_dklt']+`</p>`+`
                                    <span><button value="`+exception[j-34]['note_dklt']+`" onclick="showNote(this.value)" >...</button></span>
                                    <div class="star-td">
                                    <img class="img-fluid" src="`+imgGreen+`" alt="">
                                </div>
                                    `;
                                }
                            }
                            // for(var i=65;i<84;i++){
                            //     var tds =  tblBodyObj.rows[i].cells[indexCol];
                            //     tds.innerHTML =`<button type="btn btn-primary">`+punishment[i-65]['content']+`</a>`; 
                            //     console.log("line 144",tds);
                            // }
                            
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
                    // span.parent().find('img').remove();
                    // span.parent().removeClass('dropped');
                    // span.parent().removeClass('img-inserted');
                    // span.remove();
                    // $('table tr').find('td:eq(n),th:eq(n)').remove();
                    // $("table tr").find("th:eq("+index+"), td:eq("+(index-1)+")").remove();
                });
                addColumn('main-tbl');
                dropImage();
            },
            out: function( event, ui ){
                $(this).removeClass('dropped');
                // ui.draggable.removeClass('dropped');
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
                  var path_camera = `{{ url('/') }}/assets/images/car/camera.png?{{ config('custom.version') }}`;
                  var path_phone = `{{ url('/') }}/assets/images/car/phone.png?{{ config('custom.version') }}`;
                  var path_mess = `{{ url('/') }}/assets/images/car/mess.png?{{ config('custom.version') }}`;
                 divs.innerHTML = `
                     <div class="count-rank-ctn" >
                        <div class="mark-num"><p><span class="first-span">08</span>/<span>10</span></p></div>
                         <div class="service">
                            <img src="`+path_camera+`"alt="">
                            <img src="`+path_phone+`"alt="">
                            <img src="`+path_mess+`"alt="">
                        </div>
                    </div>
                `;
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
  $(document).ready(function () {
    //   sellect All checkbox
    $('#selectall').click(function () {
        $('.selectedId').prop('checked', this.checked);
    });

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

