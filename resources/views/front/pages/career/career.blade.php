@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Career | The Future is Right Here')
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
    <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">	Career
    </h2>
    <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
        <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>	Career
    </span>
    </div>
    </div>
    </section>
            <section class="service-inner-area pt-120 pb-120">
    <div class="container">
    <div class="row g-4">
                                          <div class="col-lg-4 col-md-6">
            <div class="service-two__item">
                <div class="image">
                    <img class="component-blog-cover" src="https://gratech.coevs.com/assets/general/images/swYgg2FwGxyWLuOnILTS.jpg" alt="image">
                </div>
                <div class="service-two__content">
                    <div class="icon">
                        <img src="https://gratech.coevs.com/assets/general/images/016SKqrETI3F4FLPDxvf.png" alt="icon">
                    </div>
                    <div class="shape"><img src="https://gratech.coevs.com/assets/general/images/Drjgn3eGwtJfxce78yMO.png" alt="shape"></div>
                    <h4><a href="https://gratech.coevs.com/details/46?section=service_grid" class="primary-hover">Database Security</a></h4>
                    <p>The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend porta...</p>
                    <a class="read-more-btn" href="https://gratech.coevs.com/details/46?section=service_grid">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>


                </div>
    </div>
    </section>


@endsection
