@extends('layouts.adminapp')
@section('contain')
<div>
    <h1>Packages Book By {{$name}}</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Package Name</th>
        <th scope="col">Package Price</th>
        <th scope="col">Short Description</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($packages as $package)
        
            <tr>
                <td>{{$package->id}}</td>
                <td>{{$package->name}}</td>
                <td>{{$package->price}}</td>
                <td>{{$package->shortdesc}}</td>
                <td>{{$package->desc}}</td>
            </tr>
            
        @endforeach
    </tbody>
    </table>
</div>
<hr>
<div>
    <h1>Events Book By {{$name}}</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">event Name</th>
        <th scope="col">event Price</th>
        <th scope="col">Short Description</th>
        <th scope="col">Description</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->price}}</td>
                <td>{{$event->shortdesc}}</td>
                <td>{{$event->desc}}</td>
                <td>{{$event->startdate}}</td>
                <td>{{$event->enddate}}</td>
            </tr>
            
        @endforeach
    </tbody>
    </table>
</div>
    @endsection