@extends('layouts.app')
@section('contain')
<br>
    <legend> Packages </legend>
<br>

  <div class="row">
    @foreach ($packages as $package)
        <a href="/packagedetails/{{$package->id}}">
        <div class="image-cards col-md-3">
            <div class="image-card">
                <div class="image-card-banner">
                    <img src="{{asset($package->image)}}">
                </div>
                <div class="card-details">
                    <h1><b>{{$package->name}}</b></h1>
                    <p class="cards-p"><i class="fas fa-bolt"></i>
                      From <span id="price"> {{$package->price}}</span> taka
                  </p>
                  <p><i class="fas fa-clock"></i> 1day & 2 night</p>
                </div>
              
            </div>
        </div>
    </a>
  @endforeach
  
  </div>
  
    
    
    
        
    
@endsection