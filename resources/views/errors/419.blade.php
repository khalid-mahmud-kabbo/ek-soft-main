@extends('errors.layout')
@section('title', __('Error'))
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('Error')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('Error')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Error Page area start here  -->
    <div class="error-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold">{{__('')}}</h1>
                    <p>
                        {{__('')}}
                    </p>
                    <a href="{{route('front')}}" class="primary-btn">{{__('Back to Home')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Page area end here  -->
@endsection






@extends('errors.layout')
@section('title', __('Error'))
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
    <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">	ERROR 419 PAGE EXPIRED
    </h2>
    <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
        <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>	419
    </span>
    </div>
    </div>
    </section>


    <section class="error-area pt-120 pb-120 secondary-bg">
        <div class="container">
            <div class="error__item">
                <div class="image mb-60">
                    <img src="{{ asset('frontend/assets/images/rsSzvbxSnji0KOKvexMM.png') }}" alt="image">
                </div>
                <h4 class="h3 text-white">Page expired. Check your CSRF is enabled or not. Click on the button below
                    to do something, Thanks!</h4>
                <div class="btn-two mt-50">
                        <span class="btn-circle">
                        </span>
                    <a href="{{ route('front') }}" class="btn-one">Go Back Home</a>
                </div>
            </div>
        </div>
    </section>


    @endsection


