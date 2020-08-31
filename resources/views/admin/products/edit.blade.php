@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="card-body">
                    <h4 class="card-title">Thêm gói bảo hiểm</h4>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Select company</label>
                        <div class="col-md-9">
                            <select class="custom-select " name="company_id" >
                                <option  value="" selected>--chon--</option>
                                @forelse($companies as $company)
                                    <option value="{{$company['id']}}"{{ $company->id == $product->company_id ? 'selected' : '' }} >{{$company['name']}}</option>
                                    @empty
                                    <option value="" >Data empty</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Tên gói bảo hiểm</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name" value= "{{$product->name}}" placeholder="enter title name">
                            @if($errors->has('name'))
                                <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right ">Select image </label>
                        <div class="col-sm-9">
                             <img src="{{asset('storage/'.$product->url)}}" alt="">
                            <input type="file" name="file" class="form-control">
                            @if($errors->has('file'))
                                <div class="error" style="color: red">{{ $errors->first('file') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-3 text-right control-label col-form-label">Mô tả</label>
                        <div class="col-sm-9">
                            <textarea id="content_post" class="form-control" name="describe" rows="10">{!!$product['describe']!!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label">Sản phẩm mới</label>
                        <label class="switch ">
                            <input type="checkbox" class="primary" name="newest" {{ ($product->newest == 1) ?  'checked' : ''}}>
                        <span class="slider roundSwitch"></span>
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
@stop
