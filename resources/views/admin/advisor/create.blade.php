@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('advisor.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title" style="color:green">Thêm thông tin</h4>
                  
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Họ và tên</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="fullname" name="fullname" value= "{{old('fullname')}}" placeholder="Nhập tên đầy đủ">
                            @if($errors->has('fullname'))
                                <div class="error" style="color: red">{{ $errors->first('fullname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Chọn avatar </label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control" >
                            @if($errors->has('file'))
                                <div class="error" style="color: red">{{ $errors->first('file') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Email </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" name="email" value= "{{old('email')}}" placeholder="Nhập email">
                            @if($errors->has('email'))
                                <div class="error" style="color:red">{{ $errors->first('email')}}</div>

                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Quá trình công tác </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="working_process" name="working_process" value="{{old('working_process')}}" placeholder="Quá trình công tác">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Lĩnh vực </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="major" name="major" value= "{{old('major')}}" placeholder="lĩnh vực">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Công việc </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="work" name="work" value= "{{old('work')}}" placeholder="Công việc" >
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Khu vực </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="area" value= "{{old('area')}}" placeholder="Khu vực" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Địa chỉ</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="address" name="address" value= "{{old('address')}}" placeholder="Địa chỉ" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Số điện thoại</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="phone" name="phone" value= "{{old('phone')}}" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Ghi chú</label>
                        <div class="col-md-9">
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="note" >{{old('note')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
