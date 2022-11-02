@extends('layouts.common')

@section('content')

<div>
<div class="container heading" style="background:url(../images/bup_final.jpg) center/cover no-repeat;">
                <div class="heading-container">
                    <div class="heading-text">
                        <h4>Help Desk</h4>
                    </div>
                </div>   
            </div>
            <div class="container">
                <div class="row help-card">
                    <div class="col-lg-6">
                        <div class="apply">
                            <a href="https://youtu.be/jCxbaikdJx8" target="_blank"><h4>How to Apply</h4></a>
                        </div>  
     
                    </div>
                    <div class="col-lg-6">
                        <div class="payment">
                            <a href="{{ route('paymentmethod') }}"><h4>Payment Procedure</h4></a>
                        </div>  
                         
                    </div>
                </div> 
                <div class="row help-card">
                    <div class="col-lg-6">
                        <div class="emergency-contact">
                            <div class="">
                                <h4>Emergency Contact</h4>
                            </div>
                            <hr>
                            <div>
                                <p style="color: red;">Help center will open from 8:30AM to 5:00PM</p>
                            </div><hr>
                            <div>
                                <p>For password recovery,username recovery, payment and admit card related problem please contact 01700000000, 01600000000</p>
                            </div>
                            <hr>
                            <div>
                                <p>For password recovery,username recovery, payment and admit card related problem please contact 01700000000, 01600000000</p>
                            </div>
                            <hr>
                            <div style="padding-bottom: 1.5rem;">
                                <p>Hotline: 099790790<br>Email: admission@bup.edu.bd</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-light contact-card">
                            <form action="{{ route('faq') }}" method="POST">
                                @csrf 
                                <div>
                                    @if(session('status'))
                                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                                    @endif
                                    <div>
                                        <h4>Contact Us</h4>
                                    </div><hr>     
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_name">Username</label>
                                                <input id="form_name" type="text" name="username" class="form-control" placeholder="Please enter your username " required="required" data-error="Firstname is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_lastname">Phone number</label>
                                                <input id="form_lastname" type="text" name="phonenumber" class="form-control" placeholder="Please enter your phonenumber " required="required" data-error="Lastname is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_email">Email</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">    
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="form_need">Please specify your problem</label>
                                                <select id="form_need" name="problemtype" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select Your Issue--</option>
                                                    <option >Payment related problem</option>
                                                    <option >User Id or password recovery</option>
                                                    <option >Admit card download problem</option>
                                                    <option >Picture & signature related problem</option>
                                                    <option >Other</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label for="form_message">Problem details</label>
                                                <textarea id="form_message" name="problemdetails" class="form-control" placeholder="Write your problem here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                </div>
                                            </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block" value="submit" >
                                        </div>
                                    </div>
                                </div>
                            </form>                      
                        </div> 
                    </div>
                </div>

            </div>
</div>
@endsection