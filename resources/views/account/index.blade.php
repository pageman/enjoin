@extends('layouts.dashboard')

@section('content')

<div class="dash-container">
	<div class="result-container">
		<div class="container-fluid suggestions-container">
			<header>
				Suggestions for <strong> running </strong> near <strong> Manila</strong>
			</header>
		</div>
		<div class="filter-container">
			<span class="show-me">Show me:</span>
			<button class="btn btn-default btn-sm">Running</button>
			<button class="btn btn-default btn-sm">Climbing</button>
		</div>
	</div>

	<div role="main" class="maps-container">
		<div id="map-canvas">
		</div>
	</div>
</div>
@endsection