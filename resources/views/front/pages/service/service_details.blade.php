@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Service Details | The Future is Right Here')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')



<section class="banner__inner-page bg-image pt-180 pb-180 bg-image" data-background="{{ asset('frontend/assets/images/QCm3zzbme5hta1zbNLJs.jpg') }}" style="background-image: url({{ asset('frontend/assets/images/QCm3zzbme5hta1zbNLJs.jpg') }});">
    <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
    <img src="{{ asset('frontend/assets/images/pxzAm9rA4BuWjccbttrU.png') }}" alt="shape">
    </div>
    <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInLeft;">
    <img src="{{ asset('frontend/assets/images/lvmLc2mZ9vhkwUGBVeBM.png') }}" alt="shape">
    </div>
    <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInRight;">
    <img class="sway__animationX" src="{{ asset('frontend/assets/images/6vSu4fkkvCyLfBNRNH1T.png') }}" alt="shape">
    </div>
    <div class="container">
    <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">	{{ $service->title }}
    </h2>
    <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
        <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>	 <a href="{{ route('services') }}">Service</a>
    </span><span><i class="fa-regular fa-angles-right mx-2"></i>	 {{ $service->title }}
    </span>
    </div>
    </div>
    </section>

    <section class="blog-single-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">

            <!--Dynamic Blog Content-->
                <div class="col-lg-12 order-2 order-lg-1">
    <div class="blog__item blog-single__left-item shadow-none">
        <div class="blog__content p-0">

            <h3 class="blog-single__title mt-20">{{ $service->title }}</h3>


            <p>
                {!! clean(Str::limit(($service->description), 30000)) !!}
            </p>



        </div>
    </div>
    </div>

</div>
    </div>
    </section>


@endsection
