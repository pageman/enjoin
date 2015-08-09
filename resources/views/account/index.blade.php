@extends('layouts.dashboard')

@include('partials.navbar')

@section('content')

<div class="home-container">

  <section class="left-container">
    <div class="container-fluid container-feeds">
          <div class="row">
              <div class="col-sm-12">
                  <h4 class="nearby-area">Suggestions Nearby near <strong>MAKATI</strong></h4>
                  <div class="show-container">
                    <p><strong>Show me:</strong><span class="show-options">
                    <a href="http://localhost:8000/u" class="btn btn-sm btn-default">Nearby</a>
                     <a href="http://localhost:8000/u?id=1" class="btn btn-sm btn-default">Air Sports</a>
                     <a href="http://localhost:8000/u?id=2" class="btn btn-sm btn-default">Archery</a>
                      <a href="http://localhost:8000/u?id=4" class="btn btn-sm btn-default">Badminton</a>
                       <a href="http://localhost:8000/u?id=5"class="btn btn-sm btn-default">Basketball</a>
                   </span></p>
                  </div>
                  <div id="notif" class="alert alert-success hidden">
Message sent!
</div>
                  <ul class="user-feeds">

                    @foreach($data as $index=>$datum)
                    <li>
                      <div class="col-sm-1"><span class="user-counter">{{ $index + 1 }}.</span></div>

                      <div class="user-content col-sm-9">
                        <h3 class="user-name"><a href="#" data-toggle="modal" data-target="#messages" data-whatever="{{ $datum->name }}">{{ $datum->name }}</a></h3>
                        <div class="user-details col-sm-11">
                          <p class="user-address"><small><span>{{ $datum->location_city }}, {{ $datum->location_country }}</span> • <span class="user-date">{{ round($datum->distance) }} KM</span></small></p>
                          <p class="user-status">@foreach($datum->interests as $interest)
                          - {{ $interest->name }}
                          @endforeach</p>
                        </div>
                  </div>
                      <div class="user-image col-sm-2"><img src="http://namicon.nexucloud.com/{{ strtoupper($datum->name) }}/80/CCC/2b3a42/" alt="Sample Image"></div>
                      <div class="clearfix"></div>
                      <div class="col-sm-11 col-sm-offset-1"><a href="#" class="user-save"><span class="fa fa-bookmark"></span> Save</a></div>
                      <div class="clearfix"></div>

                    </li>
                    @endforeach

                  </ul>
              </div>
          </div>
      </div>
  </section>
  <section class="right-container">
      <div id="map-canvas">
    </div>
  </section>
  <div class="clearfix"></div>
</div>

<div class="modal fade" id="messages" role="dialog" aria-labelledby="messagelabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="messagelabel">Messages</h4>
      </div>
      <div class="modal-body">
        <div class="row">@include('message.create')</div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection