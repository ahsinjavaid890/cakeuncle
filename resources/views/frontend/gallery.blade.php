@extends('frontend.layout')
@section('title','Gallery')
@section('content')
<style type="text/css">
    .gallaerysection {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    @media (min-width: 45em) {
        .gallaerysection {
            flex-wrap: nowrap;
        }
    }

    .cardgallaery {
        position: relative;
        width: 250px;
        height: 250px;
        margin: 10px;
        background: #CCC;
        transform: rotateX(0) rotateY(0);
        transform-style: preserve-3d;
        transition-duration: 0.1s;
        transition-timing-function: ease !important;
        backface-visibility: hidden;
        will-change: tranform;
    }

    .card__overlay {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(http://alexandrebuffet.fr/codepen/parallax-cards/blur-overlay.jpg) no-repeat center center;
        background-size: cover;
        mix-blend-mode: lighten;
        opacity: 0.5;
    }

    .card__image img {
        max-width: 100%;
        width: 250px;
        height: 250px;
        mix-blend-mode: lighten;
    }
</style>
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
<section class="py-5 position-relative">
    <div class="container">
        <section class="gallaerysection">
            @foreach($data as $r)
            <div id="card-1" class="cardgallaery rounded">
                <div class="card__overlay">
                </div>
                <a href="{{ url('public/images') }}/{{ $r->image }}" class="card__image gallaery">
                    <img src="{{ url('public/images') }}/{{ $r->image }}" alt="" />
                </a>
            </div>
            @endforeach
        </section>
    </div>
</section>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    $(document).ready(function() {

    $('.gallaery').fancybox({
      buttons: [
        "slideShow",
        "thumbs",
        "zoom",
        "fullScreen",
        "share",
        "close"
      ],
      loop: false,
      protect: true
    });
});
</script>
@endsection