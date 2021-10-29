@extends('layouts.app')
@section('contain')
    <div class="register_page">
        <div class="register_body">
          <form method="POST" action="{{route('createpackages')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Package Name :</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Price :</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" >
                @error('price')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Short Description</label>
                <input type="text" name="shortdesc" class="form-control" id="formGroupExampleInput" >
                @error('shortdesc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Description</label>
                <input type="text" name="desc" class="form-control" id="formGroupExampleInput" >
                @error('desc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Agent Name</label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" >
                @error('agentname')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Image</label>
                <input type="file" name="image" class="form-control" id="formGroupExampleInput" >
                @error('image')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <input type="submit" name="submit" value="REGISTER" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
@endsection