<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COASTER Admin</title>
        @yield('header')    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary p-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2" href="#"> <img src="img/coaster.png" height="80" /></a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
         @guest
        @else
        <li class="nav-item">
        <a class="nav-link" href="{{ route('signout') }}"><b><p style=" color:white;">Logout</p></b></a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
    @yield('content')    
 
    @yield('scriptz')    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
