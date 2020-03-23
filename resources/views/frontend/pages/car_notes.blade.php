    @foreach($brand_cate as $brand)
    <option value="{{$brand['id']}}">{{$brand['cate_car']}}</option>
    @endforeach