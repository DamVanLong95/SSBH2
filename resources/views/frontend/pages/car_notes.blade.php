   
@forelse($brand_cate as $brand)
<option value="{{$brand['id']}}">{{$brand['cate_car']}}</option>
@empty
    <option>Data not update</option>
@endforelse