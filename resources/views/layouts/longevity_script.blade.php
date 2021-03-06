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
                $('#checkbox_tl'+idImg+'').prop("checked", true);
                $('#checkbox_bv'+idImg+'').prop("checked", true);
                if($('#checkbox_tl'+idImg+'').prop("checked") == true){
                    $('#'+idImg+'').draggable({ disabled: true });
                }
                if($('#checkbox_bv'+idImg+'').prop("checked") == true){
                    $('#'+idImg+'').draggable({ disabled: true });
                }
                var myTable = document.getElementById('main-tbl-nt')
                                 tblBodyObj  = myTable.tBodies[0]
                                 tblHeadObj  = myTable.tHead
                                 indexCol    = tblHeadObj.rows[0].cells.length - 1;
                var url = '{{route('droppLongevity')}}';
                $.post(url, {"_token": "{{ csrf_token() }}", id: idImg,  indexCol:indexCol}
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
                        // th.innerHTML = data.product_name.name;
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
                            var tds =  tblBodyObj.rows[i].cells[indexCol];
                            tds.innerHTML = `
                                                <p class="ellipsis">`+longevities[i-6]['content']+`</p>
                                    `;
                            // tds.innerHTML = '<p class="text">'+longevities[i-6]['content']+'</p>';
                        }

                        //============Quyen loi san pham================
                        const row   = document.getElementById('benifit');
                                    const index = row.rowIndex;
                                    var tdss    = tblBodyObj.rows[index].cells[indexCol] ;
                        for(var i=index; i<= index+17 ;i++){
                            var tds =  tblBodyObj.rows[i].cells[indexCol];
                            if(longevities[i-9]['content']!=null){
                                tds.innerHTML =  '<p class="text">'+longevities[i-9]['content']+'</p>';
                            }
                          
                         }
                         //  ===========San Pham bo tro==================
                        for(var i=33; i<=36 ;i++){
                            var tds =  tblBodyObj.rows[i].cells[indexCol];
                            if(longevities[i-9]['content']!=null){
                                tds.innerHTML =  `<p class="text">`+longevities[i-9]['content']+`</p>`;
                            }
                          
                         }
                        //  ===========Cac loai phi========================
                         for(var i=38; i<=44 ;i++){
                            var tds =  tblBodyObj.rows[i].cells[indexCol];
                            // console.log(longevities[i-5]['content']);
                          ;
                            if(longevities[i-9]['content']!=null){
                                if(validURL(longevities[i-9]['content'])==true){
                                    tds.innerHTML = `<button onClick="clickLink()">Open Tab</button> <a id="link" href="`+longevities[i-9]['content']+`" target="_blank" hidden></a>`;
                                }else
                                tds.innerHTML =  '<p class="text" >'+longevities[i-9]['content']+'</p>';
                            }
                         }
                           //  ===========Loai tru bao hiem========================
                         var tink    =`{{ url('/') }}/assets/images/car/tick.png?{{ config('custom.version') }}`;
                         for(var i=47; i<=57 ;i++){
                            var tds =  tblBodyObj.rows[i].cells[indexCol];
                            // tds.style = "p-wrap";
                            if(longevities[i-10]['content']!=null){
                                tds.innerHTML =  '<p class="text">'+longevities[i-10]['content']+'</p>';
                            }
                            if(longevities[i-10]['content']==='x'){
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
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index== 2 || index == 0 && !$('div.img-container').is(":not(.dropped)")){
                            console.log("hi");
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl-nt');
                            dropImage();
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl-nt');
                            dropImage();
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
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
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index == 3 && !$('div.img-container').is(":not(.dropped)")){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            // addColumn('main-tbl-nt');
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            dropImage();
                        }else if(index == 3 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            $('#checkbox_bv'+idImg+'').prop("checked", false);
                            $('#checkbox_tl'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }
                });
                addColumn('main-tbl-nt');
                dropImage();
            },
            out: function( event, ui ){
                $(this).removeClass('dropped');
            }

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
              $('.select-all').attr("colspan", tableLength ),
              $('.td-all').attr("colspan", tableLength +1),
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
              $('.td-all').next("td").remove()
              $('.select-all').next("td").remove()

          }
        }

      }
     
</script>
<script>
    function validURL(str) {
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
    window.onscroll = function() {fixedTop()};

    var tblHeader = document.getElementById("tableHeader");
    // var sticky = tblHeader.offsetTop();
    var menuHeight = $(".block-main-menu").outerHeight();
    var sec1Height = $(".sec1-wrapper").height();
    var searchHeight = $(".search-ctn").outerHeight();
    var compareHeight = $(".compare-section").outerHeight();
    var brandHeight = $(".brand-section").outerHeight();

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
    //   toogle hospital address
    $('.toggle').click(function() {
        // $('#hospital-tr').toggle('slow');
    });
  });
</script>
