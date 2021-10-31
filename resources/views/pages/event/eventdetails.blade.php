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
@if (Session::has('message'))
        <div class="alert alert-success" style="margin-top: 20px">{{ Session::get('message') }}</div>
 @endif
<br>
    <legend> Package Details </legend>
    
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Name:</td>
                    <td>{{$events->name}}</td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>{{$events->price}}</td>
                </tr>
                <tr>
                    <td>Short Description:</td>
                    <td>{{$events->shortdesc}}</td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>{{$events->desc}}</td>
                </tr>
                <tr>
                    <td>Start Date:</td>
                    <td>{{$events->startdate}}</td>
                </tr>
                <tr>
                    <td>End Date:</td>
                    <td>{{$events->enddate}}</td>
                </tr>
                <tr>
                    <td>Deadline:</td>
                    <td>{{$events->deadline}}</td>
                </tr>
            </tbody>
        </table>
    </div>
        <br>

        <div >
              <div >
                <form method="POST" action="{{route('confirmevent')}}">
                  {{csrf_field()}}

        
        

        <div class="mb-3" hidden>
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Pack Name</label>
            <input type="text" name="eventId" class="form-control" id="formGroupExampleInput" value="{{$events->id}}">
           
        </div>

        
        @if (Session()->get('role')=='agent')
            <div class="alert alert-success" style="margin-top: 20px">
                <h4 class="alert-heading">Just See</h4>
                <p>You can not buy events as an agent </p>
            
             </div>
        @else
            <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary login_button">
        @endif 
        
      </form>  
    </div>
    
</div>
@endsection