<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if(!empty($settings['favicon']))

        <link rel="icon" type="image/png" href="{{ url('public') }}uploads/{{$settings['favicon']}}">
    @endif
    <title>@yield('title') - {{config('app.name')}}</title>

    <link id="pagestyle" href="{{ url('public/css/app.css') }}" rel="stylesheet"/>
    <link href="//db.onlinewebfonts.com/c/28f584c0f292892408030d6558d81dc9?family=AveburyW01-Open" rel="stylesheet" type="text/css"/>
    @yield('head')

</head>

<body class="g-sidenav-show bg-gray-100" id="clx_body">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0  fixed-left" id="sidenav-main">
    <div class="sidenav-header ">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ url('admin/dashboard') }}">
            <img src="{{ url('public/uploads/footerlogo.png') }}" class="navbar-brand-img h-100" alt="...">
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">

                <a class="nav-link @if(($selected_navigation ?? '') === 'dashboard') active @endif"
                   href="{{ url('admin/dashboard')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    <span class="nav-link-text ms-3">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'messages') active @endif "
                   href="{{ url('messages')}}">


                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    <span class="nav-link-text ms-3">{{__('Messages')}}</span>
                </a>
            </li>
            <li class="nav-item mt-4 mb-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs  text-white font-weight-bolder opacity-6">{{__('Students ')}}  </h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link " aria-controls="ecommerceExamples" role="button" aria-expanded="false">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                    <span class="nav-link-text  ms-3">{{__('Students')}}</span>



                </a>
                <div class="collapse @if(($selected_navigation ?? '') === 'students') show @endif " id="ecommerceExamples">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item mt-2 ">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'new-student') active @endif" href="{{ url('new-student')}}">

                                <span class="sidenav-normal"> {{__('New Student')}}</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'students') active @endif" href="{{ url('students')}}">

                                <span class="sidenav-normal">{{__('Students')}} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'assignments') active @endif "
                   href="{{ url('assignments')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    <span class="nav-link-text ms-3">{{__('Assignments')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'certificates') active @endif "
                   href="{{ url('certificates')}}">



                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                    <span class="nav-link-text ms-3">{{__('Certificates')}}</span>
                </a>
            </li>

            <li class="nav-item mt-4 mb-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-6">{{__('Courses & Recipes')}}  </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'course-categories') active @endif "
                   href="{{ url('course-categories')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>

                    <span class="nav-link-text ms-3">{{__('Course Categories')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'courses') active @endif "
                   href="{{ url('courses')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-box">
                        <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    <span class="nav-link-text ms-3">{{__('Courses')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'products') active @endif "
                   href="{{ url('products')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    <span class="nav-link-text ms-3">{{__('Recipes')}}</span>
                </a>
            </li>
            <li class="nav-item mt-3 mb-2">
                <h6 class="ps-4 ms-2 text-uppercase text-white text-xs opacity-6">{{__('CMS')}}</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'gallery') active @endif "
                   href="{{ url('gallaryimages')}}">


                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dribbble"><circle cx="12" cy="12" r="10"></circle><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"></path></svg>
                    <span class="nav-link-text ms-3">{{__('Gallery Images')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'testimonials') active @endif "
                   href="{{ url('testimonials')}}">


                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dribbble"><circle cx="12" cy="12" r="10"></circle><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"></path></svg>
                    <span class="nav-link-text ms-3">{{__('Testimonials')}}</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link @if(($selected_navigation ?? '') === 'blogs') active @endif " href="{{ url('blogs')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    <span class="nav-link-text ms-3">{{__('Our News')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'privacy-page-editor') active @endif " href="{{ url('privacypage')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>

                    <span class="nav-link-text ms-3">{{__('Privacy Policy')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'terms') active @endif " href="{{ url('termspage')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-minus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="9" y1="15" x2="15" y2="15"></line></svg>

                    <span class="nav-link-text ms-3">{{__('Terms & Condition')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'cookie') active @endif " href="{{ url('cookiepage')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                    <span class="nav-link-text ms-3">{{__('Cookie Policy')}}</span>
                </a>
            </li>

            <li class="nav-item mt-4 mb-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-6">{{__('Settings')}}  </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'profile') active @endif "
                   href="{{ url('admin-profile')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="nav-link-text ms-3">{{__('My Profile')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'users') active @endif " href="{{ url('users')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span class="nav-link-text ms-3">{{__('Users')}}</span>
                </a>
            </li>
            <li class="nav-item mb-4 ">
                <a class="nav-link @if(($selected_navigation ?? '') === 'settings') active @endif  "
                   href="{{ url('admin-setting')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                    </svg>
                    <span class="nav-link-text ms-3">{{__('Settings')}}</span>
                </a>
            </li>
            <li class="nav-item mb-4">
                <a class="nav-link fw-bolder  " href="{{ url('logout')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out text-danger"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span class="nav-link-text   text-danger ms-3">{{__('Logout')}}</span>
                </a>
            </li>


        </ul>
    </div>

</aside>
<main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder mb-0"></h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                    </div>
                </div>
                <ul class=" justify-content-end">
                    <li class="nav-item px-3 d-flex align-items-center">
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">

        @if(session('error'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! session('error') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        @yield('content')
    </div>
</main>

<!--   Core JS Files   -->
<script src="{{ url('public') }}/js/app.js?v=81"></script>
<script src="{{ url('public') }}/lib/tinymce/tinymce.min.js?v=93"></script>

<script>
    "use strict"
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
@yield('script')
</body>
</html>

