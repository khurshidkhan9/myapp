@extends('layouts.app')

@section('content')


  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">About Us</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

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

  @endsection