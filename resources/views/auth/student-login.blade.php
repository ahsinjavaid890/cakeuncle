<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{config('app.name')}}
    </title>
    <link id="pagestyle" href="{{ url('public/css/app.css') }}" rel="stylesheet"/>
     @if(!empty($settings['config_recaptcha_in_user_login']))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
</head>

<body class="g-sidenav-show">

<section class="">
    <div class="row">
        <div class="col-md-6 bg-dark-alt h-100-vh">
            <div class="">
                <div class="row justify-content-center">
                    <div class="text-center mt-9">
                        <a class="navbar-brand text-dark bg-transparent fw-bolder" href="/home" rel="tooltip" title="" data-placement="bottom" target="_blank">
                            @if(!empty($settings['logo']))
                                <img src="{{PUBLIC_DIR}}/uploads/{{$settings['logo']}}" class="navbar-brand-img h-100" style="max-height: {{$settings['frontend_logo_max_height'] ?? '30'}}px;" alt="...">
                            @else
                                <h2 class="text-white fw-bolder">{{config('app.name')}}</h2>
                            @endif
                        </a>
                        <p class="mb-0  mt-4  text-lead fw-light">{{__('Learn something amazing today!')}}</p>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 m-auto h-100"
            <div class="row container">
                <div class= "col-sm-10 col-xl-8 m-auto">



                    <div class="card-info card-body ">

                        <div class="card-header text-start pt-4">
                        <h3 class="font-weight-bolder text-dark">
                                    {{__('Login to your account')}}

                                </h3>
                        <p class="mb-0">
                                    {{__('Enter your email and password to login')}}

                                </p>
                    </div>
                        <div class="card-info ">

                            <div class="card-body">
                                <form role="form text-left" method="post" action="/student/login">

                                    @if (session()->has('status'))
                                        <div class="alert alert-success">
                                            {{session('status')}}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert bg-pink-light text-danger">
                                            <ul class="list-unstyled">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <label>{{__('Your Email')}}</label>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                               aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    <div>
                                        <label class="fw-bolder">{{__('Password')}}
                                        </label>

                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password"
                                               aria-label="Password" aria-describedby="password-addon">
                                    </div>

                                    <div class="mb-4 d-flex justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="exampleCheck1">{{__('Remember me')}}</label>
                                        </div>
                                        <div class="text-primary-hover">
                                            <a href="/forgot-password" class="text-info-light">
                                                <u>{{__('Forgot Password?')}}</u>
                                            </a>
                                        </div>
                                    </div>

                                        @if(!empty($settings['config_recaptcha_in_user_login']))
                                            <div class="g-recaptcha mb-4" data-sitekey="{{$settings['recaptcha_api_key']}}">

                                            </div>
                                        @endif

                                    <div class="text-center">
                                        @csrf
                                        <button type="submit"
                                                class="btn btn-info btn-rounded w-100  mb-0">{{__('Sign in')}}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">


                                </p>
                                <p class="text-sm mt-3 mb-0">{{__('Do not have an account?')}} <a href="/signup"
                                                                                                  class="text-dark font-weight-bolder">{{__('Signup Here')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    (function(){
        "use strict";
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    })();
</script>

</body>

</html>