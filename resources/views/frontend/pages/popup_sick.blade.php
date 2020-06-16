@if(sizeof($data)== 0)
<p class="">Mục này không có hoặc chưa cập nhật dữ liệu</p>
@else
<table class="table" id="main-tbl-popup" style="background: none; color: black">
  <thead>
    <tr>
        <th style="background-color:#d8dad9">Giai đoạn đầu</th>
        <th style="background-color:#d8dad9">Nội dung</th>
    </tr>
  </thead>  
  <tbody>
  @foreach ($data as $value)
    <tr>
      <td scope="row" style="background: none;">{{$value['insurance']}}</td>
      <td>{{$value['content']}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endif
