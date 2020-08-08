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
            <h4>Lợi ích của Web so sánh V-Bảo hiểm?</h4>
          </div>
          <div class="content">
            <p>
            Bạn muốn mua bảo hiểm nhân thọ, bảo hiểm sức khỏe hay bảo hiểm vật chất xe ô tô. Bạn đang phân vân không biết công ty bảo hiểm nào uy tín, chất lượng và có mức phí hợp lý. Web so sánh V-Bảo hiểm là giải pháp hàng đầu mang đến cho bạn sự lựa chọn thông minh và chính xác nhất. 
            </p>
            <p>
            Những lợi ích tiêu biểu của web so sánh:
                <p>- So sánh bảo hiểm nhân thọ: <br>
                Khi mua bảo hiểm nhân thọ, điều Khách hàng quan tâm hàng đầu chính là Bảng minh họa quyền lợi. Với V-Bảo hiểm, chỉ bằng thao tác cơ bản, khách hàng đã có một Bảng minh họa quyền lợi của chính mình tương ứng với mỗi sản phẩm bảo hiểm nhân thọ. Ngoài ra V-Bảo hiểm cung cấp cho khách hàng cơ sở đánh giá, phân tích dựa trên điểm nổi bật trong quyền lợi, sản phẩm bổ trợ  của từng sản phẩm.</p>
                <p>- So sánh bảo hiểm sức khỏe:<br>
                Chúng tôi sẽ so sánh tất cả sản phẩm bảo hiểm sức khỏe trên thị trường chi tiết đến từng gói, chương trình sản phẩm; Cung cấp danh sách bệnh viện liên kết giúp Khách hàng có thể tra cứu  bệnh viện một cách dễ dàng, thuận tiện nhất. <p>
                <p>- So sánh bảo hiểm vật chất xe cơ giới: <br>
                Giúp khách hàng có nhu cầu mua bảo hiểm vật chất xe ô tô có thể so sánh được các sản phẩm của nhiều doanh nghiệp bảo hiểm trên thị trường về: Phí, điều khoản loại trừ, điều khoản bổ sung, uy tín doanh nghiệp… Từ đó đưa ra được lựa chọn phù hợp nhất.<p>

            </p>
            <p>Ngoài ra, V-Bảo hiểm hỗ trợ Khách hàng kết nối đến tư vấn viên kinh nghiệm để được tư vấn cặn kẽ, tận tình sản phẩm bảo hiểm mà khách hàng quan tâm chỉ bằng thao tác hết sức đơn giản.</p>
            <p>Làm quý Khách hàng hài lòng là sứ mệnh cao cả của chúng tôi.</p>
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
