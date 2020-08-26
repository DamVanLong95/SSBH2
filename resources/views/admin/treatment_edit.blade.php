@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('treatment.update',$treatment['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Thông tin</h4>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Loại sản phẩm</label>
                        <div class="col-sm-3">
                            <label for="" style="margin-left:15px" >Xe</label>
                            <input type="radio" class="checkmark" value="1" name="type" @if($treatment['type'] == 1)? checked : ''; @endif>
                        </div>  
                        <div class="col-sm-3">
                            <label for="" style="margin-left:15px">Sức khỏe </label>  
                            <input type="radio" class="checkmark" value="2" name="type" @if($treatment['type'] == 2)? checked : ''; @endif>
                        </div>
                        <div class="col-sm-3">
                            <label for="" style="margin-left:15px">Nhân thọ</label>  
                            <input type="radio" class="checkmark" value="3" name="type" @if($treatment['type'] == 3)? checked : ''; @endif>
                        </div>

                    </div>
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Tiêu đề</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  name="title" value= "{{$treatment->title}}" placeholder="enter title name">
                            @if($errors->has('name'))
                                <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Chọn ảnh </label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control">
                            @if($errors->has('file'))
                                <div class="error" style="color: red">{{ $errors->first('file') }}</div>
                            @endif
                            <img src="{{asset('storage/'.$treatment->slide)}}" alt="" class="" style="width:100px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Thêm ảnh cover </label>
                        <div class="col-sm-9">
                            <input type="file" name="img_detail" class="form-control">
                             <img src="{{asset('storage/'.$treatment->img_detail)}}" alt="" class="" style="width:100px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Mô tả </label>
                        <div class="col-sm-9">
                        <textarea placechoder="{{$treatment['description']}}" name="description" rows="4" cols="50" class="form-control"></textarea>
                           
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Người tư vấn</label>
                        <div class="col-md-9">
                            <select class="custom-select " name="advisor_id" >
                                @foreach($advisors as $value)
                                <option value="{{$value['id']}}" 
                                {{ $value->id == $treatment->advisor_id ? 'selected' : '' }}>{{$value['fullname']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-3">

    </div>
@stop
