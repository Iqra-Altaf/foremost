<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
            <tr>
				<th>Package</th>
                <th>User</th>
                <th>Date</th>
                <th>Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
				<td>{!! $booking->package->name !!}</td>
                <td>{!! $booking->user->name !!}</td>
				<td>{!!  \Carbon\Carbon::parse($booking->date)->format('d M, Y') !!}</td>
				<td>{!! \Carbon\Carbon::parse($booking->time)->format('H:i A') !!}</td>
                <td>
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
						{{--
						<a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
						--}}
						{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
