@extends('layouts.dashboard')

@include('partials.navbar')

@section('content')

<div class="home-container">
  <section class="left-container">
    <div class="container-fluid container-feeds">
          <div class="row">
              <div class="col-sm-12">
                  <h4 class="nearby-area">Suggestions Nearby near <strong>Dagupan</strong></h4>
                  <div class="show-container">
                    <p><strong>Show me:</strong><span class="show-options">
                     <a class="btn btn-sm btn-default">Badminton</a>
                      <a class="btn btn-sm btn-default">Golf</a>
                       <a class="btn btn-sm btn-default">Ice Skating</a>
                        <a class="btn btn-sm btn-default">Bowling</a>
                         <a class="btn btn-sm btn-default">Billiard</a>
                          <a class="btn btn-sm btn-default">Paint Ball</a>
                   </span></p>
                  </div>
                  <ul class="user-feeds">

                    @foreach($data as $index=>$datum)
                    <li>
                      <div class="col-sm-1"><span class="user-counter">{{ $index + 1 }}.</span></div>

                      <div class="user-content col-sm-9">
                        <h3 class="user-name"><a href="#">{{ $datum->name }}</a></h3>
                        <div class="col-sm-1"><span class="user-rating">{{ $datum->distance }}</span></div>
                        <div class="user-details col-sm-11">
                          <p class="user-address"><small>Badminton</small></p>
                          <p class="user-address"><small><span>Earum, impedit, doloribus</span> • <span class="user-date">January 23, 2015</span></small></p>
                          <p class="user-status">Perspiciatis ducimus distinctio reiciendis minus! Alias velit culpa exercitationem voluptate, ipsam ut quod, sed veniam quasi! Pariatur beatae voluptatum, quasi!</p>
                        </div>
                  </div>
                      <div class="user-image col-sm-2"><img src="http://lorempixel.com/200/200/" alt="Sample Image"></div>
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
    <div class="container-fluid"></div>
  </section>
  <div class="clearfix"></div>
</div>

@endsection