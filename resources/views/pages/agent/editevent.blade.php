@extends('layouts.app')
@section('contain')

    <div class="createPart">
      <legend > Add event </legend>  
        <div >
          <form method="POST" action="{{route('editevent')}}">
            {{csrf_field()}}
            <div class="mb-6" hidden>
                <input type="text" name="id" class="form-control" id="formGroupExampleInput" value="{{$event->id}}">
            </div>
            <div class="mb-6">
                <label for="formGroupExampleInput" class="form-label">event Name :</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$event->name}}">
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Price :</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" value="{{$event->price}}">
                @error('price')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Short Description</label>
                <input type="text" name="shortdesc" class="form-control" id="formGroupExampleInput" value="{{$event->shortdesc}}">
                @error('shortdesc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" >{{$event->desc}}</textarea>
                @error('desc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Image</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="image" value="{{$event->image}}"> 
                @error('image')
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
              
              <input type="submit" name="submit" value="Update event" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
@endsection