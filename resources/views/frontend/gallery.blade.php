@extends('frontend.layout')
@section('title','Gallery')
@section('content')

    <section class="">
        <div class="bg-dark-alt position-relative">
            <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center mt-4">
                            <h2 class="text-white">
                                Gallery
                            </h2>
                        <p class="text-muted">
                           Gallery
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .zoom-effect-container{
            width: 100%;
            height: auto;
        }
    </style>
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row">
                @foreach($data as $r)
                <div class="col-md-4 mt-4">
                    <div class="card gallery-card">
                        <div class="card-body p-0">
                            <div class="zoom-effect-container">
                                <div class="image-card">
                                    <img  src="{{ url('public') }}/images/{{ $r->image }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-5 position-relative">
        <div class="container">
            <div id="carousel-testimonials" class="carousel slide carousel-team">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-7 me-lg-auto position-relative">
                                    <p class="mb-1">
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
