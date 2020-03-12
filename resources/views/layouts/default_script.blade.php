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
    $('a[data-modal]').click(function(event) {
        $(this).modal();
        return false;
    });
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
                        var notes = data.summaries;
                        console.log(data.html);
                        if(data.success == true) {
                            var myTable = document.getElementById('main-tbl');
                            var tblBodyObj = document.getElementById('main-tbl').tBodies[0];
                            var tblHeadObj = document.getElementById('main-tbl').tHead;
                            var indexCol = tblHeadObj.rows[0].cells.length - 2;
                            console.log(data);


                            for (var i = 7; i < tblBodyObj.rows.length-16; i++) {
                                var tds =  tblBodyObj.rows[i].cells[indexCol];
                                // console.log(data.summaries[i-7]['note_more']);
                                var imgUrl = ` {{ url('/') }}/assets/images/car/green-star.png?{{ config('custom.version') }}`;
                                if(data.summaries[i-7]['note_more']=='x') {
                                    data.summaries[i - 7]['note_more'] =
                                        `<div class="tick-td">
                                             <img class="img-fluid" src="http://localhost/assets/images/car/tick.png?" alt="">
                                        </div>`;
                                    tds.innerHTML =  `<p>`+data.summaries[i-7]['note_more']+`</p>
                                                       <div class="star-td"><img class="img-fluid"   src="`+imgUrl+`" alt=""></div>`
                                }else if(data.summaries[i-7]['note_more']=='-----'){
                                    tds.innerHTML = `<p>`+data.summaries[i-7]['note_more']+`</p>`;
                                }
                                else{

                                    // console.log(notes[i-7]['note_more']);
                                    var url  = `{{route('show_info')}}`+'/'+ notes[i-7]['note_more'];
                                    tds.innerHTML =`<p>`+data.summaries[i-7]['note_more']+`</p>

                                                    <span><button class="btn-primary" value="`+data.summaries[i-7]['note_more']+`" onclick="showNote(this.value)" >...</button></span>
                                                    <div class="star-td">
                                                        <img class="img-fluid"   src="`+imgUrl+`"  alt="">
                                                     </div>

                                    `;
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
                        }else if(index==2 || index ==0 && !$('div.img-container').is(":not(.dropped)")){
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
                        }else if(index ==4){
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
                        }else if(index ==3 && !$('div.img-container').is(":not(.dropped)")){

                            $('th:nth-child('+index+')').remove()
                            $('td:nth-child('+index+')').remove()
                            addColumn('main-tbl');
                            dropImage();
                        }else if(index ==3 ){
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
     
</script>
<script>
    function showNote(val){
        console.log(val);
        $.ajax({
            url: 'ajaxfile.php',
            type: 'post',
            data: {note: val},
            success: function(response){
                // Add response in Modal body
                // $('.content-ctn').html(response);

                // Display Modal
                $( '#detail-td').modal('show');
            }
        });


    }

</script>

<script>
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
