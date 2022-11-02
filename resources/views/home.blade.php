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
            <div class="bup-logo"><a href="{{ url('/home') }}"><img src="images/bup.png" alt="bup-logo" width="90px" height="90px"></a></div>
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
      <div class="main">
        <div class="bup-image">
            <div class="img-fluid bup-final-image">
                <div class="img-text">
                    <h2>Bangladesh University of Professionals</h2>
                    <p>
                        Bangladesh University of Professionals (BUP) is the 31st public university of Bangladesh located in Mirpur Cantonment, Dhaka.
                         It is the first public university of Bangladesh to be run by the Bangladesh Armed Forces.
                    </p>
                    <a href="https://www.bup.edu.bd/on_campus/campus-life" class="scroll-link btn btn-white" target="_blank"><strong>explore Campus</strong></a>
                  </div>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="deathline-container">
                <div style="margin: 2rem">   
                    <div>
                        <h4 style="text-align: center;">Important Deadlines</h4>
                        <div class="underline mt-2"></div>
                      </div>
                </div>
                <div class="row mt-2">
                  <div class="col-6">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                      <div class="card-header"><h5>Admit Card Download</h5></div>
                      <div class="card-body">
                        <h4 class="card-title">25 September,2022</h4> 
                      </div>
                    </div>
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                      <div class="card-header"><h5>Admit Card Download</h5></div>
                      <div class="card-body">
                        <h4 class="card-title">25 September,2022</h4> 
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                      <div class="card-header"><h5>Last Date of Payment</h5></div>
                      <div class="card-body">
                        <h4 class="card-title">25 September,2022</h4> 
                      </div>
                    </div>
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                      <div class="card-header"><h5>Admit Card Download</h5></div>
                      <div class="card-body">
                        <h4 class="card-title">25 September,2022</h4> 
                      </div>
                    </div>
                  </div>
                </div>  
              </div>                 
            </div>
            <div class="col-lg-5">
              <div style="padding: 1rem 0; margin-top: 1rem;">
                <div class="list-group">
                  <div class="list-group-item active">
                    <h4 style="text-align: center;">Notices</h4>
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                  <div class="list-group-item">
                    <p>
                      20 August, 2022
                    </p>
                    <a href="">Dept of ICT notice</a>    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-7 mb-2">
              <div class="tutorial-container">
                <iframe src="https://www.youtube.com/embed/jCxbaikdJx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="apply-vedio"></iframe>
              </div>
            </div>
            <div class="col-lg-5">
              <article style="padding: 1.5rem;">
                <h4>Bangladesh University of Professionals</h4>
                <p><strong>Address:</strong> Mirpur Cantonment,Dhaka-1216 <br>
                  <strong>Telephone:</strong> 88-02-8000368, PABX 8000261-4 <br>
                  <strong>Email:</strong> admission@bup.edu.bd <br>
                  <strong>Fax:</strong> 800443
                </p>
                <h3 style="color: red;"><strong>Hot line: 099790790</strong></h3>
              </article> 
            </div>
          </div>
        </div>  
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



