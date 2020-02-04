@extends('layouts.site.app')

@section('content')
<div class="fullwidth-block latest-news-section">
	<div class="container">
		<h2 class="section-title">Latest Packages</h2>
		<div class="row">

			@foreach($packages as $key => $package)
			<div class="col-md-4">
				<div class="news">
					<div class="entry-date">
						<div class="date">{{ $package->created_at->format('d') }}</div>
						<div class="monthyear">{{ $package->created_at->format('M.Y') }}</div>
						<br>
						<a href="{{route('book', $package->id)}}" class="button">Book</a>
						<br>
						<br>
						<a href="{{route('add_like', $package->id)}}"><i class="fa fa-thumbs-up col-brown"></i></a>
					</div>
					<div class="entry-detail">
						<div class="entry-summary"> <a href="{{ route('package_detail', $package->id) }}" class="more-icon"><img src="{{ Storage::url($package->image) }}"></a></div>
					</div>
				</div>
			</div>
			@endforeach
		</div> <!-- .row -->

		<div class="text-center">
			<a href="{{ route('more_packages') }}" class="button no-gradient">More Packages</a>
		</div>
	</div> <!-- .container -->
</div> <!-- .fullwidth-block.latest-news-section -->

<div class="fullwidth-block features-section">
	<div class="container">
		<h2 class="section-title">Our Services</h2>
		<div class="row">
			@foreach($services as $service)
			<div class="col-md-3">
				<div class="feature">
					<a href="{{ route('service', $service->id) }}">
						<img src="{{Storage::url($service->image)}}" class="feature-image">
						<h3 class="feature-title">{{ $service->name }}</h3>
						<p>{{ $service->desc }}</p>
					</a>
				</div>
			</div>
			@endforeach
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .fullwidth-block.features-section -->

<div class="fullwidth-block information-section">
	<div class="container">
		<h2 class="section-title">Information</h2>
		<div class="row">
			<div class="col-md-4">
				<figure><img src="{{ asset('dummy/figure-1.jpg') }}" ></figure>
			</div>
			<div class="col-md-4">
				<p>The availabe beauty salon is a business that offers services such as haircuts, hair coloring, hairstyling, manicures, pedicures, facials, waxing, eyebrow shaping and body wraps. Salons can be high-end or very low-key.</p>
			</div>
			<div class="col-md-4">
				<p>Hair salons provide  women with services to clean, condition, strengthen, cut, style and color their hair. Opening a hair salon requires that you meet local, state and federal licensing and permit regulations, as well as registering your business as a legal entity, finding staff and marketing your salon</p>
			</div>
		</div>
	</div>
</div> <!-- .fullwidth-block.information-section -->
@endsection
