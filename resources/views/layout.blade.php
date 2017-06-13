<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="shortcut icon" href="/favicon.ico" />
	<meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @if(isset($canonicalLink))
    <link rel="canonical" href="{{ url($canonicalLink) }}" />
    @endif

    <title>{{ config('app.name') }} - Old News, Historical Events</title>

</head>
<body>

    <div class="container-fluid">
    	@yield('content')
    	@include('partials.footer')
	</div>

</body>
</html>
