@extends('frontend.layout')
@section('title','Cake Uncle')
@section('content') 
    <header class="py-5">
        <div class="page-header bg-white min-vh-70 ">
            <div class="container">
                <div class="row">
                    <div class="mb-7 col-lg-6 col-md-6 d-flex text-md-start flex-column">
                        <h4 class="fw-bolder text-start text-purple  mt-8 mb-0">
                            @if (!empty($landingpage))
                                {{$landingpage->hero_subtitle}}
                            @endif
                        </h4>
                        <h1 class="fw-bolder display-5  text-start mt-4 mb-0">
                            @if (!empty($landingpage))
                                {{$landingpage->hero_title}}
                            @endif
                        </h1>

                        <p class="text-start lead  mt-3 mb-4">

                            @if (!empty($landingpage))
                                {!!clean($landingpage->hero_paragraph) !!}
                            @endif

                        </p>

                        <div class="text-start buttons mb-4">
                            <a href="{{ url('course')}}" type="button" class="btn  btn-success text-white mt-4">{{__('For Indian Students')}}</a>
                            <a href="{{ url('signup')}}" type="button" class="btn  btn-success text-white mt-4">{{__('For International Students')}}</a>

                        </div>
                        <!-- <p class="text-start  mt-2">{{__('Newly enrolled students')}}</p> -->

                       <!--  <div class="text-start avatar-group d-flex mt-2">


                            @foreach($students as $stu)

                                @if(!empty($stu->photo))
                                    <a  class="avatar avatar-sm rounded-circle"
                                       data-bs-toggle="tooltip" data-bs-placement="bottom"
                                       title="{{$stu->first_name}}">
                                        <img src="{{ url('public') }}/uploads/{{$stu->photo}}"
                                             alt="team1">
                                    </a>

                                @else
                                    <div class="avatar avatar-sm rounded-circle bg-purple-light mb-4 ">
                                        <p class="mt-3 text-info"><span>{{$stu->first_name[0]}}{{$stu->last_name[0]}}</span>
                                        </p>
                                    </div>


                                @endif


                            @endforeach

                            <span class="fw-bolder"> {{__('+ more')}}</span>


                        </div> -->


                    </div>

                    <div class="col-lg-6 col-md-6 ps-5 pe-0  d-flex">

                        <div class="row ">

                            <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 ">


                                <!-- <figure class=" d-none d-md-block position-absolute bottom-0 start-50 translate-middle-x  mb-0">
                                    <svg  width="650px" height="658px"  id="10015.io" viewBox="0 0 480 480"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#EBF3FF" >
                                        <path fill="fill-primary" d="M452.5,292.5Q440,345,401.5,382Q363,419,314,431.5Q265,444,212,449Q159,454,125,413Q91,372,57.5,332.5Q24,293,38.5,243.5Q53,194,63.5,143.5Q74,93,116.5,59.5Q159,26,212,30.5Q265,35,314,48.5Q363,62,391.5,104Q420,146,442.5,193Q465,240,452.5,292.5Z" />
                                    </svg>

                                </figure> -->

                                <div class="position-relative">
                                    @if (!empty($landingpage))
                                        <img src="{{ url('public') }}/uploads/{{$landingpage->background_image}}" alt="" class="img-fluid  rounded-3">
                                    @endif
                                </div>

                                <!-- <div class="p-3 bg-success  border-radius-2xl d-inline-block rounded-4 shadow-lg position-absolute top-50 end-0 translate-middle-y mt-n7 z-index-1 d-none d-md-block" >
                                    <p class="text-white">{{__('Secret of my success')}}</p>
                                    <div class="avatar-group d-flex">
                                        @foreach($students as $stu)
                                            @if(!empty($stu->photo))
                                                <a  class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="{{$stu->first_name}}">
                                                    <img src="{{ url('public') }}/uploads/{{$stu->photo}}"
                                                         alt="team1">
                                                </a>
                                            @else
                                                <div class="avatar avatar-sm rounded-circle bg-purple-light ">
                                                    <p class="mt-3 text-info"><span>{{$stu->first_name[0]}}{{$stu->last_name[0]}}</span>
                                                    </p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div> -->

                                <!-- <div class="p-3 bg-info border-radius-2xl border-light shadow rounded-4 position-absolute bottom-0 start-0 z-index-9 d-none d-xl-block mb-5 ms-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="avatar  bg-info-light rounded-circle mx-auto">
                                            <i class="fas fa-paint-brush text-info text-center"></i>
                                        </span>
                                        <div class="text-start ms-3">
                                            <h6 class="mb-0 text-white">{{__('Congratulations')}} <span class="ms-4"></span></h6>
                                            <p class="mb-0 small text-white">{{__('You are enrolled')}}</p>

                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section class="py-3 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Check our new courses')}}</h1>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($courses as $course)
                    @if($course->status !='Draft')
                        <div class="col-lg-4 col-sm-6">
                            <div class="card card-plain card-blog">
                                <div class="card-image border-radius-lg position-relative zoom-effect-container"> 
                                    <a href="javascript:;" class="image-card">
                                        @if(empty($course->image))
                                            <img src="{{ url('public') }}/img/placeholder.jpeg"
                                                 class="w-100 border-radius-lg move-on-hover shadow ">
                                        @else
                                            <img src="{{ url('public') }}/uploads/{{$course->image}}" class="w-100 border-radius-lg move-on-hover shadow ">
                                        @endif

                                    </a>
                                </div>
                                <div class="card-body px-2">
                                    <h5>
                                        <a href="{{ url('course')}}/{{$course->slug}}" class="text-dark font-weight-bold">{{$course->name}}</a>
                                    </h5>
                                    <div class=" pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            @if(!empty($categories[$course->category_id]))
                                                <span class="badge bg-purple-light">
                                             @if(isset($categories[$course->category_id]))
                                                        {{$categories[$course->category_id]->name}}
                                                    @endif
                                                </span>
                                            @endif

                                        </div>

                                        <!-- Rating star -->
                                        <div class="row mb-0">
                                            <div class="col">
                                                {!! renderRating($course->id) !!}
                                            </div>
                                            <div class="col text-end me-2">
                                                {!! getCourseRating($course->id) !!}.0/5.0

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class=" pt-0 pb-3 px-2">

                                    <div class="d-flex justify-content-between">
                                        <span class="h5 fw-bolder mb-0">INR {{ $course->price }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>

    </section>
    <section class="mt-4 background-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content position-relative text-center">
                    <h4 class="text-white">Our Certificate is Approved by Government of India & ISO 9001:2015 certified.
                    </h4>
                                         
                                
                                            
                    <p class="text-white">
                                  USE  AS SUPPORTIVE DOCUMENT:<br>
                    <br>
                    *       Students going abroad for study or work basis <br>

                    *   While taking business loan (Start-up) to open a bakery  
                    <br>
                    * After completion of the course you can work in any industry related to hotel, hospitality, catering, bakery &amp; many more....<br>
                    * Are you looking for some advice on a particular topic –  how to find a bit of direction of your career or something else? 
                    <br>
                    * Feel Free to Call Us at 79732-45822 

                    </p>
                  </div>
                </div>
        </div>
    </section>
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
                        <!-- Testimonial Item End -->
                        <!-- swiper-slide end-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 bg-gray-100">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bolder display-5 text-center mt-2 mb-0">Latest Blog Posts</h1>
                </div>
            </div>
            <div class="row">


                @foreach($blogs as $blog)
                    <div class="col-lg-4 mb-lg-0 mb-4">
                        <div class="card blog-card">
                            <div class="card-header p-0 position-relative z-index-1">
                                <a href="{{ url('blog')}}/{{$blog->slug}}" class="d-block">

                                    @if(empty($blog->cover_photo))

                                        <img src="{{ url('public') }}/img/placeholder.jpeg"
                                             class="w-100 border-radius-lg move-on-hover shadow mt-3">
                                    @else
                                        <img src="{{ url('public') }}/uploads/{{$blog->cover_photo}}" class="img-fluid border-radius-lg">
                                    @endif

                                </a>
                            </div>

                            <div class="card-body pt-3">
                                <span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">{{$blog->topic}}</span>
                                <a href="{{ url('blog')}}/{{$blog->slug}}" class="text-darker card-title h5 d-block">
                                    {{$blog->title}}
                                </a>
                                <p class="card-description mb-4">
                                    @if(!empty($blog->notes))
                                        {!! substr($blog->notes,0,200) !!} ....

                                    @endif
                                </p>

                                <div class="author align-items-center">
                                    <div class="name">
                                        <div class="stats">
                                            <small>{{__('Posted')}} {{$blog->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



   <!--  <section class="py-8 bg-dark-alt position-relative overflow-hidden">
        <img src="{{ url('public/assets/img/shapes/waves-white.svg') }}" class="position-absolute top-0 d-lg-block d-none opacity-6" alt="">

        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="text-white">{{__('Newly Published eBook') }}</h3>
                    <p class="lead text-white"></p>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                @foreach($ebooks as $ebook)

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="card card-blog card-plain">
                            <a href="javascript:;">
                                @if(empty($ebook->image))
                                    <img src="{{ url('public') }}/img/placeholder.jpeg"
                                         class="w-100 border-radius-lg shadow-lg p-4">
                                @else
                                    <img src="{{ url('public') }}/uploads/{{$ebook->image}}" class=" p-5 border-radius-sm  card-img-top">
                                @endif
                            </a>
                            <div class="card-body px-0">
                                <h4 class="text-white"> {{formatCurrency($ebook->price,getWorkspaceCurrency($super_settings))}}</h4>
                                <h4 class="text-white">{{$ebook->name}}</h4>

                                <a href="{{ url('shop')}}/{{$ebook->slug}}" type="button" class=" mt-1 btn btn-outline-white border-2 btn-rounded">{{__('Read more')}}</a>
                            </div>
                        </div>
                    </div>

                @endforeach



            </div>
        </div>
        <div class="position-absolute w-100 bottom-0">
            <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-up</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-up" transform="translate(0.000000, -5.000000)">
                            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </section>
 -->
<!--     <section class="bg-darkblue position-relative overflow-hidden">
        <img src="{{('public/assets/img/shapes/waves-white.svg')}}" alt="pattern-lines" class="position-absolute opacity-6">
        <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
            <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-down</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-down">
                            <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div class="position-absolute w-100 bottom-0">
            <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-up</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-up" transform="translate(0.000000, -5.000000)">
                            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </section> -->
    <!-- START Testimonials w/ bg image & faded gradient & company logo -->

    <!-- END Testimonials w/ bg image & faded gradient & company logo -->

    <!-- <div class="position-absolute w-100 z-inde-1 ">

    </div> -->

  <!--   <section class="py-7 overflow-hidden">

        <div class="container ">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class=" position-relative d-flex flex-column align-items-center justify-content-center h-100">

                        <figure class=" position-absolute bottom-0 start-50 translate-middle-x  mb-0">
                            <svg  width="650px" height="658px"  id="10015.io" viewBox="0 0 480 480"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#E9F3F3" >
                                <path fill="fill-primary" d="M452.5,292.5Q440,345,401.5,382Q363,419,314,431.5Q265,444,212,449Q159,454,125,413Q91,372,57.5,332.5Q24,293,38.5,243.5Q53,194,63.5,143.5Q74,93,116.5,59.5Q159,26,212,30.5Q265,35,314,48.5Q363,62,391.5,104Q420,146,442.5,193Q465,240,452.5,292.5Z" />
                            </svg>

                        </figure>

                        <div class="position-relative">

                            @if (!empty($landingpage))
                                <img src="{{ url('public') }}/uploads/{{$landingpage->story2_image}}" alt="" class="img-fluid  rounded-3">
                            @endif
                        </div>
                        <div class="colored-shadow" style="background-image: url('{{ url('public') }}/img/feature.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-5 m-auto">
                    <h3 class="text-dark fw-bolder">
                        @if (!empty($landingpage))
                            {{$landingpage->story2_title}}
                        @endif
                    </h3>
                    <p class="col-md-10 fw-light mt-4">
                        @if (!empty($landingpage))
                            {!! clean($landingpage->story2_paragrapgh) !!}
                        @endif
                    </p>
                    <div class=" text-start buttons">

                    </div>
                </div>

            </div>
        </div>
    </section> -->



@endsection

@section('script')
    <script>
        if (document.getElementById('typed')) {
            var typed = new Typed("#typed", {
                stringsElement: '#typed-strings',
                typeSpeed: 70,
                backSpeed: 50,
                backDelay: 200,
                startDelay: 500,
                loop: true
            });
        }
    </script>

    <script>

        $(function () {
            "use strict";

            flatpickr("#start_date", {

                dateFormat: "Y-m-d",
            });

            flatpickr("#end_date", {

                dateFormat: "Y-m-d",
            });

            tinymce.init({
                selector: '#description',

                plugins: 'table,code',

            });

        });

    </script>

@endsection


