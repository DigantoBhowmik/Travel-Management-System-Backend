@extends('layouts.adminapp')
@section('contain')
    <table class="table table-borded">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="mb-2 text-primary">User List</h3>
        </div>
     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Email</th>
            <th>Phone</th>
            <th>role</th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->id}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->role}}</td>
                <td><a href="/admins/orderlist/{{$user->id}}/{{$user->name}}">Order List</a></td>
                <td><a href="/admins/Useredit/{{$user->id}}/{{$user->name}}">Edit</a></td>
                <td><a href="/admins/Userdelete/{{$user->id}}/{{$user->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection