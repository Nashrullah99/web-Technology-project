<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div style="min-height: 100vh;">
        <div class="bup">
            <div class="bup-left">
                <div class="bup-logo"><a href=""><img src="images/bup.png" alt="bup-logo" width="90px" height="90px"></a></div>
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
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Result</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Help desk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Notice
                    </a>
                    <ul class="dropdown-menu menu">
                      <li><a class="dropdown-item" href="#">General Notices</a></li>
                      <li><a class="dropdown-item" href="#">FST Notices</a></li>
                      <li><a class="dropdown-item" href="#">FBS Notices</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Log in</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div>
          <div class="d-flex justify-content-center m-5">
              <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Login Here</h3>
                <div>
                    <label for="username">username</label>
                    <div>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password">{{ __('Password') }}</label>
                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div>
                        <button type="submit" class="login-button">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
              </form>
              <div>
              <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
              </div>
            </div>
          </div>
          <div class="container-fluid bg-black">
            <p class="copy-right">&copy; 2023-2024 Admission office, Bangladesh University of Professionals, Mirpur Cantonment, Dhaka-1216</p>
          </div>
          
    </div>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>



