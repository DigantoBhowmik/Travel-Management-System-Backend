@extends('layouts.app')
@section('contain')
<style>
  table{
  table-layout:fixed;
  border: 1px solid gray;
  border-collapse: collapse;
}
th.from, th.date {
  width: 15%;
}
th.subject{
  width: 70%;
}
td{
  word-wrap: break-word;
}
</style>
@if (Session::has('message'))
        <div class="alert alert-success" style="margin-top: 20px">{{ Session::get('message') }}</div>
@endif

<br>
    <div class="createPart">
      <legend > Add Package </legend>  
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
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Image</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="image">
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
              
              <input type="submit" name="submit" value="Add Package" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
    <fieldset>
      <br>
      <legend> My Package </legend>
      <div>
        <table class="table">
          <thead>
            <tr>
              
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Short Description</th>
              <th scope="col">Description</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($packages as $package)
              
                  <tr>
                    
                      <td>{{$package->name}}</td>
                      <td>{{$package->price}}</td>
                      <td>{{$package->shortdesc}}</td>
                      <td >{{$package->desc}}</td>
                      <td><a href="/book/{{$package->id}}">Booking Details</a></td>
                      <td><a href="/editpackage/{{$package->id}}">Edit</a></td>
                      <td><a href="package/delete/{{$package->id}}">Delete</a></td> 
                  </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>
    </fieldset>
@endsection