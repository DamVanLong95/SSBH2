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
        <div class="contact-email"><a href="tel:0906060784" target="_blank"><img src="{{ url('/') }}/assets/images/default/phone-intro.png?{{ config('custom.version') }}" alt=""></a></div>
        <div class="contact-phone"><a href="mailto:contact@vics-corp.com" target="_blank"><img src="{{ url('/') }}/assets/images/default/email-intro.png?{{ config('custom.version') }}" alt=""></a></div>
    </div>
  <div class="container">
    <div class="col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
      <div class="intro-ctn">
        <div class="top-intro">
          <div class="title">
            <h4>Giới thiệu về Web: V-Bảo hiểm</h4>
          </div>
          <div class="content">
            <p>
            Web so sánh bảo hiểm V-Bảo hiểm ra đời với mục đích đem đến cho người  cái nhìn tổng quan nhất về các sản phẩm bảo hiểm xe ô tô hiện nay tại Việt Nam. Với mục tiêu giúp người dùng trở thành những người mua bảo hiểm thông thái nhất. Với mục tiêu đưa web so sánh bảo hiểm xe ô tô trở thành nền tảng so sánh bảo hiểm xe ô tô bảo hiểm hàng đầu tại Việt Nam. Chúng tôi đem tới người dùng nền tảng so sánh bảo hiểm xe ô tô đầy đủ nhất hiện nay để mọi người có thể dễ dàng hiểu và chọn được sản phẩm phù hợp với mong muốn, nhu cầu của mình. Từ đó, giúp khách hàng tiết kiệm thời gian tìm hiểu để so sánh và lựa chọn sản phẩm bảo hiểm xe ô tô phù hợp nhất; nâng cao sự hiểu biết về các sản phẩm bảo hiểm xe ô tô hiện nay trên thị trường Việt nam.
            </p>
          </div>
        </div>
        <div class="second-wrapper">
          <div class="second-ctn">
            <div class="title">
              <h4>Về đơn vị sở hữu VICS-CORP</h4>
            </div>
            <div class="content">
              <p>
                Web so sánh bảo hiểm xe ô tô được tạo nên bởi <a href="https://vics-corp.com/" target="_blank"> Công ty Cổ phần Tư vấn Dịch vụ Bảo hiểm Việt Nam <br>(VICS-CORP)</a>. 
              </p>
              <p><a href="https://vics-corp.com/" target="_blank"> VICS-CORP</a> là đơn vị kinh doanh chủ yếu trong các lĩnh vực: Tư vấn về bảo hiểm; Dịch vụ giải quyết bồi thường Bảo hiểm; Tranh tụng Bảo hiểm; Đào tạo về Bảo hiểm…</p>
            </div>
            
          </div>
          <div class="img-intro">
            <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro2.png?{{ config('custom.version') }}" width="100%" alt=""></a>
          </div>
        </div>
        <div class="img-intro2">
          <a href="javascript:void(0)" target="_blank"><img src="{{ url('/') }}/assets/images/home/intro1.png?{{ config('custom.version') }}" width="100%" alt=""></a>
        </div>
        <div class="content-bottom">
          <p>
            Với các thành viên là Pháp chế Doanh nghiệp Bảo hiểm, Giám định bồi thường Doanh nghiệp Bảo hiểm, Luật sư có kinh nghiệm trong lĩnh vực Ngân hàng – Bảo Hiểm, Giám định viên tại các Công ty Giám định,..vv
          </p>
          <p>
            <a href="https://vics-corp.com/" target="_blank">VICS-CORP</a> luôn nỗ lực, phấn đấu trở thành nhà Tư vấn dịch vụ Bảo hiểm hàng đầu Việt Nam. VICS-CORP muốn tạo ra một thương hiệu là Công ty tiên phong trong lĩnh vực Dịch vụ bảo hiểm.
          </p>
          <p>
            <a href="https://vics-corp.com/" target="_blank">VICS-CORP</a> mang sứ mệnh phục vụ cho mọi người dân Việt Nam – Nâng cao kiến thức pháp luật về bảo hiểm cho người dân là một trong những sứ mệnh cao cả của các thành viên Công ty.<br>
            <a href="https://vics-corp.com/" target="_blank">VICS-CORP</a> tạo sự khác biệt với đội ngũ nhân viên chuyên nghiệp nhất, trách nhiệm nhất, có đầy đủ kiến thức cơ bản và chuyên sâu nhất về bảo hiểm. Tạo dựng sự tin tưởng và chính sách nhất cho khách hàng.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop
