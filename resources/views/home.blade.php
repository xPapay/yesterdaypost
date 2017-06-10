@extends('layout')

@section('content')

<div class="row head">
	<div class="col-sm-2 hidden-sm-down d-flex align-items-end text-center">
		<div class="forecast">
			Weatherforcast for the next 24 hours: Plenty of Sunshine
			Wind: 7km/h SSE; Ther: 21°C; Hum: 82%
		</div>
	</div>
	<div class="col-md-8 col-sm-12 d-flex justify-content-center align-items-end">
		<div class="logo">
			@include('partials.logo')
		</div>
	</div>
	<div class="col-sm-2 hidden-sm-down d-flex align-items-end text-center">
		<div class="advertisement">
			A super awesome vintage advertisement
		</div>
	</div>
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
				<div class="article article--main full-width-separator">
					<div class="article__image text-center">
						<figure class="figure">
							<img src="http://via.placeholder.com/700x400" class="figure-img img-fluid bw-filter" alt="A generic square placeholder image with rounded corners in a figure.">
							<figcaption class="figure-caption text-left">A caption for the above image.</figcaption>
						</figure>
					</div>
					<div class="article__headline separator"><h2>This is sample headline</h2></div>
					<div class="article__perex lead text-center separator"><p>At this place should come perex. Perex should have 2-5 sentences and should engage the reader.</p></div>
					<div class="article__author">Mark Landler</div>
					<div class="article__body columnize">
						<span class="article__place">Washington, July 23. &mdash; </span>
						<p>There should come content. Content consists from several paragraphs. Paragraphs are blocks of text. Together thei create an article. This is the first one. These paragprahs should by columnized.</p>
						<p>By columnizing paragraphs I mean separating them into columns if possible. Each column should be at least 180px wide. The maximum count of columns is set to 3.</p>
						<p>This article consist of 3 paragraphs</p>
					</div>
				</div> <!-- .article -->
			</div>
			<div class="col-md-6 d-flex flex-column justify-content-between border-right-md first-column">
				<div class="article full-width-separator">
					<div class="article__headline separator"><h2>This is sample headline</h2></div>
					<div class="article__perex lead separator"><p>At this place should come perex. Perex should have 2-5 sentences and should engage the reader.</p></div>
					<div class="article__author">Mark Landler</div>
					<div class="article__body columnize">
						<span class="article__place">Washington, July 23. &mdash; </span>
						<p>There should come content. Content consists from several paragraphs. Paragraphs are blocks of text. Together thei create an article. This is the first one. These paragprahs should by columnized.</p>
						<p>By columnizing paragraphs I mean separating them into columns if possible. Each column should be at least 180px wide. The maximum count of columns is set to 3.</p>
						<p>This article consist of 3 paragraphs</p>
					</div>
				</div> <!-- .article -->
				<div class="article">
					<div class="article__headline separator"><h2>This is sample headline</h2></div>
					<div class="article__perex lead separator"><p>At this place should come perex. Perex should have 2-5 sentences and should engage the reader.</p></div>
					<div class="article__author">Mark Landler</div>
					<div class="article__body columnize">
						<span class="article__place">Washington, July 23. &mdash; </span>
						<p>There should come content. Content consists from several paragraphs. Paragraphs are blocks of text. Together thei create an article. This is the first one. These paragprahs should by columnized.</p>
						<p>By columnizing paragraphs I mean separating them into columns if possible. Each column should be at least 180px wide. The maximum count of columns is set to 3.</p>
						<p>This article consist of 3 paragraphs</p>
					</div>
				</div> <!-- .article -->
				
			</div>
			<div class="col-md-6 d-flex flex-column justify-content-between second-column">
				<div class="article columnize"></div>
				<div class="article columnize"></div>
				<div class="article columnize"></div>
				<div class="article columnize"></div>
			</div>
		</div>
	</div> <!-- .left-section -->
	<div class="col-md-3 col-sm-5 d-flex flex-column justify-content-between border-right-md third-column">
		<div class="article columnize"></div>      
		<div class="article columnize"></div>
		<div class="article columnize"></div>
		<div class="article columnize"></div>
	</div>
	<div class="col-md-3 d-flex flex-column justify-content-between fourth-column">
		<div class="article columnize"></div>
		<div class="article columnize"></div>
		<div class="article article--longer columnize"></div>
		<div class="article columnize"></div>
		<div class="article columnize"></div>
	</div>
</div>

@endsection
