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
    <a class="btn-call-now" href="tel:1900988965">
        <i class="fa fa-phone"></i>
        <span>1900988965</span>
    </a>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-knowledge-tab" data-toggle="tab" href="#nav-knowledge" role="tab" aria-controls="nav-knowledge" aria-selected="true">Kiến thức</a>
                        <a class="nav-item nav-link " id="nav-question-tab" data-toggle="tab" href="#nav-question" role="tab" aria-controls="nav-question" aria-selected="true">Các câu hỏi thường gặp</a>
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
                            <div class="tab-pane fade show active" id="nav-knowledge" role="tabpanel" aria-labelledby="nav-knowledge-tab">
                                <div class="knowledge-ctn">
                                    <div class="knowledge-wrapper">
                                        <div class="row">
                                            @foreach($blogs as $value)
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="item-knowledge ">
                                                        <a href="{{route('blog.show',['id'=>$value->id,'slug'=>$value->slug])}}" target="_blank"><img src="storage/{{$value['avatar'] }}" alt=""></a>
                                                        <div class="description-ctn">
                                                            <a href="{{route('blog.show',['id'=>$value->id,'slug'=>$value->slug])}}">{{$value['title']}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-question" role="tabpanel" aria-labelledby="nav-question-tab">
                                <div class="question-ctn">
                                    <div class="question-part">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse0" class="collapsed" aria-expanded="false">
                                                        "Phạm vi điều chỉnh Luật Kinh doanh BH? 
                                                            Khách hàng của công ty BH có thuộc phạm vi điều chỉnh của Luật Kinh doanh BH không?"?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse0" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                    – Luật Kinh doanh BH có phạm vi điều chỉnh bao gồm các tổ chức và hoạt động kinh doanh BH (DNBH, DN Môi giới BH, đại lý BH) và các tổ chức cá nhân tham gia BH nhằm đảm bảo quyền nghĩa vụ và lợi ích hợp pháp chính đáng của các đối tượng trên (Điều 1. Luật Kinh doanh BH quy định).<br>
                                                    – Người tham gia BH (Khách hàng) là một trong các đối tượng được điều chỉnh của Luật KDBH.</u></div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed" aria-expanded="false">
                                                        Người có nhu cầu BH có được mua BH của doanh nghiệp BH không hoạt động tại Việt Nam hay không</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">Tổ chức, cá nhân có nhu cầu BH chỉ được tham gia BH tại doanh nghiệp BH hoạt động ở Việt Nam</u></div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false">
                                                        Quyền của DNBH khi thực hiện hợp đồng BH</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Quyền của DNBH được quy định cụ thể trong HĐBH. Nếu HĐBH không quy định cụ thể và đầy đủ thì quyền của DNBH được thực hiện theo Luật KDBH. Điều 17 khoản 1 Luật KDBH quy định: 
                                                    Doanh nghiệp BH có quyền:<br>
                                                    a) Thu phí BH theo thoả thuận trong hợp đồng BH;<br>
                                                    b) Yêu cầu bên mua BH cung cấp đầy đủ, trung thực thông tin liên quan đến việc giao kết và thực hiện hợp đồng BH;<br>
                                                    c) Đơn phương đình chỉ thực hiện hợp đồng BH theo quy định:<br>
                                                    Doanh nghiệp BH có quyền đơn phương đình chỉ thực hiện hợp đồng BH và thu phí BH đến thời điểm đình chỉ thực hiện hợp đồng BH khi bên mua BH có một trong những hành vi sau đây (khoản 2 điều 19):<br>
                                                    + Cố ý cung cấp thông tin sai sự thật nhằm giao kết hợp đồng BH để được trả tiền BH hoặc được bồi thường;<br>
                                                    + Không thực hiện các nghĩa vụ trong việc cung cấp thông tin cho doanh nghiệp BH theo quy định.<br>
                                                    Thông báo trường hợp có thể làm tăng rủi ro hoặc làm phát sinh thêm trách nhiệm của doanh nghiệp BH.<br>
                                                    –  Khi có sự thay đổi những yếu tố làm cơ sở để tính phí BH, dẫn đến tăng các rủi ro được BH thì doanh nghiệp BH có quyền tính lại phí BH cho thời gian còn lại của hợp đồng BH. Trong trường hợp bên mua BH không chấp nhận tăng phí BH thì doanh nghiệp BH có quyền đơn phương đình chỉ thực hiện hợp đồng BH, nhưng phải thông báo ngay bằng văn bản cho bên mua BH.<br>
                                                    –  Trong trường hợp phí BH được đóng nhiều lần và bên mua BH đã đóng một hoặc một số lần phí BH nhưng không thể đóng được các khoản phí BH tiếp theo thì sau thời hạn 60 ngày, kể từ ngày gia hạn đóng phí, doanh nghiệp BH có quyền đơn phương đình chỉ thực hiện hợp đồng, bên mua BH không có quyền đòi lại khoản phí BH đã đóng nếu thời gian đã đóng phí BH dưới hai năm, trừ trường hợp các bên có thoả thuận khác.<br>
                                                    –   Trong trường hợp người được BH không thực hiện các biện pháp bảo đảm an toàn cho đối tượng BH thì doanh nghiệp BH có quyền ấn định một thời hạn để người được BH thực hiện các biện pháp đó; nếu hết thời hạn này mà các biện pháp bảo đảm an toàn vẫn không được thực hiện thì doanh nghiệp BH có quyền tăng phí BH hoặc đơn phương đình chỉ thực hiện hợp đồng BH.<br>
                                                    d) Từ chối trả tiền BH cho người thụ hưởng hoặc từ chối bồi thường cho người được BH trong trường hợp không thuộc phạm vi trách nhiệm BH hoặc trường hợp loại trừ trách nhiệm BH theo thoả thuận trong hợp đồng BH;<br>
                                                    đ) Yêu cầu bên mua BH áp dụng các biện pháp đề phòng, hạn chế tổn thất theo quy định của Luật này và các quy định khác của pháp luật có liên quan;<br>
                                                    e) Yêu cầu người thứ ba bồi hoàn số tiền BH mà doanh nghiệp BH đã bồi thường cho người được BH do người thứ ba gây ra đối với tài sản và trách nhiệm dân sự;<br>
                                                    g) Các quyền khác theo quy định của pháp luật.”"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">
                                                        Nghĩa vụ của DNBH khi thực hiện hợp đồng BH?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"1. Người mua BH có các quyền quy định trong HĐBH. Nếu HĐBH không quy định thì xét xử theo Luật KDBH. Điều 18 khoản 1, Luật KDBH quy định một số quyền của người mua BH như sau:<br>
                                                        “a) Lựa chọn doanh nghiệp BH hoạt động tại Việt Nam để mua BH;<br>
                                                        b) Yêu cầu doanh nghiệp BH giải thích các điều kiện, điều khoản BH; cấp giấy chứng nhận BH hoặc đơn BH;<br>
                                                        c) Đơn phương đình chỉ thực hiện hợp đồng BH theo quy định là:
                                                        – Trong trường hợp doanh nghiệp BH cố ý cung cấp thông tin sai sự thật nhằm giao kết hợp đồng BH thì bên mua BH có quyền đơn phương đình chỉ thực hiện hợp đồng BH; doanh nghiệp BH phải bồi thường thiệt hại phát sinh cho bên mua BH do việc cung cấp thông tin sai sự thật.(Khoản 3 điều 19)<br>
                                                        2. Khi có sự thay đổi những yếu tố làm cơ sở để tính phí BH, dẫn đến giảm các rủi ro được BH thì bên mua BH có quyền yêu cầu doanh nghiệp BH giảm phí BH cho thời gian còn lại của hợp đồng BH. Trong trường  hợp doanh nghiệp BH không chấp nhận giảm phí BH thì bên mua BH có quyền đơn phương đình chỉ thực hiện hợp đồng BH, nhưng phải thông báo ngay bằng văn bản cho doanh nghiệp BH.(Khoản 1 điều 20)<br>
                                                        d) Yêu cầu doanh nghiệp BH trả tiền BH cho người thụ hưởng hoặc bồi thường cho người được BH theo thoả thuận trong hợp đồng BH khi xảy ra sự kiện BH;<br>
                                                        đ) Chuyển nhượng hợp đồng BH theo thoả thuận trong hợp đồng BH hoặc theo quy định của pháp luật;<br>
                                                        e) Các quyền khác theo quy định của pháp luật.”"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" aria-expanded="false">
                                                        Nghĩa vụ của người mua BH</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse4" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Người mua BH có các nghĩa vụ quy định trong HĐBH, nếu HĐBH không quy định thì xét xử theo Luật KDBH. Điều 18 khoản 2, Luật KDBH quy định các nghĩa vụ cơ bản của người mua BH như sau:<br>
                                                        “a) Đóng phí BH đầy đủ, theo thời hạn và phương thức đã thỏa thuận trong hợp đồng BH;<br>
                                                        b) Kê khai đầy đủ, trung thực mọi chi tiết có liên quan đến hợp đồng BH theo yêu cầu của doanh nghiệp BH;<br>
                                                        c) Thông báo những trường hợp có thể làm tăng rủi ro hoặc làm phát sinh thêm trách nhiệm của doanh nghiệp BH trong quá trình thực hiện hợp đồng BH theo yêu cầu của doanh nghiệp BH;<br>
                                                        d) Thông báo cho doanh nghiệp BH về việc xảy ra sự kiện BH theo thoả thuận trong hợp đồng BH;<br>
                                                        đ) Áp dụng các biện pháp đề phòng, hạn chế tổn thất theo quy định của Luật này và các quy định khác của pháp luật có liên quan;<br>
                                                        e) Các nghĩa vụ khác theo quy định của pháp luật.”"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed" aria-expanded="false">
                                                        Trách nhiệm cung cấp thông tin trung thực và đầy đủ của DNBH với khách hàng tham gia BH</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Đây là trách nhiệm quan trọng của DNBH, thể hiện tính chính xác trung thực đầy đủ lời cam kết của mình. Điều 19 khoản 1 và khoản 3 Luật KDBH quy định:<br>
                                                    “Khi giao kết hợp đồng BH, doanh nghiệp BH có trách nhiệm cung cấp đầy đủ thông tin liên quan đến hợp đồng BH, giải thích các điều kiện, điều khoản BH cho bên mua BH; DNBH chịu trách nhiệm về tính chính xác, trung thực của thông tin đó.”<br>
                                                    “..Trong trường hợp doanh nghiệp BH cố ý cung cấp thông tin sai sự thật nhằm giao kết hợp đồng BH thì bên mua BH có quyền đơn phương đình chỉ thực hiện hợp đồng BH; doanh nghiệp BH phải bồi thường thiệt hại phát sinh cho bên mua BH do việc cung cấp thông tin sai sự thật.”<br>
                                                    Khi giao kết BH, doanh nghiệp BH đưa ra lời cam kết về điều kiện và phương thức bồi thường nên mọi thông tin đưa ra để cam kết phải là trung thực, rõ ràng. Đó là cơ sở để người tham gia BH lựa chọn có chấp nhận mua BH hay không."</div>
                                                    </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed" aria-expanded="false">
                                                        Trách nhiệm cung cấp thông tin trung thực và đầy đủ của khách hàng tham gia BH với DNBH </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Khách hàng mua BH phải cung cấp thông tin trung thực và đầy đủ để DNBH đánh giá rủi ro, chấp nhận rủi ro, chấp nhận BH, tính phí BH cho phù hợp với những thông tin nhận được. Điều 19 khoản 1 và khoản 2 Luật KDHB quy định
                                                    “Bên mua BH có trách nhiệm….”
                                                    Doanh nghiệp BH có trách nhiệm giữ bí mật về thông tin do bên mua BH cung cấp.<br>
                                                    2. Doanh nghiệp BH có quyền đơn phương đình chỉ thực hiện hợp đồng BH và thu phí BH đến thời điểm đình chỉ thực hiện hợp đồng BH khi bên mua BH có một trong những hành vi sau đây:  <br>
                                                    a) Cố ý cung cấp thông tin sai sự thật nhằm giao kết hợp đồng BH để được trả tiền BH hoặc được bồi thường;<br>
                                                    b) Không thực hiện các nghĩa vụ trong việc cung cấp thông tin cho doanh nghiệp BH theo quy định:<br>
                                                    –  Thông báo những trường hợp có thể làm tăng rủi ro hoặc làm phát sinh thêm trách nhiệm của doanh nghiệp BH trong quá trình thực hiện hợp đồng BH theo yêu cầu của doanh nghiệp BH (Điểm c khoản 2 điều 18)<br>
                                                    Để giao kết BH, doanh nghiệp BH cần dựa trên cơ sở thông tin cần thiết yêu cầu khách hàng cung cấp khi đó đánh giá được rủi ro, xác định phí BH."</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed" aria-expanded="false">
                                                        Bảo vệ quyền lợi khách hàng tham gia BH nếu xảy ra tranh chấp khi hợp đồng BH không được quy định rõ ràng?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Điều khoản không rõ ràng là những điều khoản có thể được giải thích hoặc được hiểu bằng nhiều nghĩa khác nhau. Điều 21 Luật KDBH quy định:<br>
                                                    “Trong trường hợp hợp đồng BH có điều khoản không rõ ràng thì điều khoản đó được giải thích theo hướng có lợi cho bên mua BH.”
                                                    Vì HĐBH là hợp đồng mẫu (in sẵn) nên Bộ Luật Dân sự cũng quy định “Nếu trong hợp đồng này có những điều khoản, từ ngữ không rõ ràng thì sẽ được giải thích theo cách có lợi cho người mua BH”
                                                    Đây là biện pháp bảo vệ quyền và lợi ích chính đáng của khách hàng và làm cho doanh nghiệp BH phải thận trọng hơn trong năm soạn thảo hợp đồng BH, các mẫu giấy chứng nhận BH, giấy yêu cầu BH sao cho rõ ràng, mạch lạc, chính xác."</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="collapsed" aria-expanded="false">
                                                        HĐ BH chấm dứt khi nào?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse8" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Ngoài các trường hợp chấm dứt hợp đồng theo quy định của Bộ luật dân sự, hợp đồng BH còn chấm dứt trong các trường hợp sau đây:<br>

                                                    1. Bên mua BH không còn quyền lợi có thể được BH.<br>

                                                    2. Bên mua BH không đóng đủ phí BH hoặc không đóng phí BH theo thời hạn thỏa thuận trong hợp đồng BH, trừ trường hợp các bên có thỏa thuận khác.<br>

                                                    3. Bên mua BH không đóng đủ phí BH trong thời gian gia hạn đóng phí BH theo thỏa thuận trong hợp đồng BH."</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed" aria-expanded="false">
                                                        Hậu quả pháp lý khi hợp đồng BH chấm dứt</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse9" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Tùy theo mức độ vi phạm của các bên mà hậu quả pháp lý khi chấm dứt HĐBH được quy định khác nhau. Điều 24 Luật KDBH quy định:<br>
                                                    “1. Trong trường hợp chấm dứt hợp đồng BH theo quy định tại khoản 1 Điều 23 của Luật này (câu hỏi 49) doanh nghiệp BH phải hoàn lại phí BH cho bên mua BH tương ứng với thời gian còn lại của hợp đồng BH mà bên mua BH đã đóng phí BH, sau khi đã trừ các chi phí hợp lý có liên quan đến 
                                                    hợp đồng BH.<br>
                                                    2. Trong trường hợp chấm dứt hợp đồng BH theo quy định tại khoản 2 Điều 23 của Luật này (câu hỏi 49) bên mua BH vẫn phải đóng đủ phí BH đến thời điểm chấm dứt hợp đồng BH. Quy định này không áp dụng đối với hợp đồng BH con người.<br>
                                                    3. Trong trường hợp chấm dứt hợp đồng BH theo quy định tại khoản 3 Điều 23 của Luật này (câu hỏi 49) doanh nghiệp BH vẫn phải chịu trách nhiệm bồi thường cho người được BH khi sự kiện BH xảy ra trong thời gian gia hạn đóng phí; bên mua BH vẫn phải đóng phí BH cho đến hết thời gian gia hạn theo thoả thuận trong hợp đồng BH. Quy định này không áp dụng đối với hợp đồng BH con người.<br>
                                                    4. Hậu quả pháp lý của việc chấm dứt hợp đồng BH trong các trường hợp khác được thực hiện theo quy định của Bộ luật dân sự và các quy định khác của pháp luật có liên quan.”  "</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed" aria-expanded="false">
                                                        Khi đối tượng được BH chuyển nhượng cho người khác thì khách hàng mua BH có thể chuyển nhượng hợp đồng BH cho người nhận chuyển nhượng đối tượng BH được không?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse10" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Việc chuyển nhượng và cách thức chuyển nhượng HĐBH được quy định cụ thể trong HĐBH. Tuy nhiên nếu HĐBH không quy định thì thực hiện theo Luật KDBH. Điều 26 Luật KDBH quy định:<br>
                                                    2. Việc chuyển nhượng hợp đồng BH chỉ có hiệu lực trong trường hợp bên mua BH thông báo bằng văn bản cho doanh nghiệp BH về việc chuyển nhượng và doanh nghiệp BH có văn bản chấp thuận việc chuyển nhượng đó, trừ trường hợp việc chuyển nhượng được thực hiện theo tập quán quốc tế.<br>
                                                    Việc chuyển nhượng hợp đồng BH là đương nhiên để đảm bảo quyền và lợi ích khách hàng. Tuy nhiên với tài sản được chuyển nhượng là được người chủ mới khai thác sử dụng không đúng mục đích đã tham gia BH thì người chủ mới phải khai báo kịp thời cho doanh nghiệp BH."</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="collapsed" aria-expanded="false">
                                                        Thời hạn yêu cầu DNBH trả tiền BH hoặc bồi thường?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">"Thời hạn yêu cầu trả tiền hoặc bồi thường được quy định cụ thể trong HĐBH. Nếu HĐBH không quy định rõ ràng thì thực hiện theo Luật KDBH. Điều 28 Luật KDBH quy định:<br>
                                                        “1. Thời hạn yêu cầu trả tiền BH hoặc bồi thường theo hợp đồng BH là một năm, kể từ ngày xảy ra sự kiện BH. Thời gian xảy ra sự kiện bất khả kháng hoặc trở ngại khách quan khác không tính vào thời hạn yêu cầu trả tiền BH hoặc bồi thường.<br>
                                                        2. Trong trường hợp bên mua BH chứng minh được rằng bên mua BH không biết thời điểm xảy ra sự kiện BH thì thời hạn quy định tại khoản 1 Điều này được tính từ ngày bên mua BH biết việc xảy ra sự kiện BH đó.<br>
                                                        3. Trong trường hợp người thứ ba yêu cầu bên mua BH bồi thường về những thiệt hại thuộc trách nhiệm BH theo thoả thuận trong hợp đồng BH thì thời hạn quy định tại khoản 1 Điều này được tính từ ngày người thứ ba yêu cầu.<br>
                                                        Trong thời gian nói trên, người được BH phải làm đủ thủ tục để yêu cầu DNBH trả tiền hoặc bồi thường. Nếu quá hạn trên thì yêu cầu của người BH sẽ không được chấp nhận. Quy định thời hạn để khách hàng tham gia BH phải khẩn trương thực hiện quyền đòi bồi thường, đồng thời đảm bảo được tính thời sự, chính xác để doanh nghiệp BH có thể giám định xác định tổn thất."</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13" class="collapsed" aria-expanded="false">
                                                        Thời hạn DNBH phải trả tiền BH hoặc bồi thường?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse13" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "DNBH phải trả tiền hoặc bồi thường trong vòng 15 ngày kể từ ngày nhận đủ hồ sơ hợp lệ của người được BH yêu cầu bồi thường. Điều 29 Luật KDBH quy định:<br>
                                                    “Khi xảy ra sự kiện BH, doanh nghiệp BH phải trả tiền BH hoặc bồi thường theo thời hạn đã thoả thuận trong hợp đồng BH; trong trường hợp không có thoả thuận về thời hạn thì doanh nghiệp BH phải trả tiền BH hoặc bồi thường trong thời hạn 15 ngày, kể từ ngày nhận được đầy đủ hồ sơ hợp lệ về yêu cầu trả tiền BH hoặc bồi thường.”
                                                    Nếu quá thời hạn quy định trên DNBH không giải quyết sẽ phải trả thêm lãi theo lãi suất ngân hàng cho số tiền chậm trả đó. Thời hạn tối đa 15 ngày nói trên là quy định cho tất cả các hợp đồng BH. Vì vậy khi soạn thảo hợp đồng BH các doanh nghiệp BH chỉ có quyền đề ra thời hạn ngắn hơn 15 ngày hoặc bằng."</div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse14" class="collapsed" aria-expanded="false">
                                                        Thời hiệu khởi kiện liên quan đến hợp đồng BH?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse14" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Khi không tán thành cách chi trả hoặc giải quyết bồi thường của DNBH, khách hàng được BH có thể thương lượng với DNBH để giải quyết. Nếu không giải quyết được có thể khởi kiện ra tòa án hoặc trọng tài xét xử. Điều 30 Luật KDBH quy định rõ: <br>
                                                    Thời hiệu khởi kiện về hợp đồng BH là ba năm, kể từ thời điểm phát sinh tranh chấp.<br>
                                                    Thời hiệu khởi kiện ghi trên các hợp đồng BH của doanh nghiệp BH soạn thảo sẵn tất nhiên không được nhỏ hơn 3 năm và nếu dài hơn 3 năm thì càng được khuyến khích. Quy định thời hiệu khiếu kiện để doanh nghiệp BH có điều kiện khôi phục, thu thập hồ sơ tài liệu trước đó liên quan đến khiếu kiện để giải trình trước cơ quan xét xử hoặc hoà giải."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse15" class="collapsed" aria-expanded="false">
                                                        Tách/nhập công ty BH ảnh hưởng gì đến quyền lợi BH của khách hàng hay không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse15" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    * Việc tách/ nhập giữa các công ty BH không ảnh hưởng gì đến quyền lợi của khách hàng. Pháp luật kinh doanh BH Việt Nam quy định chặt chẽ về việc này nhằm bảo vệ quyền lợi của BMBH/ NĐBH.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse16" class="collapsed" aria-expanded="false">
                                                        Quyền lợi của khách hàng mua BH khi DNBH không tồn tại do chia tách, hợp nhất, sáp nhập, giải thể hoặc lâm vào tình trạng có nguy cơ mất khả năng thanh toán
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse16" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Bộ Tài chính là cơ quan quản lý Nhà nước kiểm soát và phê duyệt các trường hợp DNBH không tồn tại do chia tách, hợp nhất, sáp nhập trong đó ưu tiên đảm bảo quyền lợi hợp pháp chính đáng của người tham gia BH rồi mới cấp phép hình thành DNBH mới (do chia tách sáp nhập hoặc hợp nhất) hoặc giải thể DNBH cũ. <br>Trường hợp DNBH lâm vào tình trạng mất khả năng thanh toán thì Bộ Tài chính với tư cách là cơ quan giám sát và quản lý Nhà nước về hoạt động kinh doanh BH sẽ đứng ra giải quyết nhằm đảm bảo quyền lợi hợp pháp chính đáng của người tham gia BH. Điều 74 Luật KDBH quy định:<br>
                                                    “1. Việc chuyển giao toàn bộ hợp đồng BH của một hoặc một số nghiệp vụ BH giữa các doanh nghiệp BH được thực hiện trong những trường hợp sau đây:<br>
                                                    a) Doanh nghiệp BH có nguy cơ mất khả năng thanh toán;<br>
                                                    b) Doanh nghiệp BH chia, tách, hợp nhất, sáp nhập, giải thể;<br>
                                                    c) Theo thoả thuận giữa các doanh nghiệp BH.<br>
                                                    2. Trong trường hợp doanh nghiệp BH có nguy cơ mất khả năng thanh toán, giải thể mà không thoả thuận được việc chuyển giao hợp đồng BH cho doanh nghiệp BH khác thì Bộ Tài chính chỉ định doanh nghiệp BH nhận chuyển giao. <br>
                                                    Những quy định trên nhằm đảm bảo cho khách hàng giữ nguyên quyền và lợi ích theo hợp đồng BH đã ký kết."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse17" class="collapsed" aria-expanded="false">
                                                        Lưu ý khi kí kết hợp đồng BH thông qua ngân hàng 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse17" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Khi ký kết hợp đồng BH thông qua ngân hàng, khách hàng cần nắm được những thông tin sau: <br>
                                                    - Gói BH mình kí kết thuộc công ty BH nào? <br>
                                                    - Ghi lại thông tin của TVV là nhân viên ngân hàng : Tên, chi nhánh , bộ phận <br>
                                                    - Ghi lại những nội dung mà TVV đã tư vấn và yêu cầu TVV đó ký xác nhận <br>
                                                    - Trong một số t.h cần thu âm, quay clip lại để làm bằng chứng về việc tư vấn đó <br>
                                                    - Nắm được các quy định về giải quyết khiếu nại, bồi thường , nhắc đóng phí, và phục vụ hợp đồng nếu TVV là nhân viên ngân hàng chuyển bộ phận hoặc hãng BH không liên kết với ngân hàng đó nữa. 
                                                    Lưu ý: Khách hàng nên chủ động tìm hiểu, đối chiếu quyền lợi do TVV là nhân viên ngân hàng tư vấn và điều khoản ghi trong bộ hợp đồng và đọc hiểu kỹ bộ hợp đồng trong 21 ngày tự do xem xét. "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse18" class="collapsed" aria-expanded="false">
                                                        Khi kí kết hợp đồng BH, có cần người thứ 3 làm chứng? Có cần báo với người nhà về sự kí kết này hay không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse18" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Trong quá trình kí kết hợp đồng BH, nếu có thể, hãy đề nghị người thứ 3 là người có chuyên môn, hiểu biết về BH, như nhà tư vấn độc lập, luật sư...tham gia chứng kiến, làm chứng về quá trình ký kết. 
                                                    Nên báo cho người nhà biết về việc giao kết hợp đồng BH này, hướng dẫn người nhà cũng hiểu sơ bộ về quyền lợi và thủ tục pháp lý của hợp đồng, cũng như số điện thoại của công ty BH và TVV phục vụ hợp đồng , để đề phòng những t.h đột xuất rủi ro xảy ra. 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse19" class="collapsed" aria-expanded="false">
                                                        Hình thức bồi thường
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse19" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Tài sản bị tổn thất có thể có nhiều cách khôi phục lại tài sản đó bằng cách sữa chữa phần hư hại, thay thế bằng tài sản tương đương, trong đó có thể DNBH làm những việc trên hoặc người được BH đứng ra làm và được DNBH thanh toán lại các chi phí đã bỏ ra khi được DNBH chấp thuận. Điều 47 Luật KDBH quy định:<br>
                                                    “1. Bên mua BH và doanh nghiệp BH có thể thoả thuận một trong các hình thức bồi thường sau đây: <br> 
                                                    a) Sửa chữa tài sản bị thiệt hại;<br>
                                                    b) Thay thế tài sản bị thiệt hại bằng tài sản khác;<br>
                                                    c) Trả tiền bồi thường.<br>
                                                    2. Trong trường hợp doanh nghiệp BH và bên mua BH không thoả thuận được về hình thức bồi thường thì việc bồi thường sẽ được thực hiện bằng tiền.<br>
                                                    3. Trong trường hợp bồi thường theo quy định tại điểm b và điểm c khoản 1 Điều này, doanh nghiệp BH có quyền thu hồi tài sản bị thiệt hại sau khi đã thay thế hoặc bồi thường toàn bộ theo giá thị trường của tài sản.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse19" class="collapsed" aria-expanded="false">
                                                        Khi nào thì hợp đồng bảo hiểm bắt đầu có hiệu lực?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse19" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hợp đồng bảo hiểm sẽ bắt đầu có hiệu lực vào 0.00 giờ ngày hiệu lực được thể hiện trên giấy chứng nhận bảo hiểm, miễn là bạn phải thanh toán phí bảo hiểm cho công ty bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse20" class="collapsed" aria-expanded="false">
                                                        Thời gian mua bảo hiểm tối thiểu là bao lâu?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse20" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Thời hạn chuẩn của sản phẩm bảo hiểm này là 1 năm và sẽ được tái tục hàng năm theo chính sách của công ty bảo hiểm. Nếu mua ngắn hạn ( ít hơn 1 năm) thì bạn phải trả phí ngắn hạn.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse21" class="collapsed" aria-expanded="false">
                                                        Tôi có cần kiểm tra sức khỏe khi tham gia không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse21" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Khách hàng không cần phải trải qua bất kỳ một cuộc kiểm tra sức khỏe nào trừ một số trường hợp đặc biệt khi Công ty Bảo hiểm yêu cầu cung cấp thêm thông tin về tình trạng sức khỏe phục vụ cho công tác cấp đơn một cách hợp lý.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse22" class="collapsed" aria-expanded="false">
                                                        Độ tuổi tham gia bảo hiểm là bao nhiêu ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse22" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hầu hết các công ty bảo hiểm sẽ áp dụng cho độ tuổi phổ biến là từ 1 đến 60 tuổi. Tuy nhiên một số công ty bảo hiểm có thể áp dụng cho độ tuổi trẻ sơ sinh ( dưới 1 tuổi) hoặc áp dụng cho nhóm khách hàng trên 60-65 tuổi, có khả năng tái tục tới 72 tuổi.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse23" class="collapsed" aria-expanded="false">
                                                        Thời gian chờ trong bảo hiểm sức khỏe là gì ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse23" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Trong các hợp đồng bảo hiểm sức khỏe sẽ áp dụng khoảng thời gian chờ cho những quyền lợi cụ thể, trong thời gian này thì các quyền lợi bảo hiểm nếu phát sinh sẽ không được bồi thường, thông thường thời gian chờ tiêu chuẩn sẽ là:<br>
                                                    + 0 ngày đối với tai nạn<br>
                                                    + 30 ngày đối với bệnh thông thường<br>
                                                    + 365 ngày đối với bệnh đặc biệt và có sẵn<br>
                                                    + 270 ngày đối với quyền lợi thai sản ( sinh đẻ)<br>
                                                    Tùy theo nhà bảo hiểm mà quyền lợi này sẽ có thể điều chỉnh."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse24" class="collapsed" aria-expanded="false">
                                                        Sau khi tham gia, tôi có thể thay đổi quyền lợi bảo hiểm không ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse24" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Chương trình bảo hiểm là 1 năm và bạn không thể thay đổi được quyền lợi trong suốt thời gian này.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse25" class="collapsed" aria-expanded="false">
                                                        Tôi có thể hủy hợp đồng bảo hiểm trước khi hết hạn được không ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse25" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Nếu trước ngày hết hạn hợp đồng mà bạn muốn hủy đơn bảo hiểm thì phải điền vào đơn bảo hiểm để gửi cho công ty bảo hiểm. Tùy theo công ty bảo hiểm mà sẽ có chính sách hoàn phí cho những trường hợp chưa phát sinh bồi thường
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse26" class="collapsed" aria-expanded="false">
                                                        Tôi có thể chọn bất kỳ bệnh viện nào để khám chữa bệnh không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse26" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Khách hàng có thể lựa chọn bất kỳ bệnh viện, phòng khám nào mà Khách hàng muốn khám chữa bệnh với điều kiện bệnh viện/phòng khám đó được phép hoạt động và điều trị hợp pháp và có thể cung cấp hóa đơn/chứng từ tài chính hợp lệ.
                                                    Trường hợp sử dụng bảo lãnh viện phí bạn cần kiểm tra xem bệnh viện/ phòng khám có thuộc Hệ thống bệnh viện bảo lãnh không ? Và quyền lợi bảo hiểm có được áp dụng bảo lãnh không ?
                                                    "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse27" class="collapsed" aria-expanded="false">
                                                        Bảo lãnh viện phí là gì ? Khi nào cần thẻ bảo lãnh viện phí
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse27" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Nhiều bệnh viện và phòng khám đã liên kết với các công ty bảo hiểm giúp khách hàng thanh toán viện phí ngay tại bệnh viện nhằm rút ngắn thời gian và công sức cho khách hang thông qua hình thức bảo lãnh viện phí. Sử dụng dịch vụ bảo lãnh viện phí còn giúp khách hàng giảm bớt gánh nặng tài chính trong quá trình khám và điều trị bệnh, đặc biệt trong những trường hợp chi phí lớn. Khách hàng chỉ phải thanh toán các chi phí y tế không thuộc phạm vi bảo hiểm hoặc vượt quá hạn mức trách nhiệm bảo hiểm, còn lại là do bên công ty bảo hiểm chi trả.<br>
 
                                                    Để được bảo lãnh, bạn cần xuất trình thẻ bảo lãnh viện phí và giấy tờ tùy thân (CMND, hộ chiếu hoặc giấy khai sinh đối với trẻ em) trước khi sử dụng dịch vụ y tế"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse27" class="collapsed" aria-expanded="false">
                                                        Tôi có thể yêu cầu bồi thường chi phí phẫu thuật trong trường hợp chi phí này đã được công ty hoặc hợp đồng bảo hiểm khác thanh toán không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse28" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Do đơn bảo hiểm này dựa trên cơ sở bồi hoàn, do đó, nếu như Khách hàng đã nhận được bồi hoàn toàn bộ số chi phí mà Khách hàng bỏ ra thì Khách hàng sẽ không được bồi hoàn thêm một lần nữa (ngoại trừ quyền lợi Trợ cấp nằm viện).
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse28" class="collapsed" aria-expanded="false">
                                                        Khi yêu cầu bồi thường bảo hiểm, tôi phải nộp chứng từ bằng bản chính hay bản sao?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse29" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Các chứng từ tài chính như hóa đơn, biên lai, phiếu thu của bệnh viện/phòng khám/nhà thuốc thì Khách hàng phải nộp bản chính. Các chứng từ y tế như chẩn đoán bệnh của bác sỹ điều trị và các giấy tờ liên quan như toa thuốc, kết quả xét nghiệm, báo cáo y tế, giấy nhập/xuất viện, giấy chứng nhận phẫu thuật, sổ khám bệnh… Khách hàng có thể nộp bản sao.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse30" class="collapsed" aria-expanded="false">
                                                        Liệu có thể đòi bồi thường kết hợp với bảo hiểm y tế hay đơn bảo hiểm sức khoẻ khác không ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse30" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hoàn toàn kết hợp được. Đối với các quyền lợi tử vong bạn có thể đòi theo các đơn khác nhau. Đối với quyền lợi khám chữa bệnh luôn đảm bảo chi phí đó chỉ được thanh toán 1 lần theo hạn mức đơn bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse31" class="collapsed" aria-expanded="false">
                                                        Tôi chơi bóng đá với đồng nghiệp, bị gãy chân, phải nằm viện điều trị. Liệu có được thanh toán quyền lợi điều trị nội trú không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse31" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Nếu bạn tham gia thể thao với tính chất giải trí, không phải tham gia các giải đấu chuyên nghiệp, thì vẫn được xem xét thanh toán. Bạn cần gửi hồ sơ yêu cầu giải quyết quyền lợi bảo hiểm để có phản hồi cụ thể.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse32" class="collapsed" aria-expanded="false">
                                                        Tôi cảm thấy sức khỏe bất thường nên đi khám và làm một số xét nghiệm. Kết quả khám bình thường, vậy có được thanh toán không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse32" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Bạn sẽ được chi trả quyền lợi bảo hiểm trong trường hợp điều trị bệnh hoặc thương tích. Kết quả chẩn đoán, toa thuốc và thuốc điều trị được bác sĩ kê là một trong những cơ sở để xem xét chi trả. Nếu kết quả khám và xét nghiệm bình thường, sẽ không được thanh toán vì không thuộc phạm vi bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse33" class="collapsed" aria-expanded="false">
                                                        Tôi khám sức khỏe định kỳ, qua các xét nghiệm phát hiện tôi có bệnh. Vậy có được thanh toán chi phí khám định kỳ và chi phí điều trị bệnh không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse33" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Manulife sẽ xem xét thanh toán chi phí điều trị bệnh, nhưng không chi trả cho chi phí khám sức khỏe định kỳ vì thuộc điều khoản loại trừ. Trường hợp kết quả xét nghiệm bất thường, cần phải chữa bệnh tại cơ sở y tế thì sẽ được thanh toán chi phí điều trị.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse34" class="collapsed" aria-expanded="false">
                                                        Khi nào tôi được sử dụng dịch vụ chăm sóc y tế tại nhà?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse34" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Khi có chỉ định của bác sĩ và điều này cần thiết về mặt y khoa, được thực hiện trong vòng 30 ngày sau khi xuất viện. Quyền lợi này không áp dụng cho trường hợp xuất viện sau sinh.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse35" class="collapsed" aria-expanded="false">
                                                        Thanh toán phí BH ô tô như thế nào có được nợ phí BH không? Nợ trong thời gian bao lâu? Thanh toán phí BH có gì khác giữa BH tự nguyện và BH bắt buộc?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse35" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Quý khách có thể thanh toán phí bằng cách nộp tiền mặt, hoặc Séc trực tiếp cho cán bộ, đại lý bán BH cho quý khách. Ngoài ra, có thể chuyển khoản hay các hình thức thanh toán khác theo thỏa thuận giữa quý khách và DNBH.<br>
                                                    Đối với sản phẩm BH bắt buộc TNDS chủ xe cơ giới, Bộ tài chính quy định không được cho nợ phí, phải thanh toán đầy đủ các khoản phí BH trước khi cấp GCN BH cho KH.<br>
                                                    Đối với các sản phẩm BH tự nguyện thì thông thường trong BH là không được nợ phí. Tuy nhiên đối với các trường hợp đặc biệt KH là:<br>
                                                    - Đối tượng truyền thống có quan hệ thường xuyên liên tục lâu dài hiệu quả với DNBH.<br>
                                                    - Là tổ chức kinh doanh, doanh nghiệp làm ăn có hiệu quả, tình hình tài chính lành mạnh<br>
                                                    Thì DNBH xem xét tùy từng trường hợp cụ thể để có thể gia hạn thanh toán phí hay cho nợ một phần phí để tạo điều kiên thuận lợi cho KH trong quá trình thanh toán phí. Việc cho phép nợ phí, cam kết thời hạn đóng phí sẽ được lập thành văn bản là bằng chứng cũng như là sự xác nhận trách nhiệm đã cam kết giữa 2 bên. Chủ xe cần thanh toán phí đúng hạn theo thỏa thuận để được hưởng quyền lợi BH"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse36" class="collapsed" aria-expanded="false">
                                                        BH TNDS của chủ xe đối với hàng hóa trên xe là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse36" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Là BH trách nhiệm dân sự của chủ xe đối với hàng hoá vận chuyển trên xe theo hợp đồng vận chuyển của chủ xe và chủ hàng bị tổn thất trong các trường hợp xe bị đâm va, lật, đổ, chìm, rơi, hỏa hoạn, cháy, nổ, bị các vật thể khác rơi, va chạm vào.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse37" class="collapsed" aria-expanded="false">
                                                        Xin cho biết quyền lợi BH trách nhiệm dân sự chủ xe đối với hàng hóa trên xe?cho biết về những điểm loại trừ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse37" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Quyền lợi và phạm vi được BH
                                                        Trách nhiệm của Chủ xe phải bồi thường cho chủ hàng về những tổn thất hàng hoá vận chuyển trên xe theo Bộ Luật dân sự trong những trường hợp xe bị: <br>
                                                        - Đâm va, lật, đổ, rơi; chìm; hoả hoạn, cháy, nổ; bị các vật thể khác rơi, va chạm vào; <br>
                                                        - Những tai họa bất khả kháng do thiên nhiên: Bão, lũ lụt, sụt lở, sét đánh, động đất, mưa đá, sóng thần;<br>
                                                        Ngoài ra, DNBH còn thanh toán cho Chủ xe các chi phí cần thiết, hợp lý nhằm:<br>
                                                        - Ngăn ngừa, giảm nhẹ tổn thất thêm cho hàng hoá.<br>
                                                        - Bảo quản, xếp dỡ, lưu kho, lưu bãi hàng hoá trong quá trình vận chuyển do hậu quả của tai nạn.<br>
                                                        - Giám định tổn thất thuộc trách nhiệm của DNBH.<br>
                                                        DNBH mở rộng phạm vi bồi thường trong trường hợp hàng hoá của chính Chủ xe.<br>
                                                        Không thuộc phạm vi BH<br>
                                                        Thiệt hại xảy ra trong những trường hợp sau thuộc phạm vi loại trừ BH:<br>
                                                        - Hành động cố ý gây thiệt hại của Chủ xe, Lái xe, hoặc của người bị thiệt hại.<br>
                                                        - Xe tham gia giao thông không có Giấy chứng nhận kiểm định, Lái xe không có Giấy phép lái xe hợp lệ Đua xe (hợp pháp hoặc trái phép);<br>
                                                        - Thiệt hại có tính chất hậu quả gián tiếp như: Giảm giá trị thương mại, ngừng sản xuất, sử dụng, khai thác;<br>
                                                        - Tai nạn xảy ra ngoài lãnh thổ Việt Nam;<br>
                                                        - Xe chở chất cháy, chất nổ trái phép;<br>
                                                        - Xe chở quá 30% trọng tải hoặc số chỗ ngồi theo quy định 
                                                        - Chiến tranh.<br>
                                                        - Hàng bị thiếu, mất cắp, trộm, cướp, sai thể loại, quy cách, sai mã ký hiệu.<br>
                                                        - Hàng bị hư hỏng do bản chất tự nhiên.<br>
                                                        - Hàng hoá lưu thông trái phép; Hàng bị cơ quan kiểm soát Nhà nước thu giữ, bắt giữ hoặc bị hư hỏng do chậm trễ, trừ chậm trễ do tai nạn.<br>
                                                        - Hàng hoá bị cháy không do lỗi của bên vận tải. Súc vật sống bị ốm chết do thời tiết hoặc dịch bệnh hoặc bị kiểm dịch.<br>
                                                        - Vàng bạc, đá quý; Tiền, các loại ấn chỉ, hoá đơn có giá trị như tiền, đồ cổ, tranh ảnh quý hiếm; Thi hài, hài cốt.<br>
                                                        - Tổn thất hàng hoá do bị xô lệch, va đập trong quá trình vận chuyển mà không phải do xe đâm va, lật, đổ, rơi;"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse38" class="collapsed" aria-expanded="false">
                                                        Xe gây tai nạn, xe bị giữ làm hàng hóa trên xe bị hư hỏng thì có được bồi thường không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse38" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Đối với trường hợp xe gây tai nạn và bị giữ. DNBH sẽ bồi thường những thiệt hại về xe do tai nạn nếu xe có tham gia BH, không chịu trách nhiệm đối với các hư hỏng do chậm trễ(không do tai nạn) đối với hàng hóa trên xe.<br>
                                                    Nếu xe bị giữ, cơ quan chức năng không yêu cầu khám nghiệm hay giữ lại hàng hóa thì đưa ra lời khuyên với chủ xe nên tìm biện pháo bảo quản hay đưa hàng hóa đi đến nơi nhận bằng phương tiện khác."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse39" class="collapsed" aria-expanded="false">
                                                        Trường hợp hàng hóa, tài sản chuyên chở trên xe rơi xuống gây thiệt hại cho bên thứ ba khi xe đang chạy; tai nạn gây thiệt hại cho người thứ ba do lỗi của hành khách (ví dụ: mở cửa xe đột ngột, không quan sát) thì BH TNDS của chủ xe cơ
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse39" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "– Hàng hóa, tài sản rơi xuống khi xe đang vận hành bình thường thông thường là do lỗi của người chất xếp, chằng buộc hàng hóa, tài sản và rủi ro đó tuy xảy ra trong quá trình sử dụng xe nhưng không có nguyên nhân từ bản thân hoạt động của xe nên BH trách nhiệm dân sự của chủ xe không <br>
                                                    – Đối với trường hợp hành khách có lỗi hoàn toàn trong thiệt hại của bên thứ ba thì ở nhiều nước khác trách nhiệm này có thể được BH bằng loại hình BH trách nhiệm dân sự khác, có nghĩa là BH trách nhiệm dân sự của chủ xe cơ giới đối với ngư ời thứ ba không có trách nhiệm bồi thường."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse40" class="collapsed" aria-expanded="false">
                                                        BH xe mô tô gồm những loại gì? Phí BH ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse40" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "BH xe mô tô bao gồm 3 gói sản phẩm BH chính:<br>
                                                    - BH bắt buộc TNDS của chủ xe đối với bên thứ 3 phí BH: 80.000đ/năm với xe trên 50cm3 (chưa VAT)<br>
                                                    - BH tai nạn con người theo chỗ ngồi trên xe máy: Tỉ lệ phí từ 0.1% đến 0.3% x STBH với STBH tăng dàn từ 3trđ đến 30,000$/ng/vụ.<br>
                                                    - BH vật chất xe máy phí: 0.45% x giá trị xe với xe dưới 50trđ 
                                                    0.9% x giá trị xe với xe trên 50trđ
                                                    Nhân viên hướng dẫn cần dùng câu hỏi đễ dẫn dắt KH đưa ra về thông tin xe và các sản phẩm BH yêu cầu từ đó căn cứ vào bảng giá xe máy (Phụ lục đính kèm) để tư vấn."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse41" class="collapsed" aria-expanded="false">
                                                        BH thủy kích (hay BH ngập nước) là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse41" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Phạm vi BH này thực sự hữu ích cho khách hàng trong tình trạng đường sá ngập nước rất dễ xảy ra hư hỏng nặng nề cho xe ô tô, đặc biệt là những dòng xe cao cấp:<br>
                                                    Xe ôtô bị thiệt hại động cơ hoặc hư hỏng về điện do lỗi vô ý của lái xe điều khiển xe đi vào vùng ngập nước sẽ được DNBH bồi thường, nếu xe có tham gia BH vật chất xe (không áp dụng đối với BH thân vỏ xe- BH bộ phận). Trong trường hợp xe bị ngập nước đã chết máy hoặc dừng hoạt động mà người điều khiển xe nổ máy trở lại gây thiệt hại thì sẽ không thuộc phạm vi trách nhiệm 
                                                    bồi thường."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse42" class="collapsed" aria-expanded="false">
                                                        Xe của tôi có được BH mất cắp bộ phận không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse42" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Hiện nay, các DNBH có cung cấp sản phẩm BH này cho khách hàng. Khách hàng có thể chọn mua thêm sản phẩm BH này khi xe có tham gia BH vật chất, Chủ xe được DNBH bồi thường tổn thất cho những bộ phận bị mất cắp cho mỗi bộ phận theo điều kiện sau:<br>
                                                    01 lần cho mỗi bộ phận đối với các hợp đồng BH có thời hạn đến 1 năm.<br>
                                                    02 lần cho mỗi bộ phận đối với các hợp đồng BH có thời hạn lớn hơn 1 năm.<br>
                                                    Mức miễn bồi thường không khấu trừ là 2 tr.đ/vụ.
                                                    Phí kèm điều kiện BH mất cắp bộ phận – áp dụng đối với BH vật chất sẽ tăng thêm khoảng 15% so với biểu phí cơ bản mà DNBH đưa ra."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse43" class="collapsed" aria-expanded="false">
                                                        BH áp dụng mức miễn bồi thường có khấu trừ là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse43" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Nếu KH tham gia loại hình BH này, khi xảy ra thiệt hại thuộc hợp đồng BH thì áp dụng nguyên tắc sau:<br>
                                                    Thiệt hại xe dưới mức miễn thường, chủ xe tự chịu.<br>
                                                    Thiệt hại trên mức miễn thường, thì số tiền bồi thường BH bằng(=) thiệt hại trừ (-) mức khấu trừ.<br>
                                                    Điều kiện áp dụng: Xe có BH vật chất xe ôtô.<br>
                                                    Biểu Phí:<br>
                                                    - Không áp dụng miễn thường chung (quy định trong Quy tắc): Phí tăng tối thiểu 5%<br>
                                                    - Chủ xe có thể lựa chọn mức khấu trừ để được giảm phí BH, cụ thể tỷ lệ phí được giảm từ 3% đến 35% mới mức khấu trừ tăng dần từ 500.000đ đến 10trđ.<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse44" class="collapsed" aria-expanded="false">
                                                        Tôi có được mua BH theo điều kiện mở rộng ngoài phạm vi lãnh thổ nước Việt nam? Nếu được gồm những loại hình BH gì , quyền lợi thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse44" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Không chỉ gói gọn trọng phạm vi lãnh thổ VN, BV còn phát triển các sản phẩm BH mở rộng ra ngoài biên giới cho khách hàng với đầy đủ các sản phẩm BH như ở trong nước. Các sản phẩm BH bao gồm:<br>
                                                    BH TNDS đối với bên thứ 3, bao gồm BH TNDS bắt buộc và BH TNDS tự nguyện với mức tăng thêm trên 50trđ/vụ.<br>
                                                    ▪ BH TNDS bắt buộc của chủ xe đối với hành khách trên xe(trường hợp nếu xe có kinh doanh vận tải hành khách).<br>
                                                    ▪ BH TNDS của chủ xe đối với hàng hóa trên xe (trường hợp nếu xe có kinh doanh vận tải hàng hóa).<br>
                                                    ▪ BH tai nạn con người theo chỗ ngồi trên xe.<br>
                                                    ▪ BH vật chất xe, bao gồm BH vật chất toàn bộ xe hoặc chỉ BH thân vỏ<br>
                                                    Đối với các sản phẩm này KH sẽ được nhận đầy đủ các quyền lợi BH như trong nước.<br>
                                                    Khách hàng tham gia loại hình BH này sẽ phải đóng mức phí bằng 150% so với mức phí BH trong nước.<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse45" class="collapsed" aria-expanded="false">
                                                        Xe tôi bị tai nạn ở nước ngoài có được bồi thường không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse45" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Trường hợp KH không tham gia lại hình BH mở rộng ra ngoài lãnh thổ VN khi có tai nạn xảy ra gây thiệt hại DNBH không chịu trách nhiệm.<br>
                                                    Nếu khách hàng có xe ô tô dự kiến sẽ di chuyển trong phạm vi 4 nước quanh khu vực: Trung Quốc, Lào, Campuchia, Thái Lan thì nên mua thêm sản phảm BH mở rộng ra ngoài lãnh thổ, khi tai nạn xảy ra thuộc phạm vi BH thì DNBH sẽ bồi thường cho KH theo đầy đủ các quyền lợi như đã quy định trong hợp đồng. KH có thể lựa chọn sửa chữa xe tại nơi tai nạn hoặc đưa xe về nước."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse46" class="collapsed" aria-expanded="false">
                                                        Tại sao lại áp dụng mức khấu trừ khi tham gia BH vật chất?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse46" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Mức khấu trừ các DNBH áp dụng nhằm đến những mục đích sau:<br>
                                                    - Đặt ra một mức trách nhiệm cho chính khách hàng, đặc biệt là lái xe đối với xe được BH, Mức trách nhiệm tuy thấp nhưng sẽ giúp KH ý thức hơn về việc giữ gìn đảm bảo tài sản của mình.<br>
                                                    - Các mức khấu trừ được đặt ra để khách hàng lựa chọn tương ứng với mức phí BH giảm theo mong muốn.<br>
                                                    - Ngoài ra mức khấu trừ áp dụng trong hợp đồng BH còn giúp chính khách hàng và DNBH tiết kiệm các khoản thời gian chi phí không cần thiết đối với các trường hợp tai nạn với thiệt hại nhỏ tổn thất không đáng kể mà chủ xe có thể tự thanh toán chi phí thiệt hại."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse47" class="collapsed" aria-expanded="false">
                                                        Tôi không có giấy phép lái xe có được bồi thường không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse47" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Không có giấy phép lái xe là một điều khoản loại trừ BH của DNBH, vì vậy nếu tai nạn xảy ra, lái xe gây tai nạn không có giấy phép lái xe thì sẽ không được bồi thường.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse48" class="collapsed" aria-expanded="false">
                                                        Xe chở quá tải có được hưởng quyền lợi BH không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse48" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Đối với loại hình BH TNDS trừ BH TNDS chủ xe đối với hàng hóa, khi xe chở vượt tải gây tai nạn vẫn thuộc phạm vi được BH, được hưởng các quyền lợi BH theo như quy định.<br>
                                                    Đối với các loại hình BH còn lại: BH vật chất xe, BH TNDS chủ xe đối với hàng hóa, BH tai nạn lái xe và người ngồi trên xe. Trường hợp Xe chở quá 30% trọng tải thì sẽ không được BH, nếu xe chở quá tải dưới 30% trọng tải, khi xảy ra tai nạn thuộc phạm vi BH, DNBH vẫn chấp nhận bồi thường cho KH."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse49" class="collapsed" aria-expanded="false">
                                                        Tôi bị mất giấy chứng nhận BH ô tô, tôi phải làm gì để được cấp lại giấy chứng nhận BH mới?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse49" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                        "Để được cấp lại giấy chứng nhận BH, Khách hàng cần thực hiện các yêu cầu sau:<br>
                                                        - Liên hệ sớm nhất với các công ty, đại lí lúc trước đã cấp Giấy chứng nhận BH cho mình, thông báo và yêu cầu xin cấp lại giấy chứng nhận BH. <br>
                                                        - Có đơn đề nghị xin cấp lại, trình bày lí do thất lạc, đánh mất giấy chứng nhận BH.<br>
                                                        - Điều kiện để được cấp lại: Giấy chứng nhận vẫn còn hiệu lực, chủ xe có đầy đủ các giấy tờ chứng minh hợp lệ là người sở hữu Giấy chứng nhận BH đã mất này VD: Chứng minh thư, Giấy tờ xe, Kiểm định xe, Biên lai thanh toán phí v.v…"
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse50" class="collapsed" aria-expanded="false">
                                                        Tôi muốn hủy bỏ hợp đồng BH, xin cho biết thủ tục hủy bỏ và tính phí hoàn lại?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse50" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Đối với loại hình BH bắt buộc Bộ Tài Chính quy định hợp đồng BH chỉ được chấm dứt đối với những TH sau:<br>
                                                    a) Xe cơ giới bị thu hồi đăng ký và biển số theo quy định của pháp luật;<br>
                                                    b) Xe cơ giới hết niên hạn sử dụng theo quy định của pháp luật;<br>
                                                    c) Xe cơ giới bị mất được cơ quan công an xác nhận;<br>
                                                    d) Xe cơ giới hỏng không sử dụng được hoặc bị phá huỷ do tai nạn giao thông được cơ quan công an xác nhận.<br>
                                                    Chủ xe cơ giới muốn huỷ bỏ hợp đồng BH phải thông báo bằng văn bản cho doanh nghiệp BH kèm theo Giấy chứng nhận BH muốn huỷ bỏ và các bằng chứng về việc xe cơ giới thuộc đối tượng được hủy bỏ hợp đồng BH theo quy định tại các mục trên. Hợp đồng BH chấm dứt từ thời điểm doanh nghiệp BH nhận được thông báo huỷ bỏ hợp đồng BH.<br>
                                                    - Đối với các lại hình BH tự nguyệnThủ tục chấm dứt hợp đồng BH:<br>
                                                    Khi Chủ xe yêu cầu chấm dứt hợp đồng BH trước thời hạn, phải thông báo bằng văn bản cho DNBH thường là trước 15 (mười lăm) ngày kể từ ngày định chấm dứt. Nếu hợp đồng được hai bên thoả thuận chấm dứt thì DNBH sẽ hoàn lại cho Chủ xe 80% phí BH của thời gian còn lại, trừ trường hợp trong thời gian hợp đồng BH có hiệu lực đã xảy ra sự kiện BH.<br>
                                                    Lưu ý: Cần hỏi thêm KH về lí do KH muốn chấm dứt hợp đồng BH để thống kê, lưu lại những thiếu sót hay sai lầm trong quá trình chăm sóc KH dẫn đến việc hủy bỏ hợp đồng."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse51" class="collapsed" aria-expanded="false">
                                                        Tôi đang có hợp đồng BH ô tô còn hiệu lực, nay tôi muốn thay đổi hợp đồng BH này, xin cho biết thủ tục điều chỉnh hợp đồng?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse51" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Tùy thuộc theo yêu cầu thay đổi thông tin hợp đông của KH, thủ tục thay đổi hợp đồng BH bao gồm:<br>
                                                    - Khách hàng làm yêu cầu thay đổi BH và điền các thông tin cần thay đổi vào giấy yêu cầu.<br>
                                                    - DNBH sẽ kiểm tra xe các thông tin liên quan, xác định giá trị xe và chụp ảnh làm căn cứ (nếu cần)<br>
                                                    - Khách hàng sẽ phải đóng thêm khoản phí mới (nếu cần) để được cấp giấy chứng nhận BH mới.<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse52" class="collapsed" aria-expanded="false">
                                                        Tôi mới mua một xe ô tô, chủ cũ chuyển cho tôi một giấy chứng nhận BH ô tô của chiếc xe đó, xin cho biết giấy chứng nhận BH đó còn giá trị đối với tôi không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse52" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Nếu thời hạn của hợp đồng BH vẫn còn hiệu lực thì giấy chứng nhận BH đó vẫn có giá trị. Theo quy định, khi có sự chuyển nhượng quyền sở hữu xe ô tô mà hợp đồng BH vẫn còn hiệu lực, nếu chủ xe cũ không yêu cầu chấm dứt hợp đồng trước thời hạn thì quyền lợi BH xe được tự động chuyển giao cho chủ xe mới.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse53" class="collapsed" aria-expanded="false">
                                                        Tôi có thể chuyển nhượng hợp đồng BH ô tô của tôi cho người khác được không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse53" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hợp đồng BH của xe ô tô nào thì chỉ có hiệu lực duy nhất với xe ô tô đấy không thể chuyển cho xe khác. Nếu khách hàng chuyển nhượng quyền sở hữu xe ô tô cho người khác mà không có yêu cầu chấm dứt hợp đồng trước thời hạn thì các quyền hạn được BH vẫn giữ nguyên và sẽ được tự động chuyển sang cho chủ xe mới.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse54" class="collapsed" aria-expanded="false">
                                                        Trường hợp thanh toán phí chậm hơn theo thỏa thuận, khi xẩy ra tai nạn có được giải quyết bồi thường không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse54" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    DNBH thường không chấp nhận giải quyết bồi thường cho trường hợp này, quy đinh về thỏa thuận thanh toán phí khi xây dựng hợp đồng đã nêu rõ.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse55" class="collapsed" aria-expanded="false">
                                                        Trong thời hạn BH còn hiệu lực xe chuyển mục đích sử dụng, giấy chứng nhận của tôi đã được cấp có còn giá trị?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse55" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Giá trị BH xe vẫn còn tuy nhiên khách hàng cần phải đến Nơi đã cấp giấy CN để kê khai những thay đổi về mục đích và đóng thêm các khoản phí nếu có. Tùy thuộc vào các thay đổi của KH, DNBH sẽ tư vấn các bước thực hiện cụ thể.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse56" class="collapsed" aria-expanded="false">
                                                        Tôi dung xe đã mua BH để thế chấp Ngân hàng vay vốn , Ngân hàng yêu cầu phải cam kết chuyển quyền thụ hưởng BH cho Ngân hàng có được không ? và tôi phải làm gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse56" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Ngân Hàng được quyền yêu cầu khách hàng chuyển quyền thụ hưởng BH cho Ngân Hàng do chiếc xe của KH là vật thế chấp vay vốn.<br>
                                                    Thủ tục chuyển quyền thụ hưởng như sau:<br>
                                                    Khách hàng yêu càu bổ sung thay đổi thông tin trong hợp đồng BH, DNBH sẽ chỉnh lại thông tin phần Người thụ hưởng quyền lợi BH cho KH theo như yêu cầu.<br>
                                                    GCN BH sau khi thay đổi sẽ cấp lại cho KH, KH có thể đem hợp đồng BH đến Ngân hàng và sẽ được hướng dẫn làm các bước tiếp theo."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse57" class="collapsed" aria-expanded="false">
                                                        Có thể chia nghiệp vụ BH con người thành những loại nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse57" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Nghiệp vụ BH con người phi nhân thọ:<br>
                                                        Theo rủi ro được BH, các nghiệp vụ BH con người phi nhân thọ được chia thành ba loại:<br>
                                                        – BH tai nạn<br>
                                                        Đây là loại BH mà khi một tai nạn bất ngờ xảy ra làm người được BH bị tử vong hoặc thương tật thân thể, người BH sẽ thanh toán cho người thụ hưởng BH các khoản tiền theo thỏa thuận của hợp đồng.
                                                        Các nghiệp vụ BH tai nạn tiêu biểu đang được các DNBH ở Việt Nam triển khai bao gồm BH tai nạn con người 24/24, BH tai nạn thuyền viên, BH tai nạn người sử dụng điện, BH tai nạn thân thể học sinh, BH khách du lịch trong nước,…<br>
                                                        – BH sức khỏe (BH chi phí y tế)<br>
                                                        Loại BH này có mục đích thanh toán các khoản trợ cấp chi phí y tế cho người được BH trong trường hợp người được BH bị ốm đau, bệnh tật, tai nạn,… phải vào viện điều trị, phẫu thuật; hoặc người được BH bị chết do bệnh tật thuộc phạm vi BH.<br>
                                                        Hiện nay, các nghiệp vụ BH chi phí y tế chủ yếu đang được các DNBH thực hiện là BH trợ cấp nằm viện và phẫu thuật, BH chi phí y tế và vận chuyển chi phí y tế cấp cứu,…<br>
                                                        – BH kết hợp<br>
                                                        Để đáp ứng nhu cầu về BH của khách hàng và tiết kiệm chi phí nhất là chi phí khai thác nhằm nâng cao hiệu quả kinh doanh, người BH đã cung cấp các sản phẩm BH kết hợp. Trong BH con người phi nhân thọ, sự kết hợp có thể được thực hiện giữa BH tai nạn và BH sức khỏe. Loại BH kết hợp này sẽ thanh toán một khoản tiền khi người được BH bị thương tật hoặc tử vong do tai nạn, phải nằm viện và/ hoặc phẫu thuật hoặc tử vong do ốm đau, bệnh tật,… Các sản phẩm điển hình thuộc loại này là BH kết hợp con người, BH toàn diện học sinh, BH sinh mạng cá nhân, BH tai nạn hành khách đi lại trong nước,…<br>
                                                        Các sản phẩm BH con người kết hợp có thể được đưa ra dựa trên sự kết hợp giữa BH tai nạn, sức khỏe và BH tài sản. Thuộc loại BH kết hợp này có các nghiệp vụ như BH người nước ngoài du lịch Việt Nam, BH người Việt Nam du lịch nước ngoài, BH người Việt Nam   du lịch nước ngoài ngắn hạn, BH du lịch nhóm,…   Theo đối tượng người được BH, có thể chia BH con người phi nhân thọ thành BH học sinh, BH du lịch,… Kết hợp các tiêu thức trên và để thuận lợi cho khách hàng lựa chọn khi có nhu cầu tham gia BH, các nghiệp vụ BH con người phi nhân thọ sẽ được phân chia và trình bày theo các nhóm dưới đây:<br>
                                                        – BH tai nạn con người.<br>
                                                        – BH chi phí y tế.<br>
                                                        – BH sinh mạng và kết hợp con người.<br>
                                                        – BH học sinh.<br>
                                                        – BH du lịch.<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse58" class="collapsed" aria-expanded="false">
                                                        Ai có thể là người được BH theo nghiệp vụ BH này?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse58" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "- Người được BH trong BH tai nạn con người: Mọi công dân Việt Nam từ 16 đến 70 tuổi và người nước ngoài đang học tập và làm việc tại Việt Nam, trừ các đối tượng sau:<br>
                                                    –Những người đang bị bệnh thần kinh.<br>
                                                    – Những người đang bị tàn phế hoặc thương tật vĩnh viễn từ 50% trở lên.<br>
                                                    Người được BH ở nghiệp vụ BH này vẫn được tham gia và hưởng quyền lợi của các loại hình BH khác.  "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse59" class="collapsed" aria-expanded="false">
                                                        Nghiệp vụ BH này có phạm vi BH như thế nào. Thế nào là tai nạn thuộc phạm vi BH?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse59" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "- Phạm vi BH tai nạn con người: Bao gồm những tai nạn gây tử vong hoặc thương tật về thân thể của người được BH.<br>

                                                    Trong BH con người, tai nạn thuộc phạm vi BH là những sự kiện xảy ra (tại Việt nam) do một lực bất ngờ, ngoài ý muốn của người được BH, từ bên ngoài tác động lên thân thể người được BH và là nguyên nhân trực tiếp làm cho người được BH bị tử vong hoặc thương tật thân thể; hoặc người được BH có hành động cứu người, cứu tài sản của Nhà nước, của nhân dân và tham gia chống các hành động phạm pháp.<br>

                                                    Theo khái niệm này, sự tử vong hoặc thương tổn thân thể do tai nạn phải hội tụ đủ các yếu tố sau:<br>
                                                    – Một lực tác động đến thân thể con người: Thông thường là những tác động cơ học, nhưng cũng có thể là một tác động hoá học, điện, nhiệt, chết đuối,… Tuy vậy các DNBH thường loại trừ một số trường hợp nhạy cảm như cảm đột ngột, trúng gió, sảy thai, thoát vị đĩa đệm, đau lư ng, cột sống hoặc rách vỡ cơ, ngộ độc thức ăn, đồ uống, tai biến trong quá trình điều trị, điều trị hoặc sử dụng thuốc không theo chỉ dẫn, động đất, núi lửa, nhiễm phóng xạ, chủến tranh,… (mang tính thảm hoạ).<br>
                                                    – Sự bất ngờ của lực tác động: Đó là một sự kiện xảy ra mang tính chất đột nhiên, không thể dự báo trước và không thể tránh được (không phải là hậu quả của một quá trình).Vì thế mà những rủi ro có mức độ trầm trọng thường bị loại trừ như sử dụng và bị ảnh hưởng các chất kích thích, vi phạm   pháp luật, tham gia các hoạt động nguy hiểm,…<br>
                                                    – Có nguyên nhân từ bên ngoài: Yếu tố này phân biệt tai nạn với bệnh tật; bệnh tật là kết quả của một quá trình tiến triển bên trong con người.<br>
                                                    - Ngoài ý muốn của con người: Tác động phải hoàn toàn độc lập với ý muốn của người được BH (người được BH không mong đợi). Vì vậy mà người BH loại trừ trường hợp do hành động cố ý của người được BH hoặc người thừa kế hợp pháp (lưu ý rằng những người thừa kế không cố ý vẫn được hưởng quyền lợi BH).<br>
                                                    – Có mối quan hệ nhân quả giữa tác động bên ngoài và sự tử vong hay thương tổn thân thể: Khi đánh giá tai nạn, người BH phải xem xét đến mối quan hệ nhân quả giữa tác động bên ngoài và thương tổn thân thể. Người BH chỉ coi tử vong, thương tật thân thể con người là hậu quả tai nạn khi do một yếu tố bên ngoài tác động. Yếu tố bên ngoài phải là nguyên nhân chính dẫn đến tổn hại về người chứ không phải là nguyên nhân gần nhất mang lại tổn hại thân thể người được BH. Thực tế xác định mối quan hệ này rất khó, nhất là trong trường hợp có nhiều nguyên nhân gây ra thương tổn con người. Tuy nhiên, nếu nguyên nhân ban đầu là một tác động bên trong (đau tim, xuất huyết não,…) dẫn đến tử vong hay thương tật thân thể thì sẽ không được BH. Ví dụ, một người bệnh bị suy hô hấp nặng đang trên đường đến bệnh viện để cấp cứu không may phương tiện chở anh ta gặp tai nạn, làm chậm thời gian vận chuyển và do không được cấp cứu kịp thời dẫn đến tử vong. Trường hợp này không coi là một tai nạn được BH."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse60" class="collapsed" aria-expanded="false">
                                                        Nghiệp vụ BH này loại trừ những trường hợp nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse60" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Loại trừ BH tai nạn con người:<br>

                                                    DNBH không chịu trách nhiệm đối với những tai nạn xảy ra do những nguyên nhân sau (không thuộc phạm vi BH):<br>
                                                    – Người được BH vi phạm nghiêm trọng pháp luật, nội qui, qui định của cơ quan, của chính quyền địa phương hoặc các tổ chức xã hội khác, vi phạm luật lệ an toàn giao thông.<br>
                                                    – Hành động cố ý tự gây ra tai nạn của người được BH hoặc người thừa kế hợp pháp.<br>
                                                    – Người được BH sử dụng và bị ảnh hưởng của rượu, bia, ma túy và các chất kích thích tương tự khác.<br>
                                                    – Người được BH tham gia đánh nhau trừ khi được xác nhận đó là hành động tự vệ.<br>
                                                    – Cảm đột ngột, trúng gió, bệnh tật, sảy thai, bệnh nghề nghiệp, những tai biến trong quá trình điều trị và bệnh thai sản.<br>
                                                    – Ngộ độc thức ăn, đồ uống.<br>
                                                    – Điều trị hoặc sử dụng thuốc không theo chỉ dẫn của cơ quan y tế.<br>
                                                    – Các rủi ro có tính thảm họa như động đất, núi lửa, nhiễm phóng xạ.<br>
                                                    – Các hoạt động hàng không trừ khi với tư cách là hành khách (Phi hành đoàn được BH tai nạn theo một điều kiện BH riêng), các cuộc diễn tập, huấn luyện quân sự, tham gia chiến đấu của các lực lượng vũ trang. <br> 
                                                    – Rủi ro với hậu quả xã hội lan rộng: Chiến tranh, nội chiến, đình công.<br>
                                                    – Tham gia những cuộc thi đấu có tính chất chuyên nghiệp.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse50" class="collapsed" aria-expanded="false">
                                                        Những trường hợp loại trừ trên có thể được BH không nếu người được BH có yêu cầu?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse50" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hầu hết các trường hợp loại trừ BH tai nạn con người là loại trừ tuyệt đối (không thể BH được). Tuy nhiên, có những trường hợp loại trừ có thể được BH nếu bên được BH có yêu cầu và thoả thuận đóng thêm phí BH như tai nạn xảy ra ở nước ngoài, tham gia các cuộc thi đấu có tính chuyên nghiệp như đua xe, đua ngựa, đấm bốc, leo núi, lướt ván, đua thuyền,… hoặc tham gia các hoạt động hàng không với tư cách là người điều khiển hoặc hành khách trên máy bay riêng.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse50" class="collapsed" aria-expanded="false">
                                                        Số tiền BH và thời hạn BH được xác định như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse50" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                        "Số tiền BH và thời hạn BH tai nạn được xác định theo yêu cầu của bên mua BH.<br>

                                                        - Số tiền BH được chia làm nhiều mức (chẵn tới hàng triệu đồng) để bên mua BH có thể lựa chọn, có thể được quy định mức tối thiểu và mức tối đa, có thể thỏa thuận mức khác nhau cho từng đảm bảo (tử vong, thương tật). Ứng với mỗi khoảng số tiền BH khác nhau, tỷ lệ phí có thể được quy định khác nhau. <br>
                                                        Số tiền BH tai nạn hiện nay bằng tiền Việt Nam thường từ 5 triệu đến 100 triệu đồng/ người, bằng ngoại tệ thường từ trên 2.000 USD đến 10.000 USD/ người. Số tiền BH là giới hạn trách nhiệm tối đa của DNBH đối với người được BH trong một vụ tai nạn, chứ không phải trong cả thời hạn hiệu lực của HĐBH.<br>

                                                        - Thời hạn BH thông thường là 1năm, có thể là 9 tháng, 6 tháng hoặc 3 tháng. Trường hợp tham gia BH thời hạn dưới 1 năm, phí BH được xác định theo biểu phí ngắn hạn trên cơ sở phí BH 1 năm.<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse51" class="collapsed" aria-expanded="false">
                                                        Phí BH với BH tai nạn con người được tính như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse51" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Mức phí BH tai nạn mà người tham gia BH phải trả cho DNBH khi giao kết hợp đồng được xác định theo tỷ lệ phí và số tiền BH đã thỏa thuận. BH tai nạn con người 24/24 cũng như các nghiệp vụ BH con người khác đều là nghiệp vụ không thuộc đối tượng chịu thuế giá trị gia tăng, do vậy, phí BH phải nộp là giá không có thuế giá trị gia tăng.<br>
                                                    Theo Quyết định số 590/TC/BH (16/8/1993) của Bộ tr ởng Bộ Tài Chính, biểu phí quy định đối với nghiệp vụ này như sau:<br>
                                                    – Số tiền BH đến 20 triệu VND, tỷ lệ phí BH là 0,28%.<br>
                                                    – Số tiền BH từ trên 20 triệu đến 50 triệu VND (hoặc trên 2.000 – 5.000 USD), tỷ lệ phí BH là 0,42%.<br>
                                                    – Số tiền BH từ trên 50 triệu đến 70 triệu VND (hoặc trên 5.000 – 7.000 USD), tỷ lệ phí BH là 0,56 %.<br>
                                                    – Số tiền BH từ trên 70 triệu đến 100 triệu VND (hoặc trên 7.000 – 10.000 USD), tỷ lệ phí BH là 0,75 %.<br>
                                                    Phí BH được nộp bằng loại tiền nào, khi phát sinh trách nhiệm, người BH sẽ trả tiền BH bằng loại tiền đó."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse52" class="collapsed" aria-expanded="false">
                                                        Những trách nhiệm chủ yếu của bên được BH là gì
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse52" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Trách nhiệm bên được BH trong BH tai nạn: nộp phí BH đầy đủ và đúng hạn theo thỏa thuận của HĐBH.<br>
                                                    Khi xảy ra tai nạn, người được BH hoặc thân nhân của mình phải áp dụng các biện pháp cần thiết và có thể thực hiện được để cứu chữa.<br>
                                                    Người được BH hoặc người thừa kế hợp pháp phải gửi cho người BH hồ sơ khiếu nại đòi trả tiền BH trong vòng một tháng kể từ ngày người được BH điều trị khỏi hoặc bị tử vong."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse53" class="collapsed" aria-expanded="false">
                                                        Hồ sơ yêu cầu trả tiền BH bao gồm những tài liệu, chứng từ gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse53" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                        Hồ sơ yêu cầu bồi thương BH tai nạn:<br>

                                                        1 – Giấy đề nghị trả tiền BH.<br>
                                                        2 – Giấy chứng nhận BH hoặc bản sao (trích) danh sách người được bảohiểm.<br>  
                                                        3 – Biên bản tai nạn có xác nhận của cơ quan, chính quyền địa phương hoặc công an nơi người được BH bị nạn.<br>
                                                        4 – Xác nhận của cơ quan y tế (giấy ra viện, phiếu điều trị và các giấy tờ có liên quan đến điều trị tai nạn)<br>
                                                        5 – Giấy chứng tử và giấy xác nhận quyền thừa kế hợp pháp (trường hợp người được BH tử vong)<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse54" class="collapsed" aria-expanded="false">
                                                        Số tiền người BH trả được xác định như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse54" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "– Trường hợp người được BH tử vong do tai nạn thuộc phạm vi BH, người BH trả toàn bộ số tiền BH ghi trong hợp đồng hoặc giấy chứng nhận BH.<br>

                                                    – Trường hợp người được BH bị thương tật thân thể do tai nạn thuộc phạm vi BH:<br>

                                                    + Đối với những trường hợp thương tật vĩnh viễn (Những vết thương đã cắt cụt, cắt bỏ bộ phận một cơ quan của cơ thể hoặc ít có khả năng tiến triển, hoặc di chứng mà y học nước ta chưa giải quyết được hay điều kiện xã hội không cho phép): Người BH trả tiền theo quy định tại Bảng tỷ lệ trả tiền BH thương tật (Phụ lục 3).<br>
                                                    + Đối với những trường hợp thương tật tạm thời (thương tật không để lại di chứng): Người BH trả những chi phí thực tế, hợp lý bao gồm chi phí cấp cứu, chi phí điều trị và chi phí bồi dưỡng trong thời gian điều trị nội, ngoại trú. Mức chủ bồi dưỡng mỗi ngày 0,1% số tiền BH. Tuy nhiên, trong mọi trường hợp tổng số tiền BH chủ trả không vượt quá tỷ lệ áp dụng cho trường hợp vết thương đó được quy định trong Bảng tỷ lệ trả tiền BH thương tật (Phụ lục 3).<br>

                                                    – Trường hợp bị tai nạn thuộc phạm vi BH, trong vòng 01 năm kể từ ngày xảy ra tai nạn, người được BH bị chết do hậu quả của tai nạn đó; người BH sẽ trả phần chênh lệch giữa số tiền BH ghi trong hợp đồng hoặc giấy chứng nhận BH với số tiền đã trả trước đó.<br>

                                                    Ví dụ: Một người bị tai nạn làm chấn thương sọ não phải nằm viện điều trị. Số tiền BH của HĐBH là 20 triệu VND. Sau thời gian điều trị, người này ra viện, người BH đã trả 5 triệu VND về tiền BH thương tật. Một tuần sau khi xuất viện, vết thương tái phát làm nạn nhân bị tử vong. Trường hợp này, người BH sẽ trả cho người thụ hưởng số tiền là 20 – 5 = 15 triệu VND.<br>

                                                    Nếu người được BH bị tử vong vì một tai nạn khác, người BH sẽ trả toàn bộ số tiền BH."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse55" class="collapsed" aria-expanded="false">
                                                        DNBH trả tiền BH cho ai. Việc giải quyết các tranh chấp có liên quan được thực hiện như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse55" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Quyền lợi BH được trả cho người được BH hoặc người được người được BH ủy quyền. Nếu người được BH ủy quyền cho người khác nhận số tiền trả từ người BH, phải có giấy ủy quyền hợp pháp. Trường hợp người được BH chết thì người thụ hưởng hoặc người thừa kế hợp pháp sẽ được 
                                                    nhận số tiền đó.<br>
                                                    Thời hạn bên được BH khiếu nại người BH về việc trả tiền BH là 6 tháng, kể từ ngày người được BH hoặc người thừa kế hợp pháp nhận được thông báo trả tiền của người BH.
                                                    Mọi tranh chấp liên quan đến HĐBH nếu các bên không thỏa thuận được bằng thương lượng thì một trong hai bên được quyền đưa ra giải quyết tại cơ quan pháp luật nhà nước, nơi đóng phí BH."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse56" class="collapsed" aria-expanded="false">
                                                        Người được BH và phạm vi BH của BH trợ cấp nằm viện và phẫu thuật?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse56" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Người được BH trong BH trợ cấp nằm viện và phẫu thuật:<br>
                                                        – Những người từ 1 tuổi (12 tháng tuổi) đến 65 tuổi.<br>
                                                        – Những người trên 65 tuổi đã được BH theo nghiệp vụ này ít nhất từ năm 60 tuổi.<br>

                                                        DNBH không nhận BH cho các đối tượng sau:<br>
                                                        – Những người bị bệnh thần kinh, tâm thần, phong.<br>
                                                        – Những người bị tàn phế hoặc thương tật vĩnh viễn từ 80% trở lên.<br>
                                                        – Những người đang trong thời gian điều trị bệnh tật, thương tật.<br>

                                                        Người được BH là người có tên trong giấy yêu cầu BH và được DNBH chấp nhận BH bằng Giấy chứng nhận BH hoặc HĐBH, được hưởng quyền lợi BH khi rủi ro được BH xảy ra cho người đó.<br>

                                                        Phạm vi BH nằm viện và phẫu thuật bao gồm những rủi ro sau đây xảy ra đối với người được BH:<br>
                                                        – Ốm đau, bệnh tật, thương tật thân thể do tai nạn, thai sản phải nằm viện hoặc phẫu thuật.<br>
                                                        – Chết trong trường hợp đang nằm viện hoặc phẫu thuật.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse57" class="collapsed" aria-expanded="false">
                                                        Thế nào là bệnh tật?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse57" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                        "Bệnh tật là sự biến chất về sức khỏe dù bất kỳ nguyên nhân gì, bao hàm cả nguyên nhân lây truyền,…<br>
                                                        Những biến chất về sức khỏe, hay đúng hơn là những suy giảm về sức khỏe do bệnh tật khác với những thương tổn thân thể do tai nạn. Bệnh tật thường có một quá trình tiến triển, từ giai đoạn ủ bệnh (còn gọi là có bệnh) đến phát bệnh và thường diễn ra bên trong con người. Quá trình này có thể diễn ra trong thời gian dài, nhưng cũng không ít trường hợp quá trình này rất ngắn như tai biến mạch máu não, đột quỵ, cảm đột ngột,… và cũng có trường hợp do môi trường bên ngoài tác động, nhưng sự tác động này cũng chỉ mang tính gián tiếp. Chẳng hạn, sau một tai nạn, người được BH bị thần kinh hoặc bị trầm cảm,…<br>
                                                        Khi một người bị ngã bệnh, thông thường phải vào viện khám chữa bệnh và điều trị hoặc cũng có thể phải phẫu thuật."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse58" class="collapsed" aria-expanded="false">
                                                        Nằm viện và phẫu thuật được hiểu là thế nào. Cơ sở nào được gọi là bệnh viện?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse58" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Nằm viện là việc người được BH cần lưu trú ít nhất 24 giờ liên tục ở trong bệnh viện để điều trị khỏi về lâm sàng, bao gồm cả việc sinh đẻ hoặc điều trị thời kỳ có thai.
                                                        Phẫu thuật là phương pháp khoa học để điều trị thương tật hoặc bệnh tật được thực hiện bởi những phẫu thuật viên có bằng cấp thông qua những ca mổ bằng tay với các dụng cụ y tế hoặc bằng máy móc y tế trong bệnh viện.  
                                                        Bệnh viện là một cơ sở khám bệnh được Nhà nước công nhận, cấp giấy phép hoạt động và có khả năng, có phương tiện chuẩn đoán bệnh, điều trị hoặc phẫu thuật, có điều kiện thuận lợi cho việc điều trị và có phiếu theo dõi sức khỏe hàng ngày cho mỗi bệnh nhân của mình. Bệnh viện không phải là nơi dùng để nghỉ ngơi hoặc điều dưỡng hay một cơ sở đặc biệt dành riêng cho người già, hoặc để cai nghiện rượu, ma túy, chất kích thích hoặc để điều trị các căn bệnh rối loạn tâm thần, phong."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse59" class="collapsed" aria-expanded="false">
                                                        BH nằm viện và phẫu thuật loại trừ những trường hợp nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse60" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Loại trừ BH nằm viện và phẫu thuật:<br>

                                                        – Điều dưỡng, an dưỡng.<br>
                                                        – Nằm viện để kiểm tra sức khỏe hoặc khám giám định y khoa mà không liên quan tới việc điều trị bệnh tật hoặc thương tật.<br>
                                                        – Điều trị hoặc phẫu thuật các bệnh bẩm sinh, những thương tật và chỉ định phẫu thuật có từ trước ngày bắt đầu BH.<br>

                                                        Ngày bắt đầu BH là ngày thời hạn BH bắt đầu đối với HĐBH ký lần đầu tiên hoặc tái tục không liên tục.
                                                        – Điều trị và phẫu thuật theo yêu cầu của người được BH mà không liên quan tới điều kiện điều trị và phẫu thuật bình thường do ngành y tế quy định.<br>
                                                        – Tạo hình thẩm mỹ, chỉnh hình, phục hồi chức năng, làm chân, tay giả, mắt giả, răng giả.<br>
                                                        – Kế hoạch hóa sinh đẻ.<br>
                                                        – Những bệnh đặc biệt và những bệnh có sẵn trong năm đầu tiên (12 tháng) được BH kể từ ngày bắt đầu BH. Trường hợp loại trừ này không áp dụng đối với trường hợp BH nhóm cho trên 100 thành viên.  <br>
                                                        Bệnh đặc biệt là những bệnh ung thư và u các loại, huyết áp, tim mạch, viêm loét dạ dày, viêm đa khớp mãn tính, viêm loét ruột, viêm gan, viêm màng trong dạ con, trĩ, sỏi trong các hệ thống tiết niệu và c ường mật, đục nhân mắt, viêm xoang.<br>
                                                        Bệnh có sẵn là bệnh tật có từ trước ngày bắt đầu BH và do bệnh này người được BH được điều trị trong vòng 3 năm trước, hoặc triệu chứng bệnh đã xuất hiện khiến cho người được BH phải đi khám, điều trị hoặc do tình trạng đó mà chuyên gia y tế đã khuyên người được BH nên điều trị, bất kể người được BH đã điều trị hay chưa.<br>
                                                        – Người được BH nằm viện để điều trị các bệnh tâm thần, suy nhược cơ thể, suy nhược thần kinh, thoái hóa cột sống, gai đôi đốt sống, phong, giang mai, lậu, AIDS, sốt rét và bệnh nghề nghiệp.<br>
                                                        – Rủi ro xảy ra do người được BH:<br>
                                                        + Cố ý vi phạm pháp luật, tự gây thương tích, tự tử.<br>
                                                        + Say rượu, sử dụng ma túy.<br>
                                                        – Chiến tranh."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse61" class="collapsed" aria-expanded="false">
                                                        Số tiền BH và thời hạn BH được xác định như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse61" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "- Số tiền BH trợ cấp nằm viện và phẩu thuật được xác định theo yêu cầu của bên mua BH. Số tiền BH được chia làm nhiều mức (chẵn tới hàng triệu đồng) để bên mua BH có thể lựa chọn. Số tiền BH trong phạm vi 20 triệu VND được gọi là số tiền BH phổ cập, từ trên 20 triệu VND được gọi là số tiền BH đặc biệt. Số tiền BH trong nghiệp vụ BH này là giới hạn tối đa của người BH trong 01 năm BH đối với từng trường hợp: nằm viện, phẫu thuật, chết. Số tiền BH của người phụ thuộc không được chọn cao hơn người tham gia BH hoặc những thành viên (người được BH) trong tập thể (nhóm).
                                                    Trừ trường hợp có thỏa thuận khác với người BH, thời hạn BH nghiệp vụ này là 01 năm kể từ ngày bắt đầu BH."
                                                    </div>
                                                </div>
                                            </div>
                                            <var><div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse62" class="collapsed" aria-expanded="false">
                                                        BH trợ cấp nằm viện và phẫu thuật được ký kết thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse62" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Ký kết BH trợ cấp nằm viện:<br>
                                                    Trên cơ sở Giấy yêu cầu BH, người tham gia BH có thể ký kết HĐBH trợ cấp nằm viện và phẫu thuật cho chính mình và cho người phụ thuộc; DNBH sẽ cấp giấy chứng nhận BH cho người tham gia BH và kèm theo danh sách những người phụ thuộc (nếu có).<br>
                                                    Trường hợp người tham gia BH có giấy yêu cầu BH cho tập thể (hợp đồng nhóm) phải kèm theo danh sách các thành viên trong tập thể và những người phụ thuộc của các thành viên này (nếu có yêu cầu), người BH sẽ ký HĐBH cho cả tập thể và cấp Giấy chứng nhận BH cho từng thành viên trong tập thể và người phụ thuộc (nếu có)."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse63" class="collapsed" aria-expanded="false">
                                                        Bên được BH phải gửi hồ sơ khiếu nại đòi trả tiền BH như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse63" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Hồ sơ yêu cầu bồi thường BH trợ cấp nằm viện và phẫu thuật:  trong vòng 30 ngày kể từ ngày người được BH điều trị khỏi hoặc tử vong:<br>
                                                    1 – Giấy đề nghị trả tiền BH. <br>
                                                    2 – Giấy chứng nhận BH.<br>
                                                    3 – Các chứng từ y tế: Giấy ra viện, phiếu điều trị, phiếu mổ (trường hợp có phẫu thuật).<br>
                                                    4 – Giấy chứng tử của bệnh viện và giấy xác nhận quyền thừa kế hợp pháp (trường hợp người được BH tử vong)."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse64" class="collapsed" aria-expanded="false">
                                                        Việc trả tiền BH theo Bảng tỷ lệ trả tiền BH phẫu thuật dựa trên cơ sở những nguyên tắc nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse64" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Nguyên tắc trả tiền theo bảng tỷ lệ phẫu thuật:<br>
                                                    Căn cứ vào các chứng từ điều trị của người được BH do bệnh viện cung cấp, DNBH giải quyết trả tiền theo Bảng tỷ lệ trả tiền BH phẫu thuật dựa trên cơ sở các nguyên tắc sau:<br>
                                                    – Thứ nhất, những số liệu ghi trong bảng chỉ rõ số tiền DNBH có thể chủ cho loại phẫu thuật tương ứng và được thể hiện dưới dạng tỷ lệ phần trăm (%) của số tiền BH.<br>
                                                    Trường hợp phẫu thuật tiến hành bình thường, vết mổ không bị nhiễm trùng, không để lại di chứng sau mổ, người BH sẽ trả tiền BH tương ứng với mức thấp nhất của thang tỷ lệ trả tiền BH quy định cho loại phẫu thuật này.<br>
                                                    Trường hợp phẫu thuật tiến hành phức tạp, vết mổ bị nhiễm trùng hoặc sau khi  phẫu thuật còn để lại di chứng, thì tùy theo mức độ nặng, nhẹ được trả cao dần cho tới mức tối đa của thang tỷ lệ trả cho trường hợp phẫu thuật này.<br>
                                                    – Thứ hai, trường hợp phẫu thuật đã tiến hành không được liệt kê trong bảng sẽ được thanh toán một khoản tiền tương đương với tỷ lệ trả cho một phẫu thuật ở mức độ nặng tương tự.<br>
                                                    – Thứ ba, trường hợp quá một phẫu thuật được thực hiện qua một đường rạch, người BH chỉ trả cho loại phẫu thuật có mức trả cao nhất.<br>
                                                    – Thứ tư, trường hợp quá một phẫu thuật được thực hiện qua những đường mổ khác nhau trong cùng một cuộc mổ bởi cùng một phẫu thuật viên, người BH sẽ trả 100% mức trả cho phẫu thuật có tỷ lệ cao nhất và 50% mức trả cho mỗi phẫu thuật còn lại.<br>
                                                    – Thứ năm, đối với những loại phẫu thuật bắt buộc phải tiến hành làm nhiều lần thì lần sau sẽ trả số tiền tối đa bằng 50% của loại phẫu thuật sau (không kể trường hợp kết xư ơng bằng đinh).<br>
                                                    – Thứ sáu, việc trả theo Bảng tỷ lệ trả tiền BH phẫu thuật chỉ giải quyết theo loại phẫu thuật, không trả cho hậu quả của phẫu thuật đó để lại.<br>
                                                    Người được BH phải nằm viện để phẫu thuật, sẽ được thanh toán cả trợ cấp nằm viện và trợ cấp phẫu thuật."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse65" class="collapsed" aria-expanded="false">
                                                        Bảo hiểm vật chất xe ô tô là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse65" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Bảo hiểm về vật chất là thiệt hại vật chất của xe xảy ra do những tai nạn bất ngờ ngoài sự kiểm soát của chủ xe trong những trường hợp cụ thể do quy tắc bảo hiểm quy định. Doanh nghiệp bảo hiểm chịu trách nhiệm bồi thường cho chủ xe những thiệt hại vật chất do thiên tai, tai nạn bất ngờ, không lường trước được trong những trường hợp sau:<br>
                                                    a/ Đâm, va, lật, đổ, lệch trọng tâm, chìm, rơi toàn bộ xe; bị các vật thể khác rơi, va chạm vào, hành vi phá hoại của người khác.
                                                    b/ Hỏa hoạn, cháy nổ.<br>
                                                    c/ Những tai họa bất khả kháng do thiên nhiên.<br>
                                                    d/ Mất toàn bộ xe do trộm, cướp.
                                                    "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse66" class="collapsed" aria-expanded="false">
                                                        Tại sao bạn nên lựa chọn V-Bảo hiểm để so sánh bảo hiểm vật chất xe ô tô?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse66" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Bạn có thể tiết kiệm được rất nhiều thời gian, công sức, tiền bạc khi so sánh bảo hiểm vật chất xe ô tô qua V-Bảo hiểm. Bởi với các công cụ so sánh tiện lợi, bạn sẽ nhanh chóng tìm được sản phẩm bảo hiểm phù hợp với chi phí và nhu cầu của mình một cách dễ dàng, tiện lợi.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse67" class="collapsed" aria-expanded="false">
                                                        V-Bảo hiểm có so sánh hết tất cả các sản phẩm bảo hiểm vật chất xe ô tô?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse67" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Về cơ bản, V-Bảo hiểm đang là công cụ có thể hỗ trợ bạn so sánh hầu hết tất cả các sản phẩm bảo hiểm vật chất xe ô tô hiện nay. V-Bảo hiểm cam kết không thiên vị cho bất kỳ sản phẩm bảo hiểm hay nhà cung cấp bảo hiểm nào trên kết quả so sánh của mình.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse68" class="collapsed" aria-expanded="false">
                                                        Tại sao bạn nên mua bảo hiểm vật chất xe ô tô?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse68" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Từ định nghĩa bảo hiểm vật chất xe ô tô ở trên, bạn sẽ nhận thấy rằng lợi ích cơ bản nhất đối với việc khi tham gia bảo hiểm xe ô tô là bảo vệ mặt tài chính cho chủ xe hay nói cách khác khi phát sinh các rủi ro do yếu tố bên ngoài tác động vào và thuộc phạm vi bảo hiểm (không bị loại trừ bởi quy tắc của công ty bảo hiểm) thì chủ xe sẽ được công ty bảo hiểm thanh toán (bồi hoàn bằng tiền hoặc sửa chữa - thay thế) nguyên trạng đối với các thiệt hại phát sinh lên các bộ phận cấu thành chiếc xe.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse69" class="collapsed" aria-expanded="false">
                                                        Bảo hiểm vật chất xe ô tô nào là tốt nhất?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse69" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hiện nay trên thị trường có hơn 30 công ty bảo hiểm phi nhân thọ cung cấp bảo hiểm vật chất xe ô tô cho Khách hàng. Với nhiều đơn vị cung cấp sản phẩm bảo hiểm như vậy, Vics sẽ là kênh tổng hợp và so sánh phí bảo hiểm ô tô tốt nhất trên thị trường, giúp Khách hàng lựa chọn sản phẩm phù hợp nhất. 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse70" class="collapsed" aria-expanded="false">
                                                        Báo giá bảo hiểm vật chất xe ô tô của V-Bảo hiểm có chính xác không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse70" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Nếu bạn cung cấp thông tin xe, năm sản xuất, giá trị xe, báo giá của bạn sẽ chính xác. Báo giá bạn thấy trực tuyến chính là số tiền bạn sẽ thanh toán.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse71" class="collapsed" aria-expanded="false">
                                                        Khi xảy ra sự kiện bảo hiểm, tôi có thể gọi cho ai để được hỗ trợ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse71" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Thường thì khi mua bảo hiểm, các Doanh nghiệp bảo hiểm hướng dẫn khi xảy ra sự kiện bảo hiểm hãy gọi theo số hotline của Doanh nghiệp bảo hiểm đó và báo cho cơ quan công an. Tuy nhiên, nhiều khi Khách hàng chưa rõ để thực hiện thủ tục thông báo cho Doanh nghiệp bảo hiểm như thế nào thì Khánh hàng có thể gọi lên tổng đài 1900 9889 65 - Là tổng đài Công ty Cổ phần Tư vấn Dịch vụ Bảo hiểm Việt Nam, tổng đài tư vấn và hỗ trợ giải quyết bồi thường bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse72" class="collapsed" aria-expanded="false">
                                                        Vì sao nên mua bảo hiểm vật chất xe ô tô?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse72" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Để an tâm hơn khi sở hữu và điều khiển xe cũng như tìm kiếm nguồn tài chính đảm bảo chia sẻ những rủi ro không mong muốn có thể xảy ra bất cứ lúc nào, nhiều người đã chọn tham gia bảo hiểm vật chất xe ô tô. Mọi khác hàng sẽ được chi trả khi: <br>
                                                    Tai nạn bất đắc dĩ do thiên nhiên, khí hậu như động đất, mưa đá, lũ lụt, sét đánh, địa hình sạc lỡ,...
                                                    Xe trực tiếp gặp tai nạn do đâm xe khác, lật hoặc hoả hoạn, cháy nổ.
                                                    Các vật thể bên ngoài tác động lên xe dẫn đến hư hỏng.
                                                    Xe bị mất cắp hoặc bị cướp.
                                                    Những rủi ro bất ngờ khác.
                                                    Toàn bộ những trường hợp trên nếu được công ty cung cấp bảo hiểm thẩm định hợp  lý, người tham gia bảo hiểm sẽ được thanh toán những khoản chi phí cần thiết.
                                                    "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse73" class="collapsed" aria-expanded="false">
                                                        Kinh nghiệm chọn mua bảo hiểm xe ô tô tiết kiệm nhất?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse73" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "1. Tìm hiểu các công ty bảo hiểm<br>
                                                        Trước khi mua bảo hiểm, bạn cần so sánh bảng báo giá của ít nhất 3 công ty cung cấp. Thế nhưng nếu chỉ dựa vào mức phí thôi thì chưa đủ. Chúng ta còn phải quan tâm đến uy tín, danh tiếng, quy mô tài chính, thủ tục và sự chuyên nghiệp để chọn công ty phù hợp nhất.<br>
                                                        2. Ưu tiên mức khấu trừ cao
                                                        Có một quy định bạn cần phải biết khi sở hữu bảo hiểm xe ô tô. Nếu mức tổn thất của bạn cao hơn mức khấu trừ, công ty bảo hiểm mới chấp nhận bồi thường. Như vậy mức khấu trừ tăng lên, người tham gia bảo hiểm sẽ tiết kiệm được mức phí. Tại Việt Nam, mức khấu trừ (mức miễn thường) là 200.000 đồng. Bạn có thể tiết kiệm được phí 20-30% nếu mức miễn thường tăng lên đến 1 triệu đồng.<br>
                                                        3. Chú ý rõ các điều kiện trong hợp đồng bảo hiểm
                                                        Để đảm bảo quyền lợi, khi mua bảo hiểm bạn cần yêu cầu bên cung cấp đưa cho bạn những quy tắc bảo hiểm. Song song đó là một bản hợp đồng rõ ràng. Bạn cần hết sức chú trọng đến các điều khoản như thời hạn đăng kiểm, các khoản bảo hiểm mở rộng…Đừng vội ký hợp đồng quá vội! Hãy thử đàm phán càng nhiều quyền lợi càng tốt cho bạn.<br>
                                                        4. Chọn công ty sửa chữa có uy tín
                                                        Một sai lầm rất lớn của nhiều người mua bảo hiểm nói chung là bỏ qua công ty sửa chữa khi xe bị hỏng. Vấn đề sửa xe ở đâu, chọn nơi nào cung cấp dịch vụ là vấn đề quan trọng. Bạn nên chọn một công ty sửa chữa có uy tín và đưa vào điều khoản hợp đồng cụ thể. Có như thế bạn mới tránh được tình trạng đánh tráo đồ, phụ tùng xe kém chất lượng.<br>
                                                        5. Báo ngay cho công ty bảo hiểm khi gặp sự cố
                                                        Nếu chẳng may xe bạn gặp phải tai nạn hoặc sự cố nào, bạn đừng chần chờ mà phải báo cho công ty bảo hiểm ngay lập tức. Khi đó, bên phía công ty sẽ cử người đại diện xuống hiện trường để lập biên bản thẩm định. Một số người chỉ vì báo chậm trễ nên “nhọc nhằn” trong việc bồi thường bảo hiểm.
                                                        Như vậy xe ô tô không đơn thuần chỉ là phương tiện di chuyển mà đó là cả một tài sản gắn bó với sức khỏe và tính mạng của chúng ta trong suốt thời gian dài. Do đó việc chọn mua bảo hiểm vật chất xe ô tô chính là giải pháp giúp chúng ta chủ động hơn về tài chính và an tâm hơn khi lái xe.
                                                        "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse74" class="collapsed" aria-expanded="false">
                                                        Xe gặp tai nạn trong thời gian đợi giấy chứng nhận kiểm định an toàn kỹ thuật thì có được hưởng bảo hiểm không ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse74" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Tại thời điểm tai nạn, xe không có Giấy chứng nhận kiểm định an toàn kỹ thuật và bảo vệ môi trường phương tiện giao thông cơ giới đường bộ hoặc có nhưng không hợp lệ cũng sẽ không được hưởng bảo hiểm vật chất (trừ khi chủ xe có thoả thuận khác bằng văn bản).Ngoài ra,xe sử dụng để tập lái, đua (hợp pháp hoặc bất hợp pháp), chạy thử sau khi sửa chữa cũng sẽ không được hưởng bảo hiểm (trừ khi có thoả thuận khác bằng văn bản).
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse75" class="collapsed" aria-expanded="false">
                                                        Xe tôi bị mất cắp trong thời gian mang xe đi công tác tại nước ngoài thì có được bồi thường bảo hiểm hay không ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse75" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Đối với xe gặp sự cố xảy ra ngoài lãnh thổ nước Cộng hoà xã hội chủ nghĩa Việt Nam cũng sẽ không được bồi thường thiệt hại (trừ khi có thoả thuận khác bằng văn bản).
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse76" class="collapsed" aria-expanded="false">
                                                        Xe bị tai nạn và hư hỏng đồ có giá trị đem theo xe (đồ gốm sứ, cây cảnh,...) thì có được bồi thường như thế nào ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse76" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                        "Hiện nay, hầu hết trong các trường hợp, bảo hiểm vật chất ôtô sẽ không bồi thường cho bạn khi xảy ra những thiệt hại có tính chất hậu quả gián tiếp như: Giảm giá trị thương mại, thiệt hại gắn liền với việc sử dụng và khai thác tài sản bị thiệt hại, những thiệt hại mang yếu tố tinh thần, thiệt hại không do tai nạn trực tiếp gây ra.Thiệt hại đối với tài sản đặc biệt trên xe bao gồm: vàng bạc; đá quí; tiền; các loại giấy tờ có giá trị như tiền; đồ cổ; tranh ảnh quí hiếm; thi hài; hài cốt, súc vật cũng sẽ không được bồi thường.
                                                        Bạn cũng sẽ không được hưởng bảo hiểm khi chủ xe, lái xe hoặc những người được giao sử dụng và bảo quản xe có hành động cố ý gây tai nạn để được bồi thường hoặc nguyên nhân khách quan như chiến tranh, các lý do tương tự chiến tranh như nội chiến, đình công, bạo động dân sự, khủng bố.
                                                        "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse77" class="collapsed" aria-expanded="false">
                                                        Hiện nay tôi đang sống tại Hà Nội và mới mua xe thì nên mua kèm những bảo hiểm gì ngoài bảo hiểm ô tô bắt buộc và bảo hiểm vật chất xe ôtô ?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse77" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Với những người lần đầu mua bảo hiểm xe nên cân nhắc tùy theo khả năng tài chính cũng như môi trường đi lại của mình mà chọn loại bảo hiểm tự nguyện cho phù hợp.Tiếp đến, bạn cần tìm hiểu kỹ chất lượng dịch vụ bảo hiểm trước khi quyết định chọn mua bảo hiểm của công ty nào. Mức bồi thường bảo hiểm cao chưa hẳn đã quyết định chất lượng của bảo hiểm tốt.Với những xe đang lưu thông tại địa bàn Hà Nội,ngoài bảo hiểm vật chất xe ôtô thì gói bảo hiểm thủy kích đi kèm là thực sự cần thiết.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse78" class="collapsed" aria-expanded="false">
                                                        Bảo hiểm nhân thọ là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse78" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Bảo hiểm nhân thọ là một hợp đồng giữa một cá nhân và công ty bảo hiểm nhân thọ để bảo hiểm cho bản thân mình hay người thân, hoặc giữa một tổ chức với công ty bảo hiểm nhân thọ để bảo hiểm cho nhân viên của mình, với mục đích đảm bảo an toàn tài chính cho người tham gia bảo hiểm.<br>

                                                    Khi sự kiện bảo hiểm xảy ra, Công ty bảo hiểm nhân thọ sẽ căn cứ vào điều khoản hợp đồng tương ứng của sản phẩm mà khách hàng tham gia để chi trả quyền lợi bảo hiểm. Quyền lợi bảo hiểm mà khách hàng sẽ nhận được ghi rõ trong Giấy chứng nhận bảo hiểm nhân thọ, hoặc các văn bản xác nhận điều chỉnh nếu có."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse79" class="collapsed" aria-expanded="false">
                                                        Tôi hiện đã có Bảo hiểm Xã hội, Bảo hiểm Y tế rồi. Như vậy có nên tham gia thêm Bảo hiểm Nhân thọ nữa hay không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse79" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Bảo hiểm Xã hội và Bảo hiểm Y tế là những chính sách nằm trong hệ thống an sinh xã hội mà Nhà nước cung cấp cho một số đối tượng, góp phần ổn định cuộc sống và cung cấp sự bảo vệ tài chính nhất định khi bị ốm đau, bệnh tật, khi về hưu...<br>

                                                        Tuy nhiên, quyền lợi, đối tượng tham gia và phạm vi bảo hiểm cũng như mức độ linh hoạt của những chính sách này chưa đáp ứng được nhu cầu của đại đa số người dân. Bảo hiểm Nhân thọ chính là một giải pháp nhằm cung cấp thêm những dịch vụ bảo hiểm mà Bảo hiểm Xã hội/ Bảo hiểm Y tế chưa có, hoặc đã có nhưng chưa đáp ứng được nhu cầu rất đa dạng của khách hàng. Đó cũng chính là lý do để bạn nên tham gia Bảo hiểm Nhân thọ, cho dù bạn đã có hay chưa có Bảo hiểm Xã hội, Bảo hiểm Y tế."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse80" class="collapsed" aria-expanded="false">
                                                        Điều kiện để được tham gia bảo hiểm nhân thọ là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse80" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Khách hàng chỉ cần ở trong độ tuổi có thể được bảo hiểm (có quy định trong từng sản phẩm cụ thể), có tình trạng sức khỏe phù hợp với tiêu chuẩn thẩm định của công ty bảo hiểm, và có khả năng đóng phí bảo hiểm là có thể tham gia bảo hiểm nhân thọ.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse81" class="collapsed" aria-expanded="false">
                                                        Tôi cần cập nhật cho công ty những thông tin gì trong quá trình tham gia bảo hiểm?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse81" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Để việc giao tiếp, liên lạc giữa công ty và Quý khách được thông suốt và để đảm bảo quyền lợi của mình, Quý khách cần cập nhật cho công ty khi có các thay đổi liên quan tới<br>

                                                    Thông tin liên lạc (địa chỉ email, số điện thoại di động/cố định, địa chỉ nhận thư báo),
                                                    Thông tin về nhân thân (số CMND, quốc tịch…),
                                                    Nơi cư trú, đặc biệt là khi ra nước ngoài, và
                                                    Nghề nghiệp."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse82" class="collapsed" aria-expanded="false">
                                                        Trong quá trình tham gia bảo hiểm, tôi có thể điều chỉnh những gì trong hợp đồng bảo hiểm của mình?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse82" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Việc thay đổi các chi tiết liên quan đến hợp đồng bảo hiểm tùy thuộc vào quy định tại Quy tắc điều khoản của từng sản phẩm cụ thể. Tuy nhiên, nhìn chung Quý khách  có thể yêu cầu<br>

                                                    Thay đổi Bên mua bảo hiểm, hoặc/và thay đổi Người Thụ hưởng,
                                                    Tăng/giảm số tiền bảo hiểm của các sản phẩm đã tham gia,
                                                    Tham gia thêm sản phẩm bổ sung cho bản thân hoặc cho các thành viên khác trong gia đình; hoặc hủy bỏ các sản phẩm bổ sung đã tham gia,
                                                    Thay đổi định kỳ đóng phí
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse83" class="collapsed" aria-expanded="false">
                                                        Vì sao Khách hàng không được thương lượng, điều chỉnh nội dung trong Quy tắc và Điều khoản sản phẩm bảo hiểm?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse83" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Trong lĩnh vực bảo hiểm nhân thọ, theo thông lệ quốc tế cũng như theo qui định của pháp luật Việt Nam, điều khoản bảo hiểm luôn được Bộ Tài Chính phê duyệt để đảm bảo lợi ích của Người tham gia bảo hiểm.<br>
                                                    Ngoài ra, hợp đồng bảo hiểm là hợp đồng mang tính gia nhập. Do đó, điều khoản hợp đồng của tất cả các công ty bảo hiểm nhân thọ đều có qui định về ""thời hạn xem xét lại"" hoặc ""thời gian cân nhắc"". Theo đó, sau khi hợp đồng được phát hành, khách hàng có thời gian để xem xét lại một cách cẩn thận hồ sơ hợp đồng."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse84" class="collapsed" aria-expanded="false">
                                                        Bảo tức là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse84" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Bảo tức là khoản lãi chia (không đảm bảo) dưới dạng tỉ lệ phần trăm của Số tiền bảo hiểm và được thông báo cho Bên mua bảo hiểm vào mỗi năm dương lịch. Bảo tức được thông báo hàng năm, nếu có, là khoản tiền mà khách hàng sẽ chỉ nhận được toàn bộ khiCông ty bảo hiểm chi trả quyền lợi bảo hiểm theo Quy tắc, Điều khoản sản phẩm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse85" class="collapsed" aria-expanded="false">
                                                        Tại sao những năm đầu khi tham gia bảo hiểm, giá trị hoàn lại thường thấp hơn so với số phí mà tôi đã nộp?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse85" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Trong những năm đầu, các chi phí liên quan đến việc phát hành và phục vụ hợp đồng (còn được gọi là chi phí khai thác ban đầu) lớn hơn nhiều so với chi phí phục vụ cho việc duy trì hợp đồng trong những năm tiếp theo. Điều đó có nghĩa chi phí thực tế trong những năm đầu của hợp đồng bảo hiểm thường cao hơn nhiều so với số phí thu được từ hợp đồng đó. Thêm vào đó, do nét đặc thù của hoạt động BHNT theo nguyên tắc "số đông bù số ít", nên ngay sau khi hợp đồng đã có hiệu lực, thì bản thân hợp đồng đó cũng đã đóng góp vào quỹ bồi thường rủi ro chung trong thời gian tham gia với các công ty bảo hiểm
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse86" class="collapsed" aria-expanded="false">
                                                        Một hợp đồng Bảo hiểm nhân thọ có bị ảnh hưởng của trượt giá không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse86" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Khi tham gia bảo hiểm nhân thọ, do phí không phải được đóng vào một lúc mà dàn trải đều ra trong toàn bộ thời hạn của hợp đồng bảo hiểm, nên chắc chắn ảnh hưởng phải chịu sẽ dễ chấp nhận hơn rất nhiều so với ảnh hưởng đối với các hình thức tiết kiệm khác như gửi một lúc một số tiền rất lớn vào ngân hàng - một nguyên tắc rất quan trọng trong đầu tư.<br>

                                                    Ngoài ra, khách hàng khi tham gia bảo hiểm còn được hưởng bảo tức tích lũy. Mức bảo tức sẽ tùy thuộc vào kết quả kinh doanh và sẽ góp phần không nhỏ giúp khách hàng bảo vệ tài chính trong trường hợp đồng tiền mất giá.<br>

                                                    Điều quan trọng hơn cả là tham gia bảo hiểm không chỉ là tiết kiệm mà là sự bảo đảm an toàn tài chính cho khách hàng trong suốt thời gian bảo hiểm - điều mà khách hàng tham gia bảo hiểm coi trọng nhất khi tham gia bảo hiểm."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse87" class="collapsed" aria-expanded="false">
                                                        Tôi muốn tham gia một hợp đồng Bảo hiểm nhân thọ, vậy tôi cần phải kê khai đơn yêu cầu bảo hiểm thế nào? 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse87" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Bảo hiểm nhân thọ hoạt động trên nguyên tắc : "" Trung thực tuyệt đối"". Vì vậy khi tham gia ký kết hợp đồng bảo hiểm thì Bên mua bảo hiểm nghĩa vụ điền đầy đủ, trung thực vào Hồ sơ yêu cầu bảo hiểm. Trong trường hợp khách hàng có nghi ngờ về sức khỏe của mình, song do chưa được chẩn đoán nên không biết chắc chắn về tình trạng sức khỏe, khách hàng nên khai thật chi tiết, thật đầy đủ về những triệu chứng mà khách hàng cảm nhận được theo các câu hỏi đã soạn sẵn trong Hồ sơ yêu cầu bảo hiểm. Trên cơ sở những thông tin đó, các chuyên viên thẩm định sẽ chỉ định những nội dung thẩm định cụ thể, để có được kết luận chính xác về tình trạng sức khỏe của khách hàng để có quyết định bảo hiểm phù hợp, công bằng với tất cả các khách hàng tham gia bảo hiểm. Trách nhiệm cung cấp thông tin đầy đủ, trung thực cũng được quy định tại Khoản 2, Điều 18, Luật Kinh doanh Bảo hiểm. Đồng thời, Quy tắc điều khoản sản phẩm do Bộ Tài chính phê duyệt cũng quy định: Nếu Bên mua bảo hiểm và/hoặc Người được bảo hiểm cung cấp thông tin không trung thực hoặc không đầy đủ mà nếu biết về những thông tin đó Công ty từ chối bảo hiểm hoặc nhận bảo hiểm với mức phí cao hơn, Công ty sẽ không chi trả quyền lợi bảo hiểm.<br>

                                                        Việc kê khai đầy đủ trung thực của khách hàng khi điền Hồ sơ yêu cầu bảo hiểm không những giúp cho việc giải quyết quyền lợi bảo hiểm được nhanh chóng, thuận tiện khi có sự kiện bảo hiểm xảy ra mà còn là yếu tố pháp lý vô cùng quan trọng để hợp đồng bảo hiểm có hiệu lực."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse88" class="collapsed" aria-expanded="false">
                                                        Cách tính tuổi tham gia bảo hiểm được tính thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse88" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Tuổi của Người được bảo hiểm là tuổi tính theo ngày sinh nhật vừa qua so với ngày Hợp đồng phát sinh hiệu lực. Ví dụ: Khách hàng có ngày sinh 01/04/1990 tham gia bảo hiểm vào ngày 01/02/2018 thì ngày sinh nhật vừa qua của khách hàng là 01/04/2017 và như vậy, tuổi khách hàng khi tham gia sẽ là 27 tuổi. Cũng khách hàng đó nếu tham gia bảo hiểm ngày 01/08/2018 thì ngày sinh nhật vừa qua của khách hàng là 01/04/2018 và như vậy, tuổi tham gia sẽ là 28 tuổi.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse89" class="collapsed" aria-expanded="false">
                                                        thời điểm phát sinh hiệu lực của hợp đồng bảo hiểm nhân thọ được xác định như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse89" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Nếu Người được bảo hiểm được Công ty bảo hiểm chấp nhận bảo hiểm, hợp đồng phát sinh hiệu lực kể từ thời điểm Công ty nhận được đầy đủ Giấy yêu cầu bảo hiểm và Phí bảo hiểm tạm tính của hợp đồng. Trách nhiệm bảo hiểm của Công ty bảo hiểm phát sinh từ thời điểm hợp đồng phát sinh hiệu lực. Tuy nhiên, Công ty chỉ bảo hiểm cho các rủi ro theo Điều khoản hợp đồng bảo hiểm kể từ Ngày phát hành hợp đồng được ghi trong Giấy chứng nhận bảo hiểm. Thời gian từ ngày hiệu lực hợp đồng đến ngày phát hành hợp đồng, khách hàng được bảo hiểm theo điều khoản Bảo hiểm tạm thời.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse90" class="collapsed" aria-expanded="false">
                                                        Ngày hiệu lực của bảo hiểm tạm thời được xác định như thế nào? Thời hạn bảo hiểm tạm thời?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse90" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Sau khi hoàn tất Giấy yêu cầu bảo hiểm và đóng đầy đủ Phí bảo hiểm tạm tính, Khách hàng ngay lập tức được bảo hiểm theo điều khoản Bảo hiểm tạm thời. Hay nói cách khác, bảo hiểm tạm thời có hiệu lực từ ngày khách hàng nộp phí bảo hiểm đầu tiên. Ngày này trùng với ngày trên Giấy nộp tiền. Khách hàng được bảo hiểm theo điều khoản Bảo hiểm tạm thời đến khi hợp đồng được phát hành và thời hạn tối đa của Bảo hiểm tạm thời là 30 ngày. (Thời hạn này có thể được Công ty bảo hiểm gia hạn thêm nếu sau 30 ngày phía công ty đã nhận đầy đủ các hồ sơ yêu cầu bảo hiểm nhưng vẫn chưa hoàn tất thủ tục thẩm định)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse91" class="collapsed" aria-expanded="false">
                                                        Thời gian cân nhắc là gì? Trong thời gian cân nhắc tôi được hưởng những quyền lợi gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse91" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Thời gian cân nhắc của Quý khách là 21 ngày kể từ ngày nhận được bộ hợp đồng bảo hiểm. Trong thời gian này, Quý khách có thể đọc kỹ các điều khoản, quyền lợi hợp đồng. Nếu trong trường hợp cần thay đổi thông tin nhân thân/thông tin hợp đồng như số tiền bảo hiểm, thời hạn hợp đồng, định kỳ đóng phí…Quý khách có thể yêu cầu công ty điều chỉnh lại cho phù hợp. Hoặc sau khi cân nhắc kỹ lưỡng và xác định chưa thể tham gia bảo hiểm với những điều kiện trong hợp đồng, Quý khách cũng có thể yêu cầu công ty hủy hợp đồng, công ty sẽ hoàn trả lại 100% số Phí bảo hiểm đã đóng (không có lãi) trừ đi Chi phí kiểm tra sức khỏe (nếu có) và Chi phí quản lý Hợp đồng. Một điều cần được lưu ý là, trong thời gian cân nhắc, hợp đồng bảo hiểm của Quý khách vẫn có hiệu lực. Vì vậy nếu có sự kiện bảo hiểm xảy ra trong thời gian này, công ty vẫn sẽ thực hiện trách nhiệm chi trả quyền lợi bảo hiểm theo quy định của hợp đồng. Hết thời gian cân nhắc, hợp đồng bảo hiểm nhân thọ sẽ được thực hiện theo đúng các quy định của điều khoản.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse92" class="collapsed" aria-expanded="false">
                                                        Tối muốn chấm dứt Hợp đồng trước thời hạn, vậy công ty bảo hiểm có trả lại phí đã tham gia hay không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse92" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Trong thời gian 21 ngày cân nhắc kể từ ngày nhận được hợp đồng, nếu cảm thấy chưa thể tham gia bảo hiểm với những điều kiện trong hợp đồng, Quý khách có thể từ chối tiếp tục tham gia bảo hiểm bằng cách thông báo bằng văn bản cho Công ty bảo hiểm. Hợp đồng sẽ bị hủy và công ty sẽ hoàn trả 100% số Phí bảo hiểm đã đóng (không có lãi) trừ đi Chi phí kiểm tra sức khỏe (nếu có) và các chi phí hợp lý, hợp lệ có liên quan. Sau thời gian cân nhắc, Quý khách cũng có thể yêu cầu chấm dứt hợp đồng trước thời hạn. Tuy nhiên trong trường hợp này, Công ty bảo hiểm sẽ không hoàn trả phần Phí bảo hiểm đã đóng mà chỉ hoàn trả Giá trị hoàn lại (nếu có) của hợp đồng tại thời điểm Quý khách nộp yêu cầu. 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse93" class="collapsed" aria-expanded="false">
                                                        Hợp đồng bảo hiểm của tôi đã bị mất hiệu lực, vậy tôi có thể khôi phục lại không? và tôi cần làm những thủ tục gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse93" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Sau khi Hợp đồng bảo hiểm bị mất hiệu lực, Quý khách có quyền yêu cầu khôi phục Hợp đồng bảo hiểm trong vòng 24 tháng tính từ ngày Hợp đồng bảo hiểm bị mất hiệu lực và tùy thuộc vào bằng chứng về khả năng có thể được bảo hiểm của Người được bảo hiểm. Để yêu cầu khôi phục Hợp đồng bảo hiểm, Quý khách vui lòng: - Điền đầy đủ thông tin vào "Đơn yêu cầu khôi phục hợp đồng bảo hiểm"; - Kê khai đầy đủ thông tin vào Tờ khai sức khỏe (nếu hợp đồng đã mất hiệu lực trên 6 tháng); - Nộp các khoản phí còn nợ - Hoàn trả khoản tạm ứng từ giá trị hoàn lại và khoản Giảm thu nhập đầu tư (nếu có).
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse94" class="collapsed" aria-expanded="false">
                                                        Sau khi ký hợp đồng, tôi có thể yêu cầu thay đổi thời hạn hợp đồng được không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse94" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Quý khách có thể yêu cầu điều chỉnh thời hạn hợp đồng phù hợp hơn trong thời gian cân nhắc. Sau thời gian cân nhắc, hợp đồng không được thay đổi thời hạn.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse95" class="collapsed" aria-expanded="false">
                                                        Quyền lợi bảo hiểm tạm thời được chi trả trong trường hợp nào? Giới hạn chi trả của bảo hiểm tạm thời?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse95" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Doanh nghiệp Bảo hiểm chỉ chi trả Quyền lợi bảo hiểm tạm thời đối với trường hợp tử vong do tai nạn (không thuộc trường hợp loại trừ theo điều khoản hợp đồng bảo hiểm) gây ra mà thôi. Khi đó, Doanh nghiệp Bảo hiểm sẽ thanh toán số tiền lớn hơn giữa: a) Tổng Số tiền bảo hiểm theo tất cả các Giấy yêu cầu bảo hiểm của các sản phẩm bảo hiểm chính cho Người được bảo hiểm đang được xem xét chấp nhận bảo hiểm nhưng không quá xxx triệu đồng ( xxx: số tiền bảo hiểm phụ thuộc vào quy định chi trả của từng công ty Bảo hiểm); và b) Tổng Phí bảo hiểm tạm tính đã đóng theo tất cả các Giấy yêu cầu bảo hiểm cho Người được bảo hiểm đang được xem xét chấp nhận bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse97" class="collapsed" aria-expanded="false">
                                                        Tôi muốn tham gia bảo hiểm nhân thọ, hồ sơ yêu cầu bảo hiểm của tôi cần có những chứng từ gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse97" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Tùy thuộc vào công ty bảo hiểm mà khách hàng muốn tham gia, sẽ có những quy định riêng về chứng từ. Tuy nhiên, những chứng từ cơ bản nhất mà khách hàng cần chuẩn bị đó là:  - Giấy yêu cầu bảo hiểm (cá nhân/tổ chức); - Bản copy Giấy tờ tuỳ thân của Bên mua bảo hiểm, Người được bảo hiểm, Người thụ hưởng (CMND/Giấy khai sinh/Hộ chiếu…); - Bảng minh họa Hợp đồng bảo hiểm;; - Giấy tờ khác (nếu có): + Đề nghị bổ sung ngày/tháng sinh: Nếu khách hàng không có ngày và/hoặc tháng sinh trong các loại giấy tờ tuỳ thân được chấp nhận. + Giấy ra viện, Giấy chứng nhận phẫu thuật, Hồ sơ khám định kỳ, Sổ y bạ, Phiếu xét nghiệm…: Nếu khách hàng có tiền sử phẫu thuật, nằm viện, điều trị bệnh … và một vài giấy tờ khác theo quy định cụ thể của mỗi doanh nghiệp bảo hiểm
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse98" class="collapsed" aria-expanded="false">
                                                        Trong thời gian tham gia bảo hiểm, nếu chẳng may bị khó khăn về tài chính và không thể tiếp tục đóng phí bảo hiểm thì khách hàng được bảo vệ ra sao?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse98" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    " Trong trường hợp đó, quy tắc điều khoản sản phẩm cũng có những quy định để đảm bảo quyền lợi của khách hàng. Cụ thể như sau:<br>

                                                        -Thời gian gia hạn đóng phí: nếu bên mua bảo hiểm chưa có điều kiện đóng phí vào ngày đến hạn, khách hàng có thể đóng phí trong khoảng thời gian gia hạn đóng phí là 60 ngày kể từ ngày đến hạn, <br> 

                                                        -Tạm ứng giá trị hoàn lại để đóng phí bảo hiểm tự động:  Đối với hợp đồng của các sản phẩm truyền thống, nếu Bên mua bảo hiểm không thanh toán phí bảo hiểm đến hạn, và không yêu cầu chấm dứt Hợp đồng bảo hiểm khi hết thời gian gia hạn đóng phí và Hợp đồng bảo hiểm đã có Giá trị hoàn lại, Công ty sẽ tự động tạm ứng từ Giá trị hoàn lại số tiền bằng với khoản phí bảo hiểm đến hạn để đóng phí bảo hiểm cho khách hàng, <br>

                                                        -Tạm ngưng đóng phí: Đối với hợp đồng của các sản phẩm liên kết chung, nếu hợp đồng đã được linh hoạt đóng phí, khách hàng có thể tạm thời ngưng đóng phí. Để duy trì hợp đồng cho khách hàng, công ty sẽ trích từ giá trị tài khoản của hợp đồng để thanh toán chi phí rủi ro và chi phí quản lý hợp đồng,<br>

                                                        -Khôi phục hiệu lực hợp đồng: Nếu khách hàng vẫn không đóng phí, và nếu giá trị hoàn lại của hợp đồng không còn đủ để đóng phí bảo hiểm tự động, hoặc giá trị tài khoản không còn đủ để khấu trừ các khoản phí hàng tháng, hợp đồng của khách hàng sẽ mất hiệu lực. Trong trường hợp này, khách hàng vẫn có thể yêu cầu khôi phục hiệu lực hợp đồng trong vòng 24 tháng kể từ ngày hợp đồng bị mất hiệu lực."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse99" class="collapsed" aria-expanded="false">
                                                        Tôi có được thay đổi các chủ thể trong Hợp đồng bảo hiểm hay không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse99" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Có 03 chủ thể chính trong một hợp đồng bảo hiểm nhân thọ. Đó là Bên mua bảo hiểm (chủ hợp đồng), Người được bảo hiểm và Người thụ hưởng. 

                                                    Trong suốt thời gian tham gia bảo hiểm, khách hàng có thể thay đổi Bên mua bảo hiểm và Người thụ hưởng vào bất cứ thời điểm nào, miễn là Bên mua bảo hiểm mới và Người thụ hưởng mới đáp ứng quy định của Luật pháp và công ty bảo hiểm  tại thời điểm yêu cầu thay  đổi. <br>

                                                    Nhưng khách hàng không thể thay đổi Người được bảo hiểm. Bởi vì trong một hợp đồng bảo hiểm, Người được bảo hiểm là cá nhân được công ty chấp thuận bảo hiểm. Sản phẩm bảo hiểm, số tiền bảo hiểm, thời hạn bảo hiểm, phí bảo hiểm cũng như các điều kiện khác (nếu có) đều được thẩm định và chấp thuận trên cơ sở thông tin về tuổi, sức khỏe, nghề nghiệp của chính người này. <br>

                                                    Tuy nhiên, khách hàng có thể yêu cầu tham gia sản phẩm bổ sung cho những thành viên khác trong gia đình (hay nói cách khác là thêm người được bảo hiểm) khi hợp đồng bảo hiểm đang có hiệu lực."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse100" class="collapsed" aria-expanded="false">
                                                        Thế nào là Tạm ứng tiền mặt?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse100" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Đó là khoản tiền Quý khách có thể yêu cầu Công ty tạm ứng từ Giá trị hoàn lại của Hợp đồng Bảo hiểm để sử dụng cho các nhu cầu tài chính ngắn hạn.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse101" class="collapsed" aria-expanded="false">
                                                        Tạm ứng tiền mặt có ảnh hưởng gì đến tình trạng Hợp đồng Bảo hiểm?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse102" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hợp đồng sẽ mất hiệu lực khi tổng các khoản Vay phí bảo hiểm tự động (APL), Tạm ứng tiền mặt và lãi phát sinh vượt quá Giá trị hoàn lại của Hợp đồng. Ngoài ra tổng các khoản APL, Tạm ứng tiền mặt và lãi phát sinh sẽ được khấu trừ vào các khoản quyền lợi được chi trả theo Hợp đồng như Quyền lợi tiền mặt định kỳ, Quyền lợi bảo hiểm khi có sự kiện bảo hiểm, Quyền lợi bảo hiểm khi đáo hạn Hợp đồng.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse103" class="collapsed" aria-expanded="false">
                                                        Nếu tôi đi nước ngoài một thời gian, làm thế nào để tôi có thể đóng phí bảo hiểm?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse104" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Quý khách có thể lựa chọn một trong các phương thức đóng phí bảo hiểm dưới đây:<br>
                                                    -Chuyển tiền đóng phí vào tài khoản của Công ty bảo hiểm  - Đóng phí qua Internet banking<br>
                                                    - Nhờ người thân nộp phí hộ.
                                                    "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse105" class="collapsed" aria-expanded="false">
                                                        Vay phí bảo hiểm tự động (APL) là gì?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse105" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    APL có nghĩa là Giá trị hoàn lại của Hợp đồng sẽ được sử dụng để đóng phí bảo hiểm đến hạn. APL được áp dụng đối với các Hợp đồng có Giá trị hoàn lại và phí bảo hiểm đến hạn không được thanh toán sau thời gian gia hạn đóng phí 60 ngày theo quy định.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse106" class="collapsed" aria-expanded="false">
                                                        Tôi có cần yêu cầu thực hiện APL?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse106" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Quý khách không cần phải gửi yêu cầu thực hiện APL. APL sẽ được thực hiện tự động đối với các Hợp đồng có điều khoản quy định về APL, có Giá trị hoàn lại và phí bảo hiểm đến hạn không được thanh toán sau thời gian gia hạn đóng phí 60 ngày theo quy định nhằm duy trì hiệu lực hợp đồng của Quý khách.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse107" class="collapsed" aria-expanded="false">
                                                        Hợp đồng của tôi có thể thực hiện APL để duy trì hiệu lực trong bao lâu?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse107" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Thời gian duy trì hiệu lực Hợp đồng nhờ APL phụ thuộc vào Giá trị hoàn lại và các khoản Quyền lợi tiền mặt (nếu có) của Hợp đồng.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse108" class="collapsed" aria-expanded="false">
                                                        Hợp đồng sẽ bị ảnh hưởng ra sao nếu phí bảo hiểm quá hạn không được nộp?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse108" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Hợp đồng sẽ mất hiệu lực khi tổng các khoản APL, Tạm ứng tiền mặt và lãi phát sinh vượt quá Giá trị hoàn lại của Hợp đồng. Ngoài ra, tổng các khoản APL, Tạm ứng tiền mặt và lãi phát sinh sẽ được khấu trừ vào các khoản quyền lợi được chi trả theo Hợp đồng như Quyền lợi tiền mặt định kỳ, Quyền lợi bảo hiểm khi có sự kiện bảo hiểm, Quyền lợi bảo hiểm khi đáo hạn Hợp đồng.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse109" class="collapsed" aria-expanded="false">
                                                        Quyền lợi bảo hiểm Tử vong được chi trả như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse109" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Quyền lợi bảo hiểm được chi trả cho Bên mua bảo hiểm hoặc Người thụ hưởng (nếu có). Nếu Bên mua bảo hiểm không còn sống hoặc Người thụ hưởng không được chỉ định, Công ty sẽ chi trả cho Người thừa kế theo di chúc hoặc Người thừa kế hợp pháp theo luật định.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse110" class="collapsed" aria-expanded="false">
                                                        Quyền lợi bảo hiểm Thương tật toàn bộ và vĩnh viễn được chi trả như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse110" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Quyền lợi bảo hiểm được chi trả toàn bộ một lần cho Bên mua bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse111" class="collapsed" aria-expanded="false">
                                                        Quyền lợi bảo hiểm Bệnh hiểm nghèo được chi trả như thế nào?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse111" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    Quyền lợi bảo hiểm được chi trả cho Bên mua bảo hiểm, theo quy định tại Quy tắc và Điều khoản của Hợp đồng bảo hiểm.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse112" class="collapsed" aria-expanded="false">
                                                        Hợp đồng bảo hiểm có thể bị hủy bỏ vì lý do sức khỏe?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse112" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Sau lần kiểm tra sức khỏe đầu tiên (nếu có) và Doanh nghiệp bảo hiểm chấp thuận, bạn không phải tái khám định kỳ.

                                                    Nếu không may sức khỏe của bạn giảm sút thì hợp đồng của bạn không bao giờ bị hủy vì sức khỏe thay đổi và sẽ không bị yêu cầu cung cấp bằng chứng về tình trạng sức khỏe tốt để gia hạn hợp đồng bảo hiểm của mình hằng năm mà bạn còn được chi trả một khoản tiền nhất định tùy theo từng sản phẩm Bảo hiểm.

                                                    Đây là một trong những điểm hoàn toàn khác giữa bảo hiểm nhân thọ và các loại hình bảo hiểm phi nhân thọ."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse113" class="collapsed" aria-expanded="false">
                                                        Tôi có cần phải khám bệnh khi mua Bảo hiểm nhân thọ không?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse113" class="panel-collapse collapse" aria-expanded="false">
                                                    <div class="panel-body">
                                                    "Trong những trường hợp cần thiết bạn sẽ được Doanh nghiệp bảo hiểm bảo hiểm mời thăm khám sức khỏe tổng quát lần đầu và toàn bộ chi phí thăm khám sẽ do Doanh nghiệp bảo hiểm bảo hiểm chi trả.

                                                    Việc thăm khám sức khỏe chỉ thực hiện duy nhất một lần (ngoại trừ những chương trình ưu đãi thăm khám sức khỏe định kỳ miễn phí dành cho khách hàng VIP hàng năm) và tình trạng sức khỏe của bạn sẽ được ghi nhận một lần xuyên suốt thời gian hợp đồng. Bạn không cần phải tái kiểm tra hàng năm giống như các loại bảo hiểm sức khỏe khác."
                                                    </div>
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
                                                    <a class="disable" href="#A">A</a>
                                                </div>
                                                <div class="index-content">
                                                    
                                                </div>
                                            
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a class="disable" href="#B">B</a>
                                                </div>
                                                <div class="index-content">

                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a href="#C">C</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="collapsed" aria-expanded="false">
                                                                CÁC BÊN THAM GIA BẢO HIỂM</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <a class="disable" href="#G">G</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse12" class="collapsed" aria-expanded="false">
                                                                GIẤY YÊU CẦU BẢO HIỂM</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse12" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse13" class="collapsed" aria-expanded="false">
                                                                GIÁ TRỊ GIẢI ƯỚC</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse13" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a href="#H">H</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse14" class="collapsed" aria-expanded="false">
                                                                HỢP ĐỒNG BẢO HIỂM</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse14" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <a href="#L">L</a>
                                                </div>
                                                <div class="index-content">
                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse15" class="collapsed" aria-expanded="false">
                                                                LÃI CHIA</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse15" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <a href="#N">N</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse16" class="collapsed" aria-expanded="false">
                                                                NIÊN KIM (ĐỐI VỚI CÁC HỢP ĐỒNG NIÊN KIM NHÂN THỌ)</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse16" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse17" class="collapsed" aria-expanded="false">
                                                                NGÀY KỶ NIỆM HỢP ĐỒNG, NĂM HỢP ĐỒNG</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse17" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <a href="#P">P</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse18" class="collapsed" aria-expanded="false">
                                                                PHỤ LỤC HỢP ĐỒNG</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse18" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <a href="#S">S</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse19" class="collapsed" aria-expanded="false">
                                                                SẢN PHẨM HỖ TRỢ</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse19" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse20" class="collapsed" aria-expanded="false">
                                                                SỐ TIỀN BẢO HIỂM</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse20" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alpha-index">
                                                <div class="alpha-left">
                                                    <a href="#T">T</a>
                                                </div>
                                                <div class="index-content">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse21" class="collapsed" aria-expanded="false">
                                                                TAI NẠN</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse21" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse22" class="collapsed" aria-expanded="false">
                                                                THƯƠNG TẬT BỘ PHẬN VĨNH VIỄN</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse22" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse23" class="collapsed" aria-expanded="false">
                                                                THƯƠNG TẬT TOÀN BỘ VĨNH VIỄN</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse23" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse24" class="collapsed" aria-expanded="false">
                                                                TUỔI CỦA NGƯỜI ĐƯỢC BẢO HIỂM, BÊN MUA BẢO HIỂM</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse24" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse25" class="collapsed" aria-expanded="false">
                                                                THỜI GIAN CÂN NHẮC</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse25" class="panel-collapse collapse" aria-expanded="false">
                                                            <div class="panel-body">
                                                                <p>
                                                                <strong>Bên mua bảo hiểm:</strong>(“Người tham gia bảo hiểm”) là tổ chức được thành lập và hoạt động hợp pháp tại Việt Nam, hoặc cá nhân từ đủ 18 tuổi trở lên hiện đang cư trú tại Việt Nam, có năng lực hành vi dân sự đầy đủ; là bên kê khai, ký tên trên Hồ sơ yêu cầu bảo hiểm, đóng Phí bảo hiểm và thực hiện các quyền và nghĩa vụ quy định trong Hợp đồng bảo hiểm. Thông tin cần thiết về Bên mua bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng

                                                                <strong>Người được bảo hiểm:</strong> là người được Bảo Việt Nhân thọ chấp nhận bảo hiểm theo quy định của Bảo Việt Nhân thọ và phù hợp với các quy định của pháp luật. Thông tin cần thiết về Người được bảo hiểm được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.
                                                                Người được bảo hiểm có thể là công dân Việt Nam, công dân nước ngoài sinh sống tại Việt Nam. Trường hợp Người được bảo hiểm là người nước ngoài, thời hạn bảo hiểm của Hợp đồng phải nhỏ hơn thời hạn Người được bảo hiểm cư trú tại Việt Nam

                                                                <strong>Người thụ hưởng:</strong> là cá nhân hoặc tổ chức do Bên mua bảo hiểm chỉ định để nhận quyền lợi bảo hiểm trong trường hợp Người được bảo hiểm tử vong. Thông tin cần thiết về Người thụ hưởng được ghi trong Giấy yêu cầu bảo hiểm và Phụ lục Hợp đồng.

                                                                <strong>Bảo Việt Nhân thọ:</strong> là thành viên của Tập đoàn Bảo Việt, bao gồm Tổng Công ty Bảo Việt Nhân thọ và các Công ty thành viên trực thuộc, được Bộ Tài chính cấp phép thành lập và hoạt động. Bảo Việt Nhân thọ hiện có Trụ sở chính tại số tầng 37, Keangnam Landmark 72, đường Phạm Hùng, Quận Nam Từ Liêm, Hà Nội.

                                                                <strong>Tư vấn viên:</strong> là tổ chức, cá nhân được Bảo Việt Nhân thọ ủy quyền trên cơ sở "Hợp đồng đại lý bảo hiểm" để thực hiện hoạt động đại lý bảo hiểm theo quy định của Luật kinh doanh bảo hiểm và các quy định khác của pháp luật có liên quan.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
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