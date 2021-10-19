<nav class="navbar navbar-light navbar-fixed-top" id="custom-nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Ghurifhiri</a>
            </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href={{route('home')}}>Home</a></li>
            <li><a href="">Package</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right ">
            <li><a href="{{route('register')}}" ><span class="glyphicon glyphicon-user "></span> Sign Up</a></li>
            <li><a href={{route('login')}} ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </div>
  </nav>