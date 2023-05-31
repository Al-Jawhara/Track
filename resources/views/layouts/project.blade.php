{{-- @php
use Illuminate\Support\Facades\session;
@endphp --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      body {
          font-size:small;
      }
  </style>
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fs-4 mb-0 ">
      <!-- Container wrapper -->
      <div class="container fs-4 " >
        <!-- Navbar brand -->
        <a class="navbar-brand me-3 mt-3" href="#">
          <img
            src="{{url('/images/logoBlack.png')}}"
            height="30"
            alt="Logo"
            loading="lazy"
            style="margin-top: -1px;"
          />
        </a>

        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarButtonsExample"
          aria-controls="navbarButtonsExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="/track">courses</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> teach on Track</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contact us</a>
            </li>
          </ul>
          
          
          <!-- Left links -->

          <div class="d-flex align-items-center">
            {{-- <a href="#" class="btn btn-link px-3 me-2">Login</a>
            <a href="/signup" class="btn btn-primary me-3">Sign up</a> --}}

            <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <a href="{{ url('/login') }}" class="btn btn-link px-3 me-2 fs-4">Log in</a>
                  <a href="{{ url('/register') }}" class="btn btn-primary me-3 fs-4">Register</a>
              @else
                  <li class="dropdown">
                      <a href="{{ url('/home') }}" class="fs-4" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu fs-4" role="menu">
                          <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                      </ul>
                  </li>
              @endif
              
          </ul>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    
    
        <main class="py-0">
            @yield('content')
        </main>



<!-- Footer -->
<footer class="text-center text-white Summary pt-5 mt-5" >
  <!-- Grid container -->
  <div class="container p-4 pb-0 fs-3">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1 fs-4"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1 fs-4"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1 fs-4"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1 fs-4"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1 fs-4"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1 fs-4"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 fs-4 " style="background-color:#000000">
    © 2020 Copyright:
    <a class="text-white" href="#">track.com</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
