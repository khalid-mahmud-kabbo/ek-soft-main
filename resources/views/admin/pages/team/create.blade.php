@extends('admin.master', ['menu' => 'team', 'submenu' => 'team'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Team Member') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Team') }}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.team.store') }}">
                                            @csrf


                                            <div class="input__group mb-25">
                                                <label>{{ __('Team Member Name') }}</label>
                                                <input type="text" id="team_member_name" name="team_member_name" value="{{ old('team_member_name') }}" placeholder="Enter Your Team Member Name" required>
                                            </div>

                                            <!-- Slider Image -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Member Profile Image') }}</label>
                                                <input type="file" class="putImage2 mb-10" name="member_image" id="member_image" required>
                                                <img src="" id="target2" alt="Member Image Preview" />
                                            </div>


                                            <div class="input__group mb-25">
                                                <label>{{ __('Designation') }}</label>
                                                <textarea name="designation" id="designation" placeholder="Designation">{{ old('designation') }}</textarea>
                                            </div>

                                            <!-- Button Text -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Facebook Id URL') }}</label>
                                                <input type="url" id="facebook_id" name="facebook_id" value="{{ old('facebook_id') }}" placeholder="https://example.com">
                                            </div>

                                            <!-- Button Link -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('Instagram Id URL') }}</label>
                                                <input type="url" id="instagram_id" name="instagram_id" value="{{ old('instagram_id') }}" placeholder="https://example.com">
                                            </div>

                                            <!-- Button Link -->
                                            <div class="input__group mb-25">
                                                <label>{{ __('LinkedIn Id URL') }}</label>
                                                <input type="url" id="linkedin_id" name="linkedin_id" value="{{ old('linkedin_id') }}" placeholder="https://example.com">
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add Team Member') }}</button>
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
