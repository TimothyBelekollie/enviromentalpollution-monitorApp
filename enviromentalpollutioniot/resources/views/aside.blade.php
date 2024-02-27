<header class="main-header">
    <div class="inside-header">
      <div class="d-flex align-items-center logo-box justify-content-start">
          <!-- Logo -->
          <a href="l" class="logo">
            <!-- logo-->
            <div class="logo-lg">
                <span class="light-logo"><img src="{{asset('images/trialphoto-removebg-preview.png')}}" alt="logo"></span>
                <span class="dark-logo"><img src="{{asset('images/trialphoto-removebg-preview.png')}}" alt="logo"></span>
            </div>
          </a>	
      </div>  
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
          <ul class="header-megamenu nav">
             
             
              
          </ul> 
        </div>

        <div class="navbar-custom-menu r-side">
          <ul class="nav navbar-nav">	
              <li class="btn-group nav-item d-lg-inline-flex d-none">
                  <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                      <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                  </a>
              </li>	  
             

           	

            <!-- User Account-->
            <li class="dropdown user user-menu">
              <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                  <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
              </a>
              <ul class="dropdown-menu animated flipInX">
                <li class="user-body">
                  @if (Auth::user()->user_role=='super_admin_o1')
                    
                  
                   <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="ti-user text-muted me-2"></i> Profile</a>
                   @endif
                   {{-- <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a> --}}
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="{{route('user.logout')}}"><i class="ti-lock text-muted me-2"></i> Logout</a>
                </li>
              </ul>
            </li>	

           

          </ul>
        </div>
      </nav>
    </div>
</header>

<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
      <span class="main-menu-btn-icon"></span>
       {{-- Toggle main menu visibility --}}
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
      <li><a href="{{route('dashboard')}}"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>Home</a>
        
      </li>
     
      
      
        <ul>

          		
        	
       
        </ul>		  
      </li>
     
      
      
      	  
     
      <li><a href="#map"><i class="icon-map"><span class="path1"></span><span class="path2"></span></i>View Map</a></li>
    </ul>
  </nav>