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
    <div class="createPart">
      <legend > Add event </legend>  
        <div >
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
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Short Description: </label>
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

              <input type="submit" name="submit" value="Add Event" class="btn btn-primary login_button">
          </form>
        </div>
        
    </div>
    <fieldset>
      <br>
      <legend> My event </legend>
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
            
              @foreach ($events as $event)
              
                  <tr>
                    
                      <td>{{$event->name}}</td>
                      <td>{{$event->price}}</td>
                      <td>{{$event->shortdesc}}</td>
                      <td >{{$event->desc}}</td>
                      <td><a href="/bookevent/{{$event->id}}">Booking Details</a></td>
                      <td><a href="/editevent/{{$event->id}}">Edit</a></td>
                      <td><a href="/delete/{{$event->id}}">Delete</a></td> 
                  </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>
    </fieldset>

            
        
@endsection