@extends('layouts.app')
@section('contain')
    <div class="page">
        <div class="login_body">
          <h3 style="text-align: center">Admin Login</h3>
          @if (Session::has('err2'))
          <div class="alert alert-info">{{ Session::get('err2') }}</div>
          @endif
          <form method="POST" action="{{route('admin')}}">
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
          </form>
        </div>
        
    </div>
@endsection
