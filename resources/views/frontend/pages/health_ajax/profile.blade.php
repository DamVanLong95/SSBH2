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
                    @if(!$advisor['link_map'])
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.356021421427!2d105.83889371533193!3d21.01843609350559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abdc0c1b029f%3A0xfd35e2f85578d97e!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gVMawIHbhuqVuIEThu4tjaCB24bulIELhuqNvIGhp4buDbSBWaeG7h3QgTmFt!5e0!3m2!1sen!2s!4v1593676651971!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                    @endif
                {!!$advisor['link_map']!!}
                </div>
            </div>
        </div>
</div>
