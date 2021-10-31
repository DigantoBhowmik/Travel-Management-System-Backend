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

@endsection