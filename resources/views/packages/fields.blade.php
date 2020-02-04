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
		<option value="{{ $category->id }}" @if(isset($package) && $category->id == $package->category_id) selected @endif>{{ $category->name }}</option>
		@endforeach
	</select>
</div>

<!-- Parlor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parlor_id', 'Parlor Id:') !!}
	<select class="form-control" name="parlor_id">
		@foreach($parlors as $key => $parlor)
		<option value="{{ $parlor->id }}" @if(isset($package) && $parlor->id == $package->parlor_id) selected @endif>{{ $parlor->name }}</option>
		@endforeach
	</select>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
  	<input type="file" name="image" accept="image/*" class="form-control">
</div>

<div class="form-group col-sm-6">
    {!! Form::label('is_popular', 'Popular:') !!}
	<input type="checkbox" name="is_popular" @if(isset($package) && $package->is_popular) checked @endif>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
    <a href="{!! route('packages.index') !!}" class="btn btn-default">Cancel</a>
</div>
