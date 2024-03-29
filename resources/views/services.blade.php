@extends('layouts.master')
@section('content')


    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h2 class="title">Services</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="dento-services-area mt-50 mb-50">
        <div class="container">
            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon-- icon-white">
                            <img src="./img/core-img/s6.png" alt="">
                        </div>
                        <h5>Study Abroad</h5>
                        <p class="text-gray">In pretium neque a libero congue. Elit diam lectus. Prasent
                            lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon-- icon-white">
                            <img src="./img/core-img/s7.png" alt="">
                        </div>
                        <h5>Schloarship</h5>
                        <p class="text-gray">In pretium neque a libero congue. Elit diam lectus. Prasent
                            lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon-- icon-white">
                            <img src="./img/core-img/s8.png" alt="">
                        </div>
                        <h5>Community Services</h5>
                        <p class="text-gray">In pretium neque a libero congue. Elit diam lectus. Prasent
                            lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service--area text-center mb-50">
                        <div class="icon-- icon-white">
                            <img src="./img/core-img/s9.png" alt="">
                        </div>
                        <h5>Social Services</h5>
                        <p class="text-gray">In pretium neque a libero congue. Elit diam lectus. Prasent
                            lacinia vitae sit
                            mattis mollis maximus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix"
        style="background-image: url('img/bg-img/7.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Testimonials Slides -->
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonials Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Thumbnail -->
                            <div class="testimonial-thumb">
                                <img src="./img/bg-img/8.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonial-content">
                                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent
                                    the working day beforehand. I also had a call confirming appointment. I have been a
                                    patient ever since. My dentist is very reassuring and
                                    very helpful. Excellent treatment and advice.”</h5>
                                <h6>Arron Ramsey</h6>
                                <p>Dental Patient</p>
                            </div>
                        </div>

                        <!-- Single Testimonials Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Thumbnail -->
                            <div class="testimonial-thumb">
                                <img src="./img/bg-img/8.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonial-content">
                                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent
                                    the working day beforehand. I also had a call confirming appointment. I have been a
                                    patient ever since. My dentist is very reassuring and
                                    very helpful. Excellent treatment and advice.”</h5>
                                <h6>Arron Ramsey</h6>
                                <p>Dental Patient</p>
                            </div>
                        </div>

                        <!-- Single Testimonials Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Thumbnail -->
                            <div class="testimonial-thumb">
                                <img src="./img/bg-img/8.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonial-content">
                                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent
                                    the working day beforehand. I also had a call confirming appointment. I have been a
                                    patient ever since. My dentist is very reassuring and
                                    very helpful. Excellent treatment and advice.”</h5>
                                <h6>Arron Ramsey</h6>
                                <p>Dental Patient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->

    {{-- our team section --}}
    @include('latestnews')

    {{-- our team section --}}
@endsection
