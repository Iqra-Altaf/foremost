@extends('layouts.site.app')

@section('content')
<div class="page">
	<div class="container">
		<p>Foremost is the platform where you can get all the deals, packages, discounts and required services of any parlour you want. The services are facial, herbal facial, korean and japanese style facial. Spa, manicure, pedicure, wax, make up; part make ups, bridal make ups, face threaing like eyebrows threading, forehead threading, upper lip threading, complete face covered threading, hot wax, cold wax. And in the hair department you can get a dye from the most popular professionals, hair cutting and hair styling is also offered by many famou parlours.</p>

		<div class="row">
			@foreach($parlors as $parlor)
			<div class="col-md-3">
				<div class="feature">
					<img src="{{ Storage::url($parlor->image) }}" class="feature-image">
					<a href="{{ route('parlor_details', $parlor->id) }}"><h3 class="feature-title">{{ $parlor->name }}</h3></a>
					<p>{{ $parlor->desc }}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
