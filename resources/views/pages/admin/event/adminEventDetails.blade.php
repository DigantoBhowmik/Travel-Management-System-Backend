@extends('layouts.adminapp')
@section('contain')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="mb-2 text-primary">Events Details</h3>
    </div>
    <table class="table table-borded">
    
     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Short Description</th>
           
            <th>Description</th>
            <th>Price</th>
            <th>Agent ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Deadline</th>
            <th>Image</th>
            
        </tr>
      
            <tr>
                <td>{{$events->name}}</td>
                <td>{{$events->id}}</td>
                <td>{{$events->shortdesc}}</td>
                <td>{{$events->desc}}</td>
                <td>{{$events->price}}</td>
                <td>{{$events->agentid}}</td>
                <td>{{$events->startdate}}</td>
                <td>{{$events->enddate}}</td>
                <td>{{$events->deadline}}</td>
                <td>{{$events->image}}</td>
            </tr>
      
    </table>
@endsection