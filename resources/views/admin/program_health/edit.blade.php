@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('program.update',$program->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Sửa chương trình</h4>
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Tên sản phẩm</label>
                        <div class="col-md-9">
                        <input type="hidden" class="hidden" name="product_id" value="{{$program['product_id']}}">
                            <input type="text" class="form-control" id="product" name="product" value= "{{$program->product->name}}" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Tên chương trình</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name" value= "{{$program['name']}}" placeholder="enter title name">
                            @if($errors->has('name'))
                                <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Chọn ảnh từ máy tính </label>
                        <div class="col-sm-9">
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-3">

    </div>
@stop
