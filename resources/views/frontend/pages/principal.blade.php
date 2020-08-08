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
            <h4>Nguyên tắc hoạt động</h4>
          </div>
          <div class="content">
            <p>
            <a href="http://vbaohiem.vn/" target="_blank"> V-Bảo hiểm</a> là trang thông tin so sánh các loại hình sản phẩm bảo hiểm hiện có trên thị trường bảo hiểm Việt Nam. Phục vụ nhu cầu tìm kiếm, đánh giá và lựa chọn gói, sản phẩm bảo hiểm phù hợp với nhu cầu mỗi khách hàng. 
            </p>
            <p>
            <a href="http://vbaohiem.vn/" target="_blank"> V-Bảo hiểm</a> được xây dựng nhằm hỗ trợ tối đa cho khách hàng muốn tìm hiểu thông tin trực tuyến về sản phẩm bảo hiểm hiện nay một cách tốt nhất đồng thời tạo cơ hội cho các nhà tư vấn viên, doanh nghiệp bảo hiểm tiếp cận đúng đối tượng khách hàng. Kết nối khách hàng đến tư vấn viên mong muốn, tạo một sân chơi lành mạnh, phát triển thị trường bảo hiểm vững mạnh.
            </p>
            <strong>Nguyên tắc hoạt động</strong>
            <p><a href="http://vbaohiem.vn/" target="_blank">V-Bảo hiểm</a>ra đời và hoạt động trên cơ sở đăng tải, phân tích, đánh giá các thông tin về sản phẩm bảo hiểm của các doanh nghiệp bảo hiểm trên thị trường hiện nay, so sánh các sản phẩm và tích hợp kết nối khách hàng đến tư vấn viên mong muốn</p>
            <p>Đối tượng người sử dụng là khách hàng, tư vấn viên bảo hiểm, đại lý, người có nhu cầu tìm hiểu về bảo hiểm. Mong muốn tìm kiếm sản phẩm bảo hiểm phù hợp, tư vấn viên hỗ trợ phù hợp.</p>
            <p>Theo đó, mọi tranh chấp phát sinh nếu có xảy ra đều thông qua đàm phán thương lượng và trên nguyên tắc hợp tác xây dựng có sự tham gia hòa giải của đại diện <a href="http://vbaohiem.vn/" target="_blank"> V-Bảo hiểm</a>.</p>
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
