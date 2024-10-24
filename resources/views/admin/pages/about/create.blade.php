@extends('admin.master', ['menu' => 'about', 'submenu' => 'about'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add About Details') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('About') }}</li>
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
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.about.store') }}">
                                            @csrf

                                            <div class="input__group mb-25">
                                                <label>{{ __('Main Image') }}</label>
                                                <input type="file" class="putImage2" name="main_image"
                                                    id="main_image">
                                                <img src="" id="target2" />
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Sub Image') }}</label>
                                                <input type="file" class="putImage3" name="sub_image"
                                                    id="sub_image">
                                                <img src="" id="target3" />
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Title') }}</label>
                                                <input type="text" name="title"
                                                    id="title">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Description') }}</label>
                                                <input type="text" name="description"
                                                    id="description">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Point 1') }}</label>
                                                <input type="text" name="point_1"
                                                    id="point_1">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Point 2') }}</label>
                                                <input type="text" name="point_2"
                                                    id="point_2">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Point 3') }}</label>
                                                <input type="text" name="point_3"
                                                    id="point_3">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Point 4') }}</label>
                                                <input type="text" name="point_4"
                                                    id="point_4">
                                            </div>






                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add') }}</button>
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
