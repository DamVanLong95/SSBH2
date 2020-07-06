@if(sizeof($data_show)== 0)
<p class="">Mục này không có hoặc chưa cập nhật dữ liệu</p>
@else
<div id="modal"></div>
<table class="table" id="main-popup" style="background: none; color: black">
  <thead>
    <tr>
      <th style="background-color:#d8dad9">Nhóm bệnh</th>
      <th style="background-color:#d8dad9">Nội dung</th>
    </tr>
  </thead>  
  <tbody>
  @foreach ($data_show as $value)
    <tr>
      <td scope="row" style="background: none;">{{$value['insurance']}}</td>
      <td>{{$value['content']}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endif
<script >
$(function(){
  var header = <?php echo ($header)?>;
  var data = <?php echo $data_show ?>;
  var arr = [];
  for (let index = 0; index < header.length; index++) {
    console.log(header[index]);
      arr.push(header[index]);
    
  }
  console.log(header);   


  var myTable = document.getElementById('main-popup');
  // for (let index = 0; index < ; index++) {
  //   var tds =  myTable.rows[index].cells[indexCol];
    
  // }
  
  console.log(data);
  
  
 
});
</script>