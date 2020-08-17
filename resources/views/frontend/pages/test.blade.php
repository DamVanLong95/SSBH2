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

.fix-width {
	width: 400px;
	overflow-y: auto;
  overflow-x: auto;
  height: 500px;
	-webkit-overflow-scrolling: touch;
}

.table {

	margin-bottom: 0;
  max-width: none;
  overflow: auto;
}

.panel {
	padding: 15px;
}

// Scrollbar Override
.scroll-inner {
	&::-webkit-scrollbar {
		width: 10px;
	}
	&::-webkit-scrollbar:horizontal {
		height: 10px;
	}
	&::-webkit-scrollbar-track {
		background-color: transparentize(#ccc, 0.7);
	}
	&::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background: transparentize(#ccc, 0.5);
		box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}
}

body {
	background-color: tint(cornflowerblue, 60%); // because fight club
}


</style>
@stop

@section('content')

<div class="container">
	<h1 class="text-center">Table Overflow-X Scroll</h1>
	<div class="panel panel-default">
		<div class="center-block fix-width scroll-inner">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>#</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody style="text-align: center; font-size: 19px; color: #3d4b63; border: 1px solid #caad50;">
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;" width="50%"><strong>1st Year</strong></td>
<td style="border: 1px solid #caad59;" width="50%">Paper</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>2nd Year</strong></td>
<td style="border: 1px solid #caad59;">Cotton</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>3rd Year</strong></td>
<td style="border: 1px solid #caad59;">Leather</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>4th Year</strong></td>
<td style="border: 1px solid #caad59;">Fruit and Flowers</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>5th Year</strong></td>
<td style="border: 1px solid #caad59;">Wood</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>6th Year</strong></td>
<td style="border: 1px solid #caad59;">Iron</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>7th Year</strong></td>
<td style="border: 1px solid #caad59;">Wool and Copper</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>8th Year</strong></td>
<td style="border: 1px solid #caad59;">Bronze</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>9th Year</strong></td>
<td style="border: 1px solid #caad59;">Pottery</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>10th Year</strong></td>
<td style="border: 1px solid #caad59;">Tin</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>15th Year</strong></td>
<td style="border: 1px solid #caad59;">Crystal</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>20th Year</strong></td>
<td style="border: 1px solid #caad59;">Porcelain</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>25th Year</strong></td>
<td style="border: 1px solid #caad59;">Silver</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>30th Year</strong></td>
<td style="border: 1px solid #caad59;">Pearl</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>35th Year</strong></td>
<td style="border: 1px solid #caad59;">Coral</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>40th Year</strong></td>
<td style="border: 1px solid #caad59;">Ruby</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>50th Year</strong></td>
<td style="border: 1px solid #caad59;">Gold</td>
</tr>
<tr style="border: 1px solid #caad59; height: 75px;">
<td style="border: 1px solid #caad59;"><strong>60th Year</strong></td>
<td style="border: 1px solid #caad59;">Diamond</td>
</tr>
</tbody>
			</table>
		</div>
	</div>
</div>

@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></>

    <script src="{{ url('assets/js/contest.js?'.config('custom.version')) }}"></script>
@stop