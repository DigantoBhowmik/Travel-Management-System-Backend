@extends('layouts.app')
@section('contain')
        @if (empty($events[0]))
            <h1 style="align-content: center">"Even if you are on the right track, you’ll get run over if you just sit there.” – Will Rodgers</h1>
        @else
            <div>
                <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Order Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Customer Phone</th>
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($events as $event)
                    
                        <tr>
                            
                            <td>{{$event->id}}</td>
                            <td>{{$event->name}}</td>
                            <td>{{$event->email}}</td>
                            <td>{{$event->phone}}</td>
                            
                        </tr>
                        
                    @endforeach
                </tbody>
                </table>
            </div>
        @endif
@endsection