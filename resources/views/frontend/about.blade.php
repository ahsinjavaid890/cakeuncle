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
    <div class="section-padding-03 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title-10 justify-content-start text-start align-items-start">
                        <span class="section-title-10__subtitle">About Capa</span>
                        <h1 class="section-title-10__title">We speak the good food language.</h1>
                        <p class="section-title-10__text text-justify">CAPA was born as a small enterprise with big dreams in Chandigarh in 2017. We aimed to introduce the bakery as a career choice for entrepreneur. Have you ever wanted to ditch the 9 to 5 to start your own cake business or have you started already and looking for help and advice? This course will guide you through all there is know about starting your cake business from home or opening your own shop.</p>
                        <div class="text">
                            <ul>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                                <li>Have you always dreamed of starting your own business, but not sure where to start?</li>
                            </ul>
                        </div>
                        <div class="text-start buttons mb-4">
                            <a style="width: 100%;" href="{{ url('signup') }}" type="button" class="btn  btn-success text-white mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="aboutus-image">
                        <img src="{{ url('public/assets/images/about/about.jpg')}}" alt="About-Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-6"style="background-color: #f3dfe8;">
        <div class="testimonial-active-two my-0 mx-auto" >
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Testimonials')}}</h1>
                    </div>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-two text-center">
                                <div class="testimonial-two_quote">
                                    <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                    </svg>
                                </div>
                                <p class="testimonial-two_text">
                                    @if (!empty($landingpage))
                                        {!! clean($landingpage->testimonial2_paragraph) !!}
                                    @endif
                                </p>
                                <div class="testimonial-two_image">
                                    @if(empty($landingpage->testimonial2_image))
                                        <img width="56" height="56" src="{{ url('public') }}/img/user-avatar-placeholder.png" alt="Author">
                                    @else
                                        <img width="56" height="56" src="{{ url('public') }}/uploads/{{$landingpage->testimonial2_image}}" alt="Author">
                                    @endif
                                </div>
                                <span class="testimonial-two_name">
                                    @if (!empty($landingpage))
                                        {{$landingpage->testimonial2_student_name}}
                                    @endif 
                                </span>
                                <span class="testimonial-two_position">
                                    @if (!empty($landingpage))
                                        {{$landingpage->testimonial2_occupation}}
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-two text-center">
                                <div class="testimonial-two_quote">
                                    <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                    </svg>
                                </div>
                                <p class="testimonial-two_text">
                                    @if (!empty($landingpage))
                                        {!! clean($landingpage->testimonial1_paragraph) !!}
                                    @endif
                                </p>
                                <div class="testimonial-two_image">
                                    @if(empty($landingpage->testimonial1_image))
                                    <img width="56" height="56" src="{{ url('public') }}/img/user-avatar-placeholder.png" alt="Author">
                                    @else
                                        <img width="56" height="56" src="{{ url('public') }}/uploads/{{$landingpage->testimonial1_image}}" alt="Author">
                                    @endif
                                </div>
                                <span class="testimonial-two_name"> 
                                    @if (!empty($landingpage))
                                        {{$landingpage->testimonial1_student_name}}
                                    @endif
                                </span>
                                <span class="testimonial-two_position">
                                    @if (!empty($landingpage))
                                        {{$landingpage->testimonial1_occupation}}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-padding-03 overflow-hidden">
        <div class="container">
            <div class="row flex-md-row-reverse align-items-center">
                <div class="col-md-5">
                    <div class="section-title-10 justify-content-start text-start align-items-start">
                        <span class="section-title-10__subtitle">Bakerfresh Time</span>
                        <h1 class="section-title-10__title">we are open</h1>
                        <p class="section-title-10__text">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur</p>
                    </div>
                    <ul class="about-schedule">
                        <li>
                            <span class="about-schedule_name">Mon - Fri</span>
                            <span class="about-schedule_time">9:00 am - 9:00 pm</span>
                        </li>
                        <li>
                            <span class="about-schedule_name">Sat - Sun</span>
                            <span class="about-schedule_time">10:00 am - 10:00 pm</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="aboutus-image-two">
                        <img src="{{ url('public/assets/images/about/about-2.jpg')}}" alt="About-Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
