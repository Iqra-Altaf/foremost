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

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
	<select class="form-control" name="category_id">
		@foreach($categories as $key => $category)
		<option value="{{ $category->id }}" @if(isset($gallery) && $category->id == $gallery->category_id) selected @endif>{{ $category->name }}</option>
		@endforeach
	</select>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
	{!! Form::label('image', 'Image:') !!}
	<input type="file" name="image" accept="image/*" class="form-control">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
    <a href="{!! route('galleries.index') !!}" class="btn btn-default">Cancel</a>
</div>
