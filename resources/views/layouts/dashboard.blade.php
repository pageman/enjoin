<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	
	@include('partials.dash-nav')
	@yield('content')

	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
</body>
</html>