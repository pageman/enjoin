<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body id="landing-page">
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" class="hidden">Enjoin</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><img src="http://namicon.nexucloud.com/J/36/FFF/FF530D/" class="img-circle navbar-pic"/></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Jelly <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="fa fa-fw fa-user"></span> Profile</a></li>
							<li><a href="#"><span class="fa fa-fw fa-cog"></span> Settings</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><span class="fa fa-fw fa-sign-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<main class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-3 col-sm-6">
					<h1>ENJOIN</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<form class="form-inline">
						<div class="form-group">
							<label class="sr-only">Search Interest</label>
							<input type="text" class="form-control" placeholder="Search Interest">
						</div>
						<div class="form-group">
							<label class="sr-only">Location</label>
							<input type="text" class="form-control"placeholder="Location">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="fa fa-fw fa-search"></span> Search
						</button>
					</form>

					<div class="activity-container">
						<button class="btn text-center">
							<span class="fa fa-fw fa-camera-retro"></span>
							<h5>Photography</h5>
						</button>
						<button class="btn text-center">
							<span class="fa fa-fw fa-paint-brush"></span>
							<h5>Painting</h5>
						</button>
						<button class="btn text-center">
							<span class="fa fa-fw fa-bicycle"></span>
							<h5>Biking</h5>
						</button>
						<button class="btn text-center">
							<span class="fa fa-fw fa-futbol-o"></span>
							<h5>Football</h5>
						</button>
						<button class="btn text-center">
							<span class="fa fa-fw fa-plane"></span>
							<h5>Travel</h5>
						</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
</body>
</html>