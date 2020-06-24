@if(sizeof($data)== 0)
<p class="">Mục này không có hoặc chưa cập nhật dữ liệu</p>
@else
<table class="table" id="main-tbl-popup" style="background: none; color: black">
  <thead>
    <tr>
        <th style="background-color:#d8dad9">Bảo hiểm liên quan</th>
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
<div id="detail-insurance" class="modal"  style="height: auto">
  <h1 style="text-align: center">Danh sách bệnh</h1>
    <div class="content-ctn"  >
        <div id="insurance"></div>
    </div>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <a href="javascript:void(0)">Liên hệ tư vấn</a>
    </button>
</div>