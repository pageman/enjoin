@extends('layouts.default')

@include('partials.navbar')

@section('content')

<section class="section-interests">
	<div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form action="#">
                	<h4 class="text-center"><label for="searchInterest" class="control-label">Add Interest</label></h4>
                	<div class="input-group col-sm-12">
			          <input type="text" class="form-control" name="searchInterest" id="searchInterest" placeholder="Interest">
			        </div>
			        <div id="carousel-interests" class="carousel slide" data-ride="carousel">
	                	<div class="interest-lists carousel-inner">
	                		<ul class="item active">
	                			@foreach($data as $index=>$datum)
	                				@if(($index+1)%20 === 0)
	                					</ul>
	                					<ul class="item">
	                				@endif
	                				<li><a data-id="{{ $datum->id }}" class="btn btn-primary">{{ $datum->name }}</a></li>
	                			@endforeach
	                			</ul>
	                		
	                	</div>
	                		<!-- Controls -->
							  <a class="left interest-control" href="#carousel-interests" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right interest-control" href="#carousel-interests" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
	                </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection