@extends('layouts.app')
@section('contain')
<style>
    table{
        align-items: center;
    }
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 20px;
    }
    
</style>
<br>
    <legend> Package Details </legend>
    
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Name:</td>
                    <td>{{$packages->name}}</td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>{{$packages->price}}</td>
                </tr>
                <tr>
                    <td>Short Description:</td>
                    <td>{{$packages->shortdesc}}</td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>{{$packages->desc}}</td>
                </tr>
            </tbody>
        </table>
    </div>
        
        <p>Agent Name: {{$packages->agentname}}</p>
        <br>

        <div class="createPart">
            <legend > Add Package </legend>  
              <div >
                <form method="POST" action="{{route('confirmpackage')}}">
                  {{csrf_field()}}

        
        

        <div class="mb-3" >
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Pack Name</label>
            <input type="text" name="packageId" class="form-control" id="formGroupExampleInput" value="{{$packages->id}}">
           
        </div>

        <div class="mb-3" >
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">date </label>
            <input type="date" name="date" class="form-control" id="formGroupExampleInput" >
            @error('date')
              <span class="text-danger">{{$message}}</span>
             @enderror
        </div>

          {{Session()->get('userId')}}
          <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary login_button">
      </form>  
    </div>
    
</div>
@endsection