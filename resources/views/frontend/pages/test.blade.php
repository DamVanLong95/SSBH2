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

body{
  background-color: rgb(63,72,83);
  font-family: sans-serif;
  color: rgb(220,220,220);
  padding: 50px;
  width: 100vw;
  overflow-x: hidden;
}
h1{
  font-weight: 400;
}
a{
  color: inherit;
}
p{
  margin-top: .7em;
}
.warning{
  color: rgb(62,148,236);
}
.st_viewport{
  max-height: 500px;
  overflow: auto;
}

[data-table_id="1"]{
  background-color: rgb(255,115,0);
}
[data-table_id="2"]{
  background-color: rgb(61,53,39);
  color: rgb(220,220,220);
}
[data-table_id="3"]{
  background-color: rgba(168,189,4, .8);
}

._rank{
  min-width: 80px;
}
._id{
  min-width: 60px;
}
._name{
  min-width: 130px;
}
._surname{
  min-width: 130px;
}
._year{
  min-width: 80px;
}
._section{
  min-width: 130px;
}

pre{
  overflow: auto;
}

/** Sticky table styles **/
.st_viewport{
  background-color: rgb(62,148,236);
  color: rgb(27,30,36);
  margin: 20px 0;
}
/* ###  Table wrap */
.st_wrap_table{
  
}
/* ##   header */
.st_table_header{
  position: -webkit-sticky;
  position: sticky;
  top: 0px;
  z-index: 1;
  background-color: rgb(27,30,36);
  color: rgb(220,220,220);
}
.st_table_header h2{
  font-weight: 400;
  margin: 0 20px;
  padding: 20px 0 0;
}
.st_table_header .st_row{
  color: rgba(220,220,220, .7);
}
.st_table_header .st_column{
  
}
/* ##  table */
.st_table{
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
/* #   row */
.st_row{
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin: 0;
}
.st_table .st_row:nth-child(even){
  background-color: rgba(0,0,0, .1)
}
/* #   column */
.st_column{
  padding: 10px 20px;
}


</style>
@stop

@section('content')

<div id="app">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
           
<div class="gallery">
	<a href="https://home.ctw.utwente.nl/slootenvanf/div/fancybox_images/Chrysanthemum.jpg"><img src="https://home.ctw.utwente.nl/slootenvanf/div/fancybox_images/tn/Chrysanthemum.jpg" ></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Desert.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Desert.jpg" alt="Desert mountains"></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Hydrangeas.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Hydrangeas.jpg" width="100" height="75" alt="Hydrangeas, called 'Hortensia' in Dutch"></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Jellyfish.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Jellyfish.jpg" title="Jellyfish"></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Koala.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Koala.jpg" alt="Koala"></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Lighthouse.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Lighthouse.jpg" alt="Lighthouse"></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Penguins.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Penguins.jpg" alt="Penguins"></a>
	<a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Tulips.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Tulips.jpg" alt="Yellow tulips"></a>
</div>

           </div>
       </div>
   </div>
</div>

<div id="detail-td" class="modal">
    <div class="content-ctn">
        <p>Thanks for clicking. That felt good.</p>
    </div>
  <a href="#">Mua ngay</a>
 
</div>
<script>
$(document).ready(function() {
  //   $(".gallery a").attr("data-fancybox","mygallery");
  // // assign captions and title from alt-attributes of images:
  // $(".gallery a").each(function(){
  //   // $(this).attr("data-caption", $(this).find("img").attr("alt"));
  //   // $(this).attr("title", $(this).find("img").attr("alt"));
  // });
  // start fancybox:
	$(".gallery a").fancybox();
});
</script>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop