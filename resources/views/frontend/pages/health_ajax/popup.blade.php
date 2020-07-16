@if(count($result['spbt_more'])== 0)
<p class="">Mục này không có hoặc chưa cập nhật dữ liệu</p>
@else
<table class="table" id="main-tbl-popup" style="background: none; color: #212529;table-layout:auto;">
  <thead>
    <tr>
   
      <th style="background: none;">Chỉ tiêu</th>
      @foreach($result['product_name'] as $name)
      <th style="background: none;text-align:center;">
      
        <label value="{{$name['product_longevity_id']}}">{{$name->product_longevity_name}}</label><br>

        <select class="spbt" name="select"  style="color: #0d723b;
                            font-family: UTM_Helve;
                            line-height: 28px;
                            background: #fff;
                            border: 1px solid #0d723b;
                            width: 300px;">

            <option selected disabled>--Chọn--</option>
            @foreach($name['product_more'] as $value)
            <option value="{{$value['product_more_name']}}" >{{\Illuminate\Support\Str::words($value['product_more_name'],7)}}</option>
            @endforeach
        </select>
      </th>
      @endforeach
     
    </tr>
  </thead>  
  <tbody>
  @foreach($result['group_child'] as $child)
    <tr>
      <td scope="row" style="background: none;">{{$child['group_child']}}</td>
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
           $('.spbt').on('change', function() {
              for(var j =1; j< myTable.rows.length; j ++){
                myTable.rows[j].removeAttribute('style');
              }
              // return;
              var indexCol = ($(this).parent().index());
              var value    = $(this).val();
              var url = '{{route('showProduct')}}';
              var product_id = $(this).parent().find('label')[0].getAttribute("value");
              $.post(url,
              {
                "_token": "{{ csrf_token() }}", 
                  product_name:value,
                  product_id:product_id
              }
              ,function(data,status){
                if(data.status == 'success'){
                  var benifits = data.benifits;
                  for(var i =1; i < myTable.rows.length ; i ++ ){
                    var tds =  myTable.rows[i].cells[indexCol];
                    if(benifits[i-1]!=null){
                      tds.innerHTML = '<p class="">'+ benifits[i-1]['content']+'</p>';
                    }
                    
                  }
               
                 
                }
              }).done(function(){
                $("#main-tbl-popup tr:not(:first)").each(function(){
                    var trIsEmpty = true;
                    var tr = $(this);
                  //  console.log(tr);
                    tr.find("td:not(:first)").each(function() {
                      td = $(this);
                        // console.log(td.text());
                        
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
        if (tableLength < 6) {
          
            var tblBodyObj = document.getElementById('main-tbl-popup').tBodies[0];
            for (var i = 0; i < tblBodyObj.rows.length; i++) {
                var newCell = tblBodyObj.rows[i].insertCell(-1);
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
@endif

