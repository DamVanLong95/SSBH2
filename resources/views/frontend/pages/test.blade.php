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
	overflow-y: hidden;
	overflow-x: auto;
	-webkit-overflow-scrolling: touch;
}

.table {
	width: 700px;
	margin-bottom: 0;
	max-width: none;
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
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<th>1</th>
						<th>The sentance starts here</th>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
						<th>2</th>
						<th>The sentance starts here</th>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
						<th>3</th>
						<th>The sentance starts here</th>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>David</td>
						<td>Bullock</td>
						<td>@serkai</td>
						<th>4</th>
						<th>The sentance starts here</th>
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