@extends('layout')

@section('content')

<div class="row head">
	<div class="col-sm-2 hidden-sm-down d-flex align-items-end text-center">
		<div class="box forecast">
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
		<div class="box advertisement">
			Daily news from the past days
		</div>
	</div>
</div> <!-- .row .head -->

<div class="row info-bar">
	<div class="col-sm-12">
		<div class="text-center text-uppercase">
			New York, Ny - {{ $date->format('l F j, Y') }}
		</div>
	</div>
</div> <!-- .info-bar -->

<div class="row articles">
	<div class="col-md-6 col-sm-7 left-section border-right-sm">
		<div class="row height-100">
			<div class="col-sm-12">
				<div class="article article--main full-width-separator">
					@if (($mutlimedia = $mainArticle->multimedia)->count() > 0)
						<div class="article__image text-center">
							<figure class="figure">
								<img src="{{ $multimedia[0]->url }}" class="figure-img img-fluid bw-filter" alt="Main image of today's newspaper">
								<figcaption class="figure-caption text-left">{{ $mainArticle->headline }}</figcaption>
							</figure>
						</div>
					@endif
					<div class="article__headline separator">
						<a href="{{ $mainArticle->url }}" target="_blank"><h2>@trim_dot($mainArticle->headline)</h2></a>
					</div>
					<div class="article__author">{{ $mainArticle->authors }}</div>
					<div class="article__perex lead text-center">
						<p>{{ $mainArticle->perex }}</p>
					</div>
				</div> <!-- .article -->
			</div>
			<div class="col-md-6 d-flex flex-column justify-content-between border-right-md first-column">
				@foreach ($columns[0] as $article)
					<div class="article @if($loop->last) no-separator-md @endif full-width-separator">
						<div class="article__headline separator">
							<a href="{{ $article->url }}" target="_blank"><h2>@trim_dot($article->headline)</h2></a>
						</div>
						<div class="article__author">{{ $article->authors }}</div>
						<div class="article__body columnize">
							<p>{{ $article->perex }}</p>
						</div>
					</div> <!-- .article -->
				@endforeach
			</div>
			<div class="col-md-6 d-flex flex-column justify-content-between second-column">
				@foreach ($columns[3] as $article)
					<div class="article @if($loop->last) no-separator-md @endif full-width-separator">
						<div class="article__headline separator">
							<a href="{{ $article->url }}" target="_blank"><h2>@trim_dot($article->headline)</h2></a>
						</div>
						<div class="article__author">{{ $article->authors }}</div>
						<div class="article__body columnize">
							<p>{{ $article->perex }}</p>
						</div>
					</div> <!-- .article -->
				@endforeach
			</div>
		</div>
	</div> <!-- .left-section -->
	<div class="col-md-3 col-sm-5 d-flex flex-column justify-content-between border-right-md third-column">
		@foreach ($columns[1] as $article)
			<div class="article @if($loop->last) no-separator-md @endif full-width-separator">
				<div class="article__headline separator">
					<a href="{{ $article->url }}" target="_blank"><h2>@trim_dot($article->headline)</h2></a>
				</div>
				<div class="article__author">{{ $article->authors }}</div>
				<div class="article__body columnize">
					<p>{{ $article->perex }}</p>
				</div>
			</div> <!-- .article -->
		@endforeach
	</div>
	<div class="col-md-3 d-flex flex-column justify-content-between fourth-column">
		@foreach ($columns[2] as $article)
			<div class="article @if($loop->last) no-separator-md @endif full-width-separator">
				<div class="article__headline separator">
					<a href="{{ $article->url }}" target="_blank"><h2>@trim_dot($article->headline)</h2></a>
				</div>
				<div class="article__author">{{ $article->authors }}</div>
				<div class="article__body columnize">
					<p>{{ $article->perex }}</p>
				</div>
			</div> <!-- .article -->
		@endforeach
	</div>
</div>

@endsection
