@extends('layouts.default')
@section('header')
    <title>{{ config('custom.seo_title') }}</title>
    <meta name="description" content="{{ config('custom.seo_description') }}">
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="{{ url('/')  }}" />
    <meta property="og:url" content="{{ Request::url()  }}" />
    <meta property="og:image" content="{{ url('uploads/others/fbimage.jpg?'.config('custom.version'))  }}" />
    <meta property="og:title" content="{{ config('custom.seo_title') }}" />
    <meta property="og:description" content="{{ config('custom.seo_description') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@stop

@section('content')
<div class="question-container">
    <div class="contact-floating">
        <div class="contact-email"><a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/default/phone-intro.png?{{ config('custom.version') }}" alt=""></a></div>
        <div class="contact-phone"><a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/default/email-intro.png?{{ config('custom.version') }}" alt=""></a></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-question-tab" data-toggle="tab" href="#nav-question" role="tab" aria-controls="nav-question" aria-selected="true">Các câu hỏi thường gặp</a>
                        <a class="nav-item nav-link" id="nav-term-tab" data-toggle="tab" href="#nav-term" role="tab" aria-controls="nav-term" aria-selected="false">Giải thích thuật ngữ</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="question-term-ctn">
                    <section id="tabs">
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-question" role="tabpanel" aria-labelledby="nav-question-tab">
                                <div class="question-ctn">
                                    <div class="question-part">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse0" class="collapsed" aria-expanded="false">
                                                        THAM GIA BẢO HIỂM NHÂN THỌ ĐỂ LÀM GÌ?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse0" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.
                                                    Vậy, Anh/Chị hãy sớm tham gia bảo hiểm với Bảo Việt Nhân thọ để được bảo vệ về tài chính cho bản thân và gia đình và có đựơc sự an tâm trong cuộc sống.</u></div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed" aria-expanded="false">
                                                        TÔI NGHE TƯ VẤN VỀ QUYỀN LỢI THẤY RẤT HAY NHƯNG CŨNG LO LẮNG KHÔNG BIẾT SỐ TIỀN CỦA MÌNH CÓ ĐƯỢC BẢO ĐẢM KHÔNG?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.
                                                    Vậy, Anh/Chị hãy sớm tham gia bảo hiểm với Bảo Việt Nhân thọ để được bảo vệ về tài chính cho bản thân và gia đình và có đựơc sự an tâm trong cuộc sống.</u></div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false">
                                                        TÔI THAM GIA BẢO HIỂM NHÂN THỌ TẠI BẢO VIỆT NHÂN THỌ, NHƯNG CHỈ SỢ THỜI GIAN BẢO HIỂM DÀI CẢ CHỤC NĂM, LỠ MAI MỐT MÌNH LÀM ĂN THẤT BẠI KHÔNG CÓ TIỀN ĐÓNG TIẾP, CÓ BỊ MẤT SỐ TIỀN ĐÃ ĐÓNG KHÔNG?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">
                                                        KHI THAM GIA BẢO HIỂM, DOANH NGHIỆP BẢO HIỂM CÓ QUYỀN CHẤM DỨT HỢP ĐỒNG BẢO HIỂM GIỮA CHỪNG KHÔNG?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" aria-expanded="false">
                                                        TÔI ĐANG ĐÓNG PHÍ NĂM NHƯNG MỘT THỜI GIAN TÌNH HÌNH TÀI CHÍNH KHÓ KHĂN TÔI CHUYỂN SANG ĐÓNG PHÍ KỲ HẠN NGẮN HƠN CÓ ĐƯỢC KHÔNG?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse4" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed" aria-expanded="false">
                                                        TÔI THAM GIA BẢO HIỂM Y TẾ RỒI THÌ CÓ NHẬN ĐƯỢC QUYỀN LỢI BẢO HIỂM TRỢ CẤP PHẪU THUẬT VÀ ĐIỀU TRỊ NGOẠI KHOA KHÔNG?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed" aria-expanded="false">
                                                        TÔI CÓ THỂ MUA BẢO HIỂM CHO NHỮNG AI TRONG GIA ĐÌNH?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed" aria-expanded="false">
                                                        GIẢI THÍCH CHO TÔI VỀ LÃI CHIA?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="collapsed" aria-expanded="false">
                                                        BẢO VIỆT NHÂN THỌ ĐẦU TƯ TIỀN CỦA KHÁCH HÀNG NHƯ THẾ NÀO?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse8" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed" aria-expanded="false">
                                                        CÓ BẰNG CHỨNG GÌ ĐẢM BẢO CÔNG TY BẢO HIỂM CAM KẾT CHI TRẢ TIỀN KHI THAM GIA BẢO HIỂM?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse9" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed" aria-expanded="false">
                                                        CHỦ DOANH NGHIỆP CÓ THỂ THAM GIA BẢO HIỂM NHÂN THỌ CHO NGƯỜI LAO ĐỘNG CỦA DOANH NGHIỆP ĐƯỢC KHÔNG?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse10" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="collapsed" aria-expanded="false">
                                                        NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                    Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-term" role="tabpanel" aria-labelledby="nav-term-tab">
                                <div class="term-ctn">
                                    <div class="searchinput">
                                        <input type="text" name="q" placeholder=" search..." class="text" required>
                                        <button type="submit" class="submit">Tìm</button>
                                    </div>
                                    <div class="alpha-ctn">
                                        <div class="alpha-left">
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a href="#A">A</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_x" class="collapsed" aria-expanded="false">
                                                                NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_x" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                            Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_a" class="collapsed" aria-expanded="false">
                                                            NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse_a" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                        Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_b" class="collapsed" aria-expanded="false">
                                                            NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse_b" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                        Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                    </div>
                                                </div>
                                                </div>
                                            
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a href="#B">B</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_x2" class="collapsed" aria-expanded="false">
                                                                NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_x2" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                            Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_a2" class="collapsed" aria-expanded="false">
                                                            NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse_a2" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                        Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_b2" class="collapsed" aria-expanded="false">
                                                            NẾU CÔNG TY BỊ PHÁ SẢN THÌ TIỀN CỦA TÔI SẼ NHƯ THẾ NÀO?</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse_b2" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="panel-body">Thưa anh/chị, anh/chị có thể hoàn toàn yên tâm khi tham gia bảo hiểm với Bảo Việt Nhân thọ. Là doanh nghiệp bảo hiểm nhân thọ đầu tiên và có uy tín trên thị trường, đến nay, sau 17 năm hoạt động, Bảo Việt Nhân thọ đã và đang phục vụ hơn 5 triệu lượt khách hàng trên toàn quốc. Bảo Việt Nhân thọ cũng đã giải quyết đền bù bảo hiểm cho hàng chục ngàn trường hợp yêu cầu thanh toán quyền lợi bảo hiểm, với tổng số tiền đền bù hàng trăm tỷ đồng; trong đó có trường hợp có số tiền đền bù rất lớn (10 tỷ đồng).
                                                        Ngoài uy tín và thương hiệu của Bảo Việt, Hợp đồng bảo hiểm còn chính là cam kết có giá trị pháp lý trên cơ sở đã được Bộ Tài Chính phê duyệt. Hợp đồng bảo hiểm là sự thỏa thuận giữa Bên mua bảo hiểm và Doanh nghiệp bảo hiểm, theo đó, nếu Bên mua bảo hiểm đóng đầy đủ phí bảo hiểm, thì Doanh nghiệp bảo hiểm phải thực hiện việc chi trả quyền lợi bảo hiểm cho khách hàng theo đúng Điều khoản Hợp đồng.</div>
                                                    </div>
                                                </div>
                                                </div>
                                            
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#C">C</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#D">D</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#E">E</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#F">F</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#J">J</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#H">H</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#I">I</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#J">J</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#K">K</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#L">L</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#M">M</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#N">N</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#O">O</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#P">P</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#Q">Q</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#R">R</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#S">S</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#T">T</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#U">U</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#V">V</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#X">X</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#Y">Y</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#Z">Z</a>
                                                </div>
                                                <div class="index-content">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    
</div>

@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop