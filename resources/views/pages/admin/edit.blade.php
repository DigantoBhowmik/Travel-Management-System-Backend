@extends('layouts.adminapp')
@section('contain')
<form action="{{route('admin.edit')}}" class="col-md-6" method="post">
       
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$admin->id}}">
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$admin->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{$admin->email}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{$admin->phone}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>password</span>
            <input type="text" name="password" value="{{$admin->password}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection