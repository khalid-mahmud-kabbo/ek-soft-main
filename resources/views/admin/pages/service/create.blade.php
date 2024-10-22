@extends('admin.master', ['menu' => 'service', 'submenu' => 'service'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Service') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Service') }}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.service.store') }}">
                                            @csrf


                                            <div class="input__group mb-25">
                                                <label>{{ __('Service Title') }}</label>
                                                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Title" required>
                                            </div>


                                            <div class="input__group mb-25 d-none">
                                                <label>{{ __('Service Slug') }}</label>
                                                <input type="text" id="service-slug" name="service_slug" value="{{ old('service_slug') }}">
                                            </div>

                                            <!-- Slider Image -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Service Image') }}</label>
                                                <input type="file" class="putImage2 mb-10" name="service_image" id="sliderimage" required>
                                                <img src="" id="target2" alt="Service Image Preview" />
                                            </div>


                                            <div class="input__group mb-25">
                                                <label>{{ __('Icon Image') }}</label>
                                                <input type="file" class="putImage3 mb-10" id="icon_image" name="icon_image" value="{{ old('icon_image') }}">
                                                <img src="" id="target3" alt="Service Icon Image Preview" />
                                            </div>


                                            <div class="input__group mb-25">
                                                <label>{{ __('Description') }}</label>

                                                <textarea name="description" id="summernote_service" class="description" required="" value="{{ old('description') }}"></textarea>

                                            </div>

                                            <!-- Button Text -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Packages') }}</label>
                                                <input type="text" id="package" name="package" value="{{ old('package') }}">
                                            </div>

                                            <!-- Button Link -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Pricing') }}</label>
                                                <input type="number" id="pricing" name="pricing" value="{{ old('pricing') }}" placeholder="e.g. $100">
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

@push('post_scripts')
    <script>
        "use strict";
        $(document).ready(function() {
            $("#summernote_service").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

        $('#title').on('keyup', function () {
        let $this = $(this);
        let str = $this.val().toLowerCase().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');
        $('#service-slug').val(str);
    })


    </script>
@endpush
