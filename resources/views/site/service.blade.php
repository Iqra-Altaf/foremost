@extends('layouts.site.app')

@section('content')
<div class="page">
	<div class="container">
		<div class="hero hero-slider">
			<div class="slides">
				<h2 class="slider-title">{{ $service->name }}<a href="#" class="pull-right" ><img src="{!! Storage::url($service->image) !!}" alt="{!! $service->name !!}" height="100px" width="200px"></a></h2>
			</div>
			<hr/>
			<p> {{ $service->desc }}</p>
		</div>
		<div class="row">
			@foreach($service->packages as $key => $package)
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
	</div>
</div>
@endsection
