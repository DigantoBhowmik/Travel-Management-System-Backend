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



<!-- if($request->hasfile('profile_img'))
        {
            $file= $request->profile_img;
            $extension = $file->getClientOriginalExtension();
            $filename= time()."-".$extension;
            $file->move('asset/image/',$filename);
            $var->profile_img= $filename;
        } -



        @extends('layouts.adminapp')
@section('contain')
    

    <form action="{{route('admins.create')}}" class="col-md-6" method="post" enctype="multipart/form-data">
       
        {{csrf_field()}}
        
        <div class="form-group mb-3">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <span>Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
           @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            
        <div class="form-group mb-3">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <span>password</span>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <span>Confirm password</span>
            <input type="text" name="cpassword" value="{{old('cpassword')}}" class="form-control">
            @error('cpassword')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

       

        <hr>
        

        <input type="submit" class="btn btn-success" value="Add Admin" >
        

       
    </form>

        
        
@endsection
//this is one
<!-- @extends('layouts.adminapp')
@section('contain')
    

    <form action="{{route('admins.create')}}" class="col-md-6" method="post" >
       
        {{csrf_field()}}
        
        <div class="form-group mb-3">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <span>Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
           @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            
        <div class="form-group mb-3">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <span>password</span>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <span>Confirm password</span>
            <input type="text" name="cpassword" value="{{old('cpassword')}}" class="form-control">
            @error('cpassword')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

       

        <hr>
        

        <input type="submit" class="btn btn-success" value="Add Admin" >
        

       
    </form>

        
        
@endsection -->
<!-- 
//edit
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
    </form> -->























   
   

















   
   