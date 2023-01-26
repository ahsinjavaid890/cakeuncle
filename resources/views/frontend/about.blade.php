@extends('frontend.layout')
@section('title','About Us')
@section('content')
<style type="text/css">

</style>
    <section class="">
        <div class="bg-dark-alt position-relative">
            <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center mt-4">
                            <h2 class="text-white">
                                About Us
                            </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Capa</span>
                            <h1 class="fw-bolder display-5  text-start mt-4 mb-0">We speak the good food language.</h1>
                        </div>
                        <div class="text">CAPA was born as a small enterprise with big dreams in Chandigarh in 2017. We aimed to introduce the bakery as a career choice for entrepreneur. Have you ever wanted to ditch the 9 to 5 to start your own cake business or have you started already and looking for help and advice? This course will guide you through all there is know about starting your cake business from home or opening your own shop.</div>
                        <div class="text">
                            <ul style="padding: 15px;">
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                            </ul>
                        </div>
                        <div class="text-start buttons mb-4">
                            <a style="width: 40%;" href="{{ url('signup') }}" type="button" class="btn  btn-success text-white mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="javascript:void(0)" class="lightbox-image">
                            <img src="https://i.ibb.co/QP6Nmpf/image-1-about.jpg" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                  <div class="container-fluid m-0 p-0">
                        <div class="row m-0">
                          <div class="col-sm-6 grad3 txt-white team-div">
                            <h4>Our Team</h4>
                            <small class="text-upercase">BEST PEOPLE. BEST RESULTS</small>
                            <p class="txt-white"><br>
                              We are the people who answer every problem! Every member of our staff is dedicated to providing top notch service. <br>Collectively, we work towards the common goal of providing you with the best possible solutions with the best <span class="txt-bd">quality work</span>. <br>
                              Each team member is conversant with his domain.</p>
                              <p class="txt-white">Our team has vision to make a difference by linking right people at right time in most engaging way. We believe with this approach a lot can be accomplished and established for the human race in various aspects.<br><br>
                                <span class="txt-bd text-black">WE ARE NOTHING WITHOUT OUR PEOPLE.</span>
                              </p>
                          </div>
                          <div class="col-sm-6 about-grad-right-div">
                          </div>
                        </div>
                      </div>  
            </div>
        </div>
    </section>
@endsection
