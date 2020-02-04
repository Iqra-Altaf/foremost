@extends('layouts.site.app')

@section('content')
<div class="page">
	<div class="container">
		<p>Foremost is the platform where you can get all the deals, packages, discounts and required services of any parlour you want. The services are facial, herbal facial, korean and japanese style facial. Spa, manicure, pedicure, wax, make up; part make ups, bridal make ups, face threaing like eyebrows threading, forehead threading, upper lip threading, complete face covered threading, hot wax, cold wax. And in the hair department you can get a dye from the most popular professionals, hair cutting and hair styling is also offered by many famou parlours.</p>

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
		</div>
	</div>
</div>
@endsection
