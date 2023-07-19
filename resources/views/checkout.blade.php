@extends('passenger_layout')

@php
$page_name = "Checkout"
@endphp

@section('passengercontent')


<div>



    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Your Train Tickets</h1>
                          <h6 class="mb-0 text-muted">1 items</h6>
                        </div>
                        <hr class="my-4">
      
                        <!-- Item -->
                        

                        <div class="card-searchResult">
      
                            <div class="d-md-flex justify-content-between px-md-3">
                  
                              <div class="d-md-flex align-items-md-center mb-2">
                                <div class="train-icon me-3 mt-1 my-md-0 mb-1"><img src="{{asset('assets/img/train-icon.png')}}" /></div>
                                <div class="">
                                  <!-- Train No. and Name -->
                                  <div class="trainName text-primary-emphasis">#1143 <b>Udarata Menike</b></div>
                                  <div class="d-md-flex align-items-center wr-trainClass text-secondary">
                                    <!-- Train Class -->
                                    <div class="trainClass pe-2">2nd Class</div>
                                    <div class="pe-2 d-none d-md-block">•</div>
                                    <!-- Available Seats -->
                                    <div class="trainClass">15 Seats Available</div>

                                        <!--   item add & remove   -->


                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                    </button>
                            
                                                    <input id="form1" min="0" name="quantity" value="1" type="number"
                                                    class="form-control form-control-sm" />
                            
                                                    <button class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
  
                                        <!--   item add & remove    --> 

                                  </div>
                                  
                                </div>
                              </div>
          
                              <!-- Ticket Price -->
                              <div class="ticketPrice fw-bold mb-2 mb-md-0 d-inline-block">LKR 1500.00</div>
                            </div>
                            
                  
                            <div class="destinationDeparture d-md-flex justify-content-between px-md-3">
                              <div class="wr-departure fw-semibold">
                                <!-- Departure Station -->
                                <div class="departureStation text-dark">Colombo Fort</div>
                                <!-- Departure Time -->
                                <div class="departureTime">8:30 PM</div>
                              </div>
                              <div class="wr-destination fw-semibold text-md-end mt-1 mt-md-0">
                                <!-- Destination Station -->
                                <div class="destinationStation text-dark">Bandarawela</div>
                                <!-- Destination Time -->
                                <div class="destinationTime">5:30 AM</div>
                              </div>
                            </div>
                  
                            <div class="w-100 breakerLine my-2"></div>
                            
                            <!-- Train Tags -->
                            <div class="wr-trainTags d-flex">
                              
                              <div class="tarainTag">Express</div>
          
                              <div class="tarainTag d-flex align-items-center">
                                <span class="trainTagIcon pe-1"><img src="{{asset('assets/img/lunch-1.png')}}" /></span> Buffet
                              </div>
                  
                            </div>

                          </div>


                        <!-- Item -->


                        <hr class="my-4">
      
                  
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="#!" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Go Back</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-4">
                          <h5 class="text-uppercase">items 1</h5>
                          <h5>Rs. 132.00</h5>
                        </div>

                        <h5 class="text-uppercase mb-3">Enter promtion code</h5>
      
                        <div class="mb-5">
                          <div class="form-outline">
                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                            <button type="button" class="btn btn-dark btn-block btn-lg"
                          data-mdb-ripple-color="dark">Add</button>
                           {{--  <label class="form-label" for="form3Examplea2">Enter your code</label> --}}
                          </div>
                        </div>
      
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-5">
                          <h5 class="text-uppercase">Total price</h5>
                          <h5>Rs. 137.00</h5>
                        </div>
      
                        <button type="button" class="btn btn-dark btn-block btn-lg"
                          data-mdb-ripple-color="dark">Pay</button>
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



</div>

@endsection
