<!DOCTYPE html>

<html>

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Usse</title>
		
		{{ HTML::style('css/bootstrap.css'); }}
		{{ HTML::script('js/scripts.js'); }}
		
		<!--link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css'); }}" type="text/css" media="screen" charset="utf-8"-->
		<link rel="stylesheet" href="{{ URL::asset('css/screen.css'); }}" type="text/css" media="screen" charset="utf-8">
		
	</head>

	<body>
		
		<div class="container">		
		
			<div class="row">
				<div class="col-xs-6">
					span6 LEFT
				</div>
				<div class="col-xs-6">
					span6 RIGHT
				</div>
			</div>
		
			<div class="row">
				<div class="col-xs-12">
					@yield('pagetitle')
					@yield('content')
				</div>
			</div>
			
		</div>
	</body>
</html>