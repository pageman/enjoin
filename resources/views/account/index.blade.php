@extends('layouts.dashboard')

@section('content')

<div class="wrapper container">
	<aside class="sidebar-wrapper">
		<nav class="nav-sidebar">
			<ul>
				<li>
					<a href="#">
						<span class="fa fa-fw fa-home"></span>	Home 
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fa fa-fw fa-location-arrow"></span> People Nearby
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fa fa-fw fa-envelope"></span> Messages
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fa fa-fw fa-calendar"></span> Your Events
					</a>
				</li>
			</ul>
		</nav>
	</aside>

	<main role="main" class="main-wrapper">
		<header class="page-header">
			<h1><span class="fa fa-fw fa-home"></span> Home</h1>
		</header>
		<div class="row">
			<div class="col-sm-6">
				<div class="event-item">
					<img src="http://placehold.it/440x120">
					<div class="row">
						<div class="col-sm-3">
							<div class="event-date">
								<span class="event-date-month">AUG</span>
								<span class="event-date-day">10</span>
								<span class="event-date-2015">2015</span>
							</div>
						</div>
						<div class="col-sm-9 event-header">
							<h4>Title</h4>
							<span class="label label-primary">RUNNING</span>
							<address><span class="fa fa-map-marker text-muted"></span>
								<a href="#">Manila</a>
							</address>
							<p><span class="fa fa-clock-o text-muted"></p>
						</div>
					</div>
					<div class="container-fluid">
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</div>
					<div class="btn-group btn-group-justified" role="group">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">
								<span class="fa fa-play"></span> Join
							</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">
								<span class="fa fa-envelope-o"></span> Invite
							</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">
								<span class="fa fa-share-alt"></span> Share
							</button>
						</div>
					</div><!-- .btn-group -->
				</div><!-- .event-item -->
			</div><!-- .col-sm-6 -->
		</div><!-- .row -->
	</main>
</div>
@endsection