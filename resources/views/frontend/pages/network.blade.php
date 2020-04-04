<div class="network-ctn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="net-item">
                    <h5>Trụ sở chính</h5>
                    <div class="address"><p></p></div>
                    <div class="address-ctn">
                        <select aria-label="Select menu example" id="province">
                            <option selected value="0">Tỉnh/Thành phố</option>
                            @foreach($locations as $value)
                            <option value=" {{$value['id']}}">{{$value['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="net-item address-detail" id="address">
                   
                </div>
            </div>
        </div>
    </div>
</div>
