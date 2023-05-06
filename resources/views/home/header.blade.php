<header class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
         <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="Home/images/1111.png" alt="" width="50px" height="50px"/></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class=""> </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
               </li>
               {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="about.html">About</a></li>
                     <li><a href="testimonial.html">Testimonial</a></li>
                  </ul>
               </li> --}}
               <li class="nav-item">
                  <a class="nav-link" href="{{url('products')}}">Products</a>
               </li>
               {{-- <li class="nav-item">
                  <a class="nav-link" href="blog_list.html">Blog</a>
               </li> --}}

               <li class="nav-item">
                  <a class="nav-link" href="{{url('contact')}}">About</a>
               </li>
            
               
               @if (Route::has('login'))
                     @auth
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                           </svg>
                           user<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="{{ url('redirect') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                 <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                 <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                              </svg>Dashboard</a></li>
                           <li><a><form action="{{ url('logout') }}" method="POST">
                              {{ csrf_field() }}
                              <input type="submit" value="logout">
                              </form>
                           </a></li>
                        </ul>
                     </li>
                     @else
                     <li class="nav-item">
                        <a class="nav-link"  href="{{ route('login') }}">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                              <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                           Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                              <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                              <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                           </svg>
                           Register</a>
                     </li>
                     
                     @endauth
                     @endif

                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_cart') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                           <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                         </svg></a>
                           
                        
                        
                     </li>
                  
                        {{-- <form class="form-inline">
                     <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                     <i class="fa fa-search" aria-hidden="true"></i>
                     </button>
                  </form> --}}
               {{-- @if (Route::has('login'))
               @auth
               <li class="nav-item">
                  <x-app-layout>

                  </x-app-layout>
               </li>
               @else
               <li class="nav-item">
                  <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">login</a>
               </li>
               <li class="nav-item">
                  <a class="btn btn-success" href="{{ route('register') }}">Register</a>
               </li>
               @endauth
               @endif --}}
                     {{-- <li class="nav-item btn5">
                        <a id="prfilcss" class="opt"  href="{{ route('profile.show') }}">profil</a>
                     </li>
                     <li class="nav-item btn5">
                        <a class="opt"  ><form action="{{ url('logout') }}" method="POST">
                           {{ csrf_field() }}
                           <button >logout</button>
                        </form>
                        </a>
                     </li> --}}
                        {{-- <li class="nav-item btn5">
                           <a class="opt"  id="logincss" href="{{ route('login') }}">login</a>
                        </li>
                        <li class="nav-item btn5">
                           <a class="opt" href="{{ route('register') }}">Register</a>
                        </li> --}}
            </ul>
         </div>
      </nav>
   </div>
</header>