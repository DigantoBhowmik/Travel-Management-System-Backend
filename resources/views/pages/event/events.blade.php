@extends('layouts.app')
@section('contain')
        <legend> Events </legend>
        <br>

<div class="row">
  @foreach ($events as $event)
    <a href="/eventdetails/{{$event->id}}">
      <div class="image-cards col-md-3">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="{{$event->image}}">
              </div>
              <div class="card-details">
                  <h1><b>{{$event->name}}</b></h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> {{$event->price}}</span> taka
                </p>
                <p><i class="fas fa-clock"></i> Duration :{{$event->shortdesc}}</p>
              </div>
            
          </div>
      </div>
  </a>
@endforeach

</div>


@endsection