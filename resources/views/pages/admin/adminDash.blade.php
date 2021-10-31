@extends('layouts.adminapp')
@section('contain')

<div class="row gutters" style="margin-top: 50px">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                   
                    <h5 class="user-name"><i class="fas fa-user"></i><b> {{Session::get('admin')}}</b></h5>
                    <h6 class="user-email"><i class="fas fa-envelope"></i><b>  {{Session::get('adminEmail')}}</b></h6>
                  
                </div>
                
            </div>
        </div>
    </div>
    </div>


    
@endsection