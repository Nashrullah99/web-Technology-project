<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3da1a747b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
  <button class="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
  <div>
    <div class="bup">
        <div class="bup-left">
            <div class="bup-logo"><a href="{{ url('/home') }}"><img src="{{ asset('images/bup.png') }}" alt="bup-logo" width="90px" height="90px"></a></div>
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
                <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('result') }}">Result</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('helpdesk') }}">Help desk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Notice
                </a>
                <ul class="dropdown-menu menu">
                  <li><a class="dropdown-item" href="{{ route('notices') }}">General Notices</a></li>
                  <li><a class="dropdown-item" href="{{ route('notices') }}">FST Notices</a></li>
                  <li><a class="dropdown-item" href="{{ route('notices') }}">FBS Notices</a></li>
                </ul>
              </li>
              <li class="nav-item">
              @auth
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
              @else
                <a class="nav-link login-button" href="{{ route('login') }}">Log in</a>
              @endauth                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div>
        @yield('content')
      </div>
      <div class="container-fluid bg-black">
        <p class="copy-right">&copy; 2023-2024 Admission office, Bangladesh University of Professionals, Mirpur Cantonment, Dhaka-1216</p>
      </div>
      
  </div>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}" ></script>
</body>
</html>



