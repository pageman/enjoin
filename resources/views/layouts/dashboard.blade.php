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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqCnZcYW-thvQ_JCNB-E6KOSTQBpnGrvk"></script> -->
</body>
</html>