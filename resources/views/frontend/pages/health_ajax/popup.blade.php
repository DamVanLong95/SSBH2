@if(count($result['spbt'])==0)
<p class="">Mục này không có hoặc chưa cập nhật dữ liệu</p>
@else
<table class="table table-hover" id="main-tbl-popup">
  <thead>
    <tr>
      <th>{{$result['group_parent']->name}}</th>
      @foreach($result['spbt'] as $value)
      <th scope="col"><label>{{$value['product_longevity_name']}}</label>
        <select name="select" class="spbt">
            <option value="0" class="">--Chon--</option>
            <option value="{{$value['product_more_name']}}" >{{$value['product_more_name']}}</option>
        </select>
      </th>
      @endforeach
    </tr>
  </thead>  
  <tbody>
  @foreach($result['group_child'] as $child)
    <tr>
      <td scope="row">{{$child['group_child']}}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
<script >
 $( document ).ready(function() {
    $('.spbt').on('change', function() {
      var indexCol = ($(this).parent().index());
      var value = $(this).val();
      var url = '{{route('showProduct')}}';
      var myTable = document.getElementById('main-tbl-popup');
      var total = <?php echo $total?>;
     $.post(url,{"_token": "{{ csrf_token() }}", product_name:value}
     ,function(data,status){
       if(data.status == 'success'){
        var benifits = data.benifits;
        for(var i =1; i <= total ; i ++ ){
          var tds =  myTable.rows[i].cells[indexCol];
          tds.innerHTML = '<p class="">'+benifits[i-1]['content']+'</p>';
        }
       }

     }).done(function(){

     })


    });
});
$(function() {
  var myTable = document.getElementById('main-tbl-popup');
        var tblHeadObj = document.getElementById('main-tbl-popup').tHead;
        var tableLength = document.getElementById('main-tbl-popup').rows[0].cells.length
        for (var h = 0; h <= tblHeadObj.rows.length; h++) {
          if (tableLength < 5) {
            
              var tblBodyObj = document.getElementById('main-tbl-popup').tBodies[0];
              for (var i = 0; i < tblBodyObj.rows.length; i++) {
                  var newCell = tblBodyObj.rows[i].insertCell(-1);
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
              $('.spbt').next("td").remove()

          }
        }
});
</script>
@endif
