@extends('layouts.app')
@section('contain')
<br>
    <legend> Package Details </legend>
        <p>{{$packages->image}}</p>
        <br>
        <p>Name: {{$packages->name}}</p>
        <br>
        <p>Price: {{$packages->price}}</p>
        <br>
        <p>Short Description: {{$packages->shortdesc}}</p>
        <br>
        <p>Description: {{$packages->desc}}</p>
        <br>
        <p>Agent Name: {{$packages->agentId}}</p>
        <br>

        <div class="createPart">
            <legend > Add Package </legend>  
              <div >
                <form method="POST" action="{{route('confirmpackage')}}">
                  {{csrf_field()}}

        <div class="mb-3" hidden>
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Agent Name</label>
            <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" value="{{$packages->agentId}}">
            @error('agentId')
              <span class="text-danger">{{$message}}</span>
             @enderror
        </div>
        <div class="mb-3" hidden>
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Agent Name</label>
            <input type="text" name="userId" class="form-control" id="formGroupExampleInput" value="{{Session()->get('userId')}}">
            @error('userId')
              <span class="text-danger">{{$message}}</span>
             @enderror
        </div>

        <div class="mb-3" hidden>
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Pack Name</label>
            <input type="text" name="packageId" class="form-control" id="formGroupExampleInput" value="{{$packages->packageId}}">
            @error('packageId')
              <span class="text-danger">{{$message}}</span>
             @enderror
        </div>

        <div class="mb-3" >
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">date </label>
            <input type="date" name="date" class="form-control" id="formGroupExampleInput" >
            @error('date')
              <span class="text-danger">{{$message}}</span>
             @enderror
        </div>

          
          <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary login_button">
      </form>  
    </div>
    
</div>
@endsection