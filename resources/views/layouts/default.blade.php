<!DOCTYPE html>
<html>
<head>
    <title>Enjoin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	
	@yield('content')

	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/vendor/tag-it.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>