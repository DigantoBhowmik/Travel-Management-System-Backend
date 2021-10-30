@extends('layouts.app')
@section('contain')
    <div class="register_page">
        <div class="register_body">
          <form method="POST" action="{{route('createevents')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Event Name: </label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
                @error('eventname')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Short Discription: </label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" >
                @error('shortdiscreption')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Description: </label>
                <input type="text" name="shortdesc" class="form-control" id="formGroupExampleInput" >
                @error('discrepetion')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Price: </label>
                <input type="text" name="desc" class="form-control" id="formGroupExampleInput" >
                @error('price')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Starting Date: </label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" >
                @error('startingdate')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Ending Date: </label>
                <input type="file" name="image" class="form-control" id="formGroupExampleInput" >
                @error('endingdate')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Image: </label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" >
                @error('image')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Deadline: </label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" >
                @error('startingdate')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Agent ID: </label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" >
                @error('agentid')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <input type="submit" name="submit" value="REGISTER" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
@endsection