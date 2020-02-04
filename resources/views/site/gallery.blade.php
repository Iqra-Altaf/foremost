@extends('layouts.site.app')

@section('content')
<div class="page">
	<div class="container">
		<div class="text-center">
			<div class="filter-links filterable-nav">
				<select class="mobile-filter">
					<option value="*">Show all</option>
					@foreach($galleries as $gallery)
					<option value=".{{ $gallery->id }}">{{ $gallery->name }}</option>
					@endforeach
				</select>
				<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
				@foreach($categories as $category)
					<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".{{ $category->id }}">{{ $category->name }}</a>
				@endforeach
			</div>
		</div>

		<div class="filterable-items">
			@foreach($galleries as $gallery)
			<div class="gallery-item filterable-item {{ $gallery->category->id }}">
				<a href="#">
					<figure class="featured-image">
						<img src="{{ Storage::url($gallery->image) }}" alt="">
						<figcaption>
							<h2 class="gallery-title">{{ $gallery->name }}</h2>
							<p>{{ $gallery->desc }}</p>
						</figcaption>
					</figure>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
