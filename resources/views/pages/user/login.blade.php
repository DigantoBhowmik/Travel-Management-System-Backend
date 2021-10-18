@extends('layouts.app')
@section('contain')
    <div class="page">
        <div class="login_body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" >
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" >
              </div>
              <button type="button" class="btn btn-primary login_button">Sign in</button>
              <div class="swap_between_login_register">
                <p>Don't have any account?</p>
                <u><a href="{{route('register')}}">Create an account</a></u>
            </div>
        </div>
        
    </div>
@endsection
