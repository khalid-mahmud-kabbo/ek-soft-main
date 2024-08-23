
<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="dark_mode">
<head>
	<meta charset="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="1Rx5zGAw5W3F8sVajzNLATta8s3STeoEZ0RUEsQK">
	<meta name="title" content="">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<title>EK Softwares | The Future is Here</title>
    @include('front.layouts.includes.styles')
</head>
<body>
    @include('front.layouts.includes.header')
    @include('front.layouts.includes.cookies')
<main>

@yield('content')

</main>
@include('front.layouts.includes.footer')
@include('front.layouts.includes.scripts')
</body>
</html>
