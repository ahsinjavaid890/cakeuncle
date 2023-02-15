@extends('frontend.layout')
@section('title','Capa College')
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
                            <div class="article">
                                <p>Welcome to the world of sweetness, where flour, sugar, and creativity come together in harmony! At CAPA - The Cakeuncle Academy of Pastry Arts, we take baking, pastry, and cake-making to new heights From the bustling streets of India to the distant shores of the world, we welcome students from all corners of the globe to experience the sweetest education in the land. Our "Advance Diploma in Patisserie" is not just a piece of paper, it's a passport to a world of Pastry delight, approved by the Government of India and offering a comprehensive education of international standards. 
                                </p>
                                <p class="moretext">
                                   With an experience of 15 years in the field providing international levels skills and knowledge for every part, personal attention and assistance to everyone all this at very economic rates, and accommodation benefits for international students So if looking to turn your passion for baking into a thriving career, look no further than CAPA ! Join us today and let us help you create a sweet future for yourself! 
                                </p>
                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <a style="width:100%;" href="{{ url('login')}}" type="button" class="mt-2 btn btn-success text-white">{{__('Indian Students')}}</a>
                            </div>
                            <div class="col-md-6">
                                <a style="width:100%;" href="{{ url('signup')}}" type="button" class="mt-2 btn btn-success text-white">{{__('International Students')}}</a>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-lg-6 col-md-6 ps-10 pe-0  d-flex">
                        <div class="row ">
                            <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 ">
                                <div class="position-relative">
                                    @if (!empty($landingpage))
                                        <img src="{{ url('public') }}/uploads/{{$landingpage->background_image}}" alt="" class="img-fluid  rounded-3">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section class="py-6"style="background-color: white; ">
        <div class="testimonial-active-two my-0 mx-auto" >
            
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Check our new courses')}}</h1>
                    </div>
                </div>
                <div class="swiper pb-3">
                    <div class="swiper-wrapper">
                        @foreach($courses as $course)
                        @if($course->status !='Draft')
                        <div class="swiper-slide">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4 background-img" style=" background-image: url('{{ url('public/images/franchise.png')  }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;color: #64317c; font-size: 50px;">Why Choose Us ? </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="custom-list">
                                      <li>Career Consultancy Free</li>
                                      <li>Business Guidance</li>
                                      <li>Hands on practice for each student</li>
                                      <li>Tools kit provided free to every student</li>
                                      <li>Dress provided free to every student</li>
                                      <li>Extra classes to students if required</li>
                                      <li>Emi options to all the students</li>
                                    </ul>
                                </div>
                                <div class="col-md-8">
                                    <ul class="custom-list">
                                      
                                      <li>Cakeuncle Franchise free to our student for first year to help getting business online</li>
                                      <li>Digital Marketing Classes provided to students for thier startups</li>
                                      <li>One year membership free to all our students for doubts or query related to the course.</li>
                                      <li>Check your certificate online here anytime</li>
                                      <li>We give you access to all our recipes online</li>
                                      <li>That's it buddy what all you need 👍😊</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6"style="background-color: #f3dfe8;">
        <div class="testimonial-active-two my-0 mx-auto" >
            
            <div class="container">
                <div class="viewall_btn text-end">
                    <a href="{{ url('testimonial') }}" class="btn btn-blue">View All</a>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Testimonials')}}</h1>
                    </div>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach(DB::table('testimonials')->get() as $r)
                        <div class="swiper-slide">
                            <div class="testimonial-two text-center">
                                <div class="testimonial-two_quote">
                                    <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                    </svg>
                                </div>
                                <p class="testimonial-two_text">
                                    {{ Str::limit($r->testimonial , 250); }}
                                </p>
                                <div class="testimonial-two_image">
                                    <img width="56" height="56" src="{{ url('public/images') }}/{{ $r->image }}" alt="Author">
                                </div>
                                <span class="testimonial-two_name">
                                    {{ $r->name }}
                                </span>
                            </div>
                        </div>
                        @endforeach
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
                    <h1 class="fw-bolder display-5 text-center mt-2 mb-0">Student Preneurs </h1>
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
