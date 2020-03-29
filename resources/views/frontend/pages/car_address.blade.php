<h5 data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/address.png?{{ config('custom.version') }}" alt=""></span>
{{$data['location'][0]->name}} <span>({{$data['activity'][0]->amount}})</span></h5>
                    <hr class="line">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="cont">
                                    <div class="address-list">
                                        <ul class="car-address" >
                                            @foreach($data['detail'] as $value)
                                                <li class="address-item">
                                                   <div class="no"><span>01</span>{{$value['content']}}</div>
                                                   <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>{{$value['address']}}</div>
                                                   <div class="detail-location"></div>
                                                   <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span>{{$value['phone']}}</div>
                                                </li>
                                           @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>


