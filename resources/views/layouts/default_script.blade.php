<script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script>
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