
@extends('layouts.adminapp')
@section('contain')
    

<div class="register_page">
        <div class="register_body">
          @if(Session::has('msg'))
          <p class="alert alert-success">{{Session::get('msg')}}</p>
          @endif

          <tr>
            <th> 
                
            </th>
          </tr>
      
                <div style="clear: both; height: 100%; text-align: center">
                <h2 class="mb-2 text-primary">Create An admin</h2>
              </div>
          
          <form method="POST" action="{{route('admins.create')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name :</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              
              
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Email :</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" >
                @error('email')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Phone :</label>
                <input type="text" name="phone" class="form-control" id="formGroupExampleInput" >
                @error('phone')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password :</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" >
                @error('password')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Confirm Password :</label>
                <input type="password" name="cpassword" class="form-control" id="formGroupExampleInput2" >
                @error('cpassword')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <input type="submit" name="submit" value="Add Admin" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
        
@endsection






















   
   