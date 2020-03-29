@foreach($detail as $value)
<li class="address-item">
     <div class="no"><span>01</span>{{$value['content']}}</div>
    <div class="location"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/location.png?{{ config('custom.version') }}" alt=""></span>{{$value['address']}}</div>
    <div class="detail-location"></div>
    <div class="phone-contact"><span><img class="img-fluid" src="{{ url('/') }}/assets/images/car/phone-contact.png?{{ config('custom.version') }}" alt=""></span>{{$value['phone']}}</div>
 </li>
 @endforeach