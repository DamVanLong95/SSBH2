@extends('admin.layouts.master')
@section('styles')
<style >

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  float:right;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.roundSwitch {
  border-radius: 34px;
}

.slider.roundSwitch:before {
  border-radius: 50%;
}
.roundSwitch {
    line-height: 48px;
    color: #fff;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    border-radius: 100%;
    line-height: 52px;
}
</style>
@endsection
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('advisor.update',$advisor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="card-body">
                    <h4 class="card-title" style="color:green">Thêm thông tin</h4>
                  
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Họ và tên</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="fullname" name="fullname" value= "{{$advisor['fullname']}}" placeholder="Nhập tên đầy đủ">
                            @if($errors->has('fullname'))
                                <div class="error" style="color: red">{{ $errors->first('fullname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Chọn avatar </label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control">
                            <img src="{{asset('storage/'.$advisor->avatar)}}" alt="" class="" style="width:200px">
                            @if($errors->has('file'))
                                <div class="error" style="color: red">{{ $errors->first('file') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Email </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" name="email" value= "{{$advisor['email']}}" placeholder="Nhập email">
                            @if($errors->has('email'))
                                <div class="error" style="color:red">{{ $errors->first('email')}}</div>

                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Quá trình công tác </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="working_process" name="working_process" value= "{{$advisor['working_process']}}" placeholder="Quá trình công tác">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Công việc </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="work" name="work" value= "{{$advisor['work']}}"placeholder="Công việc" >
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Khu vực </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="area" value= "{{$advisor['area']}}" placeholder="Khu vực" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Địa chỉ</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="address" name="address" value= "{{$advisor['address']}}" placeholder="Địa chỉ" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Số điện thoại</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="phone" name="phone" value= "{{$advisor['phone']}}" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Ghi chú</label>
                        <div class="col-md-9">
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="note" value="{{$advisor['note']}}"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Lĩnh vực </label>
                        <div class="col-sm-3">
                            <label for="" style="margin-left:15px" >Bảo hiểm phi nhân thọ</label>
                            <input type="radio" class="checkmark" value="2" name="major" {{ ($advisor->major == 2) ?  'checked' : ''}}>
                        </div>
                        <div class="col-sm-3">
                            <label for="" style="margin-left:15px">Bảo hiểm nhân thọ </label>  
                            <input type="radio" class="checkmark" value="1" name="major" {{ ($advisor->major == 1) ?  'checked' : ''}}> 
                        </div>
                        <div class="col-sm-3">
                            <label for="" style="margin-left:15px">Cả hai loại bảo hiểm</label>  
                            <input type="radio" class="checkmark" value="3" name="major" {{ ($advisor->major == 3) ?  'checked' : ''}}>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Nổi bật</label>
                        <label class="switch ">
                            <input type="checkbox" class="primary" name="status" {{ ($advisor->status == 1) ?  'checked' : ''}}>
                        <span class="slider roundSwitch"></span>
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
