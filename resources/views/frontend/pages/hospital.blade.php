<div class="network-ctn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="net-hospital-item">
                    <div class="address-ctn">
                        <select aria-label="Select menu example"  name="province" id="province">
                        <option selected>Tỉnh/Thành phố</option>
                        @foreach($locations as $value)
                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="address-ctn">
                        <select aria-label="Select menu example" name="district" id="district">
                            <option selected>Quận/huyện</option>
                          
                        </select>
                    </div>
                </div>
                <div class=" address-detail"  id="info_address">
                    <h5 data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/address.png?{{ config('custom.version') }}" alt=""></span>Hà Nội <span>(0)</span></h5>

                </div>
            </div>
        </div>
    </div>
</div>