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
        <div class="bup" style="display: flex; flex-direction:column">
            <div class="bup-left">
                <div class="bup-logo"><a href=""><img src="images/bup.png" alt="bup-logo" width="90px" height="90px"></a></div>
                <!-- <div class="bup-title">
                    <p>
                        <h3>Bangladesh University of Professionals</h3>
                        <h5>Excellence through knowlege</h5>
                    </p>
                </div>     -->
            </div>
            <div class="admission-year" style="text-align: center;">
                <h3>Undergraduate admission</h3>
                <h4>2023-2024</h4>
            </div>           
        </div>
        <div>
            <nav class="navbar bg-light menu">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- <a class="navbar-brand" href="#">Log out</a> -->
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Menu</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex justify-content-center">
                      <div class="d-flex flex-column">
                        <div class="btn-group d-flex justify-content-center w-100">
                          <div class="admin-image">
                            <img src="./images/Naum.jpg" alt="">
                          </div>
                          <span class="dropdown-toggle mt-2 toggler" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"></span>
                          <ul class="dropdown-menu bg-light p-3">
                            <div class="dropdown-item">
                              <li><a href="#" style="color: black;">Change password</a></li>
                            </div>
                            <div class="dropdown-item">
                              <li><a href="{{ route('adminlogout') }}" style="color: black;">Log out</a></li>
                            </div>
                          </ul>
                        </div>
                        <div>
                          <p style="font-size: 1.2rem;">Mohammad Nashrullah Naum</p>
                        </div>
                      </div>
                  </div>
                </div>
              </nav>
        </div> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 bg-light" style="min-height: 69.3vh;">
                    <div class="admin-option m-5">
                        <!-- <form class="d-flex" role="search">
                          <input class="form-control me-2 p-2" type="search" placeholder="Search candidate" aria-label="Search">
                          <button class="btn btn-outline-success admin-btn" data-id="search-candidate" type="submit">Search</button>
                        </form> -->
                        <div class="d-flex">
                            <input class="form-control me-2 p-2" type="search" placeholder="Search candidate" aria-label="Search">
                            <button class="btn btn-outline-success admin-btn w-50" data-id="search-candidate" type="submit">Search</button>   
                        </div>
                        <div>
                          <button class="admin-btn" data-id="publish-result">Publish Result</button>
                        </div>
                        <div>
                          <button class="admin-btn" data-id="add-notice">Add Notice</button>
                        </div>
                        <div>
                          <button class="admin-btn" data-id="update-date">Update Important Dates</button>
                        </div>
                        <div>
                        <a class="btn btn-outline-success" href="{{ route('generatepdf') }}">Generate result For FST</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                  <div class="content mt-3 active" id="notification">
                    @if(session('status'))
                     <h6 class="alert alert-success">{{ session('status')}}</h6>
                    @endif
                    <div class="list-group">
                      <div class="list-group-item d-flex justify-content-between">
                        <div>
                          <h5>Messages(problem) from candidates</h5>
                        </div>
                        <div>
                          <button type="button" class="btn btn-primary">
                            Notifications <span class="badge text-bg-secondary">{{ $messages->count() }}</span>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Username</th>
                              <th>Phone number</th>
                              <th>Email</th>
                              <th>Problem type</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($messages as $message)
                            <tr>
                              <td>{{$message->username}}</td>
                              <td>{{$message->phonenumber}}</td>
                              <td>{{$message->email}}</td>
                              <td>{{$message->problemtype}}</td>
                              <td><button class="btn btn-outline-success"> see details</button></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="list-group-item d-flex justify-content-center"><button class="btn btn-success" style="width: 120px;">See All</button>
                      </div>
                    </div>
                  </div>
                  <div class="content mt-3" id="search-candidate">
                    <div class="row">
                      <div class="col-lg-4">
                          <div class="info-section">
                              <div>
                                  <h5 style="padding-top: 0.5rem;padding-left: 0.7rem;">Picture and Signature</h5><hr>
                              </div>
                              <div style="padding-bottom: 0.5rem 0; display:flex;justify-content:center">
                                  <div class="card" style="width: 18rem;">
                                      <img src="images/Naum.jpg" class="card-img-top" alt="...">
                                      <div class="card-body text-center">
                                        <button class="btn btn-success">Update</button>
                                      </div>
                                  </div>
                              </div>
                              <div style="padding: 0.5rem 0; display:flex;justify-content:center">
                                  <div class="card" style="width: 18rem;">
                                      <img src="images/IMG_20220821_204747.jpg" class="card-img-top" alt="...">
                                      <div class="card-body text-center">
                                        <button class="btn btn-success">Update</button>
                                      </div>
                                  </div>
                              </div>
                          </div>                                                   
                      </div>
                      <div class="col-lg-8">
                        <div class="mt-1"><h4>Personal Information</h4></div><hr>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_name">Candidate name</label>
                                  <input id="form_name" type="text" name="name" class="form-control" value="Mohammad Nashrullah Naum" required="required" data-error="Firstname is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                  <label for="form_lastname">Phone number</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" value="01798569744" required="required" data-error="Lastname is required.">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_email">Email</label>
                                  <input id="form_email" type="email" name="email" class="form-control" value="nashrullahnaum99@gmail.com" required="required" data-error="Valid email is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                            <label for="form_name">Father's  name</label>
                            <input id="form_name" type="text" name="name" class="form-control" value="Md Habibur Rahman" required="required" data-error="Firstname is required.">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_name">Mother's name</label>
                                  <input id="form_name" type="text" name="name" class="form-control" value="Mst Najma Begum" required="required" data-error="Firstname is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                  <label for="form_lastname">Present address</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Mirpur-12,block-A" required="required" data-error="Lastname is required.">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                  <label for="form_lastname">Permanent address</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Jamalpur,Mymensingh,Dhaka" required="required" data-error="Lastname is required.">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                  <label for="form_lastname">Nationality</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Bangladeshi" required="required" data-error="Lastname is required.">
                              </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col-md-6">
                              <div>
                                <label for="">Gender: </label>
                                <input class="form-check-input" type="radio" id="Gender" checked> Male
                                <input class="form-check-input" type="radio" id="Gender"> Female  
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                <label for="">Quota: </label>
                                <input class="form-check-input" type="radio" id="Gender" checked> Civil
                                <input class="form-check-input" type="radio" id="Gender"> Military
                              </div>
                          </div>
                        </div>
                        <div class="mt-3"><h4>SSC Information</h4></div><hr>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_name">SSC roll number</label>
                                  <input id="form_name" type="text" name="name" class="form-control" value="216490" required="required" data-error="Firstname is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                  <label for="form_lastname">Registration number</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="1310335411" required="required" data-error="Lastname is required.">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                  <label for="form_lastname">Board</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Dhaka" required="required" data-error="Lastname is required.">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                  <label for="form_lastname">Passing year</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="2016" required="required" data-error="Lastname is required.">
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_name">GPA</label>
                                  <input id="form_name" type="text" name="name" class="form-control" value="5.00" required="required" data-error="Firstname is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                  <label for="form_lastname">Present address</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Mirpur-12,block-A" required="required" data-error="Lastname is required.">
                              </div>
                          </div>
                        </div>
                        <div class="mt-3"><h4>HSC Information</h4></div><hr>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_name">SSC roll number</label>
                                  <input id="form_name" type="text" name="name" class="form-control" value="216490" required="required" data-error="Firstname is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                  <label for="form_lastname">Registration number</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="1310335411" required="required" data-error="Lastname is required.">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                  <label for="form_lastname">Board</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Dhaka" required="required" data-error="Lastname is required.">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                  <label for="form_lastname">Passing year</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="2016" required="required" data-error="Lastname is required.">
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <div>
                                  <label for="form_name">GPA</label>
                                  <input id="form_name" type="text" name="name" class="form-control" value="5.00" required="required" data-error="Firstname is required.">    
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div>
                                  <label for="form_lastname">Present address</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" Value="Mirpur-12,block-A" required="required" data-error="Lastname is required.">
                              </div>
                          </div>
                        </div>
                        <div class="mt-3"><h4>Subject Choice order</h4></div><hr>
                        <div>
                          <p>1. Information and Communication Engineering <br>
                            2. Computer Science and Engineering <br>
                            3. Environmental Science
                          </p>
                        </div>
                        <div class="text-center m-4">
                          <button class="btn btn-success">Update</button>
                        </div>
                      </div>
                  </div>
                  </div>
                  <div class="content mt-3" id="publish-result">
                    <div class="d-flex justify-content-center m-4">
                      <div>
                        <h4>Publish Result</h4>
                        <div class="underline mt-2"></div>
                      </div>  
                    </div>
                    
                    <div>
                      <form action="{{ route('addresult') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="formFileLgg" class="form-label">Add description</label>
                        <input class="form-control form-control-lg" id="formFileLgg" type="text" name="description">
                        <label for="formFileLg" class="form-label">Please select a file</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="resultfile">
                        <div class="d-flex justify-content-center w-100 mt-3">
                          <button class="btn btn-primary" type="submit" style="width: 130px;">Publish Now</button>
                        </div>
                      </form>
                      
                    </div>
                    
                  </div>
                  <div class="content mt-3" id="add-notice">
                    <div class="d-flex justify-content-center m-4">
                      <div>
                        <h4>Add New Notice</h4>
                        <div class="underline mt-2"></div>
                      </div>
                    </div>
                    <div>
                      <form action="{{ route('addnotice') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="formFileLggg" class="form-label">Add a description</label>
                        <input class="form-control form-control-lg" id="formFileLggg" type="text" name="description">
                        <label for="formFileLg" class="form-label">Please select a file</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="noticefile">
                        <div class="d-flex justify-content-center w-100 mt-3">
                          <button class="btn btn-primary" type="submit" style="width: 130px;">Add Now</button>
                        </div>
                      </form>
                      
                    </div>
                    
                  </div>
                  <div class="content mt-3" id="update-date">
                    <div>
                      <h4 class="text-center">Update Important Dates</h4>
                      <div class="underline mt-2"></div>
                    </div>
                    <div class="row mt-5">
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="card-header"><h5 style="text-align: center;">Set admit card download last date</h5></div>
                          <div class="card-body d-flex justify-content-center">
                            <div>
                              <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                              <button class="btn btn-outline-success">submit</button>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-3">
                          <div class="card-header"><h5 style="text-align: center;">Set admit card download last date</h5></div>
                          <div class="card-body d-flex justify-content-center">
                            <div>
                              <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                              <button class="btn btn-outline-success">submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card mb-3">
                          <div class="card-header"><h5 style="text-align: center;">Set admit card download last date</h5></div>
                          <div class="card-body d-flex justify-content-center">
                            <div>
                              <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                              <button class="btn btn-outline-success">submit</button>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-3">
                          <div class="card-header"><h5 style="text-align: center;">Set admit card download last date</h5></div>
                          <div class="card-body d-flex justify-content-center">
                            <div>
                              <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                              <button class="btn btn-outline-success">submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>      
                  </div>
                </div>
            </div>         
        </div>
    </div>    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      const adminbtns = document.querySelectorAll(".admin-btn");
      const contents = document.querySelectorAll(".content");
      adminbtns.forEach(btn =>{
        btn.addEventListener("click", function (e) {
          const id = e.target.dataset.id;
          if (id) {
            // adminbtns.forEach(function (btn) {
            //   btn.classList.remove("active");
            // });
            // e.target.classList.add("active");
            contents.forEach(function (content) {
              content.classList.remove("active");
            });
            const element = document.getElementById(id);
            element.classList.add("active");
          }
        });
      });

      const backtotopbtn = document.querySelector(".back-to-top-btn");
      window.addEventListener("scroll", functionscroll);

      function functionscroll(){
          if(window.scrollY > 300){
              backtotopbtn.style.display = "block";
          }
          else{
              backtotopbtn.style.display = "none";
          }
      }
      backtotopbtn.addEventListener("click", backtotop);
      function backtotop(){
          window.scrollTo({
              top: 0,
              left: 0,
              behavior: "smooth"
          });
      }

    </script>
</body>
</html>