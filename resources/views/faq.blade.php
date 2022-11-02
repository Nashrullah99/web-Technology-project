@extends('layouts.common')

@section('content')
<div>
            <div class="container heading" style="background:url(../images/bup_final.jpg) center/cover no-repeat;">
                <div class="heading-container">
                    <div class="heading-text">
                        <h4>FAQ</h4>
                    </div>
                </div>  
            </div>
          </div>
          <div class="container mb-5">
            <div class="accordion" id="accordionPanelsStayOpen">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      <p><strong>Question:</strong> Is it private or Public University?</p>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                      <p><strong>Answer:</strong> This is absolutely a public university.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      <p><strong>Question:</strong> What are the minimum requirements to apply for admission?</p>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      <strong>Answer</strong> Requirements are different for each Faculty. Please check circular at BUP website
                      (www.bup.edu.bd) for eligibility criteria. 
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      <p><strong>Question:</strong> BUP offers how many Undergraduate program?</p>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                      <p><strong>Answer:</strong> At present BUP offers 18 Undergraduate programs. </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      <p><strong>Question:</strong> BUP offers how many Undergraduate program?</p>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                      <p><strong>Answer:</strong> At present BUP offers 18 Undergraduate programs.</p> 
                    </div>
                  </div>
                </div>
              </div>
          </div>
@endsection