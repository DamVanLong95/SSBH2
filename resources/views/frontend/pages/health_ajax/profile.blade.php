<div id="adiv{{$advisor['id']}}"  class=" detail-ctv targetDiv1">
        <div id="sec-contact-detail" class="sec-contact-detail">
            <div class="section-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail-ctn">
                                <div class="ava-ctn">
                                    <img class="img-fluid" src="storage/{{$advisor['avatar']}}" alt="">
                                </div>
                                <div class="detail-contact">
                                    <div class="name">
                                        {{$advisor['fullname']}}
                                       
                                    </div>
                                    <div class="time-work">
                                        <p class="job-title"><strong>Quá trình hoạt động</strong></p>
                                        <p>{{$advisor['working_process']}}	</p>
                                        <p class="job-title"><strong>Lĩnh vực hoạt động</strong></p>
                                        @if($advisor['major']==2)
                                            <p>Phi nhân thọ</p>
                                        @elseif($advisor['major'] ==1)
                                            <p> Nhân thọ</p>
                                        @elseif($advisor['major'] ==3)
                                            <p>Phi nhân thọ, nhân thọ</p>
                                        @endif

                                        <p class="job-title"><strong>Công việc</strong></p>
                                        <p class="">{{$advisor['work']}}</p>
                                        <p class="job-title"><strong>Khu vực</strong></p>
                                        <p>{{$advisor['area']}}</p>
                                        <p class="job-title"><strong>Liên hệ</strong></p>
                                        <p><a href="tel:{{$advisor['phone']}}">{{$advisor['phone']}}</a><span> | <a href="mailto:{{$advisor['email']}}"> {{$advisor['email']}}</a></span></p>  
                                        <p class=""><a href="{{route('contact.detail',$advisor->slug)}}" style="color:green">Xem chi tiết</a></p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="map-ctn">
                <div class="contact-map mb-5 pb-4"  >
                {!!$advisor['link_map']!!}
                </div>
            </div>
        </div>
</div>
