<!-- <script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


<script>
    $(document).ready(function() {
  //Fixing jQuery Click Events for the iPad
  // var ua = navigator.userAgent,
  //   event = (ua.match(/iPad/i)) ? "touchstart" : "click";
  // if ($('.table').length > 0) {
  //   $('.table .header').on(event, function() {
  //     $(this).toggleClass("active", "").nextUntil('.header').css('display', function(i, v) {
  //       return this.style.display === 'table-row' ? 'none' : 'table-row';
  //     });
  //   });
  // }
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
            stop: function(event, ui) {
                if($('input[type="checkbox"]').prop("checked") == false){
                    console.log("Checkbox is checked.");
                    $(this).draggable({ disabled: true });
                }
            }
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
                // if($(input[type="checkbox"]).prop("checked") ){
                //     alert("Checkbox is checked.");
                // }
                // // $('#'+idImg+'').draggable({ disabled: false });
            },

            drop: function( event, ui ) {
                var idImg = ui.draggable.attr('id');
                var th = $(this);
                var img = ui.draggable;
                var copy = img.clone();
                $('#checkbox'+idImg+'').prop("checked", true);
                $(this).addClass('dropped');
                $(copy).addClass('sized').appendTo(th);
                $(this).addClass('img-inserted');
                $('<span class="remove" />').text('X').appendTo(th);
                $('span.remove', th).show();
                $('table th').on('click', function (e ) {
                    var index = ($(this).index()+1);
                    $('#checkbox'+idImg+'').prop("checked", false);
                        if( index ==2 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                        }else if(index==2 || index ==0 && !$('div.img-container').is(":not(.dropped)")){
                            console.log("hi");
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl');
                            dropImage();
                        }else if(index==4 && !$('div.img-container').is(":not(.dropped)")){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl');
                            dropImage();
                        }else if(index ==4){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                        }else if(index == 5 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl');
                            dropImage();
                        }else if(index ==3 && !$('div.img-container').is(":not(.dropped)")){

                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl');
                            dropImage();
                        }else if(index ==3 ){
                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
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
    window.onscroll = function() {fixedTop()};

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
    console.log("branch ctn",brandHeight);

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
    $('#selectall').click(function () {
        $('.selectedId').prop('checked', this.checked);
    });

    $('.selectedId').change(function () {
        var check = ($('.selectedId').filter(":checked").length == $('.selectedId').length);
        $('#selectall').prop("checked", check);
    });
  });
</script>
<script>

  

$('.toggle').click(function() {
    $('#net-address').toggle('slow');
});

  
</script>
