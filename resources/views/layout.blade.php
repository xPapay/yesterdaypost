<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @if(isset($canonicalLink))
    <link rel="canonical" href="{{ url($canonicalLink) }}" />
    @endif

    @if(isset($metaTitle))
    <title>{{ $metaTitle }} - {{ config('app.name') }}</title>
    @else
    <title>{{ config('app.name') }} - Old News, Historical Events, Vintage Newspaper</title>
    @endif

    @if(isset($metaDescription))
    <meta name="description" content="{{ $metaDescription }}">
    @else
    <meta name="description" content="The Yesterday Post - Find old news, historical events put in context as if they occur just today.">
    @endif

    @include('partials.analytics')
</head>
<body>

    <div class="container-fluid">
    	@yield('content')
    	@include('partials.footer')
	</div>

</body>
</html>
