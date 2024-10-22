@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Blogs')
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
    <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">	Blogs
    </h2>
    <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
        <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>	Blogs
    </span>
    </div>
    </div>
    </section>
        <section class="blog-single-area pt-120 pb-120">
<div class="container">
<div class="row g-4">


    @php
    use App\Models\Admin\Blog;
    $blogs = Blog::orderBy('created_at', 'desc')->take(10)->get();
@endphp

@foreach ($blogs as $item)


    <div class="col-lg-4 col-md-6">
        <div class="service-two__item">
            <div class="image">
                <img class="component-blog-cover" src="{{asset(BlogImage().$item->Small_Image)}}" alt="image">
            </div>
            <div class="service-two__content">

                    <div class="icon extra_for_new">
                    <span>{{ $item->created_at->format('d') }} {{ $item->created_at->format('M') }}, {{ $item->created_at->format('Y') }}</span>
                    </div>


                <div class="shape"><img src="{{ asset('frontend/assets/images/Drjgn3eGwtJfxce78yMO.png') }}" alt="shape"></div>
                <h4><a href="{{route('blog.details',$item->blog_slug)}}" class="primary-hover">{{ $item->en_Title }}</a></h4>



                <p class="extra_for_new_desc">{!! clean(Str::limit(($item->en_Description_One), 90)) !!}</p>
                <a class="read-more-btn" href="{{route('blog.details',$item->blog_slug)}}">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>

    @endforeach



</div>
</div>
</section>
@endsection
