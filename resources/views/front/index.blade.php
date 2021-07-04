@extends('layouts.front_layout.front_layout')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We offer modern solutions for Home Appliances need</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented engineer who repair and service your home appliances</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="tel:09821908494" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Reach Us</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="images/front_images/hero-img.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>Advance repair service is smart care of your family life and home appliances repair service and runs 24X7 to serve our customer family.</h2>
              <p>
                We are providing expert team of home appliances repair professionals equipment with all needed tools and handles all minor and major problems in your machines repair issues at most affordable prices.
              </p>
              
            </div>
          </div>

          <div class="pricing col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200" id="book">
            <div class="container" data-aos="fade-up">

                  <div class="box" data-aos="zoom-in" data-aos-delay="200">
                    <span class="featured">Book</span>
                    <h3 style="color: #65c600;">Book Appointment</h3>
                    <form action="{{ url('/add-query') }}" method="post" role="form" name="queryForm" id="queryForm" class="query">@csrf
                      <div class="row">
                        <div class="col form-group mt-4">
                          <input type="text" name="query_name" id="query_name" class="form-control" id="name" placeholder="First Name" required>
                        </div>
                      </div>
                      <div class="form-group mt-4">
                        <input type="number" class="form-control" name="query_phone" id="query_phone" placeholder="Phone Number" required>
                      </div>
                      <div class="form-group mt-4">
                        <select class="form-select" name="query_service" id="query_service" aria-label="Default select example">
                          <option selected>Select Service</option>
                          <option value="Washing Machine Repair Service">Washing Machine Repair Service</option>
                          <option value="Mircowave Repair Service ">Mircowave Repair Service </option>
                          <option value="Refrigerator Repair Service">Refrigerator Repair Service</option>
                        </select>
                      </div> 
                      <button class="btn-buy mt-4" type="submit">Book</button>
                    </form>
                    
                  </div>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->
    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Our team is expert in solve issues of any brand of Home Appliances</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Washing machine Repair & Service</h3>
              <p>We are providing expert team of Washing Machine Repair professionals equipment with all needed tools and handles all minor and major problems in your washing machines repair issues at most affordable prices. Our team is experience in problem solving issues of any brand of product and type of Washing Machine like Semi-Automatic washing machine repair, fully automatic washing Machine repair, General repair servicing, Replacement of Spin Motor, Drain Pipe, and Gear Box etc.</p>
              <a href="#book" class="read-more"><span>Book</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Refrigerator Repair & Service</h3>
              <p>Refrigerator repair service is smart care of your family life and home appliances repair service and runs 24X7 to servicing serve the whole Our Customer family. if your fridge is break down then call the Advance service and Repair center it can be create the problem for everyone in Fridge repair family and if its quick to repair, can result in food spoil and waste. So find that your Refrigerator repair is not working or is have a some issues, you get fast assistance for your fridge repair service.</p>
              <a href="#book" class="read-more"><span>Book</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Washing Machine Repair & Service</h3>
              <p>We are repair all brands microwave oven repair and no matter what type of brand of microwave repair search you have, Expert mechanics of professionals equipped with less all necessary tools and spare parts handles all minor and major problem in your microwave repair issues in the most affordable prices. Our team is expert in solve issues of any type of microwave oven repair  like Grill Heater, Glass Plate, Magnetron and Transformer, Changing Capacitor, Fan Motor, etc</p>
              <a href="#book" class="read-more"><span>Book</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>B-156/59&nbsp;Om Vihar<br>Uttam Vihar, Delhi 110059</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p><a href="tel:09821908494"> 09821908494<br></a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><a href="mailto:addvancerepairs@gmail.com"> addvancerepairs@gmail.com<br></a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Sunday<br>9:00AM - 09:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->









@endsection