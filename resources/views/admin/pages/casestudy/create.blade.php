@extends('admin.master', ['menu' => 'casestudy', 'submenu' => 'casestudy'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Case Study') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Case Study') }}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.casestudy.store') }}">
                                            @csrf


                                            <div class="input__group mb-25">
                                                <label>{{ __('Title') }}</label>
                                                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Your Case Study Title">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Image') }}</label>
                                                <input type="file" class="putImage2 mb-10" name="case_image" id="case_image" required>
                                                <img src="" id="target2" alt="Case Image Preview" />
                                            </div>


                                            <div class="input__group mb-25">
                                                <label>{{ __('Group') }}</label>
                                                <input name="group" id="group" placeholder="group" value="{{ old('group') }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Descriptions') }}</label>
                                                <textarea name="description" id="summernote_case" class="description" required="">
                                                </textarea>
                                            </div>


                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add Case Study') }}</button>
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
@push('post_scripts')
    <script>
        "use strict";
        $(document).ready(function() {
            $("#summernote_case").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

    </script>
@endpush
