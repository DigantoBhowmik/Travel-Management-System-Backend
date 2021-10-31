@extends('layouts.adminapp')
@section('contain')
    <table class="table table-borded">

     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Price</th>
            <th>Short Description</th>
            <th>Description</th>
            <th>Agent Name</th>
            <th>Starting Date</th>
            <th>End Date</th>
            <th>Booiking Deadline</th>
        </tr>
        @foreach($Packages as $Package)
            <tr>
                <td>{{$Package->name}}</td>
                <td>{{$Package->id}}</td>
                <td>{{$Package->price}}</td>
                <td>{{$Package->shortdesc}}</td>
                <td>{{$Package->desc}}</td>
                <td>{{$Package->agentname}}</td>
                <td>{{$Package->startingdate}}</td>
                <td>{{$Package->enddate}}</td>
                <td>{{$Package->bookingdeadline}}</td>
                <td>{{$Package->role}}</td>
                <td><a href="/admins/edit/{{$Package->id}}/{{$Package->name}}">Edit</a></td>
                <td><a href="/admins/delete/{{$Package->id}}/{{$Package->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection