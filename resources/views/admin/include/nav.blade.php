<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #05375c">
     <img src="images/logo.png" class="mr-2" alt="logo" style="width:60px; height: 60px;"/>
    </div>
    
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #05375c">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu" style="color: white;"></span>
      </button>
      
      <ul class="navbar-nav navbar-nav-right">
        {{-- <a href="{{ route('profile.edit') }}"> {{ __('Profile') }}</a> --}}

        <li class="nav-item nav-profile dropdown">
<div style="color: white"> {{ Auth::user()->name }}</div>
         
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown" style="margin-left: 30px">
            <i class="fa-solid fa-gears" style="font-size: x-large; color: white;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="fa-solid fa-user " style="font-size: medium; color:#007bff"></i>
              <form method="GET" action="/profile">
                <button type="submit" style="background-color:transparent; border: 0cap;">
                    Profile
                </button>
            </form>
            </a>
            <a class="dropdown-item">
              <i class="ti-power-off text-primary"></i>
              <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" style="background-color:transparent; border: 0cap;">
                    Logout
                </button>
            </form>
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>