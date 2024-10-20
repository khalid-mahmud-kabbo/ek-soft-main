@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'general_settings'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('General Settings') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('General Settings') }}</li>
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
                                <div class="col-md-6">
                                    <div class="form-vertical__item bg-style">
                                        <div class="item-top mb-30">
                                            <h2>{{ __('Basic Info') }}</h2>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.general.settings.update_settings') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('App Title') }}</label>
                                                <input type="text" class="form-control" id="app_title" name="app_title"
                                                    value="{{ $allsettings['app_title'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Default Title') }}</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="{{ $allsettings['title'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Footer Title') }}</label>
                                                <input type="text" class="form-control" id="footer_title"
                                                    name="footer_title" value="{{ $allsettings['footer_title'] }}"
                                                    required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Contact Number') }}</label>
                                                <input type="text" class="form-control" id="call_us" name="call_us"
                                                    value="{{ $allsettings['call_us'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Email') }}</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="{{ $allsettings['email'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Address') }}</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="{{ $allsettings['address'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Opening Time') }}</label>
                                                <input type="text" class="form-control" id="opening_time" name="opening_time"
                                                    value="{{ $allsettings['opening_time'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('State') }}</label>
                                                <input type="text" class="form-control" id="state" name="state"
                                                    value="{{ $allsettings['state'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25 d-none">
                                                <label for="title">{{ __('Country') }}</label>
                                                <input type="text" class="form-control" id="country" name="country"
                                                    value="{{ $allsettings['country'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Footer About') }}</label>
                                                <input type="text" class="form-control" id="footer_about" name="footer_about"
                                                    value="{{ $allsettings['footer_about'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Service Name One (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_title_service_1" name="footer_link_title_service_1"
                                                    value="{{ $allsettings['footer_link_title_service_1'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Link For Service Name One (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_service_1" name="footer_link_service_1"
                                                    value="{{ $allsettings['footer_link_service_1'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Service Name Two (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_title_service_2" name="footer_link_title_service_2"
                                                    value="{{ $allsettings['footer_link_title_service_2'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Link For Service Name Two (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_service_2" name="footer_link_service_2"
                                                    value="{{ $allsettings['footer_link_service_2'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Service Name Three (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_title_service_3" name="footer_link_title_service_3"
                                                    value="{{ $allsettings['footer_link_title_service_3'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Link For Service Name Three (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_service_3" name="footer_link_service_3"
                                                    value="{{ $allsettings['footer_link_service_3'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Service Name Four (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_title_service_4" name="footer_link_title_service_4"
                                                    value="{{ $allsettings['footer_link_title_service_4'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Link For Service Name Four (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_service_4" name="footer_link_service_4"
                                                    value="{{ $allsettings['footer_link_service_4'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Service Name Five (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_title_service_5" name="footer_link_title_service_5"
                                                    value="{{ $allsettings['footer_link_title_service_5'] }}" required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Link For Service Name Five (Footer)') }}</label>
                                                <input type="text" class="form-control" id="footer_link_service_5" name="footer_link_service_5"
                                                    value="{{ $allsettings['footer_link_service_5'] }}" required="">
                                            </div>



                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-vertical__item bg-style">
                                        <div class="item-top mb-30">
                                            <h2>{{ __('Media') }}</h2>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.general.settings.update_settings') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Main Logo') }}</label>
                                                <input type="file" class="form-control putImage1" name="main_logo"
                                                    id="main_logo">
                                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}"
                                                    id="target1" alt="{{ __('Image') }}" class="admin_image mt-3" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Footer Logo') }}</label>
                                                <input type="file" class="form-control putImage2" name="footer_logo"
                                                    id="footer_logo">
                                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}"
                                                    id="target2" alt="{{ __('Image') }}" class="admin_image mt-3" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Favicon') }}</label>
                                                <input type="file" class="form-control putImage3" name="favicon"
                                                    id="favicon">
                                                <img src="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}"
                                                    id="target3" alt="{{ __('Image') }}" class="admin_image mt-3" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Preloader') }}</label>
                                                <input type="file" class="form-control putImage4" name="preloader"
                                                    id="preloader">
                                                <img src="{{ asset(IMG_PRELOADER_PATH . $allsettings['preloader']) }}"
                                                    id="target4" alt="{{ __('Image') }}" class="admin_image mt-3" />
                                            </div>


                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                                {{-- <div class="col-md-6">
                                    <div class="form-vertical__item bg-style">
                                        <div class="item-top mb-30">
                                            <h2>{{ __('Support Contact') }}</h2>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.general.settings.update_settings') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Contact Link') }}</label>
                                                <input type="text" class="form-control" id="news_letter_title"
                                                    name="news_letter_title"
                                                    value="{{ $allsettings['news_letter_title'] }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Message') }}</label>
                                                <input type="text" class="form-control" id="popupmessage"
                                                    name="popupmessage"
                                                    value="{{ $allsettings['popupmessage'] }}">
                                            </div>


                                            <div class="input__group mb-25">
                                                <label for="news_letter_status">{{ __('Status') }}</label>
                                                <select name="news_letter_status" id="news_letter_status"
                                                    class="form-control">
                                                    <option value="1"
                                                        {{ $allsettings['news_letter_status'] == '1' ? 'selected' : '' }}>
                                                        {{ __('Show') }}</option>
                                                    <option value="0"
                                                        {{ $allsettings['news_letter_status'] == '0' ? 'selected' : '' }}>
                                                        {{ __('Hide') }}</option>
                                                </select>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                                <input type="file" class="form-control putImage5"
                                                    name="news_letter_img" id="news_letter_img">
                                                <img src="{{ asset(IMG_FOOTER_PATH . $allsettings['news_letter_img']) }}"
                                                    id="target5" alt="{{ __('Image') }}" class="admin_image mt-3" />
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}





                                <div class="col-md-6">
                                    <div class="form-vertical__item bg-style">
                                        <div class="item-top mb-30">
                                            <h2>{{ __('SEO') }}</h2>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.general.settings.update_settings') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Meta Author') }}</label>
                                                <input type="text" class="form-control" id="meta_author"
                                                    name="meta_author" value="{{ $allsettings['meta_author'] }}"
                                                    required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Meta Description') }}</label>
                                                <input type="text" class="form-control" id="meta_description"
                                                    name="meta_description"
                                                    value="{{ $allsettings['meta_description'] }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Meta Keywords') }}</label>
                                                <input type="text" class="form-control" id="meta_keywords"
                                                    name="meta_keywords" value="{{ $allsettings['meta_keywords'] }}"
                                                    required="">
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-vertical__item bg-style">
                                        <div class="item-top mb-30">
                                            <h2>{{ __('Email') }}</h2>
                                        </div>
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.general.settings.update_email') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Host') }}</label>
                                                <input type="text" class="form-control" id="mail_host"
                                                    name="mail_host" value="{{ env('MAIL_HOST') }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Port') }}</label>
                                                <input type="text" class="form-control" id="mail_port"
                                                    name="mail_port" value="{{ env('MAIL_PORT') }}" required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Username') }}</label>
                                                <input type="text" class="form-control" id="mail_username"
                                                    name="mail_username" value="{{ env('MAIL_USERNAME') }}"
                                                    required="">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Password') }}</label>
                                                <input type="text" class="form-control" id="mail_password"
                                                    name="mail_password" value="{{ env('MAIL_PASSWORD') }}"
                                                    required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('Encryption') }}</label>
                                                <input type="text" class="form-control" id="mail_encryption"
                                                    name="mail_encryption" value="{{ env('MAIL_ENCRYPTION') }}"
                                                    required="">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="title">{{ __('From Address') }}</label>
                                                <input type="text" class="form-control" id="mail_from_address"
                                                    name="mail_from_address" value="{{ env('MAIL_FROM_ADDRESS') }}"
                                                    required="">
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
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
    <!--Row-->
@endsection
