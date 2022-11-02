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
    <div>
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
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form> 
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="table-container">
            <div class="card p-5 m-5">
                <div class="table-caption">
                    <h5>Undergraduate admission test result 2023-2024</h5>
                    <div class="underline mt-2"></div>
                </div>
                <div class="table-info">
                  @php 
                  function totalnumber($user){
                    $ad_marks = $user->math+$user->phy+$user->chem+$user->eng;
                    $total_marks = $ad_marks*0.65 + $user->hscgpa*3 + $user->sscgpa*2 + $user->viva;
                    return $total_marks;
                  }
                  @endphp
                    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th colspan="2" style="background-color: rgb(83, 223, 83);">Faculty of Science and Technology</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="2">{{ $user->ID }}</td>
                          </tr>
                          <tr>
                            <th>Subject</th>
                            <th>Obtained Marks</th>
                          </tr>
                          <tr>
                            <td>Higher Mathematics</td>
                            <td>{{ $user->math }}</td>
                          </tr>
                          <tr>
                            <td>Physics</td>
                            <td>{{ $user->phy }}</td>
                          </tr>
                          <tr>
                            <td>Chemistry</td>
                            <td>{{ $user->chem }}</td>
                          </tr>
                          <tr>
                            <td>English</td>
                            <td>{{ $user->eng }}</td>
                          </tr>
                          <tr>
                            <td>HSC gpa score</td>
                            <td>{{ $user->hscgpa*3}}</td>
                          </tr>
                          <tr>
                            <td>SSC gpa score</td>
                            <td>{{ $user->sscgpa*2}}</td>
                          </tr>
                          <tr>
                            <td>Viva</td>
                            <td>{{ $user->viva}}</td>
                          </tr>
                          <tr>
                            <th>Total Score</th>
                            <th>{{ totalnumber($user) }}</th>
                          </tr>
                          <tr>
                            @if(totalnumber($user) > 39)
                            <th colspan="2">Merit Position: {{$user->rank}}</th>
                            @else
                            <th colspan="2">Merit Position: Not applicable</th>
                            @endif
                            
                          </tr>
                          <tr>
                            @if(totalnumber($user) > 39)
                            <th colspan="2">Passed</th>
                            @else
                            <th colspan="2">Failed</th>
                            @endif
                            
                          </tr>
                        </tbody>
                    </table>
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