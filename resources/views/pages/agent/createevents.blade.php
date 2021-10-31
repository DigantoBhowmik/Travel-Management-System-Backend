@extends('layouts.app')
@section('contain')
          <form method="POST" action="{{route('createevents')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Event Name: </label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Price: </label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" >
                @error('price')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
            </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Starting Date: </label>
                <input type="date" name="startdate" class="form-control" id="formGroupExampleInput" >
                @error('startdate')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Ending Date: </label>
                <input type="date" name="enddate" class="form-control" id="formGroupExampleInput" >
                @error('enddate')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Last Date to Book: </label>
                <input type="date" name="deadline" class="form-control" id="formGroupExampleInput" >
                @error('deadline')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Short Discription: </label>
                <input type="text" name="shortdesc" class="form-control" id="formGroupExampleInput" ></textarea>
                @error('shortdesc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Description: </label>
                <textarea type="text" name="desc" class="form-control" id="formGroupExampleInput" ></textarea>
                @error('desc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3" hidden>
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Agent Name</label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" value="{{Session()->get('userId')}}">
                @error('agentname')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <input type="submit" name="submit" value="Submit" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
@endsection