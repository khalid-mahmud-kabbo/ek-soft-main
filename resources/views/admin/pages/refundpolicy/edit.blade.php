@extends('admin.master', ['menu' => 'refundpolicy', 'submenu' => 'refundpolicy'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Edit Refund Policy')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Edit Refund Policy')}}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.refundpolicy.update')}}">
                                            @csrf

                                            <input type="hidden" name="id" id="id" value="{{$edit->id}}">

                                            <div class="input__group mb-25">
                                                <label>{{ __('Page Title') }}</label>
                                                <input type="text" id="page_title" name="page_title" value="{{$edit->page_title}}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label>{{ __('Refund Policy') }}</label>
                                                <textarea name="refundpolicy" id="summernote_refundpolicy" class="refundpolicy" required="">{{ $edit->refundpolicy }}</textarea>

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
            $("#summernote_refundpolicy").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush