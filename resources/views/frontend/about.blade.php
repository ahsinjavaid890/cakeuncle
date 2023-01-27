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

        </div>
        <div style="background-image: url('https://previews.123rf.com/images/wstockstudio/wstockstudio1701/wstockstudio170100339/70017129-baking-a-cake-or-pizza-ingredients-background-top-view-photograph-with-kitchen-utensils-on-vintage-n.jpg');height: 400px;background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="row">
                  <div class="col-sm-12 grad3 txt-white team-div">
                    <h1 class="fw-bolder display-5 mb-3 text-center mt-4 mb-0">Heading Two</h1>
                    <p style="color:black;">CAPA was born as a small enterprise with big dreams in Chandigarh in 2017. We aimed to introduce the bakery as a career choice for entrepreneur. Have you ever wanted to ditch the 9 to 5 to start your own cake business or have you started already and looking for help and advice? This course will guide you through all there is know about starting your cake business from home or opening your own shop.CAPA was born as a small enterprise with big dreams in Chandigarh in 2017. We aimed to introduce the bakery as a career choice for entrepreneur. Have you ever wanted to ditch the 9 to 5 to start your own cake business or have you started already and looking for help and advice? This course will guide you through all there is know about starting your cake business from home or opening your own shop.

                      </p>
                      <div class="text-center buttons mb-4">
                            <a style="width: 40%;" href="{{ url('signup') }}" type="button" class="btn  btn-success text-white mt-4">Contact US</a>
                        </div>
                  </div>
                </div>
            </div>  
        </div>
    </section>
@endsection
