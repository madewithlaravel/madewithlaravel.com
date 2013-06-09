<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="{{ url('/')}}">Made with Laravel</a>
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
   
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="{{( Request::segment(1) == 'site' ? 'active' : false )}}"><a href="<?=url('/')?>"> Home</a></li>
        </ul>
        <ul class="nav pull-right">
          @if (!Auth::guest())
            <li class="{{( Request::segment(1) == 'user' ? 'active' : false )}}"><a href="{{ url('user')}}">My submissions</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Profile
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('user/settings')}}">Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="{{ url('logout')}}">Logout</a></li>
                </ul>
            </li>

            <li class="divider"></li>
          @else
            <li class="<?=( Request::segment(1) == 'register' ? 'active' : false )?>"><a href="<?=url('register')?>">Register</a></li>
            <li class="<?=( Request::segment(1) == 'login' ? 'active' : false )?>"><a href="{{ url('login')}}">Login</a></li>
          @endif

        <ul>
      </div>
    </div>
  </div>
</div>
