@extends('admin.master', ['menu' => 'contactdetails'])
@section('title', isset($title) ? $title : 'View Contact Form Details')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('View Contact Form Details') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Form Details') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">


                            <h4 class="mb-20">User Name: {{ $details->name }}</h4>
                            <h4 class="mb-20">User Email: {{ $details->email }}</h4>
                            <p> <strong>User Masage:</strong> {{ $details->massage }}</p>




                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

