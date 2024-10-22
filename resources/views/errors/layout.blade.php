<!DOCTYPE html>
<html lang="en">
@include('front.layouts.includes.styles')
@stack('post_css')
<body>

    <div id="preloader">
        <div id="status">
            <img src="{{asset(IMG_PRELOADER_PATH.$allsettings['preloader'])}}" alt="img"/>
        </div>
    </div>

    @include('front.layouts.includes.header')
    @include('front.layouts.includes.cookies')
<main>

@yield('content')

</main>
@include('front.layouts.includes.footer')
@include('front.layouts.includes.scripts')
</body>
</html>
