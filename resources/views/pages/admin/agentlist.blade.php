@extends('layouts.adminapp')
@section('contain')
    <table class="table table-borded">

     
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
                <td><a href="/admins/Agentedit/{{$user->id}}/{{$user->name}}">Edit</a></td>
                <td><a href="/admins/Agentdelete/{{$user->id}}/{{$user->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection