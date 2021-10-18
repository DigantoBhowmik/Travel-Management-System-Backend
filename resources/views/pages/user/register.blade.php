@extends('layouts.app')
@section('contain')
    <div class="page">
        <div class="register_body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" >
              </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Email:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" >
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" >
              </div>
              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" >
              </div>
              <button type="button" class="btn btn-primary login_button">REGISTER</button>
              <div class="swap_between_login_register">
                <p>Already have an account?</p>
                <u><a href="{{route('login')}}">Sign in here</a></u>
            </div>
              
        </div>
        
    </div>
@endsection