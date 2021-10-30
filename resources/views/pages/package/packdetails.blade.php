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
        <p>Agent Name: {{$packages->agentname}}</p>
        <br>

@endsection