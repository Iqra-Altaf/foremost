You have successfully booked the following package:<br>

<ul>
	<li><pre>Package name	: {{ $booking->package->name }}</pre></li>
	<li><pre>Parlor name	: {{ $booking->package->parlor->name }}</pre></li>
	<li><pre>Category	: {{ $booking->package->category->name }}</pre></li>
	<li><pre>Booking date	: {!!  \Carbon\Carbon::parse($booking->date)->format('d M, Y') !!}</pre></li>
	<li><pre>Booking time	: {!! \Carbon\Carbon::parse($booking->time)->format('H:i A') !!}</pre></li>
</ul>

Thank you for visiting {{ config('app.name') }}.
