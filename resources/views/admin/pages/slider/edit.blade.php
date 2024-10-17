@extends('admin.master', ['menu' => 'slider', 'submenu' => 'slider'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Edit Slider')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Slider')}}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.slider.update')}}">
                                            @csrf

                                            <input type="hidden" name="id" id="id" value="{{$edit->id}}">


                                            <div class="input__group mb-25">
                                                <label>{{ __('Slider Image') }}</label>
                                                <input type="file" class="putImage2 mb-10" name="slider_image" id="sliderimage" required>
                                                <img src="{{ asset(SliderImage() . $edit->SliderImage) }}" id="target2" alt="Slider Image Preview" />
                                            </div>


                                            <div class="input__group mb-25">
                                                <label>{{ __('Title') }}</label>
                                                <input type="text" id="title" name="title" value="{{ $edit->title }}" placeholder="Title" required>
                                            </div>


                                            <!-- Sub Title -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Sub Title') }}</label>
                                                <input type="text" id="subtitle" name="subtitle" value="{{ $edit->subtitle }}" placeholder="Sub Title">
                                            </div>

                                            <!-- Title -->


                                            <!-- Short Description -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Short Description') }}</label>
                                                <textarea name="short_description" id="c" placeholder="Short Description">{{ $edit->short_description }}</textarea>
                                            </div>

                                            <!-- Button Text -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Button Text') }}</label>
                                                <input type="text" id="button_text" name="button_text" value="{{ $edit->button_text }}"" placeholder="Button Text">
                                            </div>

                                            <!-- Button Link -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Button Link') }}</label>
                                                <input type="url" id="button_link" name="button_link" value="{{ $edit->button_link }}" placeholder="Button Link (e.g. https://example.com)">
                                            </div>

                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Edit')}}</button>
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
