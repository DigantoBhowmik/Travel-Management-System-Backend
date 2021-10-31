@extends('layouts.adminapp')
@section('contain')
<div class="register_page">
        <div class="register_body">
        <div style="clear: both; height: 100%; text-align: center">
        <h2 class="mb-2 text-primary">Update admin</h2>
      </div>
       
          <form action="{{route('admin.edit')}}"  method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$admin->id}}">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name :</label>
                <input type="text" name="name" value="{{$admin->name}}"  class="form-control" id="formGroupExampleInput" >
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Email :</label>
                <input type="text" name="email" value="{{$admin->email}}" class="form-control" id="formGroupExampleInput" >
                @error('email')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Phone :</label>
                <input type="text" name="phone" value="{{$admin->phone}}" class="form-control" id="formGroupExampleInput" >
                @error('phone')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password :</label>
                <input type="password" name="password" value="{{$admin->password}}" class="form-control" id="formGroupExampleInput2" >
                @error('password')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Confirm Password :</label>
                <input type="password" name="cpassword" value="{{$admin->password}}" class="form-control" id="formGroupExampleInput2" >
                @error('cpassword')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <input type="submit" name="submit" value="Edit Admin" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
    @endsection