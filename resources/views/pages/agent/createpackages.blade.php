@extends('layouts.app')
@section('contain')
<legend> Add Package </legend>
<br>
    <div >
      {{$package}}
        <div >
          <form method="POST" action="{{route('createpackages')}}">
            {{csrf_field()}}
            <div class="mb-6">
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
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
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
              
              <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
@endsection