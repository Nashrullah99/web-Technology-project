@extends('layouts.common')

@section('content')
<div>
            <div class="container heading" style="background:url(../images/bup-library.jpg) center/cover no-repeat;">
                <div class="heading-container" style=" background: linear-gradient(rgba(77, 201, 205, 0.5), rgba(0, 0, 0, 0.7));">
                    <div class="heading-text">
                        <h4>Undergraduate Admission Test Result <br> 2023-2024</h4>
                    </div>
                </div>  
            </div>
            <div class="container mb-5">
                <div class="list-group">
                    <div class="list-group-item" style="background-color: #bfc3c3;">
                      <h4 style="text-align: center;">Faculty of Science and Technology</h4>
                    </div>
                    @foreach($resultfiles as $resultfile)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href="files/resultfiles/{{ $resultfile->resultfiles}}"><h5>{{ $resultfile->description }}</h5></a>
                            <p>
                                <strong>Published Date:</strong> {{ $resultfile->created_at }}
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    @endforeach
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>              
                  </div>
            </div>
            <div class="container mb-5">
                <div class="list-group">
                    <div class="list-group-item" style="background-color: #bfc3c3;">
                      <h4 style="text-align: center;">Faculty of Business Administration</h4>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href=""><h5>FST admission test merit list 2023-2024</h5></a>
                            <p>
                                <strong>Published Date:</strong> 20 August, 2022
                            </p>
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </div>                       
                    </div>              
                  </div>
            </div>
          </div>
@endsection