<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ config('app.name') }}</title>

</head>
<body>

    <div class="container-fluid">
    	@yield('content')
    	@include('partials.footer')
	</div>

</body>
</html>
