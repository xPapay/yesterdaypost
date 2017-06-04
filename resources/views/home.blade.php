@extends('layout')

@section('content')

<div class="row head">
	<div class="col-sm-2 hidden-sm-down d-flex align-items-end text-center forecast">
		Weatherforcast for the next 24 hours: Plenty of Sunshine
		Wind: 7km/h SSE; Ther: 21°C; Hum: 82%
	</div> <!-- .forecast -->
	<div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-end">
		<h1 class="text-uppercase text-center brand">Yesterday Post</h1>
	</div>
	<div class="col-sm-2 hidden-sm-down d-flex align-items-end text-center advertisement">
		A super awesome vintage advertisement
	</div> <!-- .advertisement -->
</div> <!-- .row .head -->

<div class="row info-bar">
	<div class="col-sm-12">
		<div class="text-center text-uppercase">
			New York, Ny - THURSDAY AUGUST 30, 1978
		</div>
	</div>
</div> <!-- .info-bar -->

<div class="row articles">
    <div class="col-md-6 col-sm-7 left-section border-right-sm">
      <div class="row height-100">
        <div class="col-sm-12">
          <div class="article article--main"></div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-between border-right-md first-column">
          <div class="article"></div>
          <div class="article"></div>
          <div class="article"></div>
          <div class="article"></div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-between second-column">
          <div class="article"></div>
          <div class="article"></div>
          <div class="article"></div>
          <div class="article"></div>
        </div>
      </div>
    </div> <!-- .left-section -->
    <div class="col-md-3 col-sm-5 d-flex flex-column justify-content-between border-right-md third-column">
      <div class="article"></div>      
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
    </div>
    <div class="col-md-3 d-flex flex-column justify-content-between fourth-column">
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
    </div>
  </div>

<!-- temporary script for filling content, delete after development -->
<!-- TODO: delete these scripts after initial development -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
	$(function() {
		$('.article').html('<p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>');

		$('.article--main, .article--longer').append('<p>Extra lorem ipsum bla bla bla bla bla bla bla bla</p><p>Extra lorem ipsum bla bla bla bla bla bla bla bla</p><p>Extra lorem ipsum bla bla bla bla bla bla bla blafadskl jfaslfjdl aksdjflask blafadskljf aslfjdlak sdjflaskblaf adskljf aslfjdlak sdjflas kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kblafads kljfaslfjdl aksd jflask</p>');
	})
</script>

@endsection

