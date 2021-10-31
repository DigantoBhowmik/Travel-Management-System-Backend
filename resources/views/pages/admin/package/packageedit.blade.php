@extends('layouts.adminapp')
@section('contain')

        <div class="register_body">
          <form action="{{route('admin.Packageedit')}}"  method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$package->id}}">
            <input type="hidden" name="id" value="{{$package->startingdate}}">
            <input type="hidden" name="id" value="{{$package->enddate}}">
            <input type="hidden" name="id" value="{{$package->bookingdeadline}}">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name :</label>
                <input type="text" name="name" value="{{$package->name}}"  class="form-control" id="formGroupExampleInput" >
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
            </div>
              
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Price :</label>
                <input type="text" name="price" value="{{$package->price}}" class="form-control" id="formGroupExampleInput" >
                @error('price')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">shortdesc :</label>
                <input type="text" name="shortdesc" value="{{$package->shortdesc}}" class="form-control" id="formGroupExampleInput" >
                @error('shortdesc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">desc :</label>
                <input type="text" name="desc" value="{{$package->desc}}" class="form-control" id="formGroupExampleInput2" >
                @error('desc')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Agent Name :</label>
                <input type="text" name="agentname" value="{{$package->agentname}}"  class="form-control" id="formGroupExampleInput" >
                @error('agentname')
                  <span class="text-danger">{{$message}}</span>
                 @enderror
            </div>
              <!-- <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">starting date :</label>
                <input type="date" name="cpassword" value="{{$package->startingdate}}" class="form-control" id="formGroupExampleInput2" >
              </div>
              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">End date :</label>
                <input type="date" name="cpassword" value="{{$package->enddate}}" class="form-control" id="formGroupExampleInput2" >
              </div>
              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Booking date :</label>
                <input type="date" name="cpassword" value="{{$package->bookingdeadline}}" class="form-control" id="formGroupExampleInput2" >
              </div> -->
              <input type="submit" name="submit" value="Edit Package" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
    @endsection