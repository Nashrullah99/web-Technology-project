@extends('layouts.common')
@section('content')
<div class="container profile-container">
            <div class="profile-heading">
                <h4>Applicant profile</h4>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-section">
                        <div>
                            <h5 style="padding-top: 0.5rem;padding-left: 0.7rem;">Picture and Signature</h5><hr>
                        </div>
                        <div style="padding-bottom: 0.5rem 0; display:flex;justify-content:center">
                            <div class="card" style="width: 18rem;">
                                <img src="/images/{{$candidate[0]->profile_picture}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text text-center">Picture</p>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 0.5rem 0; display:flex;justify-content:center">
                            <div class="card" style="width: 18rem;">
                                <img src="/images/{{$candidate[0]->signature}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text text-center">Signature</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info-section">
                        <div>
                            <h5 style="padding: 0.7rem;">Personal and Educational Informations</h5>
                        </div>
                        <div class="accordion" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Personal Informations
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Name: {{$candidate[0]->name}} <br>
                                    Father's Name: {{$candidate[0]->fatherName}} <br>
                                    Mother's Name: {{$candidate[0]->motherName}} <br> 
                                    Mobile Number: {{$candidate[0]->mobile}} <br>
                                    Email: {{$candidate[0]->email}} <br>
                                    HSC group: {{$candidate[0]->hscgroup}}
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  HSC informations
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">HSC <br> information <br> will update <br>soon</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                  SSC informations
                                </button>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">SSC <br> information <br> will update <br>soon</div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                    
                </div>
                <div class="col-lg-8">
                    <div>
                        <div class="card card-style">
                            <h5 class="card-header">Applied faculty</h5>
                            <div class="card-body">
                              <a href="#FST" class="btn btn-success">FST</a>
                              <a href="#FBS" class="btn btn-success">FBS</a>
                            </div>
                        </div>
                        <div class="card card-style" id="FST">
                            <h5 class="card-header">Faculty of Science and Technology</h5>
                            <div class="card-body">
                              <div style="margin-bottom: 1rem;">
                                <a class="btn btn-outline-success"  href="{{ url('presult',[$user->id]) }}">See Result</a>
                                <a href="{{ url('subchoice') }}" class="btn btn-outline-success">Subject Choice</a>
                                <a href="{{ url('allocatedsub') }}" class="btn btn-outline-success">Allocated Subject</a>
                              </div>
                              <div>
                                <p>Quota Status: <strong>Military quota</strong></p>
                                <p>Payment Status: <strong>Paid</strong></p>
                              </div>
                            </div>
                        </div>
                        <div class="card card-style" id="FBS">
                            <h5 class="card-header">Faculty of Business Administration</h5>
                            <div class="card-body">
                              <a href="#" class="btn btn-outline-success">See Result</a>
                              <a href="#" class="btn btn-outline-success">Subject Choice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
@endsection