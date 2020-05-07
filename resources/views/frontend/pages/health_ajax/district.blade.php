
<option selected>--Chon--</option>
@forelse($districts as $value)
<option value="{{$value['id']}}" class="">{{$value['district']}}</option>
@empty
    <option>Data not update</option>
@endforelse