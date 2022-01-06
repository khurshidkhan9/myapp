@extends('layouts.master')

@section('content')

  <!-- ***** Header Area End ***** -->
  @if (session()->has('error'))
  <div class="container mt-3">

      <div class="alert alert-danger">
          {{ session()->get('error') }}
      </div>
  </div>
@endif

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <!-- Welcome Slides -->
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax"
                style="background-image: url(img/bg-img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Welcome Text -->
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInUp" data-delay="100ms">We Believe <span>Everyone</span> Should Have Same Right
                                    To live</h2>
                                <p data-animation="fadeInUp" data-delay="300ms">Helping orphan and poor students to continue
                                    their
                                    studies without any difficulty regarding school tuition fee.</p>
                                <div class="welcome-btn-group">
                                    <a href="{{ URL('donation-form') }}" class="btn dento-btn mx-2" data-animation="fadeInUp"
                                        data-delay="500ms">Donate fund</a>
                                    <a href="{{ URL('contact')}}" class="btn dento-btn mx-2 active" data-animation="fadeInUp"
                                        data-delay="700ms">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax"
                style="background-image: url(img/bg-img/2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Welcome Text -->
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Same
                                    Right To live
                                </h2>
                                <p data-animation="fadeInDown" data-delay="300ms">Helping orphan and poor students to
                                    continue their
                                    studies without any difficulty regarding school tuition fee.</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn dento-btn mx-2" data-animation="fadeInDown"
                                        data-delay="500ms">Donate fund</a>
                                    <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInDown"
                                        data-delay="700ms">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    @include('latestnews')
    @include('testimonial')

    <!-- ****** About Us Area Start ******* -->
    <section class="dento-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-50">
                        <img src="img/bg-img/15.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>About Us</h2>
                            <div class="line"></div>
                        </div>
                        <p>Helping orphan and poor students to continue their studies without any difficulty regarding
                            school
                            tuition fee, books and clothing. Amin Education Foundation is committed to 100% enrollment in
                            UC-Dhakki.
                            This is possible when every boy and girl education</p>

                        <!-- Single Skills Area -->
                        <div class="single-skills-area mt-30">
                            <h6>Experience </h6>
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="single-skills-area mt-30">
                            <h6>Resources</h6>
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="65"></span>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="single-skills-area mt-30">
                            <h6>Friendly Staff</h6>
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <div class="container">
        <div class="dento-border clearfix"></div>
    </div>

    <!-- Cool Facts Area Start -->
    <section class="dento-cta-area">
        <div class="container">
            <div class="row">
                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_genius"></i>
                        <h2><span class="counter">20</span></h2>
                        <h5>Years Of Experience</h5>
                    </div>
                </div>

                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_heart_alt"></i>
                        <h2><span class="counter">700</span>+</h2>
                        <h5>Happy People</h5>
                    </div>
                </div>

                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_book_alt"></i>
                        <h2><span class="counter">120</span></h2>
                        <h5>Certificate</h5>
                    </div>
                </div>

                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_id"></i>
                        <h2><span class="counter">40</span>+</h2>
                        <h5>team</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cool Facts Area End -->

    <!-- Dento Service Area Start -->
    <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix"
        style="background-image: url('img/bg-img/13.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <!-- Service Content -->
                <div class="col-12 col-lg-6">
                    <div class="service-content mb-30">
                        <!-- Section Heading -->
                        <div class="section-heading white">
                            <h2>Our Services</h2>
                            <div class="line"></div>
                        </div>

                        <div class="row">
                            <!-- Single Service Area -->
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-service--area text-center mb-50">
                                    <div class="icon-- icon-white">
                                        <img src="./img/core-img/s6.png" alt="">
                                    </div>
                                    <h5>Study Abroad</h5>
                                    <p class="text-white">In pretium neque a libero congue. Elit diam lectus. Prasent
                                        lacinia vitae sit
                                        mattis mollis maximus.</p>
                                </div>
                            </div>

                            <!-- Single Service Area -->
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-service--area text-center mb-50">
                                    <div class="icon-- icon-white">
                                        <img src="./img/core-img/s7.png" alt="">
                                    </div>
                                    <h5>Schloarship</h5>
                                    <p class="text-white">In pretium neque a libero congue. Elit diam lectus. Prasent
                                        lacinia vitae sit
                                        mattis mollis maximus.</p>
                                </div>
                            </div>

                            <!-- Single Service Area -->
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-service--area text-center mb-50">
                                    <div class="icon-- icon-white">
                                        <img src="./img/core-img/s8.png" alt="">
                                    </div>
                                    <h5>Community Services</h5>
                                    <p class="text-white">In pretium neque a libero congue. Elit diam lectus. Prasent
                                        lacinia vitae sit
                                        mattis mollis maximus.</p>
                                </div>
                            </div>

                            <!-- Single Service Area -->
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-service--area text-center mb-50">
                                    <div class="icon-- icon-white">
                                        <img src="./img/core-img/s9.png" alt="">
                                    </div>
                                    <h5>Social Services</h5>
                                    <p class="text-white">In pretium neque a libero congue. Elit diam lectus. Prasent
                                        lacinia vitae sit
                                        mattis mollis maximus.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Video Area -->
                <div class="col-12 col-lg-6">
                    <div class="dento-video-area mb-100">
                        <img src="./img/bg-img/13.jpg" alt="">
                        <!-- Play Button -->
                        <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dento Service Area End -->

    <!-- gallery start -->
  
    @include('gallery')
    <!-- End -->

    <!-- Book An Oppointment Area Start -->
    <section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix"
        style="background-image: url('img/bg-img/12.jpg');">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center white">
                        <h2>Book An Apointment</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Appointment Form -->
                    <div class="appointment-form">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input type="text" name="your-name" class="form-control" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input type="text" name="your-phone" class="form-control" placeholder="Your Phone"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <input type="email" name="your-email" class="form-control" placeholder="Your Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <select name="your-time" class="form-control">
                                            <option value="Choose Your Time">Choose Your Scheldule</option>
                                            <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                                            <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                                            <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                                            <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <textarea name="your-message" class="form-control"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn dento-btn">Booking Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Book An Oppointment Area End -->

    <!-- ***** Dento Area Start ***** -->
    <section class="dentist-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Team</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Area -->
                @if (count($users) >= 1)
                @foreach ($users as $user)
                    
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="{{($user->img_path) ? asset($user->img_path) : asset('img/static-img/placeholder.png')}}" alt="{{$user->name}}">
                        <!-- Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5>{{$user->name}}</h5>
                                <p>{{($user->position) ? $user->position : "No Position"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="single-blog-item mb-100">
                        <p class="txt-center">No Team member Found!</p>
                    </div>
                </div>
            </div>
     
            @endif
            </div>
        </div>
    </section>
    <!-- ***** Area End ***** -->



    <!-- ***** Blog Area End ***** -->
    
@endsection
