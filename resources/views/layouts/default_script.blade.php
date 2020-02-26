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
    function addColumn() {
    var table = document.getElementById("main");
    var rws = table.rows;
    console.log("hhh",sws);
	var cols = table.rows[0].cells.length;
	var cell;
	for(var i=0;i<rws.length;i++){
		cell = rws[i].insertCell(cols-1);
		// 
	}
}
</script>
<script>
  $(document).ready(function() {
    $('td.img-container').each(function () {
      var td = $(this);
      $('<span class="remove"/>').text('X').appendTo(td);
    });

  $('img.thumb').draggable({
    containment: '#layout-area',
    revert: 'invalid',
    helper: 'clone'
  });

  $('td.img-container').droppable({
    accept: 'img.thumb',
    drop: function (event, ui) {
      var td = $(this);
      var img = ui.draggable;
      var copy = img.clone();
      $(copy).addClass('sized').appendTo(td);
      td.addClass('img-inserted');
      $('span.remove', td).show();
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
$('.dropdown').hover(function() {
        $(this).find('.dropdown-ctn').stop(true, true).delay(200).fadeIn(500);
      }, function() {
        $(this).find('.dropdown-ctn').stop(true, true).delay(200).fadeOut(500);
});
</script>