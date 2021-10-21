<nav class="navbar navbar-light navbar-fixed-top" id="custom-nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-header">
                <a class="navbar-brand" href={{route('home')}}>Ghurifhiri</a>
            </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href={{route('home')}}>Home</a></li>
            <li><a href="">Package</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        @if (Session::has('user'))
        <ul class="nav navbar-nav navbar-right ">
            <div class="dropdown" style="margin: 7px 5px 0px 0px">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{Session::get('user')}}
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="{{route('editprofile')}}">My Profile</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="{{route('logout')}}">Log Out</a></li>
                </ul>
              </div>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right ">
            <li><a href="{{route('register')}}" ><span class="glyphicon glyphicon-user "></span> Sign Up</a></li>
            <li><a href={{route('login')}} ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        @endif
        
        
        </div>
    </div>
  </nav>