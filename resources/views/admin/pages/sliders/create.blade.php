@extends('admin.master', ['menu' => 'slider', 'submenu' => 'slider'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Slider') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Slider') }}</li>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-vertical__item bg-style">
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('sliders.store') }}">
                                            @csrf

                                            <!-- Slider Image -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Slider Image') }}</label>
                                                <input type="file" class="putImage2" name="slider_image" id="sliderimage" required>
                                                <img src="" id="target2" alt="Slider Image Preview" />
                                            </div>

                                            <!-- Sub Title -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Sub Title') }}</label>
                                                <input type="text" id="sub_title" name="sub_title" value="{{ old('sub_title') }}" placeholder="Sub Title">
                                            </div>

                                            <!-- Title -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Title') }}</label>
                                                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Title" required>
                                            </div>

                                            <!-- Short Description -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Short Description') }}</label>
                                                <textarea name="short_description" id="short_description" placeholder="Short Description">{{ old('short_description') }}</textarea>
                                            </div>

                                            <!-- Button Text -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Button Text') }}</label>
                                                <input type="text" id="button_text" name="button_text" value="{{ old('button_text') }}" placeholder="Button Text">
                                            </div>

                                            <!-- Button Link -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Button Link') }}</label>
                                                <input type="url" id="button_link" name="button_link" value="{{ old('button_link') }}" placeholder="Button Link (e.g. https://example.com)">
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add Slider') }}</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
