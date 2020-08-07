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
                <h4>Hướng dẫn sử dụng website Vbaohiem</h4>
            </div>
            <div class="blog-content">
                <div class="title">
                    <h4>Vbaohiem là gì?</h4>
                </div>
                <p>
                Vbaohiem là website so sánh sản phẩm bảo hiểm đầy đủ, toàn diện trên các lĩnh vực bảo hiểm: nhân thọ, vật chất xe cơ giới, sức khỏe… của tất cả 18 công ty bảo hiểm nhân thọ và 30 công ty bảo hiểm phi nhân thọ tại Việt Nam.
                So sánh chi tiết đến từng điều khoản bảo hiểm theo quy tắc sản phẩm. Là kênh kết nối khách hàng đến tư vấn viên bảo hiểm thông qua nền tảng công nghệ trực tuyến đơn giản, hiện đại. Với vai trò là kênh trung gian kết nối giữa khách hàng và tư vấn viên bảo hiểm, giúp hoạt động bảo hiểm trở nên minh bạch, uy tín, hiệu quả.
                </p>
                <div class="title">
                    <h4>Sử dụng website Vbaohiem có mất phí không?</h4>
                </div>
                <p>
                Khách hàng truy cập vào website Vbaohiem hoàn toàn không mất phí. Chúng tôi cung cấp miễn phí các tính năng hỗ trợ tối đa cho khách hàng so sánh, đánh giá, lựa chọn được sản phẩm bảo hiểm phù hợp. Cung cấp kênh kết nối trực tuyến đến tư vấn viên bảo hiểm để hỗ trợ tối đa mong muốn của khách hàng.

                </p>
                <h4>Hướng dẫn sử dụng website?</h4>
                <strong>
                Bước 1. Tìm kiếm lĩnh vực, sản phẩm mong muốn so sánh
                </strong>
                Hiện nay website Vbaohiem cung cấp tính năng so sánh ba loại sản phẩm chính:

                <ul>
                <li>Sản phẩm bảo hiểm vật chất xe ô tô</li>
                <li>Sản phẩm bảo hiểm sức khỏe</li>
                <li>Sản phẩm bảo hiểm nhân thọ</li>

                </ul>
                <p><i>Khách hàng lựa chọn sản phẩm cần so sánh tại trang chủ chính của web hoặc click vào mục So sánh trên thanh công cụ.<i></p>

                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog6.jpg?{{ config('custom.version') }}" alt="">
                <i>Lựa chọn lĩnh vực so sánh trên thanh công cụ</i>
                </div>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog7.jpg?{{ config('custom.version') }}" alt="">
                <i>Lựa chọn lĩnh vực so sánh tại mục trang chủ chính</i>
                </div>
                <strong>Bước 2. Chọn sản phẩm cụ thể, tiến hành so sánh</strong>

                <i>Khách hàng sử dụng trường bộ lọc để lọc ra sản phẩm theo nhu cầu của bản thân. Sau đó lựa chọn SPBH, DNBH phù hợp đưa vào ô so sánh.</i>
                <p>Có thể so sánh tối đa 4 sản phẩm cùng lúc. </p>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog8.jpg?{{ config('custom.version') }}" alt="">
                <i>Hiển thị trường bộ lọc giúp khách hàng lọc chọn sản phẩm cần so sánh </i>
                </div>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog9.jpg?{{ config('custom.version') }}" alt="">
                <i>Hiển thị so sánh tối đa 4 sản phẩm BH </i>
                </div>
                <strong>Bước 3. Chọn sản phẩm ưng ý, kết nối trực tuyến  tư vấn viên hỗ trợ</strong>
                <i>Cách 1. Khách hàng nhấn vào công cụ hỗ trợ kết nối được gắn bên cạnh sản phẩm bảo hiểm so sánh, kết nối trực tuyến đến tư vấn viên để hỗ trợ</i>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog10.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <i>Cách 2. Khách hàng tham khảo một số sản phẩm đăng tải trên trang ưu đãi và nhấn vào nút “Liên kết tư vấn viên” đặt dưới mỗi sản phẩm bảo hiểm ưu đãi</i>

                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog11.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog12.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <i>Cách 3. Khách hàng vào mục “Kết nối tư vấn viên” trên thanh công cụ. Sử dụng trường bộ lọc để tìm kiếm đại lý, tư vấn viên phù hợp với nhu cầu của bản thân</i>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog13.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <strong>Một số tính năng khác</strong>

                <strong>Trang con “Kiến thức bảo hiểm”</strong>
                <p>Kiến thức: Bao gồm các bài viết, tin tức, pháp luật về bảo hiểm</p>
                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog14.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <p>Câu hỏi thường gặp: Tổng hợp giải đáp thắc mắc các câu hỏi thường gặp xoay quanh lĩnh vực bảo hiểm</p>

                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog15.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <p>Giải thích thuật ngữ: Tương tự như một từ điển bảo hiểm, ngay cả khách hàng, tư vấn viên hay những người có nhu cầu tìm hiểu về bảo hiểm đều có thể tra cứu giải nghĩa những thuật ngữ khó trong bảo hiểm</p>

                <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog16.jpg?{{ config('custom.version') }}" alt="">
                <i></i>
                </div>
                <p>Trên đây là những hướng dẫn cơ bản nhất về các thao tác sử dụng website vbaohiem. Website vbaohiem cung cấp kênh trung gian kết nối khách hàng đến TVV bảo hiểm trực tuyến, hiệu quả nhất. Chúc các bạn có những trải nghiệm tuyệt vời tại website!</p>

                
            </div>
        </div>
    </div>
</div>


@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>
@stop