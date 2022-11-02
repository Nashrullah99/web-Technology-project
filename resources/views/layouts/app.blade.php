<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <div class="bup">
        <div class="bup-left">
            <div class="bup-logo"><a href=""><img src="{{ asset('images/bup.png') }}" alt="bup-logo" width="90px" height="90px"></a></div>
            <div class="bup-title">
                <p>
                    <h3>Bangladesh University of Professionals</h3>
                    <h5>Excellence through knowlege</h5>
                </p>
            </div>
            
        </div>
        <div class="admission-year">
            <h3>Undergraduate admission</h3>
            <h4>2023-2024</h4>
        </div>           
    </div>
    <nav class="navbar navbar-expand-lg menu">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-evenly" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="result.html">Result</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="help-center.html">Help desk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Notice
                </a>
                <ul class="dropdown-menu menu">
                  <li><a class="dropdown-item" href="notices.html">General Notices</a></li>
                  <li><a class="dropdown-item" href="notices.html">FST Notices</a></li>
                  <li><a class="dropdown-item" href="notices.html">FBS Notices</a></li>
                </ul>
              </li>
              <li class="nav-item">
              @guest
                <a class="nav-link login-button" href="{{ route('login') }}">Log in</a>
              @endguest                
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
