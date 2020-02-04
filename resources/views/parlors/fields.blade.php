{{ csrf_field() }}
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
  	<input type="file" name="image" accept="image/*" class="form-control">
</div>

<div class="form-group col-sm-6">
    {!! Form::label('is_popular', 'Popular:') !!}
	<input type="checkbox" name="is_popular" @if(isset($parlor) && $parlor->is_popular) checked @endif>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
    <a href="{!! route('parlors.index') !!}" class="btn btn-default">Cancel</a>
</div>
