@extends('layouts.app')
@section('contain')
<div class="row gutters" style="margin-top: 50px">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                   
                    <h5 class="user-name"><i class="fas fa-user"></i><b> {{$user->name}}</b></h5>
                    <h6 class="user-email"><i class="fas fa-envelope"></i><b> {{$user->email}}</b></h6>
                    <h5 class="user-name"><i class="fas fa-phone-alt"></i><b> {{$user->phone}}</b></h5>
                </div>
                
            </div>
        </div>
    </div>
    </div>
       
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <form method="POST" action="{{route('editprofile')}}">
                {{csrf_field()}}
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="eMail">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="website">Role</label>
                        <select  name="role" class="form-control">
                            @if ($user->role=='user')
                                <option value="user">{{$user->role}}</option>
                                <option value="agent">agent</option>
                            @else
                                <option value="agent">agent</option>  
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Change Password</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{$user->password}}">
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="Confirm_Password" value="{{$user->password}}">
                        @error('Confirm_Password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
               
            </div>
            
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <input type="submit" name="submit" value="UPDATE" class="btn btn-primary login_button">
                    </div>
                </div>
            </div>
        
            </form>
        </div>
        
    </div>
    
    </div>
    
    </div>
    
    
@endsection