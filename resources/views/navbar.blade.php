  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">RESTAURANT</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         @if (Route::has('login'))
                         @auth
                         <li><a href="#team" class="smoothScroll">Chefs</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         @endauth
                         @endif 
                         <li><a href="#footer" class="smoothScroll">Contact</a></li>
                    </ul>

                    @if (Route::has('login'))
                    <ul class="nav navbar-nav navbar-right">
                    @auth
                        <!-- <li><a href="#">Call Now! <i class="fa fa-phone"></i> 010 020 0340</a></li>-->
                         <a href="#contact" class="section-btn">Reserve a table</a>
                         <li><a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}  {{ Auth::user()->name }}</a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>

                         @else
                         <li><a href="{{ route('login') }}" class="smoothScroll">Log in</a></li>
                         @if (Route::has('register'))
                         <li><a href="{{ route('register') }}" class="smoothScroll">Register</a></li>
                         @endif
                    @endauth
                    </ul>
                    @endif 
               </div>
          </div>
     </section>