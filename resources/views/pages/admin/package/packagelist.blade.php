@extends('layouts.adminapp')
@section('contain')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="mb-2 text-primary">Packages List</h3>
    </div>
    <table class="table table-borded">
    
     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Price</th>
            <th>Short Description</th>
            <th>Description</th>

            <th>Agent ID</th>
            
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

                <td>{{$Package->agentID}}</td>
               
                <td><a href="/admins/Packageedit/{{$Package->id}}/{{$Package->name}}">Edit</a></td>
                <td><a href="/admins/Packagedelete/{{$Package->id}}/{{$Package->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection