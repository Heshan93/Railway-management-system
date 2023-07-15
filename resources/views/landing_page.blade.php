
    
    
@extends('layout')

@section('content')




    <h1>hgghghgh</h1>




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
          <h3 id="welcome" data-aos="fade-up" class="text-light ">Welcome to RailTrack</h3>
          <h1 data-aos="fade-up" data-aos-delay="400" class="text-white">Online Train Booking Portal</h1>
        </div>
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div> -->
      </div>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ===========| Start: Search Area |================ -->
    <section class="wr-search py-0" data-aos="fade-up">
      <div class="contentMaxWidth mx-auto search">
        <div class="container wr_searchBox">
          <div class="row searchArea mx-auto px-1 px-lg-4 py-lg-3 py-2">
            <div class="col-12 mb-2 mb-lg-0 col-lg-6">
              <div class="align-items-center d-sm-flex stationFinder">
                <label for="inputDeparture" class="pe-3 col-form-label d-flex align-items-center w-25 w-lg-auto">
                  <div class="icon mb-1 me-2"><img src="{{asset('assets/img/location-marker.png')}}" /></div>From
                </label>
                <select class="form-select" aria-label="Default select example" id="inputDeparture">
                  <option selected>Select a station</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="d-sm-flex align-items-center stationFinder">
                <label for="inputDestination" class="pe-3 col-form-label d-flex align-items-center w-25 w-lg-auto">
                  <div class="icon mb-1 me-2"><img src="{{asset('assets/img/location-marker.png')}}" /></div>To
                </label>
                <select class="form-select" aria-label="Default select example" id="inputDestination">
                  <option selected>Select a station</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row max-w-2 pt-2">
            <div class="col-12 col-lg mb-1 mb-sm-2 mb-lg-0">
              <select class="form-select" aria-label="Default select example">
                <option selected>All Classes</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
              </select>
            </div>
            <div class="col-12 col-lg mb-1 mb-sm-2 mb-lg-0">
              <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter date">        
            </div>
            <div class="col-12 col-lg">
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="How many Passengers">    
            </div>
          </div>
          <div class="row pt-2 pt-sm-3">
            <div class="col d-sm-flex align-items-center justify-content-between flex-row-reverse">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Return
                </label>
              </div>
              <div>
                <button type="button" class="btn btn-primary px-5">Search</button>
                <button type="button" class="btn btn-outline-primary px-5 ms-2">Reset</button>
              </div>
            </div>
          </div>
      </div>
      </div>
    </section>
    <!-- ===========|  End : Search Area |================= -->


    <!-- =========================== Start : Search Result ================================= -->
    <section class="contentMaxWidth mx-auto container pt-0" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="searchResults">
                <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab" data-bs-target="#oneway-tab-pane" type="button" role="tab" aria-controls="oneway-tab-pane" aria-selected="true">One-way</button>
              </li>
              <li class="nav-item" role="searchResults">
                <button class="nav-link" id="return-tab" data-bs-toggle="tab" data-bs-target="#return-tab-pane" type="button" role="tab" aria-controls="return-tab-pane" aria-selected="false">Return</button>
              </li>
            </ul>

      
            <div class="tab-content" id="myTabContent">

              <!-- ================== One-way ========================= -->
              <div class="tab-pane fade show active" id="oneway-tab-pane" role="tabpanel" aria-labelledby="oneway-tab" tabindex="0">
      
                <div class="d-sm-flex justify-content-between mb-3 align-items-center">
                  <div class="text-body-emphasis"><h6>Colombo  <span class="text-body-tertiary"> > </span> Bandarawela</h6></div>
                  <div class="text-body-secondary"><h6>Sat, 10 August 2023</h6></div>
                </div>
      
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
                
              </div>
              <!-- ================== One-way ========================= -->
      
              <!-- ================== Return ========================= -->
              <div class="tab-pane fade" id="return-tab-pane" role="tabpanel" aria-labelledby="return-tab" tabindex="0">
      
                <div class="d-sm-flex justify-content-between mb-3 align-items-center">
                  <div class="text-body-emphasis"><h6>Bandarawela  <span class="text-body-tertiary"> > </span> Colombo</h6></div>
                  <div class="text-body-secondary"><h6>Sat, 11 August 2023</h6></div>
                </div>
      
      
                
                <div class="card-searchResult">
      
                  <div class="d-md-flex justify-content-between px-md-3">
        
                    <div class="d-md-flex align-items-md-center mb-2">
                      <div class="train-icon me-3 mt-1 my-md-0 mb-1"><img src="{{asset('assets/img/train-icon.png')}}" /></div>
                      <div class="">
                        <!-- Train No. and Name -->
                        <div class="trainName text-primary-emphasis">#1143 <b>Ella Oddyssy</b></div>
                        <div class="d-md-flex align-items-center wr-trainClass text-secondary">
                          <!-- Train Class -->
                          <div class="trainClass pe-2">1st Class</div>
                          <div class="pe-2 d-none d-md-block">•</div>
                          <!-- Available Seats -->
                          <div class="trainClass">20 Seats Available</div>
                        </div>
                      </div>
                    </div>

                    <!-- Ticket Price -->
                    <div class="ticketPrice fw-bold mb-2 mb-md-0 d-inline-block">LKR 5000.00</div>
                  </div>
                  
        
                  <div class="destinationDeparture d-md-flex justify-content-between px-md-3">
                    <div class="wr-departure fw-semibold">
                      <!-- Departure Station -->
                      <div class="departureStation text-dark">Bandarawela</div>
                      <!-- Departure Time -->
                      <div class="departureTime">8:30 PM</div>
                    </div>
                    <div class="wr-destination fw-semibold text-md-end mt-1 mt-md-0">
                      <!-- Destination Station -->
                      <div class="destinationStation text-dark">Colombo Fort</div>
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
      
                <div class="card-searchResult">
      
                  <div class="d-md-flex justify-content-between px-md-3">
        
                    <div class="d-md-flex align-items-md-center mb-2">
                      <div class="train-icon me-3 mt-1 my-md-0 mb-1"><img src="{{asset('assets/img/train-icon.png')}}" /></div>
                      <div class="">
                        <!-- Train No. and Name -->
                        <div class="trainName text-primary-emphasis">#1143 <b>Podi Menike</b></div>
                        <div class="d-md-flex align-items-center wr-trainClass text-secondary">
                          <!-- Train Class -->
                          <div class="trainClass pe-2">2nd Class</div>
                          <div class="pe-2 d-none d-md-block">•</div>
                          <!-- Available Seats -->
                          <div class="trainClass">7 Seats Available</div>
                        </div>
                      </div>
                    </div>

                    <!-- Ticket Price -->
                    <div class="ticketPrice fw-bold mb-2 mb-md-0 d-inline-block">LKR 1500.00</div>
                  </div>
                  
        
                  <div class="destinationDeparture d-md-flex justify-content-between px-md-3">
                    <div class="wr-departure fw-semibold">
                      <!-- Departure Station -->
                      <div class="departureStation text-dark">Bandarawela</div>
                      <!-- Departure Time -->
                      <div class="departureTime">8:30 PM</div>
                    </div>
                    <div class="wr-destination fw-semibold text-md-end mt-1 mt-md-0">
                      <!-- Destination Station -->
                      <div class="destinationStation text-dark">Colombo Fort</div>
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
      
              </div>
              <!-- ================== Return  ========================= -->
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- =========================== End : Search Result ================================= -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          'About Us' content goes here.
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/more-services-1.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Lobira Duno</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/more-services-2.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Limere Radses</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Nive Lodo</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Pale Treda</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Vesperr</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  
  @endsection