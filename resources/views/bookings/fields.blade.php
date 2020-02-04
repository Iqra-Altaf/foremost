<input type="hidden" name="user_id" value="{{ Auth::id() }}">
<!-- Package Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('package_id', 'Package:') !!}
	<input type="text" name="" value="{{ $booking->package->name }}" class="form-control" readonly>
	<input type="hidden" name="package_id" value="{{ $booking->package_id }}" class="form-control" readonly>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('time', 'Time:') !!}
    {!! Form::time('time', \Carbon\Carbon::parse($booking->time)->format('H:i'), ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
