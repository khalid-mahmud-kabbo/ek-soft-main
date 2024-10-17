@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

@include('components.frontend.hero')
@include('components.frontend.partners')
@include('components.frontend.about')
@include('components.frontend.services')
@include('components.frontend.whychooseus')
@include('components.frontend.team')
@include('components.frontend.faq')
@include('components.frontend.casestudy')
@include('components.frontend.testimonials')
@include('components.frontend.blogs')
@include('components.frontend.getintouch')

@endsection
