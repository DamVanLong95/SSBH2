<!-- <script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


<script>
    $(document).ready(function() {
  //Fixing jQuery Click Events for the iPad
  var ua = navigator.userAgent,
    event = (ua.match(/iPad/i)) ? "touchstart" : "click";
  if ($('.table').length > 0) {
    $('.table .header').on(event, function() {
      $(this).toggleClass("active", "").nextUntil('.header').css('display', function(i, v) {
        return this.style.display === 'table-row' ? 'none' : 'table-row';
      });
    });
  }
// $('.header').click(function(){
//      $(this).toggleClass('expand').nextUntil('tr.header').slideToggle(100);
// });
})
</script>


<script>

      function addColumn(tblId) {


        var myTable = document.getElementById('main-tbl');
        var tblHeadObj = document.getElementById(tblId).tHead;
        var tableLength = document.getElementById('main-tbl').rows[0].cells.length
        console.log("huhuhu", tableLength);
        for (var h = 0; h < tblHeadObj.rows.length; h++) {
          if (tableLength < 5) {
              var creatediv = document.createElement('div');
              var newTH = document.createElement('th');
              $('#select_box').attr("colspan", tableLength +1)
              tblHeadObj.rows[h].appendChild(newTH);
              creatediv.setAttribute('class', "img-container");
              newTH.appendChild(creatediv);

              // newTH.innerHTML = '[th] row:' + h + ', cell: ' + (tblHeadObj.rows[h].cells.length - 1)
              var tblBodyObj = document.getElementById(tblId).tBodies[0];
              for (var i = 0; i < tblBodyObj.rows.length; i++) {

                  var newCell = tblBodyObj.rows[i].insertCell(-1);
                  // newCell.innerHTML = '[td] row:' + i + ', cell: ' + (tblBodyObj.rows[i].cells.length - 1)
              }
              $('#select_box').next("td").remove()
              $('#rank_box').next("td").remove()
          }
        }
          $('div.img-container').each(function () {
              var div = $(this);
              $('<span class="remove"/>').text('X').appendTo(div);
          });
          $('img.thumb').draggable({
              containment: '#layout-area',
              revert: 'invalid',
              helper: 'clone'
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
              var th = $(this);
                  var img = ui.draggable;
                  var copy = img.clone();
                $(this).addClass('dropped');
                // ui.draggable.addClass('dropped');
                
                  $(copy).addClass('sized').appendTo(th);
                  $(this).addClass('img-inserted');
                  $('span.remove', th).show();
            },
            out: function( event, ui ){
                $(this).removeClass('dropped');
                ui.draggable.removeClass('dropped');
            }
        });

          // $('div.img-container').droppable({
          //     accept: 'img.thumb',
          //     drop: function (event, ui) {
          //         var th = $(this);
          //         maxItemsCount = 1;
          //         var img = ui.draggable;
          //         var copy = img.clone();
          //         $(copy).addClass('sized').appendTo(th);
          //         th.addClass('img-inserted');
          //         $('span.remove', th).show();
          //     }
          // });
          $('span.remove').on('click', function (event, ui ) {
            var span = $(this);
              span.parent().find('img').remove();
              span.parent().removeClass('img-inserted');
              span.hide();
              span.parent().removeClass('dropped');
              ui.draggable.removeClass('dropped');
             
          });
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
    $(document).ready(function() {
        $('div.img-container').each(function () {
            var th = $(this);
            $('<span class="remove"/>').text('X').appendTo(th);
        });

        $('img.thumb').draggable({
            containment: '#layout-area',
            revert: 'invalid',
            helper: 'clone'
        });

        $('.img-container').droppable({
            accept: 'img.thumb',
            drop: function (event, ui) {
                var th = $(this);
                console.log(th);
                var img = ui.draggable;
                var copy = img.clone();
                $(copy).addClass('sized').appendTo(th);
                th.addClass('img-inserted');
                $('span.remove', th).show();
            }
        });
        $('span.remove').on('click', function () {
            var span = $(this);
            span.parent().find('img').remove();
            span.parent().removeClass('img-inserted');
            span.hide();
        });
    });
</script>
<script>
  var hidden = false;
    function action() {
        hidden = !hidden;
        if(hidden) {
            document.getElementById('btn-add').style.visibility = 'hidden';
        } else {
            document.getElementById('btn-del').style.visibility = 'visible';
        }
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
 $('.open').click(function(){
  $(this).toggleClass("show ");
  $('.content').toggleClass("show hide");
});

$('.close').click(function(){
  $('.content').toggleClass("show ");
  $('.open').toggleClass("show hide");
});
</script>
