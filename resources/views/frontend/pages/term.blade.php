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

<div class="intro-detail-container">
<div class="contact-floating">
  <a class="btn-call-now" href="tel:1900988965">
			<i class="fa fa-phone"></i>
			<span>1900988965</span>
		</a>
</div>
  <div class="container">
    <div class="col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
      <div class="intro-ctn">
        <div class="top-intro">
          <div class="title">
            <h4>Điều kiện điều khoản</h4>
          </div>
          <div class="content">
          <strong>Điều kiện và điều khoản là nội dung thỏa thuận giữa người dùng và chúng tôi nhằm làm rõ cách thức vận hành kinh doanh của chúng tôi khi sử dụng dịch vụ</strong>
            <p>
            Chúng tôi là Công ty Cổ phần Tư vấn Dịch vụ Bảo hiểm Việt Nam (VICS-CORP) hoạt động kinh doanh thương mại điện tử qua trang Web so sánh <a href="http://vbaohiem.vn/" target="_blank">V-Bảo hiểm</a> và các công ty con, liên doanh, và văn phòng trừ khi được quy định khác (sau đây được gọi là ...hoặc "chúng tôi").
            </p>
            <p>
            Khi quý khách truy cập vào trang web của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều kiện và Điều khoản sử dụng, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều kiện và Điều khoản được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó. Quý khách vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.
            </p>
            
            <p>Xin vui lòng đọc kỹ trước khi quyết định mua hàng:</p>
            <strong>1. Hướng dẫn sử dụng web</strong>
            <p>Khi vào Web so sánh V-Bảo hiểm của chúng tôi, Chúng tôi cấp giấy phép sử dụng để bạn có thể tra cứu thông tin, so sánh sản phẩm, mua sắm trên web trong khuôn khổ Điều khoản và Điều kiện sử dụng đã đề ra.
            Nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc nhân danh bất kỳ đối tác thứ ba nào nếu không được chúng tôi cho phép bằng văn bản. Nếu vi phạm bất cứ điều nào trong đây, chúng tôi sẽ hủy giấy phép của bạn mà không cần báo trước.
            Web so sánh V-Bảo hiểm chỉ dùng để cung cấp thông tin sản phẩm chứ chúng tôi không phải nhà sản xuất nên những nhận xét hiển thị trên web là ý kiến cá nhân của khách hàng, không phải của chúng tôi.
            Quý khách phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.</p>
            <p>Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Sau đó, nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</p>
            <strong>2. Ý kiến khách hàng</strong></br>
            <p>Tất cả nội dung trang web và ý kiến phê bình của quý khách đều là tài sản của chúng tôi. Nếu chúng tôi phát hiện bất kỳ thông tin giả mạo nào, chúng tôi sẽ khóa tài khoản của quý khách ngay lập tức hoặc áp dụng các biện pháp khác theo quy định của pháp luật Việt Nam.</p>
            <strong>3. Thông tin sản phẩm</strong></br>
            <p>Chúng tôi cung cấp thông tin chi tiết đối với từng sản phẩm mà chúng tôi đăng tải, tuy nhiên chúng tôi không thể cam kết cung cấp thông tin đầy đủ một cách chính xác, toàn vẹn, cập nhật, và không sai sót đối với từng sản phẩm.</p>
            <p>Trong trường hợp sản phẩm quý khách nhận được đúng như những gì web đã mô tả trong phần thông tin sản phẩm, quý khách vui lòng thông tin đến bộ phận Hỗ trợ khách hàng trong thời gian sớm nhất.</p>
            <strong>4. Thương hiệu và bản quyền</strong></br>
            <p>Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của chúng tôi. Toàn bộ nội dung của Web so sánh V-Bảo hiểm được bảo vệ bởi luật bản quyền của Việt Nam và các công ước quốc tế. Bản quyền đã được bảo lưu.</p>
            <strong>5. Quyền pháp lý</strong>
            <p>Các điều kiện, điều khoản và nội dung của Web so sánh V-Bảo hiểm được điều chỉnh bởi luật pháp Việt Nam và Tòa án có thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái phép trang web này.</p>
            <strong>6. Quy định về bảo mật</strong>
            <p>Web so sánh V-Bảo hiểm của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin KH</p>
            Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Web so sánh V-Bảo hiểm cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.
            Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.</p>
            <strong>7. Giải quyết tranh chấp</strong>
            <p>Bất kỳ tranh cãi, khiếu nại hoặc tranh chấp phát sinh từ hoặc liên quan đến giao dịch tại Web so sánh V-Bảo hiểm hoặc các Quy định và Điều kiện này đều sẽ được giải quyết bằng hình thức thương lượng, hòa giải, trọng tài và/hoặc Tòa án theo Luật bảo vệ Người tiêu dùng về Giải quyết tranh chấp giữa người tiêu dùng và tổ chức, cá nhân kinh doanh hàng hóa, dịch vụ.</p>
            <strong>8. Quy định chấm dứt thỏa thuận</strong>
            Trong trường hợp có bất kỳ thiệt hại nào phát sinh do việc vi phạm Quy Định sử dụng trang web, chúng tôi có quyền đình chỉ hoặc khóa tài khoản của quý khách vĩnh viễn. Nếu quý khách không hài lòng với Web so sánh V-Bảo hiểm hoặc bất kỳ điều khoản, điều kiện, quy tắc, chính sách, hướng dẫn, hoặc cách thức vận hành của web thì biện pháp khắc phục duy nhất là ngưng làm việc với chúng tôi.</p>
            <strong>9. Những quy định khác</strong>
            <p>Tất cả các Điều Khoản và Điều Kiện (và tất cả nghĩa vụ phát sinh ngoài Điều khoản và Điều kiện này hoặc có liên quan) sẽ bị chi phối và được hiểu theo luật pháp Việt Nam. Chúng tôi có quyền sửa đổi các Điều khoản và Điều kiện này vào bất kỳ thời điểm nào và các sửa đổi đó sẽ có hiệu lực ngay tại thời điểm được được đăng tải tại Web so sánh V-Bảo hiểm..</p>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop
