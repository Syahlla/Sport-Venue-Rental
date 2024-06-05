

<!DOCTYPE html>
<html lang="en">
     
<head>
     <title>Group 4 | Sport Venues Rental Website</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('assets/css/renter/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/renter/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/renter/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/renter/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/renter/login.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/renter/style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     @if (request()->is('login') || request()->is('registration'))
          @yield('section-auth')
     @else
          <!-- NAVBAR -->
          @include('partials.renter.navbar')

          <!-- CAROUSEL -->
          @if (request()->is('/'))
               @include('partials.renter.carousel')
          @endif

          <main>
               @yield('section-renter')
          </main>
     @endif
     

     <!-- SCRIPTS -->
     <script src="{{ asset('assets/js/jquery.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('assets/js/custom.js') }}"></script>
     <script type="module" src="{{ asset('assets/js/ionicons.esm.js') }}"></script>
     <script nomodule src="{{ asset('assets/js/ionicons.js') }}"></script>

</body>
</html>