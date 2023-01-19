@extends('frontsite.layouts.main')

@section('content')
<main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active slick-initialized slick-slider">
            <!-- Single Slider -->
            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2434px;"><div class="single-slider slider-height d-flex align-items-center slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 1217px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s" class="" style="animation-delay: 0.6s;">Our Helping to<br> the world.</h1>
                                <p data-animation="fadeInUp" data-delay=".8s" class="" style="animation-delay: 0.8s;">Onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut bore et dolore magnt, sed do eiusmod.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="{{route('user.login')}}" class="btn hero-btn mb-10" data-animation="fadeInLeft" data-delay=".8s" tabindex="0" style="animation-delay: 0.8s;">Donate</a>
                                    <a href="/" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s" tabindex="0" style="animation-delay: 1s;">
                                        <i class="flaticon-null"></i>
                                        <p>+923069309614</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="single-slider slider-height d-flex align-items-center slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 1217px; position: relative; left: -1217px; top: 0px; z-index: 998; opacity: 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">Our Helping to<br> the world.</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut bore et dolore magnt, sed do eiusmod.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn mb-10" data-animation="fadeInLeft" data-delay=".8s" tabindex="-1">Donate</a>
                                    <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s" tabindex="-1">
                                        <i class="flaticon-null"></i>
                                        <p>+12 1325 41</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>
            <!-- Single Slider -->
            
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Services Area Start -->
    <div class="service-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>What we are doing</span>
                        <h2>We Are In A Mission To Help The Helpless</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-null-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Clean Water</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Clean Water</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Clean Water</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About our foundetion</span>
                            <h2>We Are In A Mission To  Help Helpless</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p>
                        <p>Lorem ipvsum dolor sit amext, consectetur adipisicing elit, smod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <a href="about.html" class="btn">About US</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/about2.png')}}" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/about1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <!-- Our Cases Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Our Cases you can see</span>
                        <h2>Explore our latest causes that we works </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/case1.png')}}" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap" style="display: inline;">
                                            <span class="tip" style="left: 197px; transition: left 1s ease-in-out 0s;">70%</span>
                                        </div>
                                        <span class="fill" data-percentage="70" style="background: rgb(9, 204, 127); width: 231px; transition: width 1s ease-in-out 0s;"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/case2.png')}}" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Providing Healthy Food For The Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap" style="display: inline;">
                                            <span class="tip" style="left: 48.5px; transition: left 1s ease-in-out 0s;">25%</span>
                                        </div>
                                        <span class="fill" data-percentage="25" style="background: rgb(9, 204, 127); width: 82.5px; transition: width 1s ease-in-out 0s;"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/case3.png')}}" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Supply Drinking Water For  The People</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap" style="display: inline;">
                                            <span class="tip" style="left: 131px; transition: left 1s ease-in-out 0s;">50%</span>
                                        </div>
                                        <span class="fill" data-percentage="50" style="background: rgb(9, 204, 127); width: 165px; transition: width 1s ease-in-out 0s;"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases End -->
    <!-- Featured_job_start -->
    <section class="featured-job-area section-padding30 section-bg2" data-background="{{asset('charityfrontassets/assets/img/gallery/section_bg03.png')}}" style="background-image: url(&quot;{{asset('charityfrontassets/assets/img/gallery/section_bg03.png')}}&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>What we are boing</span>
                        <h2>We arrange many social events for charity donations</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="{{asset('charityfrontassets/assets/img/gallery/socialEvents1.png')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#"><h4>Donation is Hope</h4></a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="{{asset('charityfrontassets/assets/img/gallery/socialEvents2.png')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#"><h4>A hand for Children</h4></a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="{{asset('charityfrontassets/assets/img/gallery/socialEvents3.png')}}')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#"><h4>Help for Children</h4></a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!--? Team Ara Start -->
    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <span>What we are doing</span>
                        <h2>Our Expert Volunteer Alwyes ready</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/team1.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/team2.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Robart Rechard</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('charityfrontassets/assets/assets/img/gallery/team3.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Brendon Tailor</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('charityfrontassets/assets/img/gallery/team4.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Walshr Hasgt</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!-- Want To work -->
    <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="{{asset('charityfrontassets/assets/img/gallery/section_bg01.png')}}" style="background-image: url(&quot;{{asset('charityfrontassets/assets/img/gallery/section_bg01.png')}}&quot;);">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Lets Chenge The World With Humanity</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="#" class="btn white-btn f-right sm-left">Become A Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding">
        <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style slick-initialized slick-slider slick-dotted">
                        <!-- Single Testimonial -->
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5390px; transform: translate3d(-770px, 0px, 0px);"><div class="single-testimonial text-center slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div><div class="single-testimonial text-center slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div><div class="single-testimonial text-center slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div><div class="single-testimonial text-center slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div><div class="single-testimonial text-center slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div><div class="single-testimonial text-center slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div><div class="single-testimonial text-center slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 770px;">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{asset('charityfrontassets/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div></div></div>
                        <!-- Single Testimonial -->
                        
                        <!-- Single Testimonial -->
                        
                    <ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-90">
                        <span>Our recent blog</span>
                        <h2>Latest News from our recent blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('charityfrontassets/assets/img/gallery/home-blog1.png')}}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Creative derector</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('charityfrontassets/assets/img/gallery/home-blog2.png')}}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Creative derector</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!--? Count Down Start -->
    <div class="count-down-area pt-25 section-bg" data-background="{{asset('charityfrontassets/assets/img/gallery/section_bg02.png')}}" style="background-image: url(&quot;{{asset('charityfrontassets/assets/img/gallery/section_bg02.png')}}&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">6,200</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">80</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Fund Raised</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    </main>
@endsection