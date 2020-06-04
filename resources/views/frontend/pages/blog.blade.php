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
<style>




</style>
@stop

@section('content')
<div class="blog-container">
    <div class="contact-floating">
        <div class="contact-phone"><a href="tel:0906060784" target="_blank">0906060784</a></div>
        <div class="contact-email"><a href="mailto:contact@vics-corp.com" target="_blank"><img src="{{ url('/') }}/assets/images/default/email-intro.png?{{ config('custom.version') }}" alt=""></a></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="blog-ctn">
                    <div class="title">
                        <h4>Top 10 Công ty bảo hiểm uy tín năm 2019</h4>
                    </div>
                    <div class="blog-content">
                        <p>
                            Bảo hiểm luôn quan trọng và cần thiết trong cuộc sống của con người, bởi vì nó đem đến rất nhiều quyền lợi cho những người tham gia. Với sự ra đời của Luật kinh doanh bảo hiểm và các văn bản pháp lý làm cơ sở cho các tập đoàn tài chính, công ty bảo hiểm nhân thọ sớm nhảy vào Việt Nam tạo nên nền thị trường bảo hiểm đầy sôi động. Đứng giữa nền thị trường bảo hiểm Việt Nam ngày càng hội nhập, ngày 28/6/2019, Công ty cổ phần Báo cáo Đánh giá Việt Nam (Vietnam Report) chính thức công bố danh sách Top 10 Công ty bảo hiểm uy tín năm 2019.
                        </p>
                        <p>
                            Căn cứ theo kết quả đánh giá tài chính doanh nghiệp; đánh giá uy tín doanh nghiệp trên truyền thông bằng phương pháp Media coding; và khảo sát khách hàng, các doanh nghiệp bảo hiểm và chuyên gia ngành tài chính – bảo hiểm được thực hiện trong tháng 5 – 6/2019, và công bố theo 02 danh sách: Top 10 Công ty bảo hiểm nhân thọ uy tín, và Top 10 Công ty bảo hiểm phi nhân thọ uy tín năm 2019.
                        </p>
                        <p>
                            Danh sách top 10 Công ty bảo hiểm nhân thọ uy tín năm 2019.
                        </p>
                        <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog1.jpg?{{ config('custom.version') }}" alt=""></div>
                        <p>Danh sách top 10 Công ty bảo hiểm phi nhân thọ uy tín năm 2019.</p>
                        <div class="image-ctn"><img class="img-fluid" src="{{ url('/') }}/assets/images/blog/blog2.jpg?{{ config('custom.version') }}" alt=""></div>
                        <p>Ngoài ra, chúng tôi sẽ cố gắng đưa ra các tiêu chí xếp hạng phù hợp nhất trên thế giới áp dụng tại Việt Nam, nhằm mục tiêu giúp khách hàng có cái nhìn khách quan khi so sánh và lựa chọn.</p>
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