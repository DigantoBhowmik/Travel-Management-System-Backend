@extends('layouts.adminapp')
@section('contain')
<tr>
            <th> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="mb-2 text-primary">Event List</h2>
                </div></th>
        </tr>
<div class="row">
  @foreach ($events as $event)
    
    
      <div class="image-cards col-md-3">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="{{asset($event->image)}}">
              </div>
              <div class="card-details">
                  <h1><b>{{$event->eventname}}</b></h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> {{$event->price}}</span> taka
                </p>
                <p><i class="fas fa-clock"></i> 1day & 2 night</p>
              </div>
              
              <td><a href="/admin/eventdetails/{{$event->id}}/{{$event->name}}">See Details</a></td>
            
          </div>
      </div>
  </a>
@endforeach

</div>


@endsection