@extends('layouts.app')
@section('contain')
    <div class="page">
        <div class="login_body">
          @if (Session::has('err'))
            <div class="alert alert-info">{{ Session::get('err') }}</div>
          @endif
          <form method="POST" action="{{route('login')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email :</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" >
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password :</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" >
              </div>
              <input type="submit" name="submit" value="Sign in" class="btn btn-primary login_button">
              <div class="swap_between_login_register">
                <p>Don't have any account?</p>
                <u><a href="{{route('register')}}">Create an account</a></u>
            </div>
          </form>
        </div>
        
    </div>
@endsection
