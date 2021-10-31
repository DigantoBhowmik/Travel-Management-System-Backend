@extends('layouts.adminapp')
@section('contain')
    <table class="table table-borded">
    <tr>
        <th>
        <form action="" class="col-9">
            <div class="form-group">
                <input type="search" name="search" id="" class="form-control" placeholder="Search by name and email" 
                value="{{$search}}" >
            </div>
            <button class="btn btn-primary" > Search </button>
    </form>
        </th>
    </tr>
    

        <tr>
            <th> <a class="btn btn-primary" href="{{route('admins.create')}}"> Do you want to Create an Admin  </a></th>
           
        </tr>
       
        <tr>
            <th> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="mb-2 text-primary">Admins List</h2>
                </div></th>
        </tr>
       
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
        </tr>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->name}}</td>
                <td>{{$admin->id}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone}}</td>
                <td><a href="/admins/edit/{{$admin->id}}/{{$admin->name}}">Edit</a></td>
                <td><a href="/admins/delete/{{$admin->id}}/{{$admin->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection