@extends('admin.master', ['menu' => 'career', 'submenu' => 'career'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Career') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Career') }}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.career.store') }}">
                                            @csrf


                                            <div class="input__group mb-25">
                                                <label>{{ __('Title') }}</label>
                                                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Your Case Study Title">
                                            </div>

                                            <div class="input__group mb-25 d-none">
                                                <label>{{ __('Slug') }}</label>
                                                <input type="text" id="career_slug" name="career_slug">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Featured Image') }}</label>
                                                <input type="file" class="putImage2 mb-10" name="Career_Image" id="Career_Image" required>
                                                <img src="" id="target2" alt="Featured Image Preview" />
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Deadline') }}</label>
                                                <input type="date" class="putImage2 mb-10" name="deadline" id="Career_Image">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Descriptions') }}</label>
                                                <textarea name="description" id="summernote_case" class="description" required="">
                                                </textarea>
                                            </div>


                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add Career') }}</button>
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


        $('#title').on('keyup', function () {
        let $this = $(this);
        let str = $this.val().toLowerCase().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');
        $('#career_slug').val(str);
    })

    </script>
@endpush
