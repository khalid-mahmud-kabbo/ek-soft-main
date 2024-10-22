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

        @foreach ($careers as $career)

    <div class="col-md-6 blog-two__list-item mb-30 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
        <!-- If the deadline is not over, show clickable link; else, just show image -->
        @if (!now()->greaterThan($career->deadline))
            <a href="{{route('career.details',$career->career_slug)}}" class="blog__image d-block image">
        @else
            <div class="blog__image d-block image">
        @endif
            <img class="blog-square" src="{{asset(CareerImage().$career->CareerImage)}}" alt="image">
            <div class="blog-tag">
                <h3 class="text-white">{{ $career->created_at->format('d') }}</h3>
                <span class="text-white">{{ $career->created_at->format('M') }}</span>
                <span class="text-white">{{ $career->created_at->format('Y') }}</span>
            </div>
        @if (!now()->greaterThan($career->deadline))
            </a>
        @else
            </div>
        @endif

        <div class="blog__content">
            <!-- If deadline is not over, make the title clickable -->
            <h3>
                @if (!now()->greaterThan($career->deadline))
                    <a href="{{route('career.details',$career->career_slug)}}" class="primary-hover">{{ $career->title }}</a>
                @else
                    <span>{{ $career->title }}</span>
                @endif
            </h3>

            <div class="about__info mt-30">
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-calendar-days"></i>
                    <div class="info">
                        <!-- If deadline is over, show 'Deadline Overed'; else, show deadline date with link -->
                        @if (now()->greaterThan($career->deadline))
                            <span class="primary-color">Deadline Overed</span>
                        @else
                            <a href="{{route('career.details',$career->career_slug)}}" class="primary-color">Deadline: {{ $career->deadline }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach


                </div>
    </div>
    </section>


@endsection
