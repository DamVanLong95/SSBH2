@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="col-lg-9">
        <div class="card">
            <form class="form-horizontal" action="{{route('product_longevity.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="card-body">
                    <h4 class="card-title">Thêm gói bảo hiểm</h4>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right control-label col-form-label"><strong>Select company</strong> </label>
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
                        <label for="title" class="col-md-3 text-right control-label col-form-label"><strong>Tên sản phẩm</strong> </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name" value= "{{$product->name}}" placeholder="enter title name">
                            @if($errors->has('name'))
                                <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 text-right "><strong>Select image</strong>  </label>
                        <div class="col-sm-9">
                            <img src="{{asset('storage/'.$product->url)}}" width="200px"alt="">
                            <input type="file" name="file" class="form-control">
                            @if($errors->has('file'))
                                <div class="error" style="color: red">{{ $errors->first('file') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-md-3 text-right "><strong>Loại</strong>  </label>
                        @foreach($classifies as $key=>$classify)
                        <div class="col-sm-2 offset-3">
                            <label for="" style="margin-left:15px" >{{$classify['name']}}</label>
                            <input type="checkbox" class="checkmark" value="{{$classify['id']}}" name="classify[]"  >
                        </div>
                        @endforeach
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
@push('scripts')
<script>
    $(function(){
        var arr = <?php echo $arr?>;
       var checkmark = document.getElementsByClassName('checkmark');
       for( var i=0; i< checkmark.length; i++){
           for(var j =0; j < arr.length;j++){
               if(arr[j]==checkmark[i].value){
                    checkmark[i].checked = true;
               }
           }
          
           
       }
    //    console.log(checkmark);
    //    console.log(arr.length);
    });
</script>
@endpush