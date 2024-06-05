<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a href="{{ route('/') }}" class="navbar-brand">Sport Venues Rental Website</a>
         </div>

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-nav-first">
                   <li><a href="{{ route('/') }}">Beranda</a></li>
                   <li><a href="">Venue GOR</a></li>
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang<span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="">Blog</a></li>
                           <li><a href="">Tim</a></li>
                       </ul>
                   </li>
                   @if (Auth::check())
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Riwayat<span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="">Pemesanan</a></li>
                       </ul>
                   </li>
                   @endif
               </ul>
               <ul class="nav navbar-nav navbar-right">
                   @if(Auth::check())
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Selamat datang, {{ auth()->user()->renter->e }} <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                   <li><a href="" class="btnLogout-popup">Pengaturan</a></li>
                                   <li><a href="{{ route('logout') }}" class="btnLogout-popup">Logout</a></li>
                              </ul>
                         </li>
                   @else
                        <li><a href="{{ route('login.renter') }}" class="btnLogin-popup">Login</a></li>
                   @endif

               </ul>
               
         </div>

    </div>
</section>