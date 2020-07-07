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
<div class="blog-container">
    <div class="contact-floating">
        <a class="btn-call-now" href="tel:1900988965">
            <i class="fa fa-phone"></i>
            <span>1900988965</span>
        </a>
    </div>
    <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
        <div class="blog-ctn">
            <div class="title">
                <h4>Phân biệt bảo hiểm nhân thọ và bảo hiểm sức khỏe</h4>
            </div>
            <div class="blog-content">
                <p>
                Khách hàng khi lần đầu tiếp xúc, tham gia lựa chọn bảo hiểm sẽ cảm thấy hoang mang khi đứng trước nhiều loại hình bảo hiểm khác nhau.
                Tùy theo mục đích và mong muốn nhận quyền lợi, mà KH sẽ lựa chọn cho mình loại sản phẩm bảo hiểm phù hợp.
                Thông thường để bảo vệ trước những rủi ro bản thân và gia đình, KH thường cân nhắc đến hai loại bảo hiểm nhân thọ và sức khỏe. Vậy hai loại BH này có sự khác biệt cơ bản nào?
                </p>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog3.jpg?{{ config('custom.version') }}" alt=""></div>
                <div class="title">
                    <h4>Bảo hiểm nhân thọ là gì?</h4>
                </div>
                <p>
                Bảo hiểm nhân thọ là sự đảm bảo chi trả một khoản tiền nhất định của công ty bảo hiểm cho người được bảo hiểm theo thỏa thuận trong hợp đồng khi có sự kiện rủi ro xảy ra hoặc kết thúc thời hạn bảo hiểm với điều kiện người tham gia phải đóng đủ và đúng những khoản phí theo quy định.
                </p>
                <p>
                Bảo hiểm nhân thọ như một hình thức đầu tư dài hạn, vừa có tính bảo hiểm, vừa có tính tiết kiệm đầu tư cho tương lai. Với bảo hiểm nhân thọ, bạn phải đóng phí bảo hiểm hàng năm kéo dài và số tiền sẽ được tích lũy. Với bảo hiểm nhân thọ, trong các điều khoản bổ sung có những nội dung về sức khỏe nhưng hạn chế hơn rất nhiều so với bảo hiểm sức khỏe.
                </p>
                <div class="title">
                    <h4>Bảo hiểm sức khỏe là gì?</h4>
                </div>
                <p>
                Bảo hiểm sức khỏe là loại hình bảo hiểm bảo vệ cho trường hợp người được bảo hiểm bị thương tật, tai nạn, ốm đau, bệnh tật hoặc chăm sóc sức khỏe được doanh nghiệp bảo hiểm trả tiền bảo hiểm theo thỏa thuận trong hợp đồng bảo hiểm.
                </p>
                <p>
                    Bảo hiểm sức khỏe có tác dụng hỗ trợ toàn bộ hay một phần chi phí chăm sóc sức khỏe bao gồm những rủi ro như tai nạn, bệnh tật, tử vong, chi trả viện phí cho việc khám và điều trị tại bất kỳ hệ thống bệnh viện trong phạm vi bảo hiểm bồi thường. 
                </p>
                <div class="title">
                    <h4>Phân biệt giữa Bảo hiểm nhân thọ và Bảo hiểm sức khỏe</h4>
                </div>
                <p>
                BHSK và BHNT đều có đối tượng BH là con người, thường bảo vệ trước những rủi ro cơ bản như thương tật, ốm đau, bệnh tật...
                </p>
                <p>
                Khi tham gia BHSK, KH được chi trả các quyền lợi liên quan đến tiền giường bệnh, chi phí điều dưỡng, phí phẫu thuật, phí khám bác sĩ, gặp chuyên gia tư vấn, thai sản, nha khoa… Những chi phí này sẽ phụ thuộc vào từng chương trình mà khách hàng lựa chọn. Thông thường, mỗi SP BHSK được chia thành nhiều chương trình từ cơ bản đến nâng cao dựa trên phân khúc khách hàng theo độ tuổi và thu nhập nên khách hàng hoàn toàn có quyền lựa chọn chương trình phù hợp với túi tiền.
                </p>
                <p>
                Tuy nhiên khác với bảo hiểm sức khỏe chỉ tập trung chi trả các vấn đề sức khỏe như chi phí y tế, điều trị, chăm sóc sức khỏe. Thì bảo hiểm nhân thọ mang tính toàn diện hơn, không chỉ bảo vệ, BHNT còn có tính tiết kiệm đều đặn, tích lũy dài lâu về mặt tài chính. Nếu KH vừa muốn tích lũy cho những mục tiêu trong tương lai vừa lo lắng biến cố bất ngờ thì BHNT sẽ là giải pháp toàn diện nhất khi ốm đau, bệnh tật, tai nạn, có nguồn hỗ trợ tức thời mà vẫn đảm bảo kế hoạch tiết kiệm cho con, tiết kiệm cho tuổi già…
                </p>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog4.jpg?{{ config('custom.version') }}" alt=""></div>
                <p>
                Theo luật kinh doanh bảo hiểm hiện hành mỗi một loại hình BHSK hay BHNT đều được chia thành nhiều nghiệp vụ khác nhau. Chính từ những mục đích tham gia và mong muốn khác nhau của KH mà mỗi nghiệp vụ BH cũng có sự khác biệt.
                </p>
            </div>
        </div>
    </div>
</div>


@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop