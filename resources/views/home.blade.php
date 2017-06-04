@extends('layout')

@section('content')

<div class="row head">
	<div class="col-sm-2 hidden-sm-down flex flex-vend forecast">
		Weatherforcast for the next 24 hours: Plenty of Sunshine
		Wind: 7km/h SSE; Ther: 21°C; Hum: 82%
	</div> <!-- .forecast -->
	<div class="col-md-8 col-sm-12 flex flex-vend flex-center">
		<h1 class="text-uppercase brand">Yesterday Post</h1>
	</div>
	<div class="col-sm-2 hidden-sm-down flex flex-vend flex-hend advertisement">
		A super awesome vintage advertisement
	</div> <!-- .sport-result -->
</div> <!-- .row .head -->
<div class="row info-bar">
	<div class="col-sm-12">
		<div class="text-center">
			New York, Ny - THURSDAY AUGUST 30, 1978
		</div>
	</div>
</div> <!-- .info-bar -->

@endsection