<style>
  td.{max-width:400px}
</style>
@if(count($result['spbt_more'])== 0)
<p class="">Mục này không có hoặc chưa cập nhật dữ liệu</p>
@else
<table class="table" id="main-tbl-popup" style="background: none; color: #212529;table-layout:auto;">
  <thead>
    <tr>
   
      <th style="">Chỉ tiêu</th>
      @foreach($result['product_name'] as $name)
      <th style="text-align:center;">
      
        <label value="{{$name['product_longevity_id']}}" data-title ="{{$name->product_longevity_name}}">{{$name->product_longevity_name}}</label><br>
        <select class="spbt" id="dropdown-popup" style="color: #0d723b;
                            font-family: UTM_Helve;
                            line-height: 28px;
                            background: #fff;
                            border: 1px solid #0d723b;
                            " data-placement="bottom">

            <option selected  class="active" title="Chon chuong trinh">Chọn</option>
            @foreach($name['product_more'] as $value)
            <option value="{{$value['product_more_name']}}" title="{{$value['product_more_name']}}">{{\Illuminate\Support\Str::words($value['product_more_name'],5)}}</option>
            @endforeach
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
$(document).ready(function(){
  var myTable = document.getElementById('main-tbl-popup');
  function isEmpty(td) {
      if ( td.text() == '') {
          return true;
      }            

      return false;
  }
  if(myTable){
    $(".selectedId:checked").each(function(){
        if($(this)[0].checked === true){
          var selector;
            selector = $("#main-tbl-popup tr:not(:first)");
           
           $('.spbt').on('change', function() {
            selector.show();
              var indexCol = ($(this).parent().index());
              var value    = $(this).val();
              var title    = $(this).parent().find('label').data('title');
              // console.log(title);
              var url = '{{route('showProduct')}}';
              var product_id = $(this).parent().find('label')[0].getAttribute("value");
              $.post(url,
              {
                "_token": "{{ csrf_token() }}", 
                  product_name:value,
                  product_id:product_id,
                  title:title
              }
              ,function(data,status){
                if(data.status == 'success'){
                  var benifits = data.benifits;
                  for(var i =1; i < myTable.rows.length ; i ++ ){
                    var tds =  myTable.rows[i].cells[indexCol];
                    if(benifits[i-1]!=null){
                      tds.innerHTML = '<p class="">'+ benifits[i-1]['content']+'</p>';
                    }else{
                      if(tds)
                        tds.innerHTML = '<p class=""></p>';
                    }
                  }
                }
              }).done(function(){
               selector.each(function(){
                    var trIsEmpty = true;
                    var tr = $(this);
                    tr.find("td:not(:first)").each(function() {
                      td = $(this);
                        if (isEmpty(td) === false)  {
                          trIsEmpty = false;   
                        }
                    });
                    if (trIsEmpty == true) {
                      tr.hide();
                    }
                });
              })
          });
        }
    });
    
  }
    
});
$(function() {
  var myTable = document.getElementById('main-tbl-popup');
      var tblHeadObj = document.getElementById('main-tbl-popup').tHead;
      var tableLength = document.getElementById('main-tbl-popup').rows[0].cells.length
      var length = <?php echo sizeof($result['product_name'])?>;
      for (var h = 0; h < length; h++) {
        if (tableLength < 7) {
          
            var tblBodyObj = document.getElementById('main-tbl-popup').tBodies[0];
            for (var i = 0; i < tblBodyObj.rows.length; i++) {
                var newCell = tblBodyObj.rows[i].insertCell(-1);
                newCell.setAttribute("class","td");
                var divs =  myTable.rows[1].cells[tblBodyObj.rows[i].cells.length-1];
            }
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
<script>
    $(".spbt").change(function(event) {
      $(this).attr("title", $(this).val());
      $('.spbt').tooltip({
        placement: 'right',
      });
    });
</script>
@endif

