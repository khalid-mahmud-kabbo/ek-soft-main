@extends('admin.master', ['menu' => 'testimonial', 'submenu' => 'testimonial'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Edit Testimonial')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Testimonial')}}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.testimonial.update')}}">
                                            @csrf

                                            <input type="hidden" name="id" id="id" value="{{$edit->id}}">



                                            <div class="input__group mb-25">
                                                <label>{{ __('Client Name') }}</label>
                                                <input type="text" id="client_name" name="client_name" value="{{$edit->client_name}}">
                                            </div>

                                            <!-- Slider Image -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Image') }}</label>
                                                <input type="file" class="putImage2 mb-10" name="client_image" id="client_image">
                                                <img src="{{ asset(ClientImage() . $edit->ClientImage) }}"  style="width: 70px; height: 70px;"  id="target2" alt="Case Image Preview" />
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Rating') }}</label>
                                                    <input type="number" name="rating" id="rating" value="{{ $edit->rating }}">

                                            </div>



                                            <div class="input__group mb-25">
                                                <label>{{ __('Designation') }}</label>
                                                <input name="designation" id="designation" placeholder="Designation" value="{{ $edit->designation }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Descriptions') }}</label>
                                                <textarea name="description" id="summernote_testimonial" class="description" required="">
                                                    {{ $edit->description }}
                                                </textarea>
                                            </div>


                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update')}}</button>
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
            $("#summernote_testimonial").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

    </script>
@endpush
