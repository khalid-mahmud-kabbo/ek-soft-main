<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="dark_mode">
<head>
	<meta charset="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') {{ __('| ' . $allsettings['app_title']) }}</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="{{ $allsettings['meta_author'] }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front.layouts.includes.styles')
</head>
<body>

    <div id="preloader">
        <div id="status">
            <img src="{{asset(IMG_PRELOADER_PATH.$allsettings['preloader'])}}" alt="img"/>
        </div>
    </div>

    @include('front.layouts.includes.header')
    @include('front.layouts.includes.cookies')
    @include('front.layouts.includes.mobilemenu')
<main>

@yield('content')

</main>
@include('front.layouts.includes.footer')
@include('front.layouts.includes.scripts')
</body>
</html>
