 <!-- header inner -->
<header>
 <div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
             <div class="full">
                <div class="center-desk">
                   <div class="logo">
                      <a href="{{route('account.home')}}"><img src="{{asset('assets/images/logo.png')}}" alt="#" /></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
             <nav class="navigation navbar navbar-expand-md navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                   <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                         <a class="nav-link" href="{{route('account.home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{asset('assets/about.html')}} ">About</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{asset('assets/room.html')}} ">Our room</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{asset('assets/gallery.html')}} ">Gallery</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{asset('assets/blog.html')}} ">Blog</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="{{asset('assets/contact.html')}} ">Contact Us</a>
                      </li>
                      @if (Route::has('account.login'))
                          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                      <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->name}}</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn z-10" aria-labelledby="accountDropdown">                          
                                <li>
                                    <a class="dropdown-item" href="{{route('account.logout')}}">Logout</a>
                                </li>
                            </ul>
                        </li>
                     </ul>
                      @else
                      <div class="gap-1 d-flex">
                         <li class="nav-item " style="margin-right: 10px">
                           <a class="btn btn-success " href="{{route('account.login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-primary" href="{{route('account.register')}}">Register</a>
                        </li>
                     </div>
                     @if (Route::has('admin.register'))
                     @endauth
                       @endif
                          </div>
                       @endif
                     
                    
                   </ul>
                </div>
             </nav>
          </div>
       </div>
    </div>
 </div>
</header>