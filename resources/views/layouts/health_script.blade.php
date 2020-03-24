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
                            addColumn('main-tbl-sk');
                            dropImage();
                            $('#checkbox_'+idImg+'').prop("checked", false);
                            $('#'+idImg+'').draggable({ disabled: false });
                        }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl-sk');
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
                            addColumn('main-tbl-sk');
                            dropImage();
                            $('#checkbox_'+idImg+'').prop("checked", false);
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
        var tableLength = document.getElementById('main-tbl-sk').rows[0].cells.length
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
            //   var x =  myTable.rows[4].cells;
            //   var y =  myTable.rows[5].cells;
            //   x[tableLength].setAttribute('rowspan',2);
            //   y[1].remove();
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
