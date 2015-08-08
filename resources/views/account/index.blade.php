@extends('layouts.dashboard')

@section('content')

<div class="container-fluid dash-container">
	<div class="result-container">
		<div class="container-fluid">
			<header>
				Suggestions for <strong> running </strong> near <strong> Manila</strong>
			</header>
		</div>
		<div class="filter-container">
			<div class="container-fluid">
				<span class="show-me">Show me:</span>
				<button class="btn btn-default btn-sm">Running</button>
				<button class="btn btn-default btn-sm">Climbing</button>
			</div>
		</div>
	</div>

	<div role="main" class="maps-container">
		<div id="map-canvas">
		</div>
	</div>
</div>
@endsection