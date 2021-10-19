@extends('layouts.app')
@section('contain')
    <div class="register_page">
        <div class="register_body">
          <form method="POST" action="{{route('register')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name:</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
              </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Email:</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" >
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Phone:</label>
                <input type="text" name="phone" class="form-control" id="formGroupExampleInput" >
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" >
              </div>
              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Confirm Password:</label>
                <input type="password" name="cpassword" class="form-control" id="formGroupExampleInput2" >
              </div>
              <input type="submit" name="submit" value="REGISTER" class="btn btn-primary login_button">
              <div class="swap_between_login_register">
                <p>Already have an account?</p>
                <u><a href="{{route('login')}}">Sign in here</a></u>
            </div>
          </form>  
        </div>
        
    </div>
@endsection