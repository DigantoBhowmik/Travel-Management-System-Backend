@extends('layouts.adminapp')
@section('contain')
    <form action="{{route('admins.create')}}" class="col-md-6" method="post">
       
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
           @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>password</span>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Confirm password</span>
            <input type="text" name="cpassword" value="{{old('cpassword')}}" class="form-control">
            @error('cpassword')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <hr>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>

        
        
@endsection






















   
   