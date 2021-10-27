@extends('layouts.app')
@section('contain')

    <legend> Packages </legend>
<br>
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Short Description</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Booking Deadline</th>
        <th scope="col">Agent Name</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($packages as $package)
            <tr>
                
                <td>{{$package->name}}</td>
                <td>{{$package->price}}</td>
                <td>{{$package->shortdesc}}</td>
                <td>{{$package->startingdate}}</td>
                <td>{{$package->enddate}}</td>
                <td>{{$package->bookingdeadline}}</td>
                <td>{{$package->agentname}}</td>
            </tr>
            
       @endforeach
    </tbody>
  </table>

    
        
    
@endsection